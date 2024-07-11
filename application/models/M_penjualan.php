<?php
class M_Penjualan extends CI_Model
{
    public function getdata()
    {
        
        if ($this->session->userdata('level')=='admin') {
            
        return $this->db->query("SELECT p.id_penjualan, p.*, l.*, t.* 
        FROM penjualan p 
        LEFT JOIN login l ON p.id_akun = l.id 
        LEFT JOIN transaksi t ON p.id_penjualan = t.id_penjualan 
        WHERE t.id_penjualan != 'null' 
        GROUP BY p.id_penjualan, p.id_akun, l.id, t.id_transaksi;
        ");
        }else{
            $id_user=$this->session->userdata('id_user');
            return $this->db->query("SELECT p.id_penjualan, p.*, l.*, t.* 
            FROM penjualan p 
            LEFT JOIN login l ON p.id_akun = l.id 
            LEFT JOIN transaksi t ON p.id_penjualan = t.id_penjualan 
            WHERE t.id_penjualan != 'null' and p.id_akun='$id_user'
            GROUP BY p.id_penjualan, p.id_akun, l.id, t.id_transaksi;
            ");
        }
    }
    public function getdataall()
    {
        return $this->db->query("SELECT * FROM penjualan p left join transaksi t on p.id_penjualan=t.id_penjualan left join obat o on o.id_obat=t.id_obat");
    }
    public function getdataallbydate($tanggal_awal, $tanggal_akhir)
    {
        return $this->db->query("SELECT * FROM penjualan p left join transaksi t on p.id_penjualan=t.id_penjualan left join obat o on o.id_obat=t.id_obat where p.tgl_penjualan >= '$tanggal_awal 00:00:00' && p.tgl_penjualan <= '$tanggal_akhir 00:00:00'");
    }
    public function getdatadetail($id)
    {
        return $this->db->query("SELECT * FROM penjualan p left join transaksi t on p.id_penjualan=t.id_penjualan left join obat o on o.id_obat=t.id_obat where p.id_penjualan='$id'");
    }
    public function tambah($data)
    {
        $this->db->insert('penjualan',$data);
    }
    public function hapus_penjualan($id_transaksi)
    {
        // Hapus transaksi terkait
        $this->db->where('id_penjualan', $id_transaksi);
        $this->db->delete('penjualan');

        // Hapus penjualan
        $this->db->where('id_penjualan', $id_transaksi);
        $this->db->delete('transaksi');
    }
 
    public function hapus_penjualan_detail($id_transaksi)
    {
        

        // Hapus penjualan
        $this->db->where('id_transaksi', $id_transaksi);
        $this->db->delete('transaksi');
    }
}