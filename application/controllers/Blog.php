<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Blog_model', 'Blog_model');
    }

	public function index()
	{
		$data['blog_list'] = $this->Blog_model->getLatestFiveBlogs();
		$data['page_title'] = 'All Blogs';
		$this->load->view('header',$data);
		$this->load->view('blog_home');
		$this->load->view('footer');
	}
	public function single($id)
	{
		$data['single_blog'] = $this->Blog_model->getSingleBlog($id);
		$commentcount = $this->Blog_model->getCommentCount($id);
		// $data['comments'] = $this->Blog_model->getComments($id);
		$cmt_count = $commentcount[0]->asd;
		if($cmt_count > 0)
			$data['comments'] =  $this->show_comment_tree($id);
		else
			$data['comments'] =  NULL;
		
		$data['page_title'] = 'Single Blog';
		$this->load->view('header',$data);
		$this->load->view('single_blog',$data);
		$this->load->view('footer');
	}
	function show_comment_tree($blog_id)
    {
        // create array to store all comments ids
        $id_array = array();
        // get all parent comments ids by using Blog id
        $id_result = $this->Blog_model->get_all_tree($blog_id);
		if($id_result){
			// loop through all comments to save parent ids $id_array array
			foreach ($id_result as $comment_id) {
				array_push($id_array, $comment_id['parent_id']);
			}
			// return all hierarchical tree data from get_tree_view by sending
			//  initiate parameters 0 is the main parent,Blog id, all parent ids

			return  $this->get_tree_view(0,$blog_id, $id_array);
		}
        
    }


    /* recursive function to loop
       through all comments and retrieve it
    */
    function get_tree_view($parent_id,$blog_id,$id_array) {
        // this variable to save all concatenated html
        $html = "";
        // build hierarchy  html structure based on ul li (parent-child) nodes
        if (in_array($parent_id,$id_array)) {
            $result = $this->Blog_model->get_tree_by_parent($blog_id,$parent_id);
            $html .=  $parent_id == 0 ? "<ul class='tree'>" : "<ul>";
            foreach ($result as $re) {
                $html .= " <li class='comment_box'>
            <div class='aut'><input type='radio' name='parent_id' id='parent_id".$re['id']."' value='".$re['id']."'>
			".$re['username']." - ".date("F j, Y", strtotime($re['created_date']))."</div>
            <div class='comment-body'>".$re['comment']."<hr></div>            
			";
                $html .=$this->get_tree_view($re['id'],$blog_id, $id_array);
                $html .= "</li>";
            }
            $html .=  "</ul>";
        }

        return $html;
    }

	public function add_comment() {
		$blog_id = ucwords(strtolower($this->security->xss_clean($this->input->post('blog_id'))));
		$comment = ucwords(strtolower($this->security->xss_clean($this->input->post('comment'))));
		$username = ucwords(strtolower($this->security->xss_clean($this->input->post('username'))));
		$parent_id = ucwords(strtolower($this->security->xss_clean($this->input->post('parent_id'))));

		$commentInfo = array('comment'=> $comment, 'username'=> $username, 'blog_id'=> $blog_id, 'parent_id'=> $parent_id, 'created_date'=>date('Y-m-d H:i:s'));
		$result = $this->Blog_model->saveComment($commentInfo);
		if($result > 0) {
			$this->session->set_flashdata('success', 'Comment Added successfully');
			redirect(base_url().'single_blog/'.$blog_id);
		} else {
			$this->session->set_flashdata('error', 'Comment Addition failed');
			redirect(base_url().'single_blog/'.$blog_id);
		}
	}
}
