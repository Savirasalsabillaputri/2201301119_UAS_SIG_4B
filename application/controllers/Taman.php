<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class Taman extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->model('TamanModel');
    }

	public function index()
	{
		$data['data']=$this->TamanModel->getdata()->result();
		// var_dump($data);exit;

		$this->load->view('t_admin/header'); 
		$this->load->view('t_admin/nav');
		$this->load->view('taman',$data);
		$this->load->view('t_admin/footer',$data);
	}
	public function peta()
	{
		$data['data']=$this->TamanModel->getdata()->result();
		// var_dump($data);exit;

		$this->load->view('t_admin/header'); 
		$this->load->view('t_admin/nav');
		$this->load->view('peta',$data);
		$this->load->view('t_admin/footer',$data);
	}

	public function tambah()
	{
		
		$this->load->view('t_admin/header');
		$this->load->view('t_admin/nav');
		$this->load->view('tambah_taman');
		$this->load->view('t_admin/footer');
	}

	public function proses_tambah_data()
	{
		$id_taman = $this->input->post('id_taman');
		$nama_taman = $this->input->post('nama_taman');
		$alamat = $this->input->post('alamat');
		$lat = $this->input->post('lat');
		$lng = $this->input->post('lng');

		$nama_file = $_FILES['foto']['name'];
		$tmp_file = $_FILES['foto']['tmp_name'];
		$path = "./file/".$nama_file;
		move_uploaded_file($tmp_file, $path);

		$data = array(
			'id_taman' => $id_taman,
			'nama_taman' => $nama_taman,
			'alamat' => $alamat,
			'lat' => $lat,
			'lng' => $lng,
			'foto' => $nama_file
		);

		$this->TamanModel->tambah($data);
		redirect('taman');
	}

	public function edit($id_taman)
	{
		$data['data'] = $this->TamanModel->getdataid($id_taman)->row();

		$this->load->view('t_admin/header');
		$this->load->view('t_admin/nav');
		$this->load->view('edit_taman', $data);
		$this->load->view('t_admin/footer');
	}

	public function proses_edit_data()
	{
		$id_taman = $this->input->post('id_taman');
		$nama_taman = $this->input->post('nama_taman');
		$alamat = $this->input->post('alamat');
		$lat = $this->input->post('lat');
		$lng = $this->input->post('lng');

		$data = array(
			'nama_taman' => $nama_taman,
			'alamat' => $alamat,
			'lat' => $lat,
			'lng' => $lng
		);

		if (!empty($_FILES['foto']['name'])) {
			$nama_file = $_FILES['foto']['name'];
			$tmp_file = $_FILES['foto']['tmp_name'];
			$path = "./file/".$nama_file;
			move_uploaded_file($tmp_file, $path);
			$data['foto'] = $nama_file;
		}

		$this->TamanModel->edit($data, $id_taman);
		redirect('taman');
	}

	public function hapus($id)
	{
		$this->TamanModel->hapus($id);
		redirect('taman');


	}

}