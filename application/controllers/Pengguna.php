<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('m_kendaraan', 'kendaraan');
		$this->load->model('m_pengguna', 'pengguna');
		$this->load->model('m_user', 'user');
		$this->load->model('m_pemeliharaan','pemeliharaan');
	}
	// Tampilan
    public function index()
	{
		$data= array(
			'perorangan' => $this->pengguna->countOrang(),
			'Operasional' => $this->pengguna->countOperasional(),
			'Pinjam' => $this->pengguna->countPinjam(),
			'Jabatan' => $this->pengguna->countJabatan(),
			'Motor' => $this->pengguna->countMotor(),
			'Ransus' => $this->pengguna->countRansus(),
			'Mobil' => $this->pengguna->countMobil()

		);
		// print_r($data['perorangan']);
		// exit;
		$this->template->load('template2','pengguna/dashboard', $data);
	}

	public function dasbor()
	{
		$this->template->load('template3','pengguna/dasbor');
	}

	public function setting()
	{
		$id = $this->session->kode_opd;
		$data = array(
			'row' => $this->user->getOpd($id)->row()
		);
		// print_r($data['row']);
		// exit;
		$this->template->load('template3','pengguna/setting', $data);
	}

	public function berita()
	{
		check_not_login_opd();
		$data = array(
			'data'=> $this->pengguna->getPendataan()->result()
		 );
		$this->template->load('template3','pengguna/berita/data', $data);
	}


	public function dataDetail()
	{
		check_not_login_opd();
		$data = array(
			'data'=> $this->pengguna->getPendataan()->result()
		 );
		$this->template->load('template3','pengguna/detail/data', $data);
	}

	public function pemeliharaan()
	{
		check_not_login_opd();
		$data = array(
			'data'=> $this->pengguna->getPendataan()->result(),
			'tahun'=> $this->pemeliharaan->getTahun()->result()
		 );
		$this->template->load('template3','pengguna/pemeliharaan/data', $data);
	}

	public function addPemeliharaan($id = null)
	{
		check_not_login_opd();
		$data = array(
			'dt'=> $this->pemeliharaan->getdata($id)->row(),
			'data'=> $this->pemeliharaan->getPemeliharaan($id)->result()
		 );
		//  print_r($data['dt']);
		//  exit;
		$this->template->load('template3','pengguna/pemeliharaan/add', $data);
	}

	public function kartuPemeliharaan($id = null)
	{
		check_not_login_opd();
		$data = array(
			'dt'=> $this->pemeliharaan->getdata($id)->row(),
			'data'=> $this->pemeliharaan->getPemeliharaan($id)->result(),
			// 'nopol'=> $this->pemeliharaan->getNopol()->result(),
			'tahun'=> $this->pemeliharaan->getTahun()->result()
		 );
		 
		$this->template->load('template3','pengguna/pemeliharaan/kaPem', $data);
	}

	public function pajak()
	{
		check_not_login_opd();
		$data = array(
			'data'=> $this->pengguna->getPendataan()->result()
		 );
		$this->template->load('template3','pengguna/pajak/filter', $data);
	}

	// akhir tampilah

	public function result($id)
	{
		$data = array(
			'data'=> $this->pengguna->Pajak($id)->result(),
			'id' => $id
		);
		// print_r($data);
		// exit;
		$this->load->view('pengguna/pajak/result', $data);
	}

	public function kapem($nopol, $tahun)
	{
		$data = array(
			'data'=> $this->pemeliharaan->kapem($nopol, $tahun)->result(),
			'nopol' => $nopol,
			'tahun' => $tahun
		);

		// echo "<pre>";
		// print_r($data['data']);
		// exit;
		// echo "</pre>";
		$this->load->view('pengguna/pemeliharaan/result', $data);
	}

	public function getnopol()
    {
       if(isset($_GET['term'])){
           $keyword = $this->kendaraan->getNopolPenda($_GET['term']);
           if(count($keyword) > 0){
               foreach($keyword as $key)
			   $arr_key[] = $key->nopol;
            }
			echo json_encode($arr_key);
       }
	}
	
	public function getData()
    {
        $key = $this->input->post('nopol');
		// print_r($key);
		// exit;
		$result = $this->kendaraan->getDetailPenda($key)->row();
        echo json_encode($result);
	}

	public function editPendataan($id)
	{
		check_not_login_opd();
		$query = $this->kendaraan->getPendataan($id);
		if($query->num_rows() > 0){
			$pendataan = $query->row();
			$data= array(
                'page' => 'edit',
                'row' => $pendataan
			);
			$this->template->load('template3','pengguna/detail/edit', $data);
		}
	}

	public function editPenda()
    {
		check_not_login_opd();
       $post = $this->input->post();
    //    print_r($post);
    //    exit;
       $update = $this->pengguna->editPendataan($post);
       if ($update)
            {
                $this->session->set_flashdata('success', 'Update Data Pendataan Berhasil');
                redirect('pengguna/dataDetail');
            }
            else
            {
                $this->session->set_flashdata('failed', 'Data Pendataan Gagal');
                redirect('pengguna/dataDetail');
            }
	}
	
	public function detailPenda($id = null)
	{
		check_not_login_opd();
		if ($id != null)
		{
			$data = array(
				'row' => $this->pengguna->getPenda($id)->row()
			);
			// print_r($data);
			// exit;
			$this->template->load('template3','pengguna/detail/detail', $data);
		}
		else
		{
			redirect('pengguna/detail/data');
		}
	}

	public function addPendataan()
	{
		check_not_login_opd();
		$dataan = new stdClass();
		$dataan->kd_kendaraan = null;
		$dataan->kode_opd = null;
		$dataan->status_penggunaan = null;
		$dataan->kondisi = null;
		$dataan->no_ba_pinjam = null;
		$dataan->nama_peminjam = null;
		$dataan->nip_pemakai = null;
		$dataan->tgl_pinjam = null;
		$dataan->tgl_pajak = null;
		$dataan->jabatan_peminjam = null;

		$data= array(
			'page' => 'add',
			'row' => $dataan
		);
		
		$this->template->load('template3','pengguna/detail/add', $data);
	}

	public function prosesPenda()
    {
        $post = $this->input->post(NULL, TRUE);

        if(isset($_POST['add'])) {
            $nopol = $this->input->post('nopol');
            if ( $this->kendaraan->getdataNopol($nopol)->num_rows() > 0){
                $this->session->set_flashdata('avaible', 'Nomor Polisi Sudah Terdaftar');
                redirect('pengguna/dataDetail');
            } else{
                $add = $this->kendaraan->addPendataan($post);
                if(add){
                    $this->session->set_flashdata('success', 'Data Berhasil Di Tambahkan');
					redirect('pengguna/dataDetail');
                }
            }
        }
	}
	
	public function getKendaraan()
    {
        $key = $this->input->post('nopol');
        $result = $this->kendaraan->getDetail($key)->row();
        echo json_encode($result);
	}
	// detailPenda
	public function getDatanopol()
    {
       if(isset($_GET['term'])){
           $keyword = $this->pengguna->getDatanopol($_GET['term']);
           if(count($keyword) > 0){
               foreach($keyword as $key)
			   $arr_key[] = $key->nopol;
			//    print_r($arr_key);
			//    exit;
            }
            echo json_encode($arr_key);
       }
	}

	public function editOPD()
	{
		$post = $this->input->post();
		$update = $this->user->editOpd($post);

		if($update){
			$this->session->set_flashdata('success', 'Data Berhasil Di Ubah');
			redirect('pengguna/dataDetail');
		}else{
			$this->session->set_flashdata('success', 'Data Berhasil Di Ubah	');
			redirect('pengguna/dataDetail');
		}
	}

}
