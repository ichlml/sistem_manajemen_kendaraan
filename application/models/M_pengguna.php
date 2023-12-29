<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengguna extends CI_Model {
    public function getPendataan()
    {
        $id = $this->session->kode_opd;
        $this->db->select('*');
        $this->db->from('tb_pendataan');
        $this->db->join('tb_kendaraan', 'kd_kendaraan');
        $this->db->join('tb_opd', 'kode_opd');
        $this->db->where('tb_kendaraan.kode_opd', $id);
        $query = $this->db->get();
        return $query;
    }

    public function getPenda($id = null)
    {
        $this->db->select('*');
        $this->db->from('tb_kendaraan');
        $this->db->join('tb_pendataan', 'kd_kendaraan');
        $this->db->join('tb_opd', 'kode_opd');
        if($id != null){
            $this->db->where('id_pendataan', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function editPendataan()
    {
        $param = array(
            'status_penggunaan' => $this->input->post('stts_penggunaan'),
            'kondisi' => $this->input->post('kondisi'),
            'no_ba_pinjam' => $this->input->post('no_ba'),
            'nama_peminjam' => $this->input->post('nama_peminjam'),
            'nip_pemakai' => $this->input->post('nip_pemakai'),
            'jabatan_peminjam' => $this->input->post('jabatan_peminjam'),
            'tgl_pajak' => $this->input->post('tgl_pajak'),
            'tgl_pinjam' => $this->input->post('tgl_pinjam')
        );
        $this->db->where('id_pendataan', $this->input->post('id'));
        return $this->db->update('tb_pendataan', $param);
    }

    function getDatanopol($keyword = null)
    {
        $id = $this->session->kode_opd;
        $this->db->select('*');
        $this->db->from('tb_kendaraan');
        $this->db->join('tb_opd', 'kode_opd');
        $this->db->where('tb_kendaraan.kode_opd', $id);
        $this->db->like('nopol', $keyword);
        $this->db->order_by('nopol', 'asc');
        $this->db->limit(5);
        return $this->db->get('')->result();
    }

    public function cetak($id = null)
    {
        $this->db->select('*');
        $this->db->from('tb_kendaraan');
        $this->db->join('tb_pendataan', 'kd_kendaraan');
        $this->db->join('tb_opd', 'kode_opd');
        if($id != null){
            $this->db->where('tb_pendataan.nopol', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function TampilPengelola($id = null)
    {
        $this->db->select('*');
        $this->db->from('tb_pengelola');
        if($id != null){
            $this->db->where('id_pengelola', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function Pajak($id)
    {
        $ip = $this->session->kode_opd;
        $this->db->select('*');
        $this->db->from('tb_pendataan');
        $this->db->join('tb_kendaraan', 'kd_kendaraan');
        $this->db->join('tb_opd', 'kode_opd');
        $this->db->where('tb_kendaraan.kode_opd', $ip);
        $this->db->where('MONTH(tb_pendataan.tgl_pajak)', $id);
        $query = $this->db->get();
        return $query;
    }

    public function lapkeda()
    {
        $id = $this->session->kode_opd;
        $this->db->select('*');
        $this->db->from('tb_pendataan');
        $this->db->join('tb_kendaraan', 'kd_kendaraan');
        $this->db->join('tb_opd', 'kode_opd');
        $this->db->where('tb_kendaraan.kode_opd', $id);
        // $this->db->limit(5);
        return $this->db->get();
    }

    public function lapkedaopd($id)
    {
        
        $this->db->select('*');
        $this->db->from('tb_pendataan');
        $this->db->join('tb_kendaraan', 'kd_kendaraan');
        $this->db->join('tb_opd', 'kode_opd');
        $this->db->where('tb_kendaraan.kode_opd', $id);
        return $this->db->get();
    }

    // Dashboard Pengguna
    public function countOrang()
    {
        $this->db->select("id_pendataan");
        $this->db->from("tb_pendataan");
        $this->db->where("status_penggunaan","Perorangan");
        return $this->db->count_all_results();
    }
    public function countJabatan()
    {
        $this->db->select("id_pendataan");
        $this->db->from("tb_pendataan");
        $this->db->where("status_penggunaan","Jabatan");
        return $this->db->count_all_results();
    }
    public function countOperasional()
    {
        $this->db->select("id_pendataan");
        $this->db->from("tb_pendataan");
        $this->db->where("status_penggunaan","Operasional");
        return $this->db->count_all_results();
    }
    public function countPinjam()
    {
        $this->db->select("id_pendataan");
        $this->db->from("tb_pendataan");
        $this->db->where("status_penggunaan","Pinjam Paki");
        return $this->db->count_all_results();
    }

    public function countMotor()
    {
        $this->db->select("kd_kendaraan");
        $this->db->from("tb_kendaraan");
        $this->db->where("jenis","Motor");
        return $this->db->count_all_results();
    }
    public function countMobil()
    {
        $this->db->select("kd_kendaraan");
        $this->db->from("tb_kendaraan");
        $this->db->where("jenis","Mobil");
        return $this->db->count_all_results();
    }
    public function countRansus()
    {
        $this->db->select("kd_kendaraan");
        $this->db->from("tb_kendaraan");
        $this->db->where("jenis","Ransus");
        return $this->db->count_all_results();
    }
}