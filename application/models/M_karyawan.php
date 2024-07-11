<?php
class M_karyawan extends CI_Model
{
    public function tambah($data)
    {
        $this->db->insert('karyawan',$data);
    }

    public function getdata()
    {
        return $this->db->get('karyawan');
    }
    public function getdataid($id)
    {
        $this->db->where('id_karyawan',$id);
        return $this->db->get('karyawan');
    }
    public function edit($data,$id_karyawan)
    {
        $this->db->where('id_karyawan',$id_karyawan);
        $this->db->update('karyawan',$data);

    }
    public function hapus($id)
    {
        $this->db->where('id_karyawan',$id);
         $this->db->delete('karyawan');
    }

    
}
?>