<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_lineusr extends CI_Model
{
	private $table 	= 'line';
	private $pk 	= 'kode_line';

	public function GetAll()
	{
		$this->db->order_by($this->pk, 'desc');
		return $this->db->get($this->table);
	}

	public function save($data)
	{
		return $this->db->insert($this->table, $data);
	}

	public function edit($klu)
	{
		$this->db->where($this->pk, $klu);
		return $this->db->get($this->table)->row_array();
	}

	public function update($klu,$data)
	{
		$this->db->where($this->pk, $klu);
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
		$this->db->or_like('kode_line', $data);
		$this->db->or_like('nama_line', $data);
		return $this->db->get($this->table);
	}

}
