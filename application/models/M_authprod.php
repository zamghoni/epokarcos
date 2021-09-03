<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_authprod extends CI_Model
{

	public function CekLogin($table,$pk,$idm)
	{
		$this->db->where($pk, $idm);
		return $this->db->get($table)->row_array();
	}


}
