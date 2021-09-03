<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Status extends CI_Controller
{
	private $view  			= "backend/v_status/";
	private $redirect 	= "status";

	public function __construct()
	{
		parent::__construct();
		//Load model

		$this->load->model('M_status');
		IsAdmin();
	}

	public function index()
	{
		if ($this->input->get('search'))
		{
			$read = $this->M_status->search($this->input->get('search'));
		}

		else
		{
			$read = $this->M_status->GetAll();
		}

		$data = array(
			'judul'	=> "DATA status",
			'sub'	=> "Lihat status",
			'read'=> $read
		);

	$this->template->load('backend/template',$this->view.'read', $data);
	}

	public function create()
	{
		$data = array(
			'judul'	=> "DATA status",
			'sub'	=> "Tambah status",
			'create' 	=> ''
		);
	$this->template->load('backend/template',$this->view.'create', $data);
	}

	public function save()
	{
		$data = array(
			'kode_status'=> $this->input->post('kode_status'),
			'nama_status'=> $this->input->post('nama_status')
		);
		$this->M_status->save($data);
		redirect($this->redirect,'refresh');
		}

	public function edit()
	{
		$st   = $this->uri->segment(3);
		$data = array(
			'judul'	=> "DATA status",
			'sub'	=> "Ubah status",
			'edit' 	=> $this->M_status->edit($st)
		);
	$this->template->load('backend/template',$this->view.'edit', $data);
	}

	public function update()
	{
		$st = $this->uri->segment(3);
		$data = array(
			'kode_status' => $this->input->post('kode_status'),
			'nama_status' => $this->input->post('nama_status')
			);

			$this->M_status->update($st,$data);
			redirect($this->redirect,'refresh');
	}

	public function delete()
	{
		$st = $this->uri->segment(3);
		$data = array(
		'kode_status' => $st
		);

	$this->M_status->delete($data);
	redirect($this->redirect,'refresh');
	}

}
