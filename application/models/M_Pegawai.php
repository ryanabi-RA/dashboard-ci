<?php

class M_pegawai extends CI_Model
{
    public function data_pegawai()
    {
        return $this->db->get('pegawai')->result();
    }

    public function tambah_pegawai($data)
    {
        return $this->db->insert('pegawai', $data);
    }

    public function detail_pegawai($id_pegawai)
    {
        return $this->db->get_where('pegawai', array('id_pegawai' => $id_pegawai))->row();
    }

    public function update_pegawai($data, $where)
    {
		$this->db->where($where);
		return $this->db->update('pegawai', $data);
    }

    public function delete_pegawai($id_pegawai)
    {
        $this->db->where(array('id_pegawai' => $id_pegawai));
		return $this->db->delete('pegawai');
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('pegawai');
        $this->db->like('nama', $keyword);
        $this->db->or_like('nip', $keyword);
        $this->db->or_like('tgl_lahir', $keyword);
        $this->db->or_like('alamat', $keyword);
        $this->db->or_like('no_telp', $keyword);
        $this->db->order_by('nama');
        return $this->db->get()->result();
    }

    public function Jumlah_alamat_pegawai(){
        $this->db->group_by('alamat');
        $this->db->select('alamat');
        $this->db->select("count(*) as total");
        return $this->db->from('pegawai')->get()->result();
    }

    public function total_pegawai()
    {
        return $this->db->get('pegawai')->num_rows();
    }
}
