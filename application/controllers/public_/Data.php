<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

	private $data = array('user' => 1);

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/m_categories');
		$this->load->model('admin/m_posting');
		$this->load->model('admin/m_indikator');
	}

	public function index()
	{
		$data['cat'] = $this->m_categories->display_categories()->result();

		$this->load->view('_parts/public_/header');
		$this->load->view('_parts/public_/navbar', $this->data);
		$this->load->view('data/halaman_data', $data);
		$this->load->view('_parts/public_/footer');
		$this->load->view('_parts/public_/script');
	}

	public function fetch_post()
	{
		$output = '';
		$id = $this->input->post('id');
		$data = $this->m_posting->get_bycategories($id);
		
		// Post
		$output .= '<table style="width:100%">
		<tr>
		<th width="70%">Judul Table</th>
		<th width="50%">Tahun Data</th>
		</tr>';
		if($data->num_rows() > 0)
		{
			foreach($data->result() as $row){
				$output .= '<tr>
				<td><a href="<?=base_url()?>public_/data/tampil_data/'.$row->id.'">'.$row->name.'</a></td>
										<td>2015, 2016, 2017, 2018, 2019<td>
										</tr>';
									}
								}
								else {
									$output .= '<tr>
									<td colspan="2">Data tidak ditemukan</td>
									</tr>';
		}
		
		
		$output .= '</table>';
		
		echo $output;
		
	}
	
	public function fetch_idk()
	{
		$output = '';
		$id = $this->input->post('id');
		$dataidk = $this->m_indikator->get_idk($id);	
		
		// Idk
		$output .= '<table class="w-100">
		<tr>
		<th width="20%">Indikator</th>
		</tr>';
		if($dataidk->num_rows() > 0)
		{
			foreach($dataidk->result() as $res){
				$output .= ' <tr>
										<td>'.$res->name.'</td>
										<td>'.$res->description.'</td>
									</tr>';
			}
		}
		else {
			$output .= '<tr>
								<td colspan="2">No Data Found</td>
								</tr>';
		}

		$output .= '</table>';

		echo $output;
	}


	public function tampil_data()
	{
		$this->load->view('_parts/public_/header');
		$this->load->view('_parts/public_/navbar', $this->data);
		$this->load->view('data/detail_data');
		$this->load->view('_parts/public_/footer');
		$this->load->view('_parts/public_/script');
	}
}
