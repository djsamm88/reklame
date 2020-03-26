<?php 
if (!defined('BASEPATH'))exit('No direct script access allowed');

class M_util extends CI_Model {
	
	function __construct() {
		parent::__construct();
	
		$this->load->helper('custom_func');
	}
	

	public function provinsi()
	{			
		$q = $this->db->get('provinces');
		
		return $q;
	}

	public function kabupaten($province_id)
	{			
		$this->db->where('province_id', $province_id);
		$q = $this->db->get('regencies');
		
		return $q;
	}

	public function all_media()
	{
		$this->db->where('jenis', 'media');
		$q = $this->db->get('tbl_master');
		
		return $q;

	}


	public function all_bank()
	{
		$this->db->where('jenis', 'bank');
		$q = $this->db->get('tbl_master');
		
		return $q;

	}

	public function all_master($jenis)
	{
		$this->db->where('jenis', $jenis);
		$q = $this->db->get('tbl_master');
		
		return $q;

	}


	
	
}
?>
