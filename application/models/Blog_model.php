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
    function getComments($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_comments');
        $this->db->where('blog_id', $id);
        $query = $this->db->get();        
        return $query->result();
    }
    function getCommentCount($id)
    {
        $this->db->select('count(*) as asd');
        $this->db->from('tbl_comments');
        $this->db->where('blog_id', $id);
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

	function saveComment($commentInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_comments', $commentInfo);
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

	// get full tree comments based on blog id
    function get_all_tree($blog_id) {
        $result = $this->db->query("SELECT * FROM tbl_comments where blog_id = $blog_id")->result_array();
        foreach ($result as $row) {
            $data[] = $row;
        }
        return $data;
    }

    // to get child comments by entry id and parent id and blog id
    function get_tree_by_parent($blog_id,$parent_id) {
        $result = $this->db->query("SELECT * FROM tbl_comments where parent_id = $parent_id AND  blog_id = $blog_id")->result_array();
        foreach ($result as $row) {
            $data[] = $row;
        }
        return $data;
    }
}
