<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_status extends CI_Model
{
	private $table 	= 'status';
	private $pk 	= 'kode_status';

	public function GetAll()
	{
		$this->db->order_by($this->pk, 'desc');
		return $this->db->get($this->table);
	}

	public function save($data)
	{
		return $this->db->insert($this->table, $data);
	}

	public function edit($st)
	{
		$this->db->where($this->pk, $st);
		return $this->db->get($this->table)->row_array();
	}

	public function update($st,$data)
	{
		$this->db->where($this->pk, $st);
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
		$this->db->or_like('kode_status', $data);
		$this->db->or_like('nama_status', $data);
		return $this->db->get($this->table);
	}

}
