<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_categories extends CI_Model {

    protected $table_name = 'table_categories';

    public function __construct()
    {
        parent::__construct();
    }

    public function display_categories($number = null, $offset=0)
    {
        return $this->db->get($this->table_name, $number, $offset);
    }

    public function total_row()
    {
        $this->db->select('id');
        $this->db->from($this->table_name);
        return $this->db->get();
    }

    public function insert_new($data)
    {
        $this->db->insert($this->table_name, $data);
        return $this->db->insert_id();
    }

    public function delete_batch($data)
    {
        $this->db->where_in('id', $data);
        return $this->db->delete($this->table_name);
    }

    public function get_individual($where)
    {
        $this->db->select('c.name as cname, i.id as iid, i.name as iname, i.description as idesc');
        $this->db->from($this->table_name. ' as c');
        $this->db->join('table_indikator as i', 'c.id = i.cat_id');
        $this->db->where('c.id', $where);
        return $this->db->get();
    }

    public function update_old($data, $where)
    {
        $this->db->where('id', $where);
        return $this->db->update($this->table_name, $data);
    }

}