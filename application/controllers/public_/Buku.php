<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
	}

    public function index()
    {
        $data['user'] = 1;   
        $this->load->view('_parts/public_/header');
		$this->load->view('_parts/public_/navbar', $data);
        $this->load->view('buku/buku.php');
		$this->load->view('_parts/public_/footer');
		$this->load->view('_parts/public_/script');
    }

    public function detail_buku()
    {
        $data['user'] = 1;
        $this->load->view('_parts/public_/header');
		$this->load->view('_parts/public_/navbar', $data);
        $this->load->view('buku/detail_buku.php');
		$this->load->view('_parts/public_/footer');
		$this->load->view('_parts/public_/script');
    }
}