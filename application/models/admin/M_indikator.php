<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_indikator extends CI_Model {

    protected $table_name = 'table_indikator';

    public function __construct()
    {
        parent::__construct();
    }

    public function get_idk($where)
    {
        $this->db->select('id, name, description');
        $this->db->from($this->table_name);
        $this->db->where('cat_id', $where);
        return $this->db->get();
    }

    public function delete_batch($data)
    {
        $this->db->where_in('cat_id', $data);
        return $this->db->delete($this->table_name);
    }

    public function insert_new($data)
    {
        $this->db->insert($this->table_name, $data);
    }

    public function update_old($data, $where)
    {
        $this->db->where('id', $where);
        return $this->db->update($this->table_name, $data);
    }

}