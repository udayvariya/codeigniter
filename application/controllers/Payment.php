<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('PaymentModel');
        $this->load->model('CartModel');

        $data['cart'] = $this->CartModel->get_cart();
        // $user_id = $data['cart']->user_id;

    }
    public function index(){
        $data['cart'] = $this->CartModel->get_cart();

            $this->load->view('front/payment',$data);
        }

    public function sucess(){
        $data['cart'] = $this->CartModel->get_cart();

        $this->PaymentModel->sucess($data);
    }
    }
?>