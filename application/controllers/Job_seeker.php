<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Job_seeker extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('menu_model');
		$this->load->model('job_seeker_model');
		$this->load->library('upload');
	}

	public function index()
	{
		$data['country_lists'] = $this->menu_model->get_country();
		$this->load->view('job_seeker/index', $data);
	}

	public function save()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'The name field is required.', 'required');
		$this->form_validation->set_rules('phone', 'The phone field is required.', 'required');
		$this->form_validation->set_rules('email', 'The email field is required.', 'required');

		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_message('required', ' %s');
		if ($this->form_validation->run() === FALSE) {
			$this->session->set_flashdata('error', 'Error: please insert your information');
			$data['country_lists'] = $this->menu_model->get_country();
			$this->load->view('job_seeker/index', $data);
		} else {
			$this->job_seeker_model->save();
			$this->session->set_flashdata('success', 'Registration successfully.');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}


	public function upload_cv()
	{
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = '*';
		$config['max_size']             = 204800;
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('attached_file')) {
			$error = array('error' => $this->upload->display_errors());
		} else {
			$data = array('upload_data' => $this->upload->data());
			$attached_file = $data['upload_data']['file_name'];
		}

		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_message('required', ' %s');
		if ($this->form_validation->run() === FALSE) {
			$this->session->set_flashdata('error', 'Error: Please insert your information');
			redirect($_SERVER['HTTP_REFERER']);
		} else {
			$url = base_url('uploads/');
			$attachedFile = $attached_file ?? "";
			$file = $url . $attachedFile;
			$data['attached_file'] = $file;
			$this->job_seeker_model->upload_cv($data);
			$this->session->set_flashdata('success', 'Successfully.');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}
}
