<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Target extends CI_Controller
{
	private $view  			= "frontend/v_target/";
	private $redirect 	= "target";

	public function __construct()
	{
		parent::__construct();
		//Load model

		$this->load->model('M_target');
    $this->load->model('M_bagian');
    $this->load->model('M_line');
		IsHr();
	}

	public function index()
	{
		if ($this->input->get('search'))
		{
			$read = $this->M_target->search($this->input->get('search'));
		}

		else
		{
			$read = $this->M_target->GetAll();
		}

		$data = array(
			'judul'	=> "DATA target",
			'sub'	=> "Lihat target",
			'read'=> $read
		);

	$this->template->load('frontend/template',$this->view.'read', $data);
	}

	public function create()
	{
		$data = array(
			'judul'	=> "DATA target",
			'sub'	=> "Tambah target",
      'bagian' => $this->M_bagian->GetAll(),
      'line' => $this->M_line->GetAll(),
			'create' 	=> ''
		);
	$this->template->load('frontend/template',$this->view.'create', $data);
	}

	public function save()
	{
		$data = array(
			'kode_bagian'=> $this->input->post('kode_bagian'),
			'kode_line'=> $this->input->post('kode_line'),
      'target' =>$this->input->post('target')
		);
		$this->M_target->save($data);
		redirect($this->redirect,'refresh');
		}

	public function edit()
	{
		$t   = $this->uri->segment(3);
		$data = array(
			'judul'	=> "DATA target",
			'sub'	=> "Ubah target",
			'edit' 	=> $this->M_target->edit($t)
		);
	$this->template->load('frontend/template',$this->view.'edit', $data);
	}

	public function update()
	{
		$t = $this->uri->segment(3);
		$data = array(
			'kode_bagian' => $this->input->post('kode_bagian'),
			'kode_line' => $this->input->post('kode_line'),
      'target' => $this->input->post('target')
			);

			$this->M_target->update($t,$data);
			redirect($this->redirect,'refresh');
	}

	public function delete()
	{
		$t = $this->uri->segment(3);
		$data = array(
		'id_target' => $t
		);

	$this->M_target->delete($data);
	redirect($this->redirect,'refresh');
	}

}
