<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

	public function admin($post)
	{
		$this->db->select();
        $this->db->from('tb_admin');
        $this->db->where('user', $post['email']);
        $this->db->where('pass', sha1($post['password']));
        $query = $this->db->get();
        return $query;
    }
    
	public function opd($post)
	{
		$this->db->select();
        $this->db->from('tb_opd');
        $this->db->where('kode_opd', $post['email']);
        $this->db->where('pass', $post['password']);
        $query = $this->db->get();
        return $query;
	}

    public function getUser()
    {
        $this->db->select('*');
        $this->db->from('tb_admin');

        $query = $this->db->get();
        return $query;

    }

    public function Pajak($id)
    {
        // $ip = $this->session->kode_opd;
        $this->db->select('*');
        $this->db->from('tb_pendataan');
        $this->db->join('tb_kendaraan', 'kd_kendaraan');
        $this->db->join('tb_opd', 'kode_opd');
        $this->db->where('tb_kendaraan.kode_opd', $id);
        $this->db->order_by('tgl_pajak','asc');
        $query = $this->db->get();
        return $query;
    }
    public function DaftarKenda($id)
    {
        // $ip = $this->session->kode_opd;
        $this->db->select('*');
        $this->db->from('tb_kendaraan');
        $this->db->join('tb_opd', 'kode_opd');
        $this->db->where('tb_kendaraan.kode_opd', $id);
        $this->db->order_by('tb_kendaraan.nama_opd','asc');
        $query = $this->db->get();
        return $query;
    }
}
