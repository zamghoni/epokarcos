<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Performamid extends CI_Controller
{
	private $view  			= "middle/v_performamid/";
	private $redirect 	= "performamid";

	public function __construct()
	{
		parent::__construct();
		//Load model

		$this->load->model('M_performamid');
    $this->load->model('M_operator');
    $this->load->model('M_bagian');
    $this->load->model('M_line');
		$this->load->model('M_status');
		IsProd();
	}

	public function index()
	{
		if ($this->input->get('search'))
		{
			$read = $this->M_performamid->search($this->input->get('search'));
		}

		else
		{
			$read = $this->M_performamid->GetAll();
		}

		$data = array(
			'judul'	=> "DATA Performa",
			'sub'	=> "Lihat Performa",
			'read'=> $read
		);

	$this->template->load('middle/template',$this->view.'read', $data);
	}

	function get_nip()
    {
      $nip = $this->input->post('nip',TRUE);
      $data = $this->M_operator->get_nip($nip)->row();
      echo json_encode($data);
    }

	public function create()
	{
		$data = array(
			'judul'	=> "DATA performa",
			'sub'	=> "Tambah performa",
			'operator' => $this->M_operator->get_operator()->result(),
			'status'=>$this->M_status->GetAll(),
		);
	$this->template->load('middle/template',$this->view.'create', $data);
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
		$this->M_performamid->save($data);
		redirect($this->redirect,'refresh');
		}

	public function edit()
	{
		$prm   = $this->uri->segment(3);
		$data = array(
			'judul'	=> "DATA performa",
			'sub'	=> "Ubah performa",
			'operator'=>$this->M_operator->GetAll(),
      'bagian' => $this->M_bagian->GetAll(),
      'line' => $this->M_line->GetAll(),
			'status'=>$this->M_status->GetAll(),
			'edit' 	=> $this->M_performamid->edit($prm)
		);
	$this->template->load('middle/template',$this->view.'edit', $data);
	}

	public function update()
	{
		$prm = $this->uri->segment(3);
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

			$this->M_performamid->update($prm,$data);
			redirect($this->redirect,'refresh');
	}

	public function delete()
	{
		$prm = $this->uri->segment(3);
		$data = array(
		'kode_performa' => $prm
		);

	$this->M_performamid->delete($data);
	redirect($this->redirect,'refresh');
	}

	public function laporan()
	{
		$data = array(
			'judul' => "Filter Laporan",
			'sub' => " Tanggal",
			'operator'=>$this->M_operator->GetAll(),
      'bagian' => $this->M_bagian->GetAll(),
      'line' => $this->M_line->GetAll(),
			'status'=>$this->M_status->GetAll(),
	);
		$this->template->load('middle/template', $this->view.'laporan', $data);
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
			$data['datafilter'] = $this->M_performamid->filter($awal,$akhir,$kode_bagian,$kode_line,$kode_status);

				$this->template->load('middle/template', $this->view.'cetak', $data);

		}

		else
		{
			redirect('laporan');
		}

	}

	public function excel()
	{
			if(isset($_FILES["file"]["name"])){
						// upload
					$file_tmp = $_FILES['file']['tmp_name'];
					$file_name = $_FILES['file']['name'];
					$file_size =$_FILES['file']['size'];
					$file_type=$_FILES['file']['type'];
					// move_uploaded_file($file_tmp,"uploads/".$file_name); // simpan filenya di folder uploads

					$object = PHPExcel_IOFactory::load($file_tmp);

					foreach($object->getWorksheetIterator() as $worksheet){

							$highestRow = $worksheet->getHighestRow();
							$highestColumn = $worksheet->getHighestColumn();

							for($row=2; $row<=$highestRow; $row++){

									$tgl = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
									$nip = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
									$nama = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
									$kode_bagian = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
									$kode_line = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
									$target = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
									$hasil = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
									$selisih = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
									$kode_status = $worksheet->getCellByColumnAndRow(8, $row)->getValue();

									$data[] = array(
											'tgl'          => $tgl,
											'nip'          =>$nip,
											'nama'         =>$nama,
											'kode_bagian'  => $kode_bagian,
											'kode_line'    => $kode_line,
											'target' => $target,
											'hasil' => $hasil,
											'selisih' => $selisih,
											'kode_status' => $kode_status
									);

							}

					}

					$this->db->insert_batch('performa', $data);

					$message = array(
							'message'=>'<div class="alert alert-success">Import file excel berhasil disimpan di database</div>',
					);

					$this->session->set_flashdata($message);
					redirect('performamid');
			}
			else
			{
					 $message = array(
							'message'=>'<div class="alert alert-danger">Import file gagal, coba lagi</div>',
					);

					$this->session->set_flashdata($message);
					redirect('performamid');
			}
	}

}
