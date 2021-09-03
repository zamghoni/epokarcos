<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_performamid extends CI_Model
{
	private $table 	= 'performa';
	private $pk 	= 'kode_performa';

	public function GetAll()
	{
		$this->db->order_by($this->pk, 'desc');
		return $this->db->get($this->table);
	}

	public function save($data)
	{
		return $this->db->insert($this->table, $data);
	}

	public function edit($prm)
	{
		$this->db->where($this->pk, $prm);
		return $this->db->get($this->table)->row_array();
	}

	public function update($prm,$data)
	{
		$this->db->where($this->pk, $prm);
		return $this->db->update($this->table, $data);
	}

	public function delete($data)
	{
		$this->db->where($data);
		return $this->db->delete($this->table);
	}

	public function search($data)
	{
		$this->db->like($this->pk, $data);
    $this->db->or_like('nip', $data);
		$this->db->or_like('nama', $data);
    $this->db->or_like('kode_bagian',$data);
    $this->db->or_like('kode_line', $data);
		return $this->db->get($this->table);
	}

	function filter($awal,$akhir,$kode_bagian,$kode_line,$kode_status)
	{
		$query = $this->db->query("SELECT * from performa where
		(tgl BETWEEN '$awal' and '$akhir') and kode_bagian = '$kode_bagian' and kode_line = '$kode_line' and kode_status = '$kode_status' order by tgl asc");

		return $query->result_array();
	}


}
