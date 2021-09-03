<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Performa extends CI_Controller
{
	private $view  			= "backend/v_performa/";
	private $redirect 	= "performa";

	public function __construct()
	{
		parent::__construct();
		//Load model

		$this->load->model('M_performa');
    $this->load->model('M_operator');
    $this->load->model('M_bagian');
    $this->load->model('M_line');
		$this->load->model('M_status');
		IsAdmin();
	}

	public function index()
	{
		if ($this->input->get('search'))
		{
			$read = $this->M_performa->search($this->input->get('search'));
		}

		else
		{
			$read = $this->M_performa->GetAll();
		}

		$data = array(
			'judul'	=> "DATA performa",
			'sub'	=> "Lihat performa",
			'read'=> $read
		);

	$this->template->load('backend/template',$this->view.'read', $data);
	}

	public function create()
	{
		$data = array(
			'judul'	=> "DATA performa",
			'sub'	=> "Tambah performa",
      'operator'=>$this->M_operator->GetAll(),
      'bagian' => $this->M_bagian->GetAll(),
      'line' => $this->M_line->GetAll(),
			'status'=>$this->M_status->GetAll(),
			'create' 	=> ''
		);
	$this->template->load('backend/template',$this->view.'create', $data);
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
		$this->M_performa->save($data);
		redirect($this->redirect,'refresh');
		}

	public function edit()
	{
		$pr   = $this->uri->segment(3);
		$data = array(
			'judul'	=> "DATA performa",
			'sub'	=> "Ubah performa",
			'edit' 	=> $this->M_performa->edit($pr)
		);
	$this->template->load('backend/template',$this->view.'edit', $data);
	}

	public function update()
	{
		$pr = $this->uri->segment(3);
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

			$this->M_performa->update($pr,$data);
			redirect($this->redirect,'refresh');
	}

	public function delete()
	{
		$pr = $this->uri->segment(3);
		$data = array(
		'kode_performa' => $pr
		);

	$this->M_performa->delete($data);
	redirect($this->redirect,'refresh');
	}

	public function laporan()
	{
		$data = array(
			'judul' => "Filter Laporan",
			'sub' => " Tanggal"
	);
		$this->template->load('backend/template', $this->view.'laporan', $data);
	}

	function filter()
	{
		$awal=$this->input->post('awal');
		$akhir=$this->input->post('akhir');
		$nilaifilter=$this->input->post('nilaifilter');

		if ($nilaifilter = 1)
		{
			$data['judul']="DAFTAR PEMBINAAN OPERATOR";
			$data['sub']="Per Tanggal : ".$awal;
			$data['datafilter'] = $this->M_performa->filter($awal,$akhir);

				$this->template->load('backend/template', $this->view.'cetak', $data);

		}

		elseif ($nilaifilter > 1)
		{
			redirect('laporan');
		}

	}



}
