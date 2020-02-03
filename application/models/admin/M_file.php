<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_file extends CI_Model {

    protected $table_name = "table_file";
    
    public function __construct()
    {
        parent::__construct();
    }

    public function display_data($where)
    {
        $this->db->where('post_id', $where);
        return $this->db->get($this->table_name);
    }

    public function insert_new($data)
    {
        return $this->db->insert_batch($this->table_name, $data);
    }

    public function delete_batch($data)
    {
        $this->db->where_in('post_id', $data);
        return $this->db->delete($this->table_name);
    }

}