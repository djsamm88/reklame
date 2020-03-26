<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

	public function ambil_kab($province_id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: *");
		header('Content-Type: application/json');	
		$q = $this->m_util->kabupaten($province_id);
		echo json_encode($q->result());

	}



}
