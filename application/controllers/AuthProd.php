<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthProd extends CI_Controller
{
	private $redirect 	= "authprod";
	public function __construct()
	{
		parent::__construct();
		//Load model
		$this->load->model('M_authprod');
	}

	public function index()
	{
		$this->session->sess_destroy();
		$data = array(
					'login' 		=> ''
					);
		$this->load->view('middle/login', $data);
	}

public function login()
	{
		error_reporting(0);
		$idm 	= $this->input->post('id_mid');
		$sandim	=$this->input->post('sandi_mid');
		$data = $this->M_authprod->CekLogin('usermid','id_mid',$idm);
		//jika login
		if($data['sandi_mid'] == $sandim AND $data['id_mid'] == $idm)
		{
			$array = array(
				'id_mid' 	=> $data['id_mid'],
				'IsProd'		=> 1
			);
			$this->session->set_userdata($array);
			$this->session->set_flashdata('message_true','Hai, '. $this->session->userdata('id_mid') .' Selamat Datang di Panel EPOKAR ');
			redirect('dashprod','refresh');
		}

		else
		{
		echo "<script>alert('ID atau Sandi salah!');</script>";
		redirect('AuthProd','refresh');
		}

	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('beranda','refresh');
	}

}
