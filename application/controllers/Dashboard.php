<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    function index()
    {
        if (isset($_SESSION['isLogin'])) {
            if ($_SESSION['lgRole'] == 1) {
                $data['_view'] = 'dashboard';
                $data['title'] = 'Trang điều khiển';
                $this->load->view('layouts/main', $data);
            } else {
                $data['_view'] = 'home';
                $data['title'] = 'Home';
                $this->load->view('layouts/home_main', $data);
            }
        } else {
            $data['_view'] = 'home';
            $data['title'] = 'Home';
            $this->load->view('layouts/home_main', $data);
        }
    }
}
