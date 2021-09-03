<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_authhr extends CI_Model
{

	public function CekLogin($table,$pk,$idu)
	{
		$this->db->where($pk, $idu);
		return $this->db->get($table)->row_array();
	}


}
