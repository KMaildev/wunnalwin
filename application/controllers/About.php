<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('menu_model');
		$this->load->model('team_model');
	}

	public function index()
	{
		$data['country_lists'] = $this->menu_model->get_country();
		$this->load->view('about/index', $data);
	}

	public function team()
	{
		$data['country_lists'] = $this->menu_model->get_country();
		$data['members'] = $this->team_model->get_members();
		$this->load->view('about/team', $data);
	}
}
