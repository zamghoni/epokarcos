<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Performausr extends CI_Controller
{
	private $view  			= "frontend/v_performausr/";
	private $redirect 	= "performausr";

	public function __construct()
	{
		parent::__construct();
		//Load model

		$this->load->model('M_performausr');
    $this->load->model('M_operatorusr');
    $this->load->model('M_bagianusr');
    $this->load->model('M_lineusr');
		$this->load->model('M_status');
		IsHr();
	}

	public function index()
	{
		if ($this->input->get('search'))
		{
			$read = $this->M_performausr->search($this->input->get('search'));
		}

		else
		{
			$read = $this->M_performausr->GetAll();
		}

		$data = array(
			'judul'	=> "DATA Performa",
			'sub'	=> "Lihat Performa",
			'read'=> $read
		);

	$this->template->load('frontend/template',$this->view.'read', $data);
	}

	public function create()
	{
		$data = array(
			'judul'	=> "DATA performa",
			'sub'	=> "Tambah performa",
      'operator'=>$this->M_operatorusr->GetAll(),
      'bagian' => $this->M_bagianusr->GetAll(),
      'line' => $this->M_lineusr->GetAll(),
			'status'=>$this->M_status->GetAll(),
			'create' 	=> ''
		);
	$this->template->load('frontend/template',$this->view.'create', $data);
	}

	public function save()
	{
		$data = array(
      'tgl'=>date('Y-m-d'),
			'nip'=> $this->input->post('nip'),
      'nama'=>$this->input->post('nama'),
      'kode_bagian'=>$this->input->post('kode_bagian'),
      'kode_line'=>$this->input->post('kode_line'),
      'target'=>$this->input->post('target'),
      'hasil'=>$this->input->post('hasil'),
      'selisih'=>$this->input->post('selisih'),
      'kode_status'=>$this->input->post('kode_status')
		);
		$this->M_performausr->save($data);
		redirect($this->redirect,'refresh');
		}

	public function edit()
	{
		$pru   = $this->uri->segment(3);
		$data = array(
			'judul'	=> "DATA performa",
			'sub'	=> "Ubah performa",
			'operator'=>$this->M_operatorusr->GetAll(),
      'bagian' => $this->M_bagianusr->GetAll(),
      'line' => $this->M_lineusr->GetAll(),
			'status'=>$this->M_status->GetAll(),
			'edit' 	=> $this->M_performausr->edit($pru)
		);
	$this->template->load('frontend/template',$this->view.'edit', $data);
	}

	public function update()
	{
		$pru = $this->uri->segment(3);
		$data = array(
      'tgl'=>date('Y-m-d'),
			'nip'=> $this->input->post('nip'),
      'nama'=>$this->input->post('nama'),
      'kode_bagian'=>$this->input->post('kode_bagian'),
      'kode_line'=>$this->input->post('kode_line'),
      'target'=>$this->input->post('target'),
      'hasil'=>$this->input->post('hasil'),
      'selisih'=>$this->input->post('selisih'),
      'kode_status'=>$this->input->post('kode_status')
			);

			$this->M_performausr->update($pru,$data);
			redirect($this->redirect,'refresh');
	}

	public function delete()
	{
		$pru = $this->uri->segment(3);
		$data = array(
		'kode_performa' => $pru
		);

	$this->M_performausr->delete($data);
	redirect($this->redirect,'refresh');
	}

	public function laporan()
	{
		$data = array(
			'judul' => "Filter Laporan",
			'sub' => " Tanggal",
			'operator'=>$this->M_operatorusr->GetAll(),
      'bagian' => $this->M_bagianusr->GetAll(),
      'line' => $this->M_lineusr->GetAll(),
			'status'=>$this->M_status->GetAll(),
	);
		$this->template->load('frontend/template', $this->view.'laporan', $data);
	}

	function filter()
	{
		$awal=$this->input->post('awal');
		$akhir=$this->input->post('akhir');
		$kode_line=$this->input->post('kode_line');
		$kode_bagian=$this->input->post('kode_bagian');
		$kode_status=$this->input->post('kode_status');

		if ($awal)
		{
			$data['judul']="DAFTAR PEMBINAAN OPERATOR";
			$data['sub']="Per Tanggal : ".$awal." S.d ".$akhir;
			$data['datafilter'] = $this->M_performausr->filter($awal,$akhir,$kode_bagian,$kode_line,$kode_status);

				$this->template->load('frontend/template', $this->view.'cetak', $data);

		}

		else
		{
			redirect('laporan');
		}

	}

}
