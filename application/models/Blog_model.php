<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model
{
	
    function getBlogList()
    {
        $this->db->select('*');
        $this->db->from('tbl_blog_list');
        $query = $this->db->get();        
        return $query->result();
    }
    function getLatestFiveBlogs()
    {
        $this->db->select('*');
        $this->db->from('tbl_blog_list');
        $this->db->order_by('id', 'DESC');
        $this->db->limit(5);
        $query = $this->db->get();
        return $query->result();
    }
    function getSingleBlog($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_blog_list');
        $this->db->where('id', $id);
        $query = $this->db->get();        
        return $query->result();
    }

	function saveBlog($blogInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_blog_list', $blogInfo);        
        $insert_id = $this->db->insert_id();        
        $this->db->trans_complete();        
        return $insert_id;
    }
	
    function updateBlog($blogInfo, $blog_id)
    {
        $this->db->where('id', $blog_id);
        $this->db->update('tbl_blog_list', $blogInfo);
        
        return TRUE;
    }
    function deleteBlog($blog_id)
    {
        $this->db->where('id', $blog_id);
        $this->db->delete('tbl_blog_list');
        
        return TRUE;
    }
}
