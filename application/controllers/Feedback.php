<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['_view'] = 'feedback';
		$data['title'] = 'Góp ý';
		$this->load->view('layouts/home_main', $data);
	}
}
