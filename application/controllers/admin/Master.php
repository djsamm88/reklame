<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->model('m_util');
		$this->load->model('m_master');
		$this->load->library('session');

		if ($this->session->userdata('id_admin')=="") {
			redirect(base_url().'index.php/admin/login');
		}

	}



	public function index()
	{
		$data['all_admin']	= $this->m_master->all();
		$this->load->view('admin/data_master.php',$data);
	}

	public function by_id($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: *");
		header('Content-Type: application/json');	
		$q = $this->m_master->by_id($id);
		echo json_encode($q->result());

	}

	public function hapus($id)
	{
		$this->db->where('id_master', $id);
		$this->db->delete('tbl_master');
	}

	public function simpan()
	{
		$id = $this->input->post('id_master');		

		$serialize = $this->input->post();


		if($id=='')
		{
			
			$this->m_master->insert($serialize);
			die('insert');
		}else{
			$this->m_master->update($serialize,$id);
			die('update');
		}
		
	}

}
