<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageBlog_controller extends CI_Controller {
	
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Blog_model', 'Blog_model');
    }

	public function dashboard()
	{
		$data['blog_list'] = $this->Blog_model->getBlogList();
		$data['page_title'] = 'All Blogs';
		$this->load->view('manage_blog/admin_header',$data);
		$this->load->view('manage_blog/dashboard');
		$this->load->view('manage_blog/admin_footer');
	}
	public function add_blog()
	{		
		$data['page_title'] = 'Add New Blog';
		$this->load->view('manage_blog/admin_header',$data);
		$this->load->view('manage_blog/add_blog');
		$this->load->view('manage_blog/admin_footer');
	}

	public function save_blog(){
		$blog_title = ucwords(strtolower($this->security->xss_clean($this->input->post('blog_title'))));
		$blog_desc = ucwords(strtolower($this->security->xss_clean($this->input->post('blog_desc'))));
		$blogInfo = array('blog_title'=> $blog_title,'blog_desc'=> $blog_desc, 'created_date'=>date('Y-m-d H:i:s'));
		// var_export($blogInfo);die;
		
		$result = $this->Blog_model->saveBlog($blogInfo);
		if($result > 0)
		{
			$this->session->set_flashdata('success', 'Blog Added successfully');
			redirect(base_url().'manage_blog');
		}
		else
		{
			$this->session->set_flashdata('error', 'Blog Addition failed');
			redirect(base_url().'add_blog');
		}
	}
	
	public function edit_blog($id)
	{
		$data['single_blog'] = $this->Blog_model->getSingleBlog($id);
		
		$data['page_title'] = 'Edit Blog';
		$this->load->view('manage_blog/admin_header',$data);
		$this->load->view('manage_blog/edit_blog');
		$this->load->view('manage_blog/admin_footer');
	}

	public function update_blog(){
		$blog_id = ucwords(strtolower($this->security->xss_clean($this->input->post('blog_id'))));
		$blog_title = ucwords(strtolower($this->security->xss_clean($this->input->post('blog_title'))));
		$blog_desc = ucwords(strtolower($this->security->xss_clean($this->input->post('blog_desc'))));
		$blogInfo = array('blog_title'=> $blog_title,'blog_desc'=> $blog_desc, 'updated_date'=>date('Y-m-d H:i:s'));
		// var_export($blogInfo);die;
		
		$result = $this->Blog_model->updateBlog($blogInfo,$blog_id);
		if($result > 0)
		{
			$this->session->set_flashdata('success', 'Blog Updated successfully');
			redirect(base_url().'manage_blog');
		}
		else
		{
			$this->session->set_flashdata('error', 'Blog Updation failed');
			redirect(base_url().'edit_blog');
		}
	}
	public function delete_blog(){
		$blog_id = ucwords(strtolower($this->security->xss_clean($this->input->post('blog_id'))));
		// var_export($blogInfo);die;
		
		$result = $this->Blog_model->deleteBlog($blog_id);
		if($result > 0)
		{
			$this->session->set_flashdata('success', 'Blog Deleted successfully');
			redirect(base_url().'manage_blog');
		}
		else
		{
			$this->session->set_flashdata('error', 'Blog Deletion failed');
			redirect(base_url().'manage_blog');
		}
	}
	
}
