<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model
{
	private $table 	= 'admin';
	private $pk 	= 'id_admin';

	public function GetAll()
	{
		$this->db->order_by($this->pk, 'desc');
		return $this->db->get($this->table);
	}

	public function save($data)
	{
		return $this->db->insert($this->table, $data);
	}

	public function edit($id)
	{
		$this->db->where($this->pk, $id);
		return $this->db->get($this->table)->row_array();
	}

	public function update($id,$data)
	{
		$this->db->where($this->pk, $id);
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
		$this->db->or_like('id_admin', $data);
		return $this->db->get($this->table);
	}

}
