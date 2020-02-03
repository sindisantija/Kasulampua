<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_posting extends CI_Model {

    protected $table_name = "table_post";

    public function __construct()
    {
        parent::__construct();
    }

    public function display_post($number = null, $offset=0)
    {
        $this->db->select('post.id as newid, post.description as pdesc, post.name as pname, post.status as pstatus,post.date as pdate, cat.name as cname, user.username as uname');
        $this->db->from($this->table_name.' as post');
        $this->db->join('table_categories as cat', 'categories_id = cat.id');
        $this->db->join('table_user as user', 'user_id = user.id');
        $this->db->limit($number, $offset);
        $this->db->order_by('pdate', 'DESC');
        return $this->db->get();    
    }

    public function get_filename($data)
    {   
        $this->db->select('file_name, file_img');
        $this->db->where_in('id', $data);
        return $this->db->get($this->table_name);
    }

    public function check_file_id($where)
    {
        $this->db->select('name,status');
        $this->db->from($this->table_name);
        $this->db->where('id', $where);
        return $this->db->get();
    }

    public function total_row()
    {
        $this->db->select('id');
        $this->db->from($this->table_name);
        return $this->db->get();
    }

    public function insert_new($data)
    {
        return $this->db->insert($this->table_name, $data);
    }

    public function delete_batch($data)
    {
        $this->db->where_in('id', $data);
        return $this->db->delete($this->table_name);
    }

    public function get_individual($where)
    {
        $this->db->select('post.*, cat.name as cname');
        $this->db->where('post.id', $where);
        $this->db->from($this->table_name.' as post');
        $this->db->join('table_categories as cat', 'categories_id = cat.id');
        return $this->db->get();
    }

    public function update_old($data, $where)
    {
        $this->db->where('id', $where);
        return $this->db->update($this->table_name, $data);
    }

    public function update_status($data, $where)
    {
        $this->db->where('id', $where);
        return $this->db->update($this->table_name, $data);
    }

    public function get_bycategories($where)
    {
        $this->db->select('id, name');
        $this->db->from($this->table_name);
        $this->db->where('categories_id', $where);
        return $this->db->get();
    }

}