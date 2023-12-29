<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kendaraan extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        check_not_login();
        $this->load->model('M_kendaraan','kendaraan');
    }

    public function prosesKendaraan()
    {
        
            $post = $this->input->post(null, TRUE);
            if(isset($_POST['add'])){
                $nopol = $this->input->post('nopol');

                if ( $this->kendaraan->getNopol($nopol)->num_rows() > 0){
                    $this->session->set_flashdata('avaible', 'Nomor Polisi Sudah Terdaftar');
                    redirect('admin/data_kendaraan');
                } else {
                    $add = $this->kendaraan->addKendaraan($post);
                    if(add){
                        $this->session->set_flashdata('success', 'Data Berhasil Di Tambahkan');
                        redirect('admin/data_kendaraan');
                    }
                }
            }elseif(isset($_POST['edit'])){
                $post = $this->input->post();
                $this->kendaraan->editKendaraan($post);
                $this->session->set_flashdata('success', 'Edit Berhasil Di Tambahkan');
                redirect('admin/data_kendaraan');
            }
    }

    public function del($id)
    {
        $del = $this->kendaraan->del($id);
        if($del){
            $this->session->set_flashdata('success', 'Delete Data Berhasil');
            redirect('admin/data_kendaraan');
        }
        redirect('admin/data_kendaraan');
    }

    public function getnopol()
    {
       if(isset($_GET['term'])){
           $keyword = $this->kendaraan->getNamaKendaraan($_GET['term']);
           if(count($keyword) > 0){
               foreach($keyword as $key)
               $arr_key[] = $key->nopol;
            }
            echo json_encode($arr_key);
       }
    }

    public function getKendaraan()
    {
        $key = $this->input->post('nopol');
        $result = $this->kendaraan->getDetail($key)->row();
        echo json_encode($result);
    }

    public function getNamaOpd()
    {
        if(isset($_GET['term'])){
            $keyword = $this->kendaraan->getNamaOpd($_GET['term']);
            if(count($keyword) > 0){
                foreach($keyword as $key)
                $arr_key[] = $key->nama_opd;
             }
             echo json_encode($arr_key);
        }
    }

    public function getOPD()
    {
        $key = $this->input->post('nama_opd');
        $result = $this->kendaraan->getOPD($key)->row();
        echo json_encode($result);
    }

    public function addPendataan()
    {
        $post = $this->input->post(NULL, TRUE);

        if(isset($_POST['add'])) {
            $nopol = $this->input->post('nopol');
            if ( $this->kendaraan->getdataNopol($nopol)->num_rows() > 0){
                $this->session->set_flashdata('avaible', 'Nomor Polisi Sudah Terdaftar');
                redirect('admin/pendataan');
            } else{
                $add = $this->kendaraan->addPendataan($post);
                if(add){
                    $this->session->set_flashdata('success', 'Data Berhasil Di Tambahkan');
                        redirect('admin/pendataan');
                }
            }
        }
    }

    public function editPenda()
    {
       $post = $this->input->post();
    //    print_r($post);
    //    exit;
       $update = $this->kendaraan->editPendataan($post);
       if ($update)
            {
                $this->session->set_flashdata('success', 'Update Data Pendataan Berhasil');
                redirect('admin/pendataan');
            }
            else
            {
                $this->session->set_flashdata('failed', 'Data Pendataan Gagal');
                redirect('admin/pendataan');
            }
    }

    public function delPenda($id)
    {
        $del = $this->kendaraan->delPenda($id);
        if($del){
            $this->session->set_flashdata('success', 'Delete Data Berhasil');
            redirect('admin/pendataan');
        }
        redirect('admin/pendataan');
    }
    
}