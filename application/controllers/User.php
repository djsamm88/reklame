<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
		$this->load->model('m_iklan');
		$this->load->model('m_pengguna');
		date_default_timezone_get('Asia/Jakarta');


	}

	public function index()
	{
	
		$data['provinsi'] = $this->m_util->provinsi()->result();
		$data['media'] = 	$this->m_util->all_media()->result();
		$data['rekomendasi'] = $this->m_iklan->rekomendasi(6);
		$this->load->view('public/index.php',$data);

	}


	public function detail($id_iklan=null)
	{
		if($id_iklan==null)
		{
			die("Not Found");
		}
		$data['provinsi'] = $this->m_util->provinsi()->result();
		$data['media'] = 	$this->m_util->all_media()->result();
		$data['data'] = $this->m_iklan->by_id($id_iklan);
		$this->load->view('public/detail.php',$data);
	}

	public function detail_kecil($id_iklan=null)
	{
		if($id_iklan==null)
		{
			die("Not Found");
		}
		$data['provinsi'] = $this->m_util->provinsi()->result();
		$data['media'] = 	$this->m_util->all_media()->result();
		$data['data'] = $this->m_iklan->by_id($id_iklan);
		$this->load->view('public/detail_kecil.php',$data);
	}

	public function ambil_kab($province_id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: *");
		header('Content-Type: application/json');	
		$q = $this->m_util->kabupaten($province_id);
		echo json_encode($q->result());

	}



	private function gas($x)
	{
		$a = stripslashes(strip_tags(htmlspecialchars($x,ENT_QUOTES)));
		$a = str_replace("'", "", $a);
		return $a;
	}


	private function cek_email($email) {
		$email = $this->gas($email);
		$query = $this->db->query("SELECT * FROM tbl_pengguna WHERE email='$email'");			
		return $query->num_rows();
	}

	private function login_terakhir($email) {
		$email = $this->gas($email);
		$login_terakhir = date('Y-m-d H:i:s');
		$this->db->query("UPDATE tbl_pengguna SET login_terakhir='$login_terakhir' WHERE email='$email'");			
		
	}


	public function login()
	{
		$serialize = $this->input->post();		
		if($this->cek_email($serialize['email'])>0)
		{
			$this->db->where($serialize);
			$query = $this->db->get('tbl_pengguna');
			if($query->num_rows()>0)
			{
				echo "berhasil_login";
				$this->login_terakhir($serialize['email']);
				die();
			}else{
				echo "password_salah";
				die();
			}

		}else{
			echo "gagal_login";
			die();
		}
	}


	public function daftar()
	{
		$serialize = $this->input->post();
		if($this->cek_email($serialize['email'])>0)
		{
			echo "email_terdaftar";
			die();
		}

		$serialize['tgl_daftar'] = date('Y-m-d H:i:s');

		$this->m_pengguna->insert($serialize); 
		if($this->db->affected_rows() > 0)
		{
			echo "berhasi_daftar";
			die();
		}
		

	}



}
