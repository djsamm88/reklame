<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cari extends CI_Controller {

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
		$query = $this->input->get();		
		//print_r(array_filter($query));
		$where = array_filter($query);

		$data['pencarian'] = $this->m_iklan->cari($where);


		$this->load->view('public/cari.php',$data);

	}



}
