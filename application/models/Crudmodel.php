<?php
class Crudmodel extends CI_Model {
	function select($tabel,$where){
		$this->db->select('*');
		$this->db->from($tabel);
		if(!empty($where)){
			$this->db->where($where);
		}
		return $this->db->get()->result_array();
	}

	function manual($query){
		return 	$this->db->query($query)->result_array();
	}

	function insert($tabel, $data){
		return $this->db->insert($tabel,$data);
	}

	function update($tabel,$data,$where){
		return $this->db->update($tabel,$data,$where);
	}

	function delete($tabel,$where){
		return $this->db->delete($tabel,$where);
	}
}
?>
