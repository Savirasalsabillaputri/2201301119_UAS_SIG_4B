<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class Alfamart extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->model('M_alfa');
    }

	public function index()
	{
		$data['data']=$this->M_alfa->getdata()->result();
		// var_dump($data);exit;

		$this->load->view('t_admin/header'); 
		$this->load->view('t_admin/nav');
		$this->load->view('alfamart',$data);
		$this->load->view('t_admin/footer',$data);
	}
	public function peta()
	{
		$data['data']=$this->M_alfa->getdata()->result();
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
		$this->load->view('tambah_alfa');
		$this->load->view('t_admin/footer');
	}

	public function proses_tambah_data()
	{
		$id_alfa = $this->input->post('id_alfa');
		$nama_alfa = $this->input->post('nama_alfa');
		$alamat = $this->input->post('alamat');
		$lat = $this->input->post('lat');
		$lng = $this->input->post('lng');

		$nama_file = $_FILES['foto']['name'];
		$tmp_file = $_FILES['foto']['tmp_name'];
		$path = "./file/".$nama_file;
		move_uploaded_file($tmp_file, $path);

		$data = array(
			'id_alfa' => $id_alfa,
			'nama_alfa' => $nama_alfa,
			'alamat' => $alamat,
			'lat' => $lat,
			'lng' => $lng,
			'foto' => $nama_file
		);

		$this->M_alfa->tambah($data);
		redirect('alfamart');
	}

	public function edit($id_alfa)
	{
		$data['data'] = $this->M_alfa->getdataid($id_alfa)->row();

		$this->load->view('t_admin/header');
		$this->load->view('t_admin/nav');
		$this->load->view('edit_alfa', $data);
		$this->load->view('t_admin/footer');
	}

	public function proses_edit_data()
	{
		$id_alfa = $this->input->post('id_alfa');
		$nama_alfa = $this->input->post('nama_alfa');
		$alamat = $this->input->post('alamat');
		$lat = $this->input->post('lat');
		$lng = $this->input->post('lng');

		$data = array(
			'nama_alfa' => $nama_alfa,
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

		$this->M_alfa->edit($data, $id_alfa);
		redirect('alfamart');
	}

	public function hapus($id)
	{
		$this->M_alfa->hapus($id);
		redirect('alfamart');


	}

}