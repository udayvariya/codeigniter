<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {
    public function index(){
        // $this->form_validation;
        // if($this->form_validation->run()){
        //     echo "complete";
        // }
        // else{
        //     echo "not complete";
        // }

        $this->load->helper('form');
        $this->load->view('form');
    }
    public function my_func(){
        // $this->load->helper('form');
        // $this->load->library('form_validation');
        // $this->form_validation->set_rules('username', 'User name', 'required|trim');
        if($this->form_validation->run() == true){
            echo "yes not blank" ;   
        }
        else{
        // $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        $this->load->view('form');
        }
    }
}
?>