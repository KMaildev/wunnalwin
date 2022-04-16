<?php 
	
class Job_seeker_model extends CI_Model
{

	public function save()
	{
		$arr['name'] = $this->input->post('name');
		$arr['nrc_no'] = $this->input->post('nrc');
		$arr['email'] = $this->input->post('email');
		$arr['phone'] = $this->input->post('phone');
		$arr['date_of_birth'] = $this->input->post('date_of_birth');
		$arr['age'] = $this->input->post('age');
		$arr['gender'] = $this->input->post('gender');
		$arr['health_status'] = $this->input->post('health_status');
		$arr['height'] = $this->input->post('height');
		$arr['weight'] = $this->input->post('weight');
		$arr['education'] = $this->input->post('education');
		$arr['skill'] = $this->input->post('skill');
		$arr['current_address'] = $this->input->post('current_address');

		$arr['passport'] = $this->input->post('passport');
		$arr['expire_date'] = $this->input->post('expire_date');
		$arr['language'] = $this->input->post('language');

		$arr['registration_date'] = date("Y/m/d");
		$this->db->insert('job_seeker', $arr);	
	}



	public function upload_cv($data)
	{
		$arr['name'] = $this->input->post('name');
		$arr['phone'] = $this->input->post('phone');
		$arr['cv_file'] = $data['attached_file'];
		$arr['upload_date'] = date("Y/m/d");
		$this->db->insert('cv', $arr);	
	}


}