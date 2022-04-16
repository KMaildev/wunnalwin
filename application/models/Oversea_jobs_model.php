<?php

class Oversea_jobs_model extends CI_Model
{

	public function get_country_title($id)
	{
		$this->db->select("*");
		$this->db->from("country");
		$this->db->where(array('id' => $id));
		return $this->db->get()->row();
	}


	public function get_all_oversea_jobs()
	{
		$this->db->select("*");
		$this->db->from("oversea_jobs");
		return $this->db->get()->result();
	}

	public function get_oversea_jobs($id)
	{

		$keyword = $this->input->get('keyword');
		if ($keyword) {
			$this->db->like(array('name' => $keyword));
			$this->db->or_like(array('description' => $keyword));
		}
		$this->db->select("*");
		$this->db->from("oversea_jobs");
		$this->db->where(array('country_id' => $id));
		return $this->db->get()->result();
	}
}
