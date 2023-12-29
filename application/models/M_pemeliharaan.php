<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pemeliharaan extends CI_Model {
    public function getPemeliharaan($id)
    {
        $kd = $this->session->kode_opd;
        $this->db->select('*, tb_pemeliharaan.harga as anu');
        $this->db->from('tb_pemeliharaan');
        $this->db->join('tb_pendataan','id_pendataan');
        $this->db->join('tb_kendaraan','kd_kendaraan');
        $this->db->where('tb_kendaraan.kode_opd',$kd);
        $this->db->where('tb_pendataan.id_pendataan',$id);
        return $this->db->get();
    }

    public function getdata($id)
    {
        $kd = $this->session->kode_opd;
        $this->db->select('*');
        $this->db->from('tb_kendaraan');
        $this->db->join('tb_pendataan','kd_kendaraan');
        $this->db->where('tb_pendataan.id_pendataan',$id);
        $this->db->where('tb_kendaraan.kode_opd',$kd);
        return $this->db->get();
    }

    // public function getNopol($id = null)
    // {
    //     $kd = $this->session->kode_opd;
    //     $this->db->select('*');
    //     $this->db->from('tb_pemeliharaan');
    //     $this->db->join('tb_pendataan','id_pendataan');
    //     $this->db->join('tb_kendaraan','kd_kendaraan');
    //     $this->db->where('tb_kendaraan.kode_opd',$kd);
    //     $this->db->group_by('tb_pemeliharaan.nopol');
    //     return $this->db->get();

    // }

    public function getTahun($id = null)
    {
        $kd = $this->session->kode_opd;
        $this->db->select('*, YEAR(tgl_pemeliharaan) as tahun');
        $this->db->from('tb_pemeliharaan');
        $this->db->join('tb_pendataan','id_pendataan');
        $this->db->join('tb_kendaraan','kd_kendaraan');
        $this->db->where('tb_kendaraan.kode_opd',$kd);
        $this->db->group_by('YEAR(tgl_pemeliharaan)');
        return $this->db->get();

    }

    public function getTahunAd()
    {
        // $kd = $this->session->kode_opd;
        $this->db->select('*, YEAR(tgl_pemeliharaan) as tahun');
        $this->db->from('tb_pemeliharaan');
        $this->db->join('tb_pendataan','id_pendataan');
        $this->db->join('tb_kendaraan','kd_kendaraan');
        // $this->db->where('tb_kendaraan.kode_opd',$kd);
        $this->db->group_by('YEAR(tgl_pemeliharaan)');
        return $this->db->get();

    }

    public function kapem($nopol, $tahun)
    {
        $kd = $this->session->kode_opd;
        $this->db->select('*, YEAR(tgl_pemeliharaan) as tahun, tb_pemeliharaan.harga as anu');
        $this->db->from('tb_pemeliharaan');
        $this->db->join('tb_pendataan','id_pendataan');
        $this->db->join('tb_kendaraan','kd_kendaraan');
        $this->db->where('tb_kendaraan.kode_opd',$kd);
        $this->db->where('tb_pemeliharaan.nopol',$nopol);
        $this->db->where('YEAR(tb_pemeliharaan.tgl_pemeliharaan)',$tahun);
        // $this->db->group_by('tb_pemeliharaan.tgl_pemeliharaan');
        return $this->db->get();
    }

    public function kapemAd($nopol, $tahun)
    {
        // $kd = $this->session->kode_opd;
        $this->db->select('*, YEAR(tgl_pemeliharaan) as tahun, tb_pemeliharaan.harga as anu');
        $this->db->from('tb_pemeliharaan');
        $this->db->join('tb_pendataan','id_pendataan');
        $this->db->join('tb_kendaraan','kd_kendaraan');
        // $this->db->where('tb_kendaraan.kode_opd',$kd);
        $this->db->where('tb_pemeliharaan.nopol',$nopol);
        $this->db->where('YEAR(tb_pemeliharaan.tgl_pemeliharaan)',$tahun);
        // $this->db->group_by('tb_pemeliharaan.tgl_pemeliharaan');
        return $this->db->get();
    }

    public function CetakPemeliharaan($tahun)
    {
        $kd = $this->session->kode_opd;
        $this->db->select('*, YEAR(tgl_pemeliharaan) as tahun, tb_pemeliharaan.harga as anu, SUM(total) as total');
        $this->db->from('tb_pemeliharaan');
        $this->db->join('tb_pendataan','id_pendataan');
        $this->db->join('tb_kendaraan','kd_kendaraan');
        $this->db->where('tb_kendaraan.kode_opd',$kd);
        // $this->db->where('tb_pemeliharaan.nopol',$nopol);
        $this->db->where('YEAR(tb_pemeliharaan.tgl_pemeliharaan)',$tahun);
        $this->db->group_by('tb_pemeliharaan.nopol');
        return $this->db->get();
    }

    public function CetakPemeliharaanAd($tahun, $opd)
    {
        $this->db->select('*, YEAR(tgl_pemeliharaan) as tahun, tb_pemeliharaan.harga as anu, SUM(total) as total');
        $this->db->from('tb_pemeliharaan');
        $this->db->join('tb_pendataan','id_pendataan');
        $this->db->join('tb_kendaraan','kd_kendaraan');
        $this->db->where('tb_kendaraan.kode_opd',$opd);
        // $this->db->where('tb_pemeliharaan.nopol',$nopol);
        $this->db->where('YEAR(tb_pemeliharaan.tgl_pemeliharaan)',$tahun);
        $this->db->group_by('tb_pemeliharaan.nopol');
        return $this->db->get();
    }

    public function getPemAd($opd, $tahun)
    {
        $this->db->select('*, tb_pemeliharaan.harga as anu, YEAR(tgl_pemeliharaan) as tahun');
        $this->db->from('tb_pemeliharaan');
        $this->db->join('tb_pendataan','id_pendataan');
        $this->db->join('tb_kendaraan','kd_kendaraan');
        $this->db->where('tb_kendaraan.kode_opd',$opd);
        $this->db->where('year(tgl_pemeliharaan)',$tahun);
        return $this->db->get();
    }

    public function saveBarang($arr)
    {
       return $this->db->insert_batch('tb_pemeliharaan', $arr);
    }

    public function updatePem($post)
    {
        $params = [
            'tgl_pemeliharaan' => $post['tgl'],
            'jenis_pemeliharaan' => $post['jenis_pemeliharaan'],
            'satuan' => $post['satuan'],
            'harga' => $post['harga'],
            'qty' => $post['qty'],
            'total' => $post['total']
        ];
        $this->db->where('id_pemeliharaan', $post['id_pemeliharaan']);
        return $this->db->update('tb_pemeliharaan', $params);
    }

    public function delPem($id)
    {
        $this->db->where('id_pemeliharaan', $id);
        return $this->db->delete('tb_pemeliharaan');
    }
}