<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('menu_model');
		$this->load->model('contact_model');
	}

	public function index()
	{
		$data['country_lists'] = $this->menu_model->get_country();
		$this->load->view('contact/index', $data);
	}

	public function save()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name must be filled out.', 'required');
		$this->form_validation->set_rules('phone', 'The phone field is required.', 'required');
		$this->form_validation->set_rules('message', 'The Message field is required.', 'required');

		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_message('required', ' %s');
		if ($this->form_validation->run() === FALSE) {
			$this->session->set_flashdata('error', 'Error: Please insert your information');
			$data['country_lists'] = $this->menu_model->get_country();
			$this->load->view('contact/index', $data);
		} else {
			$this->contact_model->save();
			$this->session->set_flashdata('success', 'Message sent successfully!');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}
}
