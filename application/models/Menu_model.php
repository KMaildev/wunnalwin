<?php 
	
class Menu_model extends CI_Model
{

	public function get_country()
	{
		$this->db->select("*");
	    $this->db->from("country");
	    return $this->db->get()->result();
	}

}