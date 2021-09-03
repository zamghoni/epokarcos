<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller
{
	private $view  			= "backend/v_user/";
	private $redirect 	= "user";

	public function __construct()
	{
		parent::__construct();
		//Load model

		$this->load->model('M_user');
		IsAdmin();
	}

	public function index()
	{
		if ($this->input->get('search'))
		{
			$read = $this->M_user->search($this->input->get('search'));
		}

		else
		{
			$read = $this->M_user->GetAll();
		}

		$data = array(
			'judul'	=> "DATA user",
			'sub'	=> "Lihat user",
			'read'=> $read
		);

	$this->template->load('backend/template',$this->view.'read', $data);
	}

	public function create()
	{
		$data = array(
			'judul'	=> "DATA user",
			'sub'	=> "Tambah user",
			'create' 	=> ''
		);
	$this->template->load('backend/template',$this->view.'create', $data);
	}

	public function save()
	{
		$data = array(
			'id_user'=> $this->input->post('id_user'),
			'sandi_user'=> $this->input->post('sandi_user')
		);
		$this->M_user->save($data);
		redirect($this->redirect,'refresh');
		}

	public function edit()
	{
		$id   = $this->uri->segment(3);
		$data = array(
			'judul'	=> "DATA user",
			'sub'	=> "Ubah user",
			'edit' 	=> $this->M_user->edit($id)
		);
	$this->template->load('backend/template',$this->view.'edit', $data);
	}

	public function update()
	{
		$id = $this->uri->segment(3);
		$data = array(
			'id_user' => $this->input->post('id_user'),
			'sandi_user' => $this->input->post('sandi_user')
			);

			$this->M_user->update($id,$data);
			redirect($this->redirect,'refresh');
	}

	public function delete()
	{
		$id = $this->uri->segment(3);
		$data = array(
		'id_user' => $id
		);

	$this->M_user->delete($data);
	redirect($this->redirect,'refresh');
	}

}
