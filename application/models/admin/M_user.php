<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

    protected $table_name = 'table_user';

    public function __construct()
    {
        parent::__construct();
    }

    public function check_user($where)
    {   
        return $this->db->get_where($this->table_name, $where);
    }

    public function display_user($number, $offset)
    {
        return $this->db->get($this->table_name, $number, $offset);
    }

    public function insert_newuser($data)
    {
        return $this->db->insert($this->table_name, $data);
    }

    public function total_user()
    {
        $this->db->select('id');
        $this->db->from($this->table_name);
        return $this->db->get();
    }

    public function delete_batch($data)
    {
        $this->db->where_in('id', $data);
        return $this->db->delete($this->table_name);
    }

    public function get_individual($where)
    {
        $this->db->select('username, password');
        $this->db->where('id', $where);
        $this->db->from($this->table_name);
        return $this->db->get();
    }

    public function update_user($data, $where)
    {
        $this->db->where('id', $where);
        return $this->db->update($this->table_name, $data);
    }

}