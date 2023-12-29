<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    public function __construct()
	{
		parent:: __construct();
		$this->load->model('m_kendaraan', 'kendaraan');
        $this->load->model('m_pengguna', 'pengguna');
        $this->load->model('m_admin', 'admin');
        $this->load->model('m_pemeliharaan', 'pemeliharaan');
        
        $this->load->library('mypdf');
	}

    public function kapem($nopol = null, $tahun = null)
    {
        if ($nopol != null && $tahun != null)
		{
			$data = array(
				'row' => $this->pemeliharaan->kapem($nopol, $tahun)->row(),
				'data' => $this->pemeliharaan->kapem($nopol, $tahun)->result()
            );
            $this->load->view('pengguna/pemeliharaan/cetakKapem', $data);

            $this->mypdf->Kapem('pengguna/pemeliharaan/cetakKapem', $data);
		}
    }

    public function kapemAd($nopol = null, $tahun = null)
    {
        if ($nopol != null && $tahun != null)
		{
			$data = array(
				'row' => $this->pemeliharaan->kapemAd($nopol, $tahun)->row(),
				'data' => $this->pemeliharaan->kapemAd($nopol, $tahun)->result()
            );
            $this->load->view('admin/kapem/cetak', $data);

            $this->mypdf->Kapem('admin/kapem/cetak', $data);
		}
    }

    public function pemeliharaan()
    {
            $tahun = $this->input->post('tahun');

			$data = array(
				'row' => $this->pemeliharaan->CetakPemeliharaan($tahun)->row(),
				'data' => $this->pemeliharaan->CetakPemeliharaan($tahun)->result()
            );
            $this->load->view('pengguna/pemeliharaan/cetakData', $data);

            $this->mypdf->Pemeliharaan('pengguna/pemeliharaan/cetakData', $data);
    }

    public function pemeliharaanAd($opd, $tahun)
    {

			$data = array(
				'row' => $this->pemeliharaan->CetakPemeliharaanAd($tahun, $opd)->row(),
				'data' => $this->pemeliharaan->CetakPemeliharaanAd($tahun, $opd)->result()
            );
            $this->load->view('admin/pemeliharaan/cetak', $data);

            $this->mypdf->Pemeliharaan('admin/pemeliharaan/cetak', $data);
    }

    public function cetak($id = null)
    {
        if ($id != null)
		{
			$data = array(
				'row' => $this->pengguna->cetak($id)->row()
            );
            $this->load->view('pengguna/berita/cetak', $data);

            $this->mypdf->generate('pengguna/berita/cetak', $data);
		}
    }

    public function cetak_jabatan($id = null)
    {
        if ($id != null)
		{
			$data = array(
				'row' => $this->pengguna->cetak($id)->row()
            );
            $this->load->view('pengguna/berita/cetak_jabatan', $data);

            $this->mypdf->generate('pengguna/berita/cetak_jabatan', $data);
		}
    }

    public function cetak_perorangan($id = null)
    {
        if ($id != null)
		{
			$data = array(
				'row' => $this->pengguna->cetak($id)->row(),
				'pengelola' => $this->pengguna->TampilPengelola()->row()
            );
            $this->mypdf->generate('pengguna/berita/cetak_perorangan', $data);
            // $this->mypdf->generate('pengguna/berita/cetak_perorangan', $data);
		}
    }

    public function lapPajak($id)
    {
        $data = array(
            'roww'=> $this->pengguna->Pajak($id)->result(),
            'as'=> $this->pengguna->Pajak($id)->row()
        );
            $this->load->view('pengguna/pajak/cetak', $data);
		    // $this->load->library('pdf');
    
            // $this->pdf->setPaper('A4', 'landscape');
            // $this->pdf->filename = "Laporan Pajak Kendaraan Bulan ".$id.".pdf";
            $this->mypdf->generate3('pengguna/pajak/cetak', $data);
    }
    public function lapPajakAdmin($id)
    {
        $data = array(
            'roww'=> $this->admin->Pajak($id)->result(),
            'as'=> $this->admin->Pajak($id)->row()
        );
            $this->load->view('admin/pajak/cetak', $data);
            $this->mypdf->generate3('admin/pajak/cetak', $data);
    }

    public function lapKenda()
    {
        $data = array(
            'roww' => $this->pengguna->lapkeda()->result()
        );
        // print_r($data['roww']);
        // exit;

        $this->mypdf->generate2('pengguna/detail/lapKenda', $data);
    }

    public function lapKendaopd($id)
    {
        $data = array(
            'roww' => $this->pengguna->lapkedaopd($id)->result(),
            'as' => $this->pengguna->lapkedaopd($id)->row()
        );
        // print_r($data['roww']);
        // exit;

        $this->mypdf->generate2('admin/kenda/cetak', $data);
    }
}