<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        check_not_login();
        $this->load->model('M_user','user');
    }

    public function index()
    {
        
        $data = array(
           'user'=> $this->user->getAdmin()->result()
        );

        $this->template->load('template','admin/user/data_user', $data);
    }

    public function tambahAdmin()
    {
        $uname = $this->input->post('nip');

        if($this->user->getNip($uname)->num_rows() > 0){
            $this->session->set_flashdata('avaible', 'NIP Sudah Terdaftar');
            redirect('user');
        }else{

            $post = $this->input->post(null, TRUE);
            
            if(isset($_POST['add'])){
                $this->user->add($post);
                $this->session->set_flashdata('success', 'Data Berhasil Di Tambahkan');
                redirect('user');
            }elseif (isset($_POST['edit'])) {
                $this->user->edit($post);
                $this->session->set_flashdata('success', 'Data Berhasil Di Update');
                redirect('user');
            }else{
                redirect('user');
            }
        }
        
    }

    public function del($id)
    {
        $this->user->del($id);
        if($del){
            $this->session->set_flashdata('success', 'Delete Data Berhasil');
            redirect('user');
        }
        redirect('user');
    }

    public function tambahOpd()
    {
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['add'])){
            $unopd = $this->input->post('kode_opd');
            if($this->user->getKopd($unopd)->num_rows() > 0){
                $this->session->set_flashdata('avaible', 'Kode Opd Sudah Terdaftar');
                redirect('admin/data_opd');
            }else{
                $this->user->addOpd($post);
                $this->session->set_flashdata('success', 'Data Berhasil Di Tambahkan');
                redirect('admin/data_opd');
            }
        }elseif(isset($_POST['edit'])){
            $this->user->editOpd($post);
            $this->session->set_flashdata('success', 'Data Berhasil Di Ubah');
            redirect('admin/data_opd');
        }
    }

    public function delOpd($id)
    {
        $this->user->delOpd($id);
        if($del){
            $this->session->set_flashdata('success', 'Delete Data Berhasil');
            redirect('admin/data_opd');
        }
        redirect('admin/data_opd');
    }

    public function EditPengelola()
    {
        $post = $this->input->post();
        $update = $this->user->editPengelola($post);
        // print_r($update);
        // exit;
       if ($update == 0)
            {
                $this->session->set_flashdata('success', 'Update Data Pendataan Berhasil');
                redirect('admin/pengelola');
            }
            else
            {
                $this->session->set_flashdata('failed', 'Data Pendataan Gagal');
                redirect('admin/pengelola');
            }
    }
    
}