<?php
class TamanModel extends CI_Model
{
    public function tambah($data)
    {
        $this->db->insert('taman',$data);
    }

    public function getdata()
    {
        return $this->db->get('taman');
    }
    public function getdataid($id)
    {
        $this->db->where('id_taman',$id);
        return $this->db->get('taman');
    }
    public function edit($data,$id_taman)
    {
        $this->db->where('id_taman',$id_taman);
        $this->db->update('taman',$data);

    }
    public function hapus($id)
    {
        $this->db->where('id_taman',$id);
         $this->db->delete('taman');
    }
    
}
?>