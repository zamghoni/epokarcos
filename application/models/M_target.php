<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_target extends CI_Model
{
	private $table 	= 'target';
	private $pk 	= 'id_target';

	public function GetAll()
	{
		$this->db->order_by($this->pk, 'desc');
		return $this->db->get($this->table);
	}

	public function save($data)
	{
		return $this->db->insert($this->table, $data);
	}

	public function edit($t)
	{
		$this->db->where($this->pk, $t);
		return $this->db->get($this->table)->row_array();
	}

	public function update($t,$data)
	{
		$this->db->where($this->pk, $t);
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
		$this->db->or_like('kode_line', $data);
		return $this->db->get($this->table);
	}

}
