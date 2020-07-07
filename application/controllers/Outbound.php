<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Outbound extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Tour_model');
	}

	public function index()
	{
		$data['tour'] = $this->Tour_model->get_tour_by_idtourtype('2');
		$data['_view'] = 'outbound/outbound';
		$this->load->view('layouts/home_main', $data);
	}

}