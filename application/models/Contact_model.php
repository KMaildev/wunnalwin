<?php 
	
class Contact_model extends CI_Model
{

	public function save()
	{
		$arr['name'] = $this->input->post('name');
		$arr['email'] = $this->input->post('email');
		$arr['phone'] = $this->input->post('phone');
		$arr['subject'] = $this->input->post('subject');
		$arr['message'] = $this->input->post('message');
		$arr['inquiry_date'] = date("Y/m/d");
		$this->db->insert('inquiry', $arr);	
	}

}