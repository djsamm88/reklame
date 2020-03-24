<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$this->load->library('session');


	}

	public function index()
	{
	
		$this->load->view('admin/login.php');

	}

	public function cek_login()
	{
		$user 		= $this->gas($this->input->post('email'));
		$password 	= md5($this->input->post('password'));

		$bool = $this->cek_user($user,$password);
		$ret='';
		
		if ($bool->num_rows() > 0) 
		{
			
			$z = $bool->result();
			$sess = $z[0];
			
			

				$sess_data['email'] 	= $sess->email;
				$sess_data['id_admin'] 	= $sess->id_admin;					
				$sess_data['nama'] 		= $sess->nama;
				$this->session->set_userdata($sess_data);
                
            
                $_SESSION['email'] 		= $sess->email;
				$_SESSION['id_admin'] 	= $sess->id_admin;					
				$_SESSION['nama'] 		= $sess->nama;

				$ret= '1';

			
			
		}
		else {
			$ret= $bool->num_rows();
		}
		//$this->load->view('form_login.php',$data);
		//echo $ret['info'];
		echo $ret;

	}


	private function cek_user($user,$pass) {
		
		$query = $this->db->query("SELECT * FROM tbl_admin WHERE (email='$user' AND password='$pass')");			
		return $query;
	}

	private function gas($x)
	{
		$a = stripslashes(strip_tags(htmlspecialchars($x,ENT_QUOTES)));
		$a = str_replace("'", "", $a);
		return $a;
	}



	public function logout() {
		$this->session->unset_userdata('id_admin');		
		session_destroy();
		redirect(base_url().'index.php/admin/login');
	}
	
}
