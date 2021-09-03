<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
	private $redirect 	= "Auth";
	public function __construct()
	{
		parent::__construct();
		//Load model
		$this->load->model('M_auth');
	}

	public function index()
	{
		$this->session->sess_destroy();
		$data = array(
					'login' 		=> ''
					);
		$this->load->view('backend/login', $data);
	}

public function login()
	{
		error_reporting(0);
		$id 	= $this->input->post('id_admin');
		$sandi	=$this->input->post('sandi');
		$data = $this->M_auth->CekLogin('admin','id_admin',$id);
		//jika login
		if($data['sandi'] == $sandi AND $data['id_admin'] == $id)
		{
			$array = array(
				'id_admin' 	=> $data['id_admin'],
				'IsAdmin'		=> 1
			);
			$this->session->set_userdata($array);
			$this->session->set_flashdata('message_true','Hai, '. $this->session->userdata('id_admin') .' Selamat Datang dihalaman administartor');
			redirect('admin','refresh');
		}

		else
		{
		echo "<script>alert('ID atau Sandi salah!');</script>";
		redirect('Auth','refresh');
		}

	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('beranda','refresh');
	}

}
