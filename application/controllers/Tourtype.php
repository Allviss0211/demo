<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tourtype extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tourtype_model');
    } 

    /*
     * Listing of tourtype
     */
    function index()
    {
        $data['tourtype'] = $this->Tourtype_model->get_all_tourtype();
        
        $data['_view'] = 'tourtype/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new tourtype
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'Name' => $this->input->post('Name'),
				'Note' => $this->input->post('Note'),
            );
            
            $tourtype_id = $this->Tourtype_model->add_tourtype($params);
            redirect('tourtype/index');
        }
        else
        {            
            $data['_view'] = 'tourtype/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a tourtype
     */
    function edit($IdTourType)
    {   
        // check if the tourtype exists before trying to edit it
        $data['tourtype'] = $this->Tourtype_model->get_tourtype($IdTourType);
        
        if(isset($data['tourtype']['IdTourType']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'Name' => $this->input->post('Name'),
					'Note' => $this->input->post('Note'),
                );

                $this->Tourtype_model->update_tourtype($IdTourType,$params);            
                redirect('tourtype/index');
            }
            else
            {
                $data['_view'] = 'tourtype/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The tourtype you are trying to edit does not exist.');
    } 

    /*
     * Deleting tourtype
     */
    function remove($IdTourType)
    {
        $tourtype = $this->Tourtype_model->get_tourtype($IdTourType);

        // check if the tourtype exists before trying to delete it
        if(isset($tourtype['IdTourType']))
        {
            $this->Tourtype_model->delete_tourtype($IdTourType);
            redirect('tourtype/index');
        }
        else
            show_error('The tourtype you are trying to delete does not exist.');
    }
    
}
