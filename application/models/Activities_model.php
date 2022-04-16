<?php 
	
class Activities_model extends CI_Model
{

	public function getAll()
	{
		return $this->db->get('activities')->result();
	}

}