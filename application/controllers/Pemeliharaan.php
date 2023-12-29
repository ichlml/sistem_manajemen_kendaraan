<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemeliharaan extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pemeliharaan','pemeliharaan');
    }

    public function tambahData()
    {
        $data =[
            'id_penda' => $this->input->post('id_pendataan'),
            'nopol' => $this->input->post('nopol'),
            'tgl' => $this->input->post('tgl_pemeliharaan'),
            'barang' => $this->input->post('jns_pemeliharaan'),
            'satuan' => $this->input->post('satuan'),
            'harga_satuan' => $this->input->post('harga_satuan'),
            'banyak' => $this->input->post('banyak'),
            'total' => $this->input->post('total')
        ];
        

        $arr = [];
        foreach ($data['barang'] as $key => $val)
        {
            $a['id_pendataan'] = $data['id_penda'][0];
            $a['nopol'] = $data['nopol'][0];
            $a['tgl_pemeliharaan'] = $data['tgl'][0];
            $a['jenis_pemeliharaan'] = $data['barang'][$key];
            $a['satuan'] = $data['satuan'][$key];
            $a['harga'] = $data['harga_satuan'][$key];
            $a['qty'] = $data['banyak'][$key];
            $a['total'] = $data['total'][$key];
            $arr[] = $a; 
        }

        $add1 = $this->pemeliharaan->saveBarang($arr);
        if ($add1){
            $this->session->set_flashdata('success', 'Tambah Pemeliharaan Berhasil');
                redirect('pengguna/addPemeliharaan/'.$data['id_penda'][0]);
        }else{
            $this->session->set_flashdata('failed', 'Tambah Pemeliharaan Berhasil');
            redirect('pengguna/addPemeliharaan/'.$data['id_penda'][0]);
        }

    }

    public function editPem()
    {
        
        $post = $this->input->post();
        // print_r($post);
        // exit;
        $update = $this->pemeliharaan->updatePem($post);  
        // $add1 = $this->pemeliharaan->saveBarang($arr);
        if ($update){
            $this->session->set_flashdata('success', 'Ubah Pemeliharaan Berhasil');
                redirect('pengguna/addPemeliharaan/'.$post['id_penda']);
        }else{
            $this->session->set_flashdata('failed', 'Ubah Pemeliharaan Berhasil');
            redirect('pengguna/addPemeliharaan/'.$post['id_penda']);
        }

    }

    public function delPem($id, $id_penda)
    {
        // print_r($id_penda);
        // exit;
        if($id != null){
            $del= $this->pemeliharaan->delPem($id);
            if($del){
                $this->session->set_flashdata('success', 'Hapus Pemeliharaan Berhasil');
                redirect('pengguna/addPemeliharaan/'.$id_penda);
            }else{
                $this->session->set_flashdata('failed', 'Hapus Pemeliharaan Berhasil');
                redirect('pengguna/addPemeliharaan/'.$id_penda);
            }
        }
    }
}