<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');        
    }

    function index()
    {
        $data['_view'] = 'dashboard';
        $this->load->view('layouts/main',$data);
    }
}
?>