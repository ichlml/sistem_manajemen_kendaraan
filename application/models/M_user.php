<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

    public function getAdmin($id = null)
    {
        $this->db->select('*');
        $this->db->from('tb_admin');
        if($id != null){
            $this->db->where('id_admin', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function getNip($uname)
    {
        $this->db->select('nip');
        $this->db->from('tb_admin');
        $this->db->where('nip', $uname);
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = array(
            'nip' => $post['nip'],
            'nama_admin' => $post['nama'],
            'jkel' => $post['jkel'],
            'alamat' => $post['alamat'],
            'user' => $post['user'],
            'pass' => sha1($post['pass'])
        );
        $this->db->insert('tb_admin', $params);
    }

    public function edit($post)
    {
        $params = array(
            'nip' => $post['nip'],
            'nama_admin' => $post['nama'],
            'jkel' => $post['jkel'],
            'alamat' => $post['alamat'],
            'user' => $post['user'],
            'pass' => sha1($post['pass'])
        );
        $this->db->where('id_admin', $post['id']);
        $this->db->update('tb_admin', $params);
    }

    public function del($id)
    {
        $this->db->where('id_admin', $id);
        $this->db->delete('tb_admin');
    }

    public function getKopd($unopd)
    {
        $this->db->select('kode_opd');
        $this->db->from('tb_opd');
        $this->db->where('kode_opd', $unopd);
        $query = $this->db->get();
        return $query;
    }

    public function getOpd($id = null)
    {
        $this->db->select('*');
        $this->db->from('tb_opd');
        if($id != null){
            $this->db->where('kode_opd', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function addOpd($post)
    {
        $params = array(
            'kode_opd' => $post['kode_opd'],
            'nama_opd' => $post['nama_opd'],
            'pimpinan' => $post['pimpinan'],
            'nip_opd' => $post['nip_opd'],
            'jabatan' => $post['jabatan'],
            'pass' => $post['pass']
        );

        $this->db->insert('tb_opd', $params);
    }
    
    public function editOpd($post)
    {
        $params = array(
            'kode_opd' => $post['kode_opd'],
            'nama_opd' => $post['nama_opd'],
            'pimpinan' => $post['pimpinan'],
            'jabatan' => $post['jabatan'],
            'pass' => $post['pass']
        );
        $this->db->where('kode_opd', $post['kode_opd']);
        $this->db->update('tb_opd', $params);
    }

    public function editPengelola($post)
    {
        $params = array(
            'nama_opd' => $post['nama_opd'],
            'nama_pengelola' => $post['nama_pengelola'],
            'nip_pegelola' => $post['nip_pengelola'],
            'pimpinan' => $post['pimpinan'],
            'jabatan' => $post['jabatan']
        );
        $this->db->where('id_pengelola', $post['id_pengelola']);
        $this->db->update('tb_pengelola', $params);
    }

    public function delOpd($id)
    {
        $this->db->where('kode_opd', $id);
        $this->db->delete('tb_opd');
    }
}