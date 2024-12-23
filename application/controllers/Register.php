<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('RegisterModel');  // Load the model here
    }
    public function index(){
        $this->form_validation->set_rules('username','full name','required|trim');
        $this->form_validation->set_rules('email','email','required|trim|valid_email|is_unique[ec_user.email]',['is_unique'=>'This Email Is Already Exits']);
        $this->form_validation->set_rules('password','password','required|trim|min_length[6]');

        if($this->form_validation->run()){
          $post =$this->input->post();
          $check = $this->RegisterModel->register($post);
            
            if($check){
                redirect('Login');
            }
         
        }else{
             $this->load->view('front/register');
        }

      
    }
}
?>