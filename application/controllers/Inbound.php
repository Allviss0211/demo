<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inbound extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Tour_model');
	}

	public function index()
	{
		$data['tour'] = $this->Tour_model->get_tour_by_idtourtype('1');
		$data['_view'] = 'inbound/inbound';
		$this->load->view('layouts/home_main', $data);
	}

}