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
		$data['comments'] = $this->Blog_model->getComments($id);
		
		$data['page_title'] = 'Single Blog';
		$this->load->view('header',$data);
		$this->load->view('single_blog',$data);
		$this->load->view('footer');
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
