<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_berandausr extends CI_Model
{
  private $table='operator';
  private $pk='nip';

  function beritaberanda()
  {

    return $this->db->get('operator');
  }

  function beritalengkap($kode)
  {

    return $this->db->get('operator');
  }

  function newsright()
  {
    $this->db->order_by ('nip', 'desc');

    return $this->db->get('operator');
  }

}
