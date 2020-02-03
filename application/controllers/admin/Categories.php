<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends Admin_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/m_categories');
        $this->load->model('admin/m_indikator');
    }

    public function index()
    {
        $total = $this->m_categories->total_row()->num_rows();
        $from = $this->uri->segment(4);
        echo $from;
        $this->pagination->initialize(cs_pagination('admin/categories/index', $total, 10));
        
        $data['cat'] = $this->m_categories->display_categories(10, $from)->result();
        
        $this->load->view('_parts/admin_/header.php');
        $this->load->view('_parts/admin_/loader.php');
        $this->load->view('_parts/admin_/navbar.php');
        $this->load->view('_parts/admin_/sidebar.php');
        $this->load->view('admin/categories_page', $data);
        $this->load->view('_parts/admin_/script.php');
    }

    public function add_categories()
    {
        
        $post = $this->input->post();
        $i = 0;
        $j = 0;
        $this->form_validation->set_rules('name', 'name', 'required');
        
        if($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('alert', 'Gagal Menambah Kategori');
            redirect('admin/categories');
        }
        else {
            $data = array(
                'name' => $post['name'],
            );
            
            if($check = $this->m_categories->insert_new($data)) {

                foreach($post['indikator'] as $p){
                    $dataName = array(
                        'name' => $post['indikator'][$j++],
                        'description' => $post['descindikator'][$i++],
                        'cat_id' => $check
                    );
                    
                    $this->m_indikator->insert_new($dataName);
                }

                $this->session->set_flashdata('alert', 'Berhasil Menambah Kategori');
                redirect('admin/categories');
            }
            else {
                $this->session->set_flashdata('alert', 'Gagal Menambah Kategori');
                redirect('admin/categories');
            }
        }
    }

    public function delete_categories()
    {
        $post = $this->input->post();
        
        if($this->m_categories->delete_batch($post['id'])){
            $this->m_indikator->delete_batch($post['id']);
            $this->session->set_flashdata('alert', 'Berhasil Menghapus Categories');
            redirect('admin/categories');
        };
    }
    
    public function get_data_individual()
    {
        $post = $this->input->post();
        if($result = $this->m_categories->get_individual($post['id'])->result()){
            $idkname = array();
            $idkdesc = array();
            $idkid = array();

            foreach($result as $res){
                array_push($idkname, $res->iname);
                array_push($idkdesc, $res->idesc);
                array_push($idkid, $res->iid);
            }

            foreach ($result as $res){
              $dataid = array(
                  'Title' => $res->cname,
                  'Indikator' => $idkname,
                  'Descidk' => $idkdesc,
                  'idIndikator' => $idkid
              );
            }
            
            echo json_encode($dataid);
        }
    }

    public function update_categories()
    {
        $post = $this->input->post();
        $i = 0;
        $j = 0;
        $k = 0;

        $this->form_validation->set_rules('name', 'Title', 'required');

        if($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('alert', 'Gagal Mengupdate Categories');
            redirect('admin/categories');
        }
        else {
            $data = array(  
                'name' => $post['name'],
            );

            if($this->m_categories->update_old($data, $post['id'])){

                foreach($post['indikator'] as $p){
                    $dataName = array(
                        'name' => $post['indikator'][$j++],
                        'description' => $post['descindikator'][$i++],
                    );
                    
                    $this->m_indikator->update_old($dataName, $post['idkid'][$k++]);
                }

                $this->session->set_flashdata('alert', 'Berhasil Mengupdate Categories');
                redirect('admin/categories');
            }
            else {
                $this->session->set_flashdata('alert', 'Gagal Mengupdate Categories');
                redirect('admin/categories');
            }
        }
    }

}