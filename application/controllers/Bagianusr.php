<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bagianusr extends CI_Controller
{
	private $view  			= "frontend/v_bagianusr/";
	private $redirect 	= "bagianusr";

	public function __construct()
	{
		parent::__construct();
		//Load model

		$this->load->model('M_bagianusr');
		IsHr();


	}

	public function index()
	{
		if ($this->input->get('search'))
		{
			$read = $this->M_bagianusr->search($this->input->get('search'));
		}

		else
		{
			$read = $this->M_bagianusr->GetAll();
		}

		$data = array(
			'judul'	=> "DATA Bagian",
			'sub'	=> "Lihat Bagian",
			'read'=> $read
		);

	$this->template->load('frontend/template',$this->view.'read', $data);
	}

	public function create()
	{
		$data = array(
			'judul'	=> "DATA Bagian",
			'sub'	=> "Tambah Bagian",
			'create' 	=> ''
		);
	$this->template->load('frontend/template',$this->view.'create', $data);
	}

	public function save()
	{
		$data = array(
			'kode_bagian'=> $this->input->post('kode_bagian'),
			'nama_bagian'=> $this->input->post('nama_bagian')
		);
		$this->M_bagianusr->save($data);
		redirect($this->redirect,'refresh');
		}

	public function edit()
	{
		$kbu   = $this->uri->segment(3);
		$data = array(
			'judul'	=> "DATA Bagian",
			'sub'	=> "Ubah Bagian",
			'edit' 	=> $this->M_bagianusr->edit($kbu)
		);
	$this->template->load('frontend/template',$this->view.'edit', $data);
	}

	public function update()
	{
		$kbu = $this->uri->segment(3);
		$data = array(
			'kode_bagian' => $this->input->post('kode_bagian'),
			'nama_bagian' => $this->input->post('nama_bagian')
			);

			$this->M_bagianusr->update($kbu,$data);
			redirect($this->redirect,'refresh');
	}

	public function delete()
	{
		$kbu = $this->uri->segment(3);
		$data = array(
		'kode_bagian' => $kbu
		);

	$this->M_bagianusr->delete($data);
	redirect($this->redirect,'refresh');
	}

}
