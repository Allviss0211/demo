<?php
class Tour extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tour_model');
        $this->load->model('Tourtype_model');
        $this->load->model('Tourdescription_model');
    }

    /*
     * Listing of tour
     */
    function index()
    {
        $data['tour'] = $this->Tour_model->get_all_tour();
        $data['_view'] = 'tour/index';
        $this->load->view('layouts/main', $data);
    }
    /*
     * Load view inbound
     */
    public function inbound()
    {
        $data['tour'] = $this->Tour_model->get_tour_by_idtourtype('1');
        $data['title'] = 'Tour trong nước';
        $data['_view'] = 'tour/inbound';
        $this->load->view('layouts/home_main', $data);
    }
    /*
     * Load view outbound
     */
    public function outbound()
    {
        $data['tour'] = $this->Tour_model->get_tour_by_idtourtype('2');
        $data['title'] = 'Tour ngoài nước';
        $data['_view'] = 'tour/outbound';
        $this->load->view('layouts/home_main', $data);
    }
    /*
     * Load view inbound
     */
    public function event()
    {
        $data['tour'] = $this->Tour_model->get_all_tour();
        $data['title'] = 'Tour';
        $data['_view'] = 'tour/event';
        $this->load->view('layouts/home_main', $data);
    }
    /*
     * Adding a new tour
     */
    function add()
    {
        if (isset($_POST) && count($_POST) > 0) {
            $params = array(
                'Name' => $this->input->post('Name'),
                'Schedule' => $this->input->post('Schedule'),
                'Start' => $this->input->post('Start'),
                'NoDay' => $this->input->post('NoDay'),
                'NoNight' => $this->input->post('NoNight'),
                'Vehicle' => $this->input->post('Vehicle'),
                'Hotel' => $this->input->post('Hotel'),
                'NoTicket' => $this->input->post('NoTicket'),
                'Price' => $this->input->post('Price'),
                'IdTourType' => $this->input->post('IdTourType'),
                'Note' => $this->input->post('Note'),
            );

            $tour_id = $this->Tour_model->add_tour($params);
            redirect('tour/index');
        } else {
            $data['tourtype'] = $this->Tourtype_model->get_all_tourtype();
            $data['_view'] = 'tour/add';
            $this->load->view('layouts/main', $data);
        }
    }

    /*
     * Editing a tour
     */
    function edit($IdTour)
    {
        // check if the tour exists before trying to edit it
        $data['tour'] = $this->Tour_model->get_tour($IdTour);

        if (isset($data['tour']['IdTour'])) {
            if (isset($_POST) && count($_POST) > 0) {
                $params = array(
                    'Name' => $this->input->post('Name'),
                    'Schedule' => $this->input->post('Schedule'),
                    'Start' => $this->input->post('Start'),
                    'NoDay' => $this->input->post('NoDay'),
                    'NoNight' => $this->input->post('NoNight'),
                    'Vehicle' => $this->input->post('Vehicle'),
                    'Hotel' => $this->input->post('Hotel'),
                    'NoTicket' => $this->input->post('NoTicket'),
                    'Price' => $this->input->post('Price'),
                    'IdTourType' => $this->input->post('IdTourType'),
                    'Note' => $this->input->post('Note'),
                );

                $this->Tour_model->update_tour($IdTour, $params);
                redirect('tour/index');
            } else {
                $data['tourtype'] = $this->Tourtype_model->get_all_tourtype();
                $data['_view'] = 'tour/edit';
                $this->load->view('layouts/main', $data);
            }
        } else
            show_error('The tour you are trying to edit does not exist.');
    }

    /*
     * Deleting tour
     */
    function remove($IdTour)
    {
        $tour = $this->Tour_model->get_tour($IdTour);
        $des = $this->Tourdescription_model->get_tourdescription_by_IdTour($IdTour);
        // check if the tour description exists before trying to delete it
        if (isset($des)) {
            foreach ($des as $d) {
                $this->Tourdescription_model->delete_tourdescription($d['IdDesciption']);
            }
            if (isset($tour['IdTour'])) {
                $this->Tour_model->delete_tour($IdTour);
                redirect('tour/index');
            } else
                show_error('The tour you are trying to delete does not exist.');
        }
        else
        // check if the tour exists before trying to delete it
        if (isset($tour['IdTour'])) {
            $this->Tour_model->delete_tour($IdTour);
            redirect('tour/index');
        } else
            show_error('The tour you are trying to delete does not exist.');
    }
}
