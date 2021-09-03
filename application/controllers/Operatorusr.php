<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Operatorusr extends CI_Controller
{
	private $view  			= "frontend/v_operatorusr/";
	private $redirect 	= "operatorusr";

	public function __construct()
	{
		parent::__construct();
		//Load model

		$this->load->model('M_operatorusr');
    $this->load->model('M_bagianusr');
    $this->load->model('M_lineusr');
		IsHr();

	}

	public function index()
	{
		if ($this->input->get('search'))
		{
			$read = $this->M_operatorusr->search($this->input->get('search'));
		}

		else
		{
			$read = $this->M_operatorusr->GetAll();
		}

		$data = array(
			'judul'	=> "DATA Operator",
			'sub'	=> "Lihat Operator",
			'read'=> $read
		);

	$this->template->load('frontend/template',$this->view.'read', $data);
	}

	public function create()
	{
		$data = array(
			'judul'	=> "DATA Operator",
			'sub'	=> "Tambah Operator",
      'bagian' => $this->M_bagianusr->GetAll(),
      'line' => $this->M_lineusr->GetAll(),
			'create' 	=> ''
		);
	$this->template->load('frontend/template',$this->view.'create', $data);
	}

	public function save()
	{
		$data = array(
			'nip'=> $this->input->post('nip'),
      'nama'=>$this->input->post('nama'),
      'kode_bagian'=>$this->input->post('kode_bagian'),
      'kode_line'=>$this->input->post('kode_line'),
      'nik'=>$this->input->post('nik'),
      'telepon'=>$this->input->post('telepon'),
      'pendidikan'=>$this->input->post('pendidikan'),
      'alamat'=>$this->input->post('alamat')
		);
		$this->M_operatorusr->save($data);
		redirect($this->redirect,'refresh');
		}

	public function edit()
	{
		$ops   = $this->uri->segment(3);
		$data = array(
			'judul'	=> "DATA Operator",
			'sub'	=> "Ubah Operator",
			'bagian' => $this->M_bagianusr->GetAll(),
      'line' => $this->M_lineusr->GetAll(),
			'edit' 	=> $this->M_operatorusr->edit($ops)

		);
	$this->template->load('frontend/template',$this->view.'edit', $data);
	}

	public function update()
	{
		$ops = $this->uri->segment(3);
		$data = array(
      'nip'=> $this->input->post('nip'),
      'nama'=>$this->input->post('nama'),
      'kode_bagian'=>$this->input->post('kode_bagian'),
      'kode_line'=>$this->input->post('kode_line'),
      'nik'=>$this->input->post('nik'),
      'telepon'=>$this->input->post('telepon'),
      'pendidikan'=>$this->input->post('pendidikan'),
      'alamat'=>$this->input->post('alamat')
			);

			$this->M_operatorusr->update($ops,$data);
			redirect($this->redirect,'refresh');
	}

	public function delete()
	{
		$ops = $this->uri->segment(3);
		$data = array(
		'nip' => $ops
		);

	$this->M_operatorusr->delete($data);
	redirect($this->redirect,'refresh');
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

									$nip = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
									$nama = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
									$kode_bagian = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
									$kode_line = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
									$nik = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
									$telepon = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
									$pendidikan = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
									$alamat = $worksheet->getCellByColumnAndRow(7, $row)->getValue();

									$data[] = array(
											'nip'          	=>$nip,
											'nama'         	=>$nama,
											'kode_bagian'  	=> $kode_bagian,
											'kode_line'    	=> $kode_line,
											'nik' 					=> $nik,
											'telepon' 			=> $telepon,
											'pendidikan' 		=> $pendidikan,
											'alamat' 				=> $alamat
									);

							}

					}

					$this->db->insert_batch('operator', $data);

					$message = array(
							'message'=>'<div class="alert alert-success">Import file excel berhasil disimpan di database</div>',
					);

					$this->session->set_flashdata($message);
					redirect('operatorusr');
			}
			else
			{
					 $message = array(
							'message'=>'<div class="alert alert-danger">Import file gagal, coba lagi</div>',
					);

					$this->session->set_flashdata($message);
					redirect('operatorusr');
			}
	}

}
