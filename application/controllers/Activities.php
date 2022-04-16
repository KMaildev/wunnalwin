<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activities extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('menu_model');
        $this->load->model('activities_model');
    }

	public function index()
	{
		$data['country_lists'] = $this->menu_model->get_country();
		$data['activities'] = $this->activities_model->getAll();
		$this->load->view('activities/index', $data);
	}
}
