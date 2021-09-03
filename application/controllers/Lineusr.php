<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lineusr extends CI_Controller
{
	private $view  			= "frontend/v_lineusr/";
	private $redirect 	= "lineusr";

	public function __construct()
	{
		parent::__construct();
		//Load model

		$this->load->model('M_lineusr');
		IsHr();


	}

	public function index()
	{
		if ($this->input->get('search'))
		{
			$read = $this->M_lineusr->search($this->input->get('search'));
		}

		else
		{
			$read = $this->M_lineusr->GetAll();
		}

		$data = array(
			'judul'	=> "DATA line",
			'sub'	=> "Lihat line",
			'read'=> $read
		);

	$this->template->load('frontend/template',$this->view.'read', $data);
	}

	public function create()
	{
		$data = array(
			'judul'	=> "DATA line",
			'sub'	=> "Tambah line",
			'create' 	=> ''
		);
	$this->template->load('frontend/template',$this->view.'create', $data);
	}

	public function save()
	{
		$data = array(
			'kode_line'=> $this->input->post('kode_line'),
			'nama_line'=> $this->input->post('nama_line')
		);
		$this->M_lineusr->save($data);
		redirect($this->redirect,'refresh');
		}

	public function edit()
	{
		$klu   = $this->uri->segment(3);
		$data = array(
			'judul'	=> "DATA line",
			'sub'	=> "Ubah line",
			'edit' 	=> $this->M_lineusr->edit($klu)
		);
	$this->template->load('frontend/template',$this->view.'edit', $data);
	}

	public function update()
	{
		$klu = $this->uri->segment(3);
		$data = array(
			'kode_line' => $this->input->post('kode_line'),
			'nama_line' => $this->input->post('nama_line')
			);

			$this->M_lineusr->update($klu,$data);
			redirect($this->redirect,'refresh');
	}

	public function delete()
	{
		$klu = $this->uri->segment(3);
		$data = array(
		'kode_line' => $klu
		);

	$this->M_lineusr->delete($data);
	redirect($this->redirect,'refresh');
	}

}
