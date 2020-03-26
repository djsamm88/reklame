<?php 
if (!defined('BASEPATH'))exit('No direct script access allowed');

class M_iklan extends CI_Model {
	
	function __construct() {
		parent::__construct();
	
		$this->load->helper('custom_func');
	}
	

	public function all()
	{
		$q = $this->db->query('SELECT a.*,b.name AS nama_provinsi,c.name AS nama_kota FROM tbl_iklan a 
									LEFT JOIN provinces b ON a.provinsi=b.id 
									LEFT JOIN regencies c ON a.kota_kab=c.id 
								ORDER BY id_iklan DESC								
			');
		return $q;	
	}


	public function by_id($id)
	{
		
		$q = $this->db->query("SELECT a.*,b.name AS nama_provinsi,c.name AS nama_kota FROM tbl_iklan a 
									LEFT JOIN provinces b ON a.provinsi=b.id 
									LEFT JOIN regencies c ON a.kota_kab=c.id 
								WHERE id_iklan='$id'
								");
		return $q;	
	}
	

	public function insert($serialize)
	{
		$this->db->insert('tbl_iklan',$serialize);
	}

	public function update($serialize,$id)
	{
		$this->db->where('id_iklan', $id);
		$this->db->update('tbl_iklan',$serialize);
	}
}
?>
