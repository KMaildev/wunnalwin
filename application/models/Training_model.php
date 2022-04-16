<?php 
	
class Training_model extends CI_Model
{

	public function getAll()
	{
		return $this->db->get('training')->result();
	}

}