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

	public function pesan($serialize)
	{
		$this->db->insert('tbl_transaksi',$serialize);
		return $this->db->insert_id();
	}

	public function pesanan($id_pengguna)
	{
		$this->db->select('x.id AS id_trx, x.bukti_bayar,x.tgl_update AS tgl_pesan,x.tgl_mulai,x.tgl_akhir,x.status AS status_pesanan ,x.kategori_harga ,a.*,b.name AS nama_provinsi,c.name AS nama_kota,d.perusahaan,d.nama AS nama_pemilik,d.id_pengguna AS id_pemilik')
				->from('tbl_transaksi x ')
				->join('tbl_iklan a','a.id_iklan=x.id_iklan','left')
				->join('provinces b','a.provinsi=b.id','left')
				->join('regencies c','a.kota_kab=c.id','left')				
				->join('tbl_pengguna d','a.id_pengguna=d.id_pengguna','left')								
				->where('x.id_pengguna',$id_pengguna)
				->order_by('a.id_iklan', 'DESC');
		
		$query = $this->db->get();

		return $query;

	}


	public function orderan($id_pengguna)
	{	
		$q = "SELECT 
				x.tgl_update AS tgl_pesan,
				x.tgl_mulai,x.tgl_akhir,
				x.status AS status_pesanan ,
				x.kategori_harga,
				x.id AS id_trx,
				a.*,
				b.name AS nama_provinsi,
				c.name AS nama_kota,
				
				f.nama AS nama_pemesan,
				f.perusahaan AS perusahaan_pemesan,
				f.alamat AS alamat_pemesan,
				f.id_pengguna AS id_pemesan
			FROM tbl_transaksi x
			LEFT JOIN tbl_iklan a ON a.id_iklan=x.id_iklan
			LEFT JOIN provinces b ON a.provinsi=b.id
			LEFT JOIN regencies c ON a.kota_kab=c.id
			LEFT JOIN tbl_pengguna f ON x.id_pengguna=f.id_pengguna
			
			WHERE a.id_pengguna='$id_pengguna'
			ORDER BY x.tgl_update
			";

		$query = $this->db->query($q);
		
		return $query;

	}

	public function list_chat()
	{
		$id_pengguna = $this->session->userdata('id_pengguna');
		$q = $this->db->query("SELECT b.*
								FROM 
								(
								    SELECT *
								    FROM(
								            SELECT kpd_id AS id FROM `tbl_chat` GROUP BY kpd_id
								        )a
								    UNION ALL 
								      (
								        SELECT dari_id AS id FROM `tbl_chat` GROUP BY dari_id
								      )
								)a
								INNER JOIN tbl_pengguna b ON a.id=b.id_pengguna
								WHERE a.id<>'$id_pengguna'
								GROUP BY a.id
								");
		return $q;
	}


	public function toko($id_pengguna)
	{
		$this->db->select('a.*,b.name AS nama_provinsi,c.name AS nama_kota,d.perusahaan')
				->from('tbl_iklan a ')				
				->join('provinces b','a.provinsi=b.id','left')
				->join('regencies c','a.kota_kab=c.id','left')				
				->join('tbl_pengguna d','a.id_pengguna=d.id_pengguna','left')								
				->where('a.id_pengguna',$id_pengguna)				
				->order_by('a.id_iklan', 'DESC');
		
		$query = $this->db->get();

		return $query;

	}

	public function history_trx($serialize)
	{
		$this->db->insert('tbl_history_trx',$serialize);
	}
}
?>
