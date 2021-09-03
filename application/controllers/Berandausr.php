<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BerandaUsr extends CI_Controller
{
	private $view  	= "landing/v_beranda/";
	private $redirect 	= "berandausr";

	public function __construct()
	{
		parent::__construct();
		//Load model
		$this->load->model('M_berandausr');
	}

	public function index()
	{
		$beritaberanda=$this->M_berandausr->beritaberanda();
		$newsright=$this->M_berandausr->newsright();
		$data = array(
			'newsright'=> $newsright,
			'beritaberanda'=> $beritaberanda
		);
	$this->template->load('landing/template',$this->view.'read', $data);
	}

	public function beritalengkap()
	{
		$newsright=$this->M_berandausr->newsright();
		$data = array(
			'newsright'=> $newsright,
			'row'=> $this->M_berandausr->readmore($this->uri->segment(3))->row_array()
		);
	$this->template->load('landing/template',$this->view.'beritalengkap', $data);
	}

}
