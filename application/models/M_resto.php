<?php
defined('BASEPATH') or exit('No direct Script access allowed');

class M_resto extends CI_Model
{	

	function restoran()
	{
		$restoran=$this->db->query('SELECT * FROM poi_resto');
		return $restoran;
	}

	function simpan_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	function get_data($table)
	{
    	return $this->db->get($table);
  	}

  	function update_data($table,$data,$where)
  	{
    	$this->db->update($table,$data,$where);
  	}

  	function delete_data($where,$table)
  	{
    	$this->db->where($where);
    	$this->db->delete($table);
  	}
  	
}

?>