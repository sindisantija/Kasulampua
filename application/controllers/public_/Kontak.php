<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
	}

    public function index()
    {
      $data['user'] = 1;
      $this->load->view('_parts/public_/header');
	  $this->load->view('_parts/public_/navbar', $data);
      $this->load->view('kontak');
	  $this->load->view('_parts/public_/footer');
	  $this->load->view('_parts/public_/script');
    }
}

?>