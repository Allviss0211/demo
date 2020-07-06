<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trong_nuoc extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');	
		$this->load->library('session');
		$this->load->database();
		$this->load->model('user_model');
	}
	 
	public function index()
	{
        $this->load->view('trong_nuoc');
    }
}
