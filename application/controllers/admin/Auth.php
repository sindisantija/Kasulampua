<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->model('admin/m_user');
    }
    
    public function index()
    {
        $this->load->view('admin/login_page');
    }

    public function auth()
    {
        $post = $this->input->post();
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|alpha_numeric');

        if($this->form_validation->run() == FALSE){
            $this->load->view('admin/login_page');
        }
        else {
            $where =  array(
                'username' => $post['username'],
                'password' => md5($post['password'])
            );
            
            $check = $this->m_user->check_user($where)->num_rows();
            $id = $this->m_user->check_user($where)->row();

            if($check > 0) {
                $data_session = array(
                    'username' => $id->id,
                    'user_name' => $post['username'],
                    'status' => 1
                ); 
                $this->session->set_userdata($data_session);
                redirect('dashboard');
            }
            else {
                $this->session->set_flashdata('Error', 'Wrong Username or Password Please Try Again');
                redirect('backend');
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('backend');
    }
}