<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('menu_model');
        $this->load->model('training_model');
    }

	public function index()
	{
		$data['country_lists'] = $this->menu_model->get_country();
		$this->load->view('services/index', $data);
	}


	public function training()
	{
		$data['country_lists'] = $this->menu_model->get_country();
		$data['trainings'] = $this->training_model->getAll();
		$this->load->view('services/training', $data);
	}
}
