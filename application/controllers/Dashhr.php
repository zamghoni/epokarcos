<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashhr extends CI_Controller
{
  private $view  			= "frontend/v_dashhr/";
  private $redirect 	= "dashhr";
  /**
  * Index Page for this controller.
  *
  * Maps to the following URL
  * 		http://example.com/index.php/welcome
  *	- or -
  * 		http://example.com/index.php/welcome/index
  *	- or -
  * Since this controller is set as the default controller in
  * config/routes.php, it's displayed at http://example.com/
  *
  * So any other public methods not prefixed with an underscore will
  * map to /index.php/welcome/<method_name>
  * @see https://codeigniter.com/user_guide/general/urls.html
  */
  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array('M_performa','M_bagian'));
  }

  public function index()
  {
    $data = array(
      'judul' => 'Dashboard',
      'sub' => 'Halaman Dashboard',
      'target' => $this->M_performa->gettarget(),
      'tdktarget' => $this->M_performa->gettdktarget(),
      'bagian' => $this->M_bagian->GetAll()->result(),
    );
    $this->template->load('frontend/template',$this->view.'read', $data);
  }

  public function process()
  {
    $post = $this->input->post(null, TRUE);
    if (isset($_POST['filter'])) {
      $data = array(
        'judul' => 'Dashboard',
        'sub' => 'Halaman Dashboard',
        'target' => $this->M_performa->gettarget(),
        'tdktarget' => $this->M_performa->gettdktarget(),
        'bagian' => $this->M_bagian->GetAll()->result(),
      );
      $this->template->load('frontend/template',$this->view.'read', $data);
      }  else if (isset($_POST['reset'])) {
        redirect('dashhr','refresh');
      }
    }

  }
