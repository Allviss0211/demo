<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Decentralization_model');
    }

    /*
     * Listing of user
     */
    function index()
    {
        $data['user'] = $this->User_model->get_all_user();

        $data['_view'] = 'user/index';
        $this->load->view('layouts/main', $data);
    }

    /*
     * Adding a new user
     */
    function add()
    {
        if (isset($_POST) && count($_POST) > 0) {
            $params = array(
                'Username' => $this->input->post('Username'),
                'Password' => $this->input->post('Password'),
                'IdDecentralization' => $this->input->post('IdDecentralization'),
                'Fullname' => $this->input->post('Fullname'),
                'IdentityCard' => $this->input->post('IdentityCard'),
                'Birthday' => $this->input->post('Birthday'),
                'Phone' => $this->input->post('Phone'),
                'Email' => $this->input->post('Email'),
                'Address' => $this->input->post('Address'),
                'Note' => $this->input->post('Note'),
            );

            $user_id = $this->User_model->add_user($params);
            redirect('user/index');
        } else {
            $data['decentralization'] = $this->Decentralization_model->get_all_decentralization();
            $data['_view'] = 'user/add';
            $this->load->view('layouts/main', $data);
        }
    }

    /*
     * Editing a user
     */
    function edit($IdUser)
    {
        // check if the user exists before trying to edit it
        $data['user'] = $this->User_model->get_user($IdUser);

        if (isset($data['user']['IdUser'])) {
            if (isset($_POST) && count($_POST) > 0) {
                $params = array(
                    'Username' => $this->input->post('Username'),
                    'Password' => $this->input->post('Password'),
                    'IdDecentralization' => $this->input->post('IdDecentralization'),
                    'Fullname' => $this->input->post('Fullname'),
                    'IdentityCard' => $this->input->post('IdentityCard'),
                    'Birthday' => $this->input->post('Birthday'),
                    'Phone' => $this->input->post('Phone'),
                    'Email' => $this->input->post('Email'),
                    'Address' => $this->input->post('Address'),
                    'Note' => $this->input->post('Note'),
                );

                $this->User_model->update_user($IdUser, $params);
                redirect('user/index');
            } else {
                $data['decentralization'] = $this->Decentralization_model->get_all_decentralization();
                $data['_view'] = 'user/edit';
                $this->load->view('layouts/main', $data);
            }
        } else
            show_error('The user you are trying to edit does not exist.');
    }

    /*
     * Deleting user
     */
    function remove($IdUser)
    {
        $user = $this->User_model->get_user($IdUser);

        // check if the user exists before trying to delete it
        if (isset($user['IdUser'])) {
            $this->User_model->delete_user($IdUser);
            redirect('user/index');
        } else
            show_error('The user you are trying to delete does not exist.');
    }

    function login()
    {
        if (isset($_POST["btnLogin"])) {
            $userName = trim($_POST["txtUsername"]);
            $passWord = trim($_POST["txtPassword"]);
            if ($userName != "" && $passWord != "") {
                $row = $this->User_model->login($userName, $passWord);
                if ($row) {
                    $_SESSION["lgUserName"] = $userName;
                    $_SESSION["lgIdUser"] = $row["IdUser"];
                    $_SESSION["lgRole"] = $row["IdDecentralization"];
                    $_SESSION["lgFullname"] = $row["Fullname"];
                    $_SESSION["isLogin"] = true;
                    redirect("home");
                } else {
                    $this->session->set_flashdata('error_login_message', 'Lỗi login cmnr');
                    //print_r( $this->session->flashdata('error_login_message'));
                    redirect('user/login');
                }
            } else if ($userName == "" && $passWord == "") {
                $this->session->set_flashdata('error_login_message', 'Điền dô mới đăng nhập được con điên');
                //print_r( $this->session->flashdata('error_login_message'));
                redirect('user/login');
            }
        } else
        if (isset($_POST["btnSignUp"])) {
            $params = array(
                'Username' => $this->input->post('txtUsernameSignup'),
                'Password' => $this->input->post('txtPasswordSignUp'),
                'IdDecentralization' => '2',
                'Fullname' => $this->input->post('txtFullname'),
                'IdentityCard' => $this->input->post('txtIdentityCard'),
                'Birthday' => $this->input->post('txtBirthday'),
                'Phone' => $this->input->post('txtPhone'),
                'Email' => $this->input->post('txtEmail'),
                'Address' => $this->input->post('txtAddress'),
                'Note' => $this->input->post('txtNote'),
            );
            $params_null = false;
            foreach ($params as $obj) {
                $params_null = is_null($obj) ?  true : false;
            }
            $user_exist = $this->User_model->check_user($this->input->post('txtUsernameSignup'));
            if (!$user_exist) {
                $this->User_model->add_user($params);
                redirect('user/login');
            } else if ($params_null) {
                $this->session->set_flashdata('error_signup_message', 'Điền thiếu thông tin cmnr');
                redirect('user/login');
            } else {
                $this->session->set_flashdata('error_signup_message', 'Lỗi signup cmnr');
                // print_r( $this->session->flashdata('error_signup_message'));
                redirect('user/login');
            }
        } else
            $this->load->view("user/login");
    }

    function logout()
    {
        if (isset($_SESSION["lgUserName"])) {
            unset($_SESSION["lgUserName"]);
            unset($_SESSION["lgIdUser"]);
            unset($_SESSION["lgRole"]);
            unset($_SESSION["lgFullname"]);
            unset($_SESSION["isLogin"]);
        }
        redirect('home');
    }

}
