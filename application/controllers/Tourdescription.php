<?php

class Tourdescription extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tourdescription_model');
        $this->load->model('Tour_model');
    }

    /*
     * Listing of tourdescription
     */
    function index()
    {
        $data['tourdescription'] = $this->Tourdescription_model->get_all_tourdescription();

        $data['_view'] = 'tourdescription/index';
        $this->load->view('layouts/main', $data);
    }

    /*
     * Detail of tourdescription
     */
    function detail()
    {
        $IdTour = $_GET['id'];
        $data['tourdescription'] = $this->Tourdescription_model->get_tourdescription_by_IdTour($IdTour);
        $data['tour'] = $this->Tour_model->get_tour($IdTour);
        $data['tourbytype'] = $this->Tour_model->get_tour_by_idtourtype($data['tour']['IdTourType']);
        $data['_view'] = 'tourdescription/detail';
        $data['title'] = $data['tourdescription'][0]['Name'];
        $this->load->view('layouts/home_main', $data);
    }
    /*
     * Adding a new tourdescription
     */
    function add()
    {
        if (isset($_POST) && count($_POST) > 0) {
            $params = array(
                'Description' => $this->input->post('Description'),
                'Timeline' => $this->input->post('Timeline'),
                'Image' => $this->input->post('Image'),
                'IdTour' => $this->input->post('IdTour'),
                'Note' => $this->input->post('Note'),
            );

            $tourdescription_id = $this->Tourdescription_model->add_tourdescription($params);
            redirect('tourdescription/index');
        } else {
            $data['tour'] = $this->Tour_model->get_all_tour();
            $data['_view'] = 'tourdescription/add';
            $this->load->view('layouts/main', $data);
        }
    }

    /*
     * Editing a tourdescription
     */
    function edit($IdDesciption)
    {
        // check if the tourdescription exists before trying to edit it
        $data['tourdescription'] = $this->Tourdescription_model->get_tourdescription($IdDesciption);

        if (isset($data['tourdescription']['IdDesciption'])) {
            if (isset($_POST) && count($_POST) > 0) {
                $params = array(
                    'Description' => $this->input->post('Description'),
                    'Timeline' => $this->input->post('Timeline'),
                    'Image' => $this->input->post('Image'),
                    'IdTour' => $this->input->post('IdTour'),
                    'Note' => $this->input->post('Note'),
                );

                $this->Tourdescription_model->update_tourdescription($IdDesciption, $params);
                redirect('tourdescription/index');
            } else {
                $data['tour'] = $this->Tour_model->get_all_tour();
                $data['_view'] = 'tourdescription/edit';
                $this->load->view('layouts/main', $data);
            }
        } else
            show_error('The tourdescription you are trying to edit does not exist.');
    }

    /*
     * Deleting tourdescription
     */
    function remove($IdDesciption)
    {
        $tourdescription = $this->Tourdescription_model->get_tourdescription($IdDesciption);

        // check if the tourdescription exists before trying to delete it
        if (isset($tourdescription['IdDesciption'])) {
            $this->Tourdescription_model->delete_tourdescription($IdDesciption);
            redirect('tourdescription/index');
        } else
            show_error('The tourdescription you are trying to delete does not exist.');
    }
}
