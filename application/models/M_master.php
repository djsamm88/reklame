<?php 
if (!defined('BASEPATH'))exit('No direct script access allowed');

class M_master extends CI_Model {
	
	function __construct() {
		parent::__construct();
	
		$this->load->helper('custom_func');
	}
	

	public function all()
	{
		$q = $this->db->get('tbl_master');
		return $q;	
	}


	public function by_id($id)
	{
		$this->db->where('id_master', $id);
		$q = $this->db->get('tbl_master');
		return $q;	
	}
	

	public function insert($serialize)
	{
		$this->db->insert('tbl_master',$serialize);
	}

	public function update($serialize,$id)
	{
		$this->db->where('id_master', $id);
		$this->db->update('tbl_master',$serialize);
	}
}
?>
