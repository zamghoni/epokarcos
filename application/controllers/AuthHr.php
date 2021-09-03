<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthHr extends CI_Controller
{
	private $redirect 	= "authhr";
	public function __construct()
	{
		parent::__construct();
		//Load model
		$this->load->model('M_authhr');
	}

	public function index()
	{
		$this->session->sess_destroy();
		$data = array(
					'login' 		=> ''
					);
		$this->load->view('frontend/login', $data);
	}

public function login()
	{
		error_reporting(0);
		$idu 	= $this->input->post('id_user');
		$sandiu	=$this->input->post('sandi_user');
		$data = $this->M_authhr->CekLogin('user','id_user',$idu);
		//jika login
		if($data['sandi_user'] == $sandiu AND $data['id_user'] == $idu)
		{
			$array = array(
				'id_user' 	=> $data['id_user'],
				'IsHr'		=> 1
			);
			$this->session->set_userdata($array);
			$this->session->set_flashdata('message_true','Hai, '. $this->session->userdata('id_user') .' Selamat Datang di Panel EPOKAR ');
			redirect('dashhr','refresh');
		}

		else
		{
		echo "<script>alert('ID atau Sandi salah!');</script>";
		redirect('AuthHr','refresh');
		}

	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('beranda','refresh');
	}

}
