<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->model('m_util');
		$this->load->model('m_pengguna');
		$this->load->library('session');

		if ($this->session->userdata('id_admin')=="") {
			redirect(base_url().'index.php/admin/login');
		}

	}



	public function index()
	{
		$data['all_admin']	= $this->m_pengguna->all();
		$this->load->view('admin/data_pengguna.php',$data);
	}

	public function by_id($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: *");
		header('Content-Type: application/json');	
		$q = $this->m_pengguna->by_id($id);
		echo json_encode($q->result());

	}

	public function hapus($id)
	{
		$this->db->where('id_pengguna', $id);
		$this->db->delete('tbl_pengguna');
	}

	public function simpan()
	{
		$id = $this->input->post('id_pengguna');		

		$serialize = $this->input->post();


		if($id=='')
		{
			$serialize['tgl_daftar'] = date('Y-m-d H:i:s');	
			$this->m_pengguna->insert($serialize);
			die('insert');
		}else{
			$this->m_pengguna->update($serialize,$id);
			die('update');
		}
		
	}


}
