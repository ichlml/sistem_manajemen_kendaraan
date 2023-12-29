<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kendaraan extends CI_Model {

    public function getKendaraan($id = null)
    {
        $this->db->select('*');
        $this->db->from('tb_kendaraan');
        if($id != null){
            $this->db->where('kd_kendaraan', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function getNopol($nopol)
    {
        $this->db->select('nopol');
        $this->db->from('tb_kendaraan');
        $this->db->where('nopol', $nopol);
        return $this->db->get();
    }

    public function getdataNopol($nopol)
    {
        $this->db->select('nopol');
        $this->db->from('tb_pendataan');
        $this->db->where('nopol', $nopol);
        return $this->db->get();
    }

    public function addKendaraan($post)
    {
        $params = array(
            'nopol' => $post['nopol'],
            'nama_kendaraan' => $post['nama_kendaraan'],
            'kode_opd' => $post['kode_opd'],
            'nama_opd' => $post['nama_opd'],
            'jenis' => $post['jenis'],
            'no_penyimpanan' => $post['no_penyimpanan'],
            'merk' => $post['merk'],
            'type' => $post['type'],
            'cc' => $post['cc'],
            'tgl_perolehan' => $post['tgl_perolehan'],
            'no_rangka' => $post['no_rangka'],
            'no_mesin' => $post['no_mesin'],
            'no_bpkb' => $post['no_bpkb'],
            'harga' => $post['harga'],
            'idpemda' => $post['idpemda']
        );
        $this->db->insert('tb_kendaraan', $params);
    }

    public function editKendaraan($post)
    {
        $params = array(
            'nopol' => $post['nopol'],
            'nama_kendaraan' => $post['nama_kendaraan'],
            'jenis' => $post['jenis'],
            'kode_opd' => $post['kode_opd'],
            'nama_opd' => $post['nama_opd'],
            'no_penyimpanan' => $post['no_penyimpanan'],
            'merk' => $post['merk'],
            'type' => $post['type'],
            'cc' => $post['cc'],
            'tgl_perolehan' => $post['tgl_perolehan'],
            'no_rangka' => $post['no_rangka'],
            'no_mesin' => $post['no_mesin'],
            'no_bpkb' => $post['no_bpkb'],
            'harga' => $post['harga'],
            'idpemda' => $post['idpemda']
        );
        $this->db->where('kd_kendaraan', $post['id']);
        $this->db->update('tb_kendaraan', $params);
    }
    public function del($id)
    {
        $this->db->where('kd_kendaraan', $id);
        $this->db->delete('tb_kendaraan');
    }

    public function getAllKendaraan($id = null)
    {
        $this->db->select('*');
        $this->db->from('tb_kendaraan');
        $this->db->where('kd_kendaraan', $id);
        $this->db->limit(1);
        return $this->db->get();
    }

    public function getPendataan($id = null)
    {
        $this->db->select('*');
        $this->db->from('tb_pendataan');
        $this->db->join('tb_kendaraan', 'kd_kendaraan');
        $this->db->join('tb_opd', 'kode_opd');
        if($id != null){
            $this->db->where('id_pendataan', $id);
        }
        $query = $this->db->get();
        return $query;
    }

   function getNamaKendaraan($keyword = null)
    {
        $this->db->select('*');
        $this->db->like('nopol', $keyword);
        $this->db->order_by('kd_kendaraan', 'asc');
        $this->db->limit(5);
        return $this->db->get('tb_kendaraan')->result();
    }

    public function getDetail($id = null)
    {
        $this->db->select('*');
        $this->db->from('tb_kendaraan');
        $this->db->where('nopol', $id);
        return $this->db->get();
        // return $query;
    }

    

    public function getNamaOpd($keyword = null)
    {
        $this->db->select('*');
        $this->db->like('nama_opd', $keyword);
        $this->db->order_by('kode_opd', 'asc');
        $this->db->limit(5);
        return $this->db->get('tb_opd')->result();
    }

    public function getOPD($id = null)
    {
        $this->db->select('*');
        $this->db->from('tb_opd');
        $this->db->where('nama_opd', $id);
        return $this->db->get();
    }

    public function addPendataan($post)
    {
        $params = array(
            'kd_kendaraan' => $post['kd_kendaraan'],
            'nopol' => $post['nopol'],
            // 'kode_opd' => $post['kode_opd'],
            'jabatan_peminjam' => $post['jabatan_peminjam'],
            'status_penggunaan' => $post['stts_penggunaan'],
            'kondisi' => $post['kondisi'],
            'no_ba_pinjam' => $post['no_ba'],
            'nama_peminjam' => $post['nama_peminjam'],
            'nip_pemakai' => $post['nip_pemakai'],
            'tgl_pajak' => $post['tgl_pajak'],
            'tgl_pinjam' => $post['tgl_pinjam']
        );
            
        $this->db->insert('tb_pendataan', $params);
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

    public function delPenda($id)
    {
        $this->db->where('id_pendataan', $id);
        $this->db->delete('tb_pendataan');
    }

    public function countKend()
    {
        $this->db->select("nopol");
        $this->db->from("tb_kendaraan");
        return $this->db->count_all_results();
    }

    public function countopd()
    {
        $this->db->select("nama_opd");
        $this->db->from("tb_opd");
        return $this->db->count_all_results();
    }

    public function countdata()
    {
        $this->db->select("id_pendataan");
        $this->db->from("tb_pendataan");
        return $this->db->count_all_results();
    }

    public function countuser()
    {
        $this->db->select("nip");
        $this->db->from("tb_admin");
        return $this->db->count_all_results();
    }

    function getNopolPenda($keyword = null)
    {
        $this->db->select('*');
        $this->db->like('nopol', $keyword);
        $this->db->order_by('id_pendataan', 'asc');
        $this->db->limit(5);
        return $this->db->get('tb_pendataan')->result();
    }

    public function getDetailPenda($id = null)
    {
        $this->db->select('*');
        $this->db->from('tb_kendaraan');
        $this->db->join('tb_pendataan', 'kd_kendaraan');
        $this->db->join('tb_opd', 'kode_opd');
        $this->db->where('tb_kendaraan.nopol', $id);
        $query = $this->db->get();
        return $query;
    }
}