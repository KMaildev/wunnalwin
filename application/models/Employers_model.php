<?php

class Employers_model extends CI_Model
{

	public function save()
	{
		$arr['company_name'] = $this->input->post('company_name');
		$arr['company_type'] = $this->input->post('company_type');
		$arr['email'] = $this->input->post('email');
		$arr['phone'] = $this->input->post('phone');
		$arr['location'] = $this->input->post('location');
		$arr['website'] = $this->input->post('website');
		$arr['job_category'] = $this->input->post('job_category');
		$arr['age_limit'] = $this->input->post('age_limit');
		$arr['educational_requirement'] = $this->input->post('educational_requirement');
		$arr['working_experience_requirement'] = $this->input->post('working_experience_requirement');
		$arr['other_additional_requirement'] = $this->input->post('other_additional_requirement');
		$arr['estimate_salary_offer'] = $this->input->post('estimate_salary_offer');
		$arr['other_allowance'] = $this->input->post('other_allowance');
		$arr['gender'] = $this->input->post('gender');
		$arr['interview_type'] = $this->input->post('interview_type');
		$arr['date'] = date("Y/m/d");
		$this->db->insert('employer_form', $arr);
	}
}
