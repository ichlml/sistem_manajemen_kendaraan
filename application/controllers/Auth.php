<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		check_alerdy_login();
		$this->load->view('login');
	}

	public function proses()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($post['login'])){
			$this->load->model('m_admin','admin');
			$query1 = $this->admin->admin($post);
			$query2 = $this->admin->opd($post);

			if($query1->num_rows() == 1){
				$row = $query1->row();
				$params1 = array(
					'nip' => $row->nip,
					'id_admin' => $row->id_admin,
					'nama_admin' => $row->nama_admin,
					'jkel' => $row->jkel,
					'user' => $row->user
				);
				$this->session->set_userdata($params1);
				redirect('admin');
			}elseif ($query2->num_rows() == 1) {
				$roww = $query2->row();
				// print_r($roww);
				// exit;
				$params2 = array(
					'kode_opd' => $roww->kode_opd,
					'nama_opd' => $roww->nama_opd,
					'pimpinan' => $roww->pimpinan,
					'jabatan' => $roww->jabatan
				);
				$this->session->set_userdata($params2);
				redirect('pengguna/dataDetail');
			}else{
				$this->session->set_flashdata('failed', 'Username atau Password Salah');
				// exit;
				redirect('auth');
			}

		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('pengguna');
	}

	
}
