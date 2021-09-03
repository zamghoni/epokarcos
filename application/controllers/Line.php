<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Line extends CI_Controller
{
	private $view  			= "backend/v_line/";
	private $redirect 	= "line";

	public function __construct()
	{
		parent::__construct();
		//Load model

		$this->load->model('M_line');
		IsAdmin();
	}

	public function index()
	{
		if ($this->input->get('search'))
		{
			$read = $this->M_line->search($this->input->get('search'));
		}

		else
		{
			$read = $this->M_line->GetAll();
		}

		$data = array(
			'judul'	=> "DATA line",
			'sub'	=> "Lihat line",
			'read'=> $read
		);

	$this->template->load('backend/template',$this->view.'read', $data);
	}

	public function create()
	{
		$data = array(
			'judul'	=> "DATA line",
			'sub'	=> "Tambah line",
			'create' 	=> ''
		);
	$this->template->load('backend/template',$this->view.'create', $data);
	}

	public function save()
	{
		$data = array(
			'kode_line'=> $this->input->post('kode_line'),
			'nama_line'=> $this->input->post('nama_line')
		);
		$this->M_line->save($data);
		redirect($this->redirect,'refresh');
		}

	public function edit()
	{
		$kl   = $this->uri->segment(3);
		$data = array(
			'judul'	=> "DATA line",
			'sub'	=> "Ubah line",
			'edit' 	=> $this->M_line->edit($kl)
		);
	$this->template->load('backend/template',$this->view.'edit', $data);
	}

	public function update()
	{
		$kl = $this->uri->segment(3);
		$data = array(
			'kode_line' => $this->input->post('kode_line'),
			'nama_line' => $this->input->post('nama_line')
			);

			$this->M_line->update($kl,$data);
			redirect($this->redirect,'refresh');
	}

	public function delete()
	{
		$kl = $this->uri->segment(3);
		$data = array(
		'kode_line' => $kl
		);

	$this->M_line->delete($data);
	redirect($this->redirect,'refresh');
	}

}
