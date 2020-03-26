<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iklan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->model('m_util');
		$this->load->model('m_iklan');
		$this->load->library('session');

		if ($this->session->userdata('id_admin')=="") {
			redirect(base_url().'index.php/admin/login');
		}

	}



	public function index()
	{
		$data['all_admin']	= $this->m_iklan->all();
		$this->load->view('admin/data_iklan.php',$data);
	}

	public function by_id($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: *");
		header('Content-Type: application/json');	
		$q = $this->m_iklan->by_id($id);
		echo json_encode($q->result());

	}

	public function hapus($id)
	{
		$this->db->where('id_iklan', $id);
		$this->db->delete('tbl_iklan');
	}

	public function recomendasi()
	{
		$id = $this->input->post('id');
		$val= $this->input->post('val');
		$rekomendasi = $val=='1'?'0':'1';

		$this->db->query("UPDATE tbl_iklan SET rekomendasi='$rekomendasi' WHERE id_iklan='$id'");
	}

	public function simpan()
	{
		$id = $this->input->post('id_iklan');		

		$serialize = $this->input->post();
        $serialize['harga_1_minggu'] = hanya_nomor($serialize['harga_1_minggu']);
        $serialize['harga_2_minggu'] = hanya_nomor($serialize['harga_2_minggu']);
        $serialize['harga_1_bulan'] = hanya_nomor($serialize['harga_1_bulan']);
        $serialize['harga_3_bulan'] = hanya_nomor($serialize['harga_3_bulan']);
        $serialize['harga_6_bulan'] = hanya_nomor($serialize['harga_6_bulan']);
        $serialize['harga_1_tahun'] = hanya_nomor($serialize['harga_1_tahun']);

        //var_dump($serialize);
		if($id=='')
		{
			$serialize['gbr_1'] = upload_file('gbr_1');
	        $serialize['gbr_2'] = upload_file('gbr_2');
	        $serialize['gbr_3'] = upload_file('gbr_3');

	        $serialize['surat_tanah_titik_berdiri'] = upload_file('surat_tanah_titik_berdiri');
	        $serialize['ijin_mendirikan_bangunan'] = upload_file('ijin_mendirikan_bangunan');
	        $serialize['jaminan_bongkar'] = upload_file('jaminan_bongkar');
	        $serialize['surat_ketetapan_rencana_kota'] = upload_file('surat_ketetapan_rencana_kota');
	        $serialize['surat_setoran_pajak_daerah'] = upload_file('surat_setoran_pajak_daerah');
	        $serialize['ijin_penyelenggaraan_reklame'] = upload_file('ijin_penyelenggaraan_reklame');
	        $serialize['bukti_asuransi'] = upload_file('bukti_asuransi');
			
			$this->m_iklan->insert($serialize);
			die('insert');
		}else{
			if(upload_file('gbr_1')!=""){
				$serialize['gbr_1'] = upload_file('gbr_1');	
			}

			if(upload_file('gbr_2')!=""){
				$serialize['gbr_2'] = upload_file('gbr_2');	
			}
			if(upload_file('gbr_3')!=""){
				$serialize['gbr_3'] = upload_file('gbr_3');	
			}

			if(upload_file('surat_tanah_titik_berdiri')!=""){
				$serialize['surat_tanah_titik_berdiri'] = upload_file('surat_tanah_titik_berdiri');	
			}

			if(upload_file('ijin_mendirikan_bangunan')!=""){
				$serialize['ijin_mendirikan_bangunan'] = upload_file('ijin_mendirikan_bangunan');	
			}

			if(upload_file('jaminan_bongkar')!=""){
				$serialize['jaminan_bongkar'] = upload_file('jaminan_bongkar');	
			}

			if(upload_file('surat_ketetapan_rencana_kota')!=""){
				$serialize['surat_ketetapan_rencana_kota'] = upload_file('surat_ketetapan_rencana_kota');	
			}

			if(upload_file('surat_setoran_pajak_daerah')!=""){
				$serialize['surat_setoran_pajak_daerah'] = upload_file('surat_setoran_pajak_daerah');	
			}


			if(upload_file('ijin_penyelenggaraan_reklame')!=""){
				$serialize['ijin_penyelenggaraan_reklame'] = upload_file('ijin_penyelenggaraan_reklame');	
			}


			if(upload_file('bukti_asuransi')!=""){
				$serialize['bukti_asuransi'] = upload_file('bukti_asuransi');	
			}
			

			$this->m_iklan->update($serialize,$id);
			die('update');
		}
		
	}

}
