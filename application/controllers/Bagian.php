<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bagian extends CI_Controller
{
	private $view  			= "backend/v_bagian/";
	private $redirect 	= "bagian";

	public function __construct()
	{
		parent::__construct();
		//Load model

		$this->load->model('M_bagian');
		IsAdmin();
	}

	public function index()
	{
		if ($this->input->get('search'))
		{
			$read = $this->M_bagian->search($this->input->get('search'));
		}

		else
		{
			$read = $this->M_bagian->GetAll();
		}

		$data = array(
			'judul'	=> "DATA bagian",
			'sub'	=> "Lihat bagian",
			'read'=> $read
		);

	$this->template->load('backend/template',$this->view.'read', $data);
	}

	public function create()
	{
		$data = array(
			'judul'	=> "DATA bagian",
			'sub'	=> "Tambah bagian",
			'create' 	=> ''
		);
	$this->template->load('backend/template',$this->view.'create', $data);
	}

	public function save()
	{
		$data = array(
			'kode_bagian'=> $this->input->post('kode_bagian'),
			'nama_bagian'=> $this->input->post('nama_bagian')
		);
		$this->M_bagian->save($data);
		redirect($this->redirect,'refresh');
		}

	public function edit()
	{
		$kb   = $this->uri->segment(3);
		$data = array(
			'judul'	=> "DATA bagian",
			'sub'	=> "Ubah bagian",
			'edit' 	=> $this->M_bagian->edit($kb)
		);
	$this->template->load('backend/template',$this->view.'edit', $data);
	}

	public function update()
	{
		$kb = $this->uri->segment(3);
		$data = array(
			'kode_bagian' => $this->input->post('kode_bagian'),
			'nama_bagian' => $this->input->post('nama_bagian')
			);

			$this->M_bagian->update($kb,$data);
			redirect($this->redirect,'refresh');
	}

	public function delete()
	{
		$kb = $this->uri->segment(3);
		$data = array(
		'kode_bagian' => $kb
		);

	$this->M_bagian->delete($data);
	redirect($this->redirect,'refresh');
	}

}
