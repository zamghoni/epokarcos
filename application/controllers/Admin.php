<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller
{
	private $view  			= "backend/v_admin/";
	private $redirect 	= "admin";

	public function __construct()
	{
		parent::__construct();
		//Load model

		$this->load->model('M_admin');
		IsAdmin();
	}

	public function index()
	{
		if ($this->input->get('search'))
		{
			$read = $this->M_admin->search($this->input->get('search'));
		}

		else
		{
			$read = $this->M_admin->GetAll();
		}

		$data = array(
			'judul'	=> "DATA ADMIN",
			'sub'	=> "Lihat Admin",
			'read'=> $read
		);

	$this->template->load('backend/template',$this->view.'read', $data);
	}

	public function create()
	{
		$data = array(
			'judul'	=> "DATA ADMIN",
			'sub'	=> "Tambah Admin",
			'create' 	=> ''
		);
	$this->template->load('backend/template',$this->view.'create', $data);
	}

	public function save()
	{
		$data = array(
			'id_admin'=> $this->input->post('id_admin'),
			'sandi'=> $this->input->post('sandi')
		);
		$this->M_admin->save($data);
		redirect($this->redirect,'refresh');
		}

	public function edit()
	{
		$id   = $this->uri->segment(3);
		$data = array(
			'judul'	=> "DATA ADMIN",
			'sub'	=> "Ubah Admin",
			'edit' 	=> $this->M_admin->edit($id)
		);
	$this->template->load('backend/template',$this->view.'edit', $data);
	}

	public function update()
	{
		$id = $this->uri->segment(3);
		$data = array(
			'id_admin' => $this->input->post('id_admin'),
			'sandi' => $this->input->post('sandi')
			);

			$this->M_admin->update($id,$data);
			redirect($this->redirect,'refresh');
	}

	public function delete()
	{
		$id = $this->uri->segment(3);
		$data = array(
		'id_admin' => $id
		);

	$this->M_admin->delete($data);
	redirect($this->redirect,'refresh');
	}

}
