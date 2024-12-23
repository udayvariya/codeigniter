<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('CartModel');
        $this->load->model('HomeModel');

    }
    public function index(){
        $data['cart'] = $this->CartModel->get_cart();
        $data['total'] = $this->CartModel->get_total();
        $data['get_category_nav'] = $this->HomeModel->get_category_nav();
        
        $this->load->view('front/cart',$data);

    }

    public function add_to_cart(){
        $post = $this->input->post();
       $check= $this->CartModel->add_to_cart($post);
       if($check){
       $this->session->set_flashdata('succMsg',"Add Product To Cart Sucessfully");
       redirect('cart');
       }
       else{
        $this->session->set_flashdata('errMsg',"Product already added on cart ");
        redirect('cart');
       }
    }

    public function cart_update(){
        $post = $this->input->post();
        $check= $this->CartModel->cart_update($post);
        
        if($check){
            $this->session->set_flashdata('succMsg',"Cart Updated Sucessfully");
            redirect('cart');
            }
            else{
             $this->session->set_flashdata('errMsg',"Cart Not Updated  ");
             redirect('cart');
            }
    }

    public function delete_product($pro_id){
       $check= $this->CartModel->delete_product($pro_id);
       if($check){
        $this->session->set_flashdata('succMsg',"Product Remove Sucessfully");
        redirect('cart');
        }
    }

}
?>