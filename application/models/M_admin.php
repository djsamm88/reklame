<?php 
if (!defined('BASEPATH'))exit('No direct script access allowed');

class M_admin extends CI_Model {
	
	function __construct() {
		parent::__construct();
	
		$this->load->helper('custom_func');
	}
	

	public function all_admin()
	{
		$q = $this->db->get('tbl_admin');
		return $q;	
	}


	public function admin_by_id($id)
	{
		$this->db->where('id_admin', $id);
		$q = $this->db->get('tbl_admin');
		return $q;	
	}
	

	public function insert($serialize)
	{
		$this->db->insert('tbl_admin',$serialize);
	}

	public function update($serialize,$id)
	{
		$this->db->where('id_admin', $id);
		$this->db->update('tbl_admin',$serialize);
	}


	public function cek_email_user($email)
	{
		$query = $this->db->query("SELECT * FROM tbl_admin WHERE email='$email'");
		return $query->num_rows();
	}

	public function cek_pass($id_admin)
	{
		$query = $this->db->query("SELECT password FROM tbl_admin WHERE id_admin='$id_admin'");
		$x = $query->result();
		return $x[0]->password;
	}

}
?>
