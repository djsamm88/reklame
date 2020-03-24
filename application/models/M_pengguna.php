<?php 
if (!defined('BASEPATH'))exit('No direct script access allowed');

class M_pengguna extends CI_Model {
	
	function __construct() {
		parent::__construct();
	
		$this->load->helper('custom_func');
	}
	

	public function all()
	{
		$q = $this->db->get('tbl_pengguna');
		return $q;	
	}


	public function by_id($id)
	{
		$this->db->where('id_pengguna', $id);
		$q = $this->db->get('tbl_pengguna');
		return $q;	
	}
	

	public function insert($serialize)
	{
		$this->db->insert('tbl_pengguna',$serialize);
	}

	public function update($serialize,$id)
	{
		$this->db->where('id_pengguna', $id);
		$this->db->update('tbl_pengguna',$serialize);
	}
}
?>
