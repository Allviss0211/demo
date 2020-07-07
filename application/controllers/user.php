<?php
    class User extends CI_Controller{
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
            $this->load->view('layouts/main',$data);
        }

        /*
        * Adding a new user
        */
        function add()
        {   

            if(isset($_POST) && count($_POST) > 0)     
            {   
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
            }
            else
            {        
                $data['decentralization'] = $this->Decentralization_model->get_all_decentralization();    
                $data['_view'] = 'user/add';
                $this->load->view('layouts/main',$data);
            }
        }  

        /*
        * Editing a user
        */
        function edit($IdUser)
        {   
            // check if the user exists before trying to edit it
            $data['user'] = $this->User_model->get_user($IdUser);
            
            if(isset($data['user']['IdUser']))
            {
                if(isset($_POST) && count($_POST) > 0)     
                {   
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

                    $this->User_model->update_user($IdUser,$params);            
                    redirect('user/index');
                }
                else
                {
                    // print_r($data['user']['IdDecentralization']);
                    // return;

                    $data['decentralization'] = $this->Decentralization_model->get_all_decentralization();
                    $data['_view'] = 'user/edit';
                    $this->load->view('layouts/main',$data);
                }
            }
            else
                show_error('The user you are trying to edit does not exist.');
        } 

        /*
        * Deleting user
        */
        function remove($IdUser)
        {
            $user = $this->User_model->get_user($IdUser);

            // check if the user exists before trying to delete it
            if(isset($user['IdUser']))
            {
                $this->User_model->delete_user($IdUser);
                redirect('user/index');
            }
            else
                show_error('The user you are trying to delete does not exist.');
        }
        
}
