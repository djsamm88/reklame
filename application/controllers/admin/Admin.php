<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->model('m_util');
		$this->load->model('m_admin');
		$this->load->library('session');

		if ($this->session->userdata('id_admin')=="") {
			redirect(base_url().'index.php/admin/login');
		}

	}

	public function index()
	{
	
		$data['data'] = "";		
		$this->load->view('admin/admin.php',$data);

	}


	public function crud_admin()
	{
		$data['all_admin']	= $this->m_admin->all_admin();
		$this->load->view('admin/data_admin.php',$data);
	}

	public function admin_by_id($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: *");
		header('Content-Type: application/json');	
		$q = $this->m_admin->admin_by_id($id);
		echo json_encode($q->result());

	}

	public function simpan()
	{
		$id_admin = $this->input->post('id_admin');		
		$serialize = $this->input->post();
		

		if($id_admin=='')
		{
			//var_dump($serialize);

			//cek dulu email atau username apakah sudah ada
			$cek = $this->m_admin->cek_email_user($serialize["email"]);
			if($cek > 0)
			{
				die('Sudah ada email '.$serialize["email"].' terdaftar.');//sudah ada email atau username
			}

			$serialize["password"]=md5($serialize["password"]);
			$this->m_admin->insert($serialize);


			die('insert');
		}else{



			$cek_pass = $this->m_admin->cek_pass($id_admin);
			//var_dump($cek_pass);

			/************* cek apakah ganti password **************/
			if($cek_pass==$serialize["password"])
			{				
				
				//echo json_encode($serialize);
				$a = $this->m_admin->update($serialize,$id_admin);
				

				die('update');
			}else{
				$serialize["password"]=md5($serialize["password"]);
				$this->m_admin->update($serialize,$id_admin);
				die('update');
			}
			
		}
		
	}

}
