<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Tour_model');
        $this->load->model('Bill_model');
        $this->load->model('Billinfo_model');
    }

    public function index()
    {
        if (isset($_SESSION['isLogin']))
            $data['user'] = $this->User_model->get_user($_SESSION['lgIdUser']);
        $idTour = $_GET['id'];
        $data['tour'] = $this->Tour_model->get_tour($idTour);
        if (isset($_POST['btnCart'])) {
            $to = $this->input->post('email');
            $subject = 'Cám ơn ' . $this->input->post('name') . ' đã đặt tour ' . $data['tour']['Name'];
            $message = 'Cám ơn bạn đã quan tâm và ủng hộ Tourist Half Way. Chúc bạn và gia đình có một chuyến đi vui vẻ! Chúng tôi rất hân hạnh được phục vụ!';
            $pay = $this->input->post('pay');
            if ($to != '') {
                $this->session->set_flashdata('send_cart_success', 'Bạn đã đặt vé thành công. Chúc bạn có những chuyến đi thú vị cùng Tourist Half Way!!!');
                mail($to, $subject, $message);
                mail('touristhalfway@gmail.com', 'Đơn của khách hàng ' . $data['user']['Fullname'], $pay);
            }
            $bill = array(
                'OrderDate' => date('yyyy/MM/dd'),
                'Status' => $this->input->post('method'),
                'IdUser' => $data['user']['IdUser'] ?? '',
                'CustomerName' => $this->input->post('name'),
                'CustomerIdentityCard' => $this->input->post('IdentityCard'),
                'CustomerBirthday' => $data['user']['Birthday'] ?? '',
                'CustomerAddress' => $this->input->post('address'),
                'CustomerPhone' => $this->input->post('phone'),
                'CustomerEmail' => $this->input->post('email'),
                'Note' => $this->input->post('Note') ?? '',
            );
            $bill_id = $this->Bill_model->add_bill($bill);
            $billinfo = array(
                'IdBill' => $bill_id,
                'NoAdult' => $this->input->post('amountAdult'),
                'NoChildren' => $this->input->post('amountChildren'),
                'TotalPrice' => implode('',explode(',',$this->input->post('pay'))),
                'Note' => $this->input->post('Note') ?? '',
            );
            $billinfo_id = $this->Billinfo_model->add_billinfo($billinfo);
            $data['_view'] = 'cart';
            $data['title'] = 'Thanh toán';
            $this->load->view('layouts/home_main', $data);
        }
        $data['_view'] = 'cart';
        $data['title'] = 'Thanh toán';
        $this->load->view('layouts/home_main', $data);
    }
}
