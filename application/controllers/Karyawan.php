<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->model('M_karyawan');
    }

	public function index()
	{
		$data['data']=$this->M_karyawan->getdata()->result();
		
		$this->load->view('t_admin/header');
		$this->load->view('t_admin/nav');
		$this->load->view('karyawan',$data);
		$this->load->view('t_admin/footer');
	}

	public function dashboard()
	{
		$data['obat']=$this->db->get('obat')->num_rows();
		$data['karyawan']=$this->db->get('karyawan')->num_rows();

		$this->load->view('t_admin/header');
		$this->load->view('t_admin/nav');
		$this->load->view('dashboard',$data);
		$this->load->view('t_admin/footer');
	}
	public function tambah()
	{
		
		$this->load->view('t_admin/header');
		$this->load->view('t_admin/nav');
		$this->load->view('tambah_karyawan');
		$this->load->view('t_admin/footer');
	}
	public function proses_tambah_karyawan()
	{
		
		$nama_karyawan=$_POST['nama_karyawan'];
		$tgl_lahir=$_POST['tgl_lahir'];
		$no_hp=$_POST['no_hp'];
		$alamat=$_POST['alamat'];
		
		$nama_file = $_FILES['foto']['name'];
		$tmp_file = $_FILES['foto']['tmp_name'];

		$username=$_POST['username'];
		$password=md5($_POST['password']);
		$level = $_POST['level'];
	
		$path = "./file/".$nama_file;
		move_uploaded_file($tmp_file, $path);

		$login=array(
			'username' =>$username,
			'password' =>$password,
			'level'=> $level,

		);
		$this->db->insert('login',$login);
		$id_user=$this->db->insert_id();
		$data=array(
			'nama_karyawan' =>$nama_karyawan,
			'tgl_lahir' =>$tgl_lahir,
			'no_hp' =>$no_hp,
			'alamat' =>$alamat,
			'foto' =>$nama_file,
			'id_login'=>$id_user
		);
		// var_dump($data);exit;
		$this->M_karyawan->tambah($data);
		redirect('karyawan');


	}
	public function edit($id)
	{
		$data['data']=$this->M_karyawan->getdataid($id)->row();

		$this->load->view('t_admin/header');
		$this->load->view('t_admin/nav');
		$this->load->view('edit_karyawan',$data);
		$this->load->view('t_admin/footer');
	}

	public function proses_edit_karyawan()
	{
		
		$id_karyawan=$_POST['id_karyawan'];
		$nama_karyawan=$_POST['nama_karyawan'];
		$tgl_lahir=$_POST['tgl_lahir'];
		$no_hp=$_POST['no_hp'];
		$alamat=$_POST['alamat'];

		$nama_file = $_FILES['foto']['name'];
		$tmp_file = $_FILES['foto']['tmp_name'];
	
		$path = "./file/".$nama_file;
		move_uploaded_file($tmp_file, $path);
		$data=array(
			'nama_karyawan' =>$nama_karyawan,
			'tgl_lahir' =>$tgl_lahir,
			'no_hp' =>$no_hp,
			'alamat' =>$alamat,
			'foto' =>$nama_file,
		);
		$this->M_karyawan->edit($data,$id_karyawan);
		redirect('karyawan');
	}
	

	public function hapus($id)
	{
		$this->M_karyawan->hapus($id);
		redirect('karyawan');


	}

}