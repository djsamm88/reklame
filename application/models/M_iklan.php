<?php 
if (!defined('BASEPATH'))exit('No direct script access allowed');

class M_iklan extends CI_Model {
	
	function __construct() {
		parent::__construct();
	
		$this->load->helper('custom_func');
	}

	public function cari($where)
	{
		$this->db->select('a.*,b.name AS nama_provinsi,c.name AS nama_kota,d.perusahaan')
				->from('tbl_iklan a ')
				->join('provinces b','a.provinsi=b.id','left')
				->join('regencies c','a.kota_kab=c.id','left')				
				->join('tbl_pengguna d','a.id_pengguna=d.id_pengguna','left')				
				->where($where)
				->order_by('id_iklan', 'DESC');
		
		$query = $this->db->get();

		return $query;

	}

	public function all()
	{
		$this->db->select('a.*,b.name AS nama_provinsi,c.name AS nama_kota,d.perusahaan')
				->from('tbl_iklan a ')
				->join('provinces b','a.provinsi=b.id','left')
				->join('regencies c','a.kota_kab=c.id','left')				
				->join('tbl_pengguna d','a.id_pengguna=d.id_pengguna','left')								
				->order_by('id_iklan', 'DESC');
		
		$query = $this->db->get();

		return $query;

	}

	

	public function orderan($where=null)
	{	
		$if = $where==null?"":"WHERE x.status='$where'";
		$q = "SELECT 
				x.tgl_update AS tgl_pesan,
				x.tgl_mulai,x.tgl_akhir,
				x.status AS status_pesanan ,
				x.kategori_harga,
				x.id AS id_trx,
				x.bukti_bayar,
				a.*,
				b.name AS nama_provinsi,
				c.name AS nama_kota,
				
				f.nama AS nama_pemesan,
				f.perusahaan AS perusahaan_pemesan,
				f.alamat AS alamat_pemesan,

				g.nama AS nama_pemilik,
				g.perusahaan AS perusahaan_pemilik,
				g.alamat AS alamat_pemilik

				

			FROM tbl_transaksi x
			LEFT JOIN tbl_iklan a ON a.id_iklan=x.id_iklan
			LEFT JOIN provinces b ON a.provinsi=b.id
			LEFT JOIN regencies c ON a.kota_kab=c.id
			LEFT JOIN tbl_pengguna f ON x.id_pengguna=f.id_pengguna
			LEFT JOIN tbl_pengguna g ON a.id_pengguna=g.id_pengguna
			$if
			ORDER BY x.tgl_update
			";
			//echo $q;
		$query = $this->db->query($q);
		
		return $query;

	}



	public function rekomendasi($limit)
	{
		$q = $this->db->query("SELECT a.*,b.name AS nama_provinsi,c.name AS nama_kota FROM tbl_iklan a 
									LEFT JOIN provinces b ON a.provinsi=b.id 
									LEFT JOIN regencies c ON a.kota_kab=c.id 
								WHERE rekomendasi='1'
								ORDER BY id_iklan DESC								
								LIMIT $limit
			");
		return $q;	
	}	

	/*
	public function by_id($id)
	{
		
		$q = $this->db->query("SELECT a.*,b.name AS nama_provinsi,c.name AS nama_kota FROM tbl_iklan a 
									LEFT JOIN provinces b ON a.provinsi=b.id 
									LEFT JOIN regencies c ON a.kota_kab=c.id 
								WHERE id_iklan='$id'
								");
		return $q;	
	}
	*/

	public function by_id($where)
	{
		$this->db->select('a.*,b.name AS nama_provinsi,c.name AS nama_kota,d.perusahaan')
				->from('tbl_iklan a ')
				->join('provinces b','a.provinsi=b.id','left')
				->join('regencies c','a.kota_kab=c.id','left')				
				->join('tbl_pengguna d','a.id_pengguna=d.id_pengguna','left')				
				->where($where)
				->order_by('id_iklan', 'DESC');
		
		$query = $this->db->get();

		return $query;

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
