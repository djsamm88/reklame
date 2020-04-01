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
		$this->load->model('m_pengguna');
		$this->load->library('session');
		date_default_timezone_get('Asia/Jakarta');


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
		$data['data'] = $this->m_iklan->by_id(array("id_iklan"=>$id_iklan));
		$this->load->view('public/detail.php',$data);
	}

	public function detail_kecil($id_iklan=null)
	{
		if($id_iklan==null)
		{
			die("Not Found");
		}
		$data['provinsi'] = $this->m_util->provinsi()->result();
		$data['media'] = 	$this->m_util->all_media()->result();
		$data['data'] = $this->m_iklan->by_id(array("id_iklan"=>$id_iklan));
		$this->load->view('public/detail_kecil.php',$data);
	}

	public function ambil_kab($province_id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: *");
		header('Content-Type: application/json');	
		$q = $this->m_util->kabupaten($province_id);
		echo json_encode($q->result());

	}



	private function gas($x)
	{
		$a = stripslashes(strip_tags(htmlspecialchars($x,ENT_QUOTES)));
		$a = str_replace("'", "", $a);
		return $a;
	}


	private function cek_email($email) {
		$email = $this->gas($email);
		$query = $this->db->query("SELECT * FROM tbl_pengguna WHERE email='$email'");			
		return $query->num_rows();
	}

	private function login_terakhir($email) {
		$email = $this->gas($email);
		$login_terakhir = date('Y-m-d H:i:s');
		$this->db->query("UPDATE tbl_pengguna SET login_terakhir='$login_terakhir' WHERE email='$email'");			
		
	}


	public function login()
	{
		$serialize = $this->input->post();		
		if($this->cek_email($serialize['email'])>0)
		{
			$this->db->where($serialize);
			$query = $this->db->get('tbl_pengguna');
			if($query->num_rows()>0)
			{
				echo "berhasil_login";
				$this->login_terakhir($serialize['email']);
				$sess_data=$query->result_array();
				$this->session->set_userdata($sess_data[0]);
				
				die();
			}else{
				echo "password_salah";
				die();
			}

		}else{
			echo "gagal_login";
			die();
		}
	}


	public function daftar()
	{
		$serialize = $this->input->post();
		if($this->cek_email($serialize['email'])>0)
		{
			echo "email_terdaftar";
			die();
		}

		$serialize['tgl_daftar'] = date('Y-m-d H:i:s');

		$this->m_pengguna->insert($serialize); 
		if($this->db->affected_rows() > 0)
		{
			echo "berhasi_daftar";
			$serialize['id_pengguna'] = $this->db->insert_id();
			
			$this->session->set_userdata($serialize);

			die();
		}
		

	}


	public function toko_anda()
	{
		$data['provinsi'] = $this->m_util->provinsi()->result();
		$data['media'] = 	$this->m_util->all_media()->result();	
		$data['pesanan'] = $this->m_pengguna->pesanan($this->session->userdata('id_pengguna'));
		$data['orderan'] = $this->m_pengguna->orderan($this->session->userdata('id_pengguna'));

		$data['toko'] = $this->m_pengguna->toko($this->session->userdata('id_pengguna'));
		$this->load->view('public/toko_anda.php',$data);
	}


	public function iklan_anda()
	{
		$data['iklan_anda'] = $this->m_pengguna->toko($this->session->userdata('id_pengguna'));
		$this->load->view('public/iklan_anda.php',$data);
	}

	public function orderan_anda()
	{
		$data['orderan'] = $this->m_pengguna->orderan($this->session->userdata('id_pengguna'));
		$this->load->view('public/orderan_kepada_anda.php',$data);
	}

	public function pesanan_anda()
	{
		$data['pesanan'] = $this->m_pengguna->pesanan($this->session->userdata('id_pengguna'));
		$this->load->view('public/pesanan_anda.php',$data);
	}




	public function update_profil()
	{
		$id = $this->input->post('id_pengguna');		

		$serialize = $this->input->post();
		$this->m_pengguna->update($serialize,$id);
		die('update');
	
		
	}


	public function pesan()
	{
		$serialize = $this->input->post();
		
		$serialize['tgl'] = date('Y-m-d H:i:s');

		$id_trx = $this->m_pengguna->pesan($serialize); 
		if($this->db->affected_rows() > 0)
		{
			
			$history = array("id_trx"=>$id_trx,"status"=>0);
			$this->m_pengguna->history_trx($history);

			echo "pesanan_berhasil";		
			die();
		}
	}


	public function simpan_iklan()
	{
		$id = $this->input->post('id_iklan');		

		$serialize = $this->input->post();
        $serialize['harga_1_minggu'] = hanya_nomor($serialize['harga_1_minggu']);
        $serialize['harga_2_minggu'] = hanya_nomor($serialize['harga_2_minggu']);
        $serialize['harga_1_bulan'] = hanya_nomor($serialize['harga_1_bulan']);
        $serialize['harga_3_bulan'] = hanya_nomor($serialize['harga_3_bulan']);
        $serialize['harga_6_bulan'] = hanya_nomor($serialize['harga_6_bulan']);
        $serialize['harga_1_tahun'] = hanya_nomor($serialize['harga_1_tahun']);
        $serialize['id_pengguna'] = $this->session->userdata('id_pengguna');

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


	public function upload_bukti()
	{
		$id = $this->input->post('id');		
		$bukti = upload_file('bukti_bayar');	
		$this->db->query("UPDATE tbl_transaksi SET bukti_bayar='$bukti',status='2' WHERE id='$id'");

		$history = array("id_trx"=>$id,"status"=>2);
		$this->m_pengguna->history_trx($history);

	}


	public function set_status_trx()
	{
		$id = $this->input->post('id');
		$code = $this->input->post('code');

		$this->db->query("UPDATE tbl_transaksi SET status='$code' WHERE id='$id'");

		$history = array("id_trx"=>$id,"status"=>$code);
		$this->m_pengguna->history_trx($history);
	}

	public function iklan_by_id($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: *");
		header('Content-Type: application/json');	
		$q = $this->m_iklan->by_id(array("id_iklan"=>$id));
		echo json_encode($q->result());

	}


	public function hapus()
	{
		$id = $this->input->post('id');
		$val= $this->input->post('val');
		$rekomendasi = $val=='1'?'0':'1';

		$this->db->query("UPDATE tbl_iklan SET status='$rekomendasi' WHERE id_iklan='$id'");
	}



	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url().'index.php/welcome');
	}



}
