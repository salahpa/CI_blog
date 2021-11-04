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
		$data['page_title'] = 'Single Blog';
		$this->load->view('header',$data);
		$this->load->view('single_blog',$data);
		$this->load->view('footer');
	}
}
