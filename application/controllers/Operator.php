<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Operator extends CI_Controller
{
	private $view  			= "backend/v_operator/";
	private $redirect 	= "operator";

	public function __construct()
	{
		parent::__construct();
		//Load model

		$this->load->model('M_operator');
    $this->load->model('M_bagian');
    $this->load->model('M_line');
		IsAdmin();
	}

	public function index()
	{
		if ($this->input->get('search'))
		{
			$read = $this->M_operator->search($this->input->get('search'));
		}

		else
		{
			$read = $this->M_operator->GetAll();
		}

		$data = array(
			'judul'	=> "DATA operator",
			'sub'	=> "Lihat operator",
			'read'=> $read
		);

	$this->template->load('backend/template',$this->view.'read', $data);
	}

	public function create()
	{
		$data = array(
			'judul'	=> "DATA operator",
			'sub'	=> "Tambah operator",
      'bagian' => $this->M_bagian->GetAll(),
      'line' => $this->M_line->GetAll(),
			'create' 	=> ''
		);
	$this->template->load('backend/template',$this->view.'create', $data);
	}

	public function save()
	{
		$data = array(
			'nip'=> $this->input->post('nip'),
      'nama'=>$this->input->post('nama'),
      'kode_bagian'=>$this->input->post('kode_bagian'),
      'kode_line'=>$this->input->post('kode_line'),
      'nik'=>$this->input->post('nik'),
      'telepon'=>$this->input->post('telepon'),
      'pendidikan'=>$this->input->post('pendidikan'),
      'alamat'=>$this->input->post('alamat')
		);
		$this->M_operator->save($data);
		redirect($this->redirect,'refresh');
		}

	public function edit()
	{
		$op   = $this->uri->segment(3);
		$data = array(
			'judul'	=> "DATA operator",
			'sub'	=> "Ubah operator",
			'edit' 	=> $this->M_operator->edit($op)
		);
	$this->template->load('backend/template',$this->view.'edit', $data);
	}

	public function update()
	{
		$op = $this->uri->segment(3);
		$data = array(
      'nip'=> $this->input->post('nip'),
      'nama'=>$this->input->post('nama'),
      'kode_bagian'=>$this->input->post('kode_bagian'),
      'kode_line'=>$this->input->post('kode_line'),
      'nik'=>$this->input->post('nik'),
      'telepon'=>$this->input->post('telepon'),
      'pendidikan'=>$this->input->post('pendidikan'),
      'alamat'=>$this->input->post('alamat')
			);

			$this->M_operator->update($op,$data);
			redirect($this->redirect,'refresh');
	}

	public function delete()
	{
		$op = $this->uri->segment(3);
		$data = array(
		'nip' => $op
		);

	$this->M_operator->delete($data);
	redirect($this->redirect,'refresh');
	}

}
