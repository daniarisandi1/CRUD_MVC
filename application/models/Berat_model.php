<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berat_model extends CI_Model {

	public function all()
	{
		$result = $this->db->order_by('tanggal','DESC')->get('berat');
		return $result;
	}

	public function find($id_berat)
	{
		$row = $this->db->where('id_berat',$id_berat)->limit(1)->get('berat');
		return $row;
	}

	/*public function show($id_berat)
	{
		$row = $this->db->where('id_berat',$id_berat)->limit(1)->get('berat');
		return $row;
	}*/

	public function show($id_berat) {
		$this->db->select('*');
		$this->db->from('berat');
		$this->db->where('id_berat',$id_berat);
		$query=$this->db->get();
		return $query;
	}

	public function create($data)
	{
		try{
			$this->db->insert('berat', $data);
			return true;
		}catch(Exception $e){
			return $e;
		}
	}

	public function update($id_berat, $data)
	{
		try{
			$this->db->where('id_berat',$id_berat)->limit(1)->update('berat', $data);
			return true;
		}catch(Exception $e){
			return $e;
		}
	}

	public function delete($id_berat)
	{
		try {
			$this->db->where('id_berat',$id_berat)->delete('berat');
			return true;
		}

		//catch exception
		catch(Exception $e) {
		  echo $e->getMessage();
		}
	}

}