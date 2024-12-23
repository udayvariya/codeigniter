<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('CheckoutModel');
        $this->load->model('CartModel');
        $this->load->model('HomeModel');


    }
    public function index(){
        $this->form_validation->set_rules('email','email','required|trim');
        $this->form_validation->set_rules('name','name','required|trim');
        $this->form_validation->set_rules('address','address','required|trim');
        $this->form_validation->set_rules('city','city','required|trim');
        $this->form_validation->set_rules('country','country','required|trim');
        $this->form_validation->set_rules('phoneno','phoneno','required|trim');

        if($this->form_validation->run()){
            $post = $this->input->post();
            
            $check= $this->CheckoutModel->add_to_cart($post);
            if($check){
                redirect('Payment');
               }
               else{
                return false;
                }
        }
        else{
            $data['cart'] = $this->CartModel->get_cart();
            $data['total'] = $this->CartModel->get_total();
            $data['get_category_nav'] = $this->HomeModel->get_category_nav();
            $data['cart'] = $this->CartModel->get_cart();
        
            $this->load->view('front/checkout',$data);
        }


    }



}
?>