<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_bagianusr extends CI_Model
{
	private $table 	= 'bagian';
	private $pk 	= 'kode_bagian';

	public function GetAll()
	{
		$this->db->order_by($this->pk, 'desc');
		return $this->db->get($this->table);
	}

	public function save($data)
	{
		return $this->db->insert($this->table, $data);
	}

	public function edit($kbu)
	{
		$this->db->where($this->pk, $kbu);
		return $this->db->get($this->table)->row_array();
	}

	public function update($kbu,$data)
	{
		$this->db->where($this->pk, $kbu);
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
		$this->db->or_like('kode_bagian', $data);
		$this->db->or_like('nama_bagian', $data);
		return $this->db->get($this->table);
	}

}
