<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Employers extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('menu_model');
		$this->load->model('employers_model');
	}

	public function index()
	{
		$data['country_lists'] = $this->menu_model->get_country();
		$this->load->view('employers/index', $data);
	}

	public function save()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('company_name', 'The company name field is required.', 'required');
		$this->form_validation->set_rules('phone', 'The company phone field is required.', 'required');
		$this->form_validation->set_rules('email', 'The company email field is required.', 'required');

		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_message('required', ' %s');
		if ($this->form_validation->run() === FALSE) {
			$this->session->set_flashdata('error', 'Error: please insert your information');
			$data['country_lists'] = $this->menu_model->get_country();
			$this->load->view('employers/index', $data);
		} else {
			$this->employers_model->save();
			$this->session->set_flashdata('success', 'Registration successfully.');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}
}
