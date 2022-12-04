<?php

class M_Pegawai extends CI_Model
{
    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('pegawai');
        $this->db->like('nama', $keyword);
        $this->db->or_like('nip', $keyword);
        $this->db->or_like('tgl_lahir', $keyword);
        $this->db->or_like('alamat', $keyword);
        $this->db->or_like('no_telp', $keyword);
        return $this->db->get()->result();
    }
}
