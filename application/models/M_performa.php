<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_performa extends CI_Model
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

	public function edit($pr)
	{
		$this->db->where($this->pk, $pr);
		return $this->db->get($this->table)->row_array();
	}

	public function update($pr,$data)
	{
		$this->db->where($this->pk, $pr);
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

	function filter($awal,$akhir)
	{
		$query = $this->db->query("SELECT * from performa where
		tgl BETWEEN '$awal' and '$akhir' order by tgl asc");

		return $query->result();
	}

	public function gettarget()
  {
		$bagian = $this->input->post('bagian');
    $this->db->from('performa');
    $this->db->where('kode_status','Target');
		if ($bagian) {
		$this->db->where('kode_bagian',$bagian);
		}
    $query = $this->db->get();
    return $query;
  }

	public function gettdktarget()
  {
		$bagian = $this->input->post('bagian');
    $this->db->from('performa');
    $this->db->where('kode_status','Tidak Target');
		if ($bagian) {
			$this->db->where('kode_bagian',$bagian);
		}
    $query = $this->db->get();
    return $query;
  }

}
