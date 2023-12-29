<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		check_not_login();
		$this->load->model('m_admin','admin');
		$this->load->model('m_user','user');
		$this->load->model('m_kendaraan','kendaraan');
		$this->load->model('m_pengguna','pengguna');
		$this->load->model('m_pemeliharaan','pemeliharaan');
	}

	public function index()
	{
		$data = array(
			'jml_kendaraan' => $this->kendaraan->countKend(),
			'jml_opd' => $this->kendaraan->countopd(),
			'jml_data' => $this->kendaraan->countdata(),
			'jml_admin' => $this->kendaraan->countuser(),
			
			'perorangan' => $this->pengguna->countOrang(),
			'Operasional' => $this->pengguna->countOperasional(),
			'Pinjam' => $this->pengguna->countPinjam(),
			'Jabatan' => $this->pengguna->countJabatan(),
			'Motor' => $this->pengguna->countMotor(),
			'Ransus' => $this->pengguna->countRansus(),
			'Mobil' => $this->pengguna->countMobil()
		);
		$this->template->load('template','admin/dashboard', $data);
	}

	public function data_opd()
	{
		$data = array(
			'user'=> $this->user->getOpd()->result()
		 );
		$this->template->load('template','admin/opd/data_opd', $data);
	}

	public function data_kendaraan()
	{
		$data = array(
			'kendaraan'=> $this->kendaraan->getKendaraan()->result()
		 );
		$this->template->load('template','admin/kendaraan/data_kendaraan', $data);
	}

	public function pendataan()
	{
		$data = array(
			'data'=> $this->kendaraan->getPendataan()->result()
		 );
		$this->template->load('template','admin/pendataan/pendataan', $data);
	}

	public function pengelola()
	{
		$data = array(
			'data'=> $this->pengguna->TampilPengelola()->result()
		 );
		$this->template->load('template','admin/pengelola/data', $data);
	}
	
	public function pajak()
	{
		// $opd = $this->input->get('opd', TRUE);
		// // die($opd .'ssss');
		$data = array(
			'data'=> $this->user->getOpd()->result()
		 );
		$this->template->load('template','admin/pajak/pajak', $data);
	}
	public function DaftarKend()
	{
		// $opd = $this->input->get('opd', TRUE);
		// // die($opd .'ssss');
		$data = array(
			'data'=> $this->user->getOpd()->result()
		 );
		$this->template->load('template','admin/kenda/filter', $data);
	}

	public function Pemeliharaan()
	{
		$data = array(
			'data'=> $this->user->getOpd()->result(),
			'tahun'=> $this->pemeliharaan->getTahunAd()->result()
		 );
		$this->template->load('template','admin/pemeliharaan/filter', $data);
	}

	public function kaPem()
	{
		$data = array(
			'data'=> $this->kendaraan->getKendaraan()->result(),
			'tahun'=> $this->pemeliharaan->getTahunAd()->result()
		 );
		$this->template->load('template','admin/kapem/filter', $data);
	}
	public function result($id)
	{
		$data = array(
			'data'=> $this->admin->Pajak($id)->result(),
			'id' => $id
		);
		// print_r($data);
		// exit;
		$this->load->view('admin/pajak/result', $data);
	}
	public function resultkenda($id)
	{
		$data = array(
			'data'=> $this->admin->DaftarKenda($id)->result(),
			'id' => $id
		);
		// print_r($data);
		// exit;
		$this->load->view('admin/kenda/result', $data);
	}
	public function resultPem($opd, $tahun)
	{
		$data = array(
			'data'=> $this->pemeliharaan->getPemAd($opd, $tahun)->result(),
			'opd' => $opd,
			'tahun' => $tahun
		);
		// print_r($data);
		// exit;
		$this->load->view('admin/pemeliharaan/result', $data);
	}

	public function resultkaPem($nopol, $tahun)
	{
		$data = array(
			'data'=> $this->pemeliharaan->kapemAd($nopol, $tahun)->result(),
			'nopol' => $nopol,
			'tahun' => $tahun
		);

		$this->load->view('admin/kapem/result', $data);
	}

	public function editPengelola( $id)
	{
		$query = $this->pengguna->TampilPengelola($id);
		
		if($query->num_rows() > 0){
			$pendataan = $query->row();
			$data= array(
                'page' => 'edit',
                'row' => $pendataan
			);
			$this->template->load('template','admin/pengelola/edit', $data);
		}
	}

	public function addUser()
	{
		$admin = new stdClass();
		$admin->id_admin = null;
		$admin->nip = null;
		$admin->nama_admin = null;
		$admin->jkel = null;
		$admin->alamat = null;
		$admin->user = null;
		$admin->pass = null;

		$data= array(
			'page' => 'add',
			'row' => $admin
		);
		
		$this->template->load('template','admin/user/add', $data);
	}

	public function editUser($id)
    {
        $query = $this->user->getAdmin($id);
        if($query->num_rows() > 0){
            $admin = $query->row();
            $data= array(
                'page' => 'edit',
                'row' => $admin
			);
			$this->template->load('template','admin/user/add', $data);
        }else{
			echo "<script>alert('Data Tidak di temukan');</script>";
        }
	}
	
	public function addOpd()
	{
		$opd = new stdClass();
		$opd->kode_opd = null;
		$opd->nama_opd = null;
		$opd->jabatan = null;
		$opd->pimpinan = null;
		$opd->nip_opd = null;
		$opd->pass = null;

		$data= array(
			'page' => 'add',
			'row' => $opd
		);
		
		$this->template->load('template','admin/opd/add', $data);
	}

	public function editOpd($id)
	{
		$query = $this->user->getOpd($id);
		if($query->num_rows() > 0){
			$opd = $query->row();
			$data= array(
                'page' => 'edit',
                'row' => $opd
			);
			$this->template->load('template','admin/opd/add', $data);
		}
	}

	public function addKendaraan()
	{
		$kendaraan = new stdClass();
		$kendaraan->kd_kendaraan = null;
		$kendaraan->nopol = null;
		$kendaraan->kode_opd = null;
		$kendaraan->nama_opd = null;
		$kendaraan->nama_kendaraan = null;
		$kendaraan->jenis = null;
		$kendaraan->no_penyimpanan = null;
		$kendaraan->merk = null;
		$kendaraan->type = null;
		$kendaraan->cc = null;
		$kendaraan->tgl_perolehan = null;
		$kendaraan->no_rangka = null;
		$kendaraan->no_mesin = null;
		$kendaraan->no_bpkb = null;
		$kendaraan->harga = null;
		$kendaraan->idpemda = null;

		$data= array(
			'page' => 'add',
			'row' => $kendaraan
		);
		
		$this->template->load('template','admin/kendaraan/add', $data);
	}

	public function editKendaraan($id)
	{
		$query = $this->kendaraan->getKendaraan($id);
		if($query->num_rows() > 0){
			$opd = $query->row();
			$data= array(
                'page' => 'edit',
                'row' => $opd
			);
			$this->template->load('template','admin/kendaraan/add', $data);
		}
	}

	public function detailKendaraan($id = null)
    {
        if ($id != null)
		{
			$data = array(
				'row' => $this->kendaraan->getAllKendaraan($id)->row()
			);
			$this->template->load('template','admin/kendaraan/detail', $data);
		}
		else
		{
			redirect('admin/data_kendaraan');
		}
	}	
	
	public function addPendataan()
	{
		$dataan = new stdClass();
		$dataan->kd_kendaraan = null;
		$dataan->kode_opd = null;
		$dataan->status_penggunaan = null;
		$dataan->no_ba_pinjam = null;
		$dataan->nama_peminjam = null;
		$dataan->nip_pemakai = null;
		$dataan->tgl_pinjam = null;
		$dataan->tgl_pajak = null;

		$data= array(
			'page' => 'add',
			'row' => $dataan
		);
		
		$this->template->load('template','admin/pendataan/add', $data);
	}

	public function editPendataan($id)
	{
		$query = $this->kendaraan->getPendataan($id);
		if($query->num_rows() > 0){
			$pendataan = $query->row();
			$data= array(
                'page' => 'edit',
                'row' => $pendataan
			);
			$this->template->load('template','admin/pendataan/edit', $data);
		}
	}

	public function detailPenda($id = null)
	{
		if ($id != null)
		{
			$data = array(
				'row' => $this->kendaraan->getPendataan($id)->row()
			);
			$this->template->load('template','admin/pendataan/detail', $data);
		}
		else
		{
			redirect('admin/data_kendaraan');
		}
	}

}
