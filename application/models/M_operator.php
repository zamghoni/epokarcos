<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_operator extends CI_Model
{
	private $table 	= 'operator';
	private $pk 	= 'nip';

	public function GetAll()
	{
		$this->db->order_by($this->pk, 'desc');
		return $this->db->get($this->table);
	}

	public function save($data)
	{
		return $this->db->insert($this->table, $data);
	}

	public function edit($op)
	{
		$this->db->where($this->pk, $op);
		return $this->db->get($this->table)->row_array();
	}

	public function update($op,$data)
	{
		$this->db->where($this->pk, $op);
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
		$this->db->or_like('alamat', $data);
		$this->db->or_like('nik', $data);
		return $this->db->get($this->table);
	}

	public function get_operator($id = null)
	{
		$this->db->from('operator');
		if ($id != null) {
			$this->db->where('nip',$id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function get_nip($nip)
	{
		$query = $this->db->get_where('operator', array('nip' => $nip));
		return $query;
	}

}
