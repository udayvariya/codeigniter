<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('categoryModel');
    }

    public function index(){
        $this->form_validation->set_rules('cate_name','category','required|trim');
        $this->form_validation->set_rules('status','status','required|trim');
        if($this->form_validation->run()){
            $post = $this->input->post();
            
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = '*';

            $this->load->library('upload',$config);
            $this->upload->do_upload('image');
            $data=$this->upload->data();
            $post['image']=$data['raw_name'].$data['file_ext'];

            $check = $this->categoryModel->add_category($post);
            if($check){
                $this->session->set_flashdata('succMsg','data inserted sucessfully');
                redirect('category');
            }
        }
        else{
            $data['categories'] = $this->categoryModel->all_category();
            $this->load->view('category',$data);
        }
    }

    public function get_sub_cate(){
        $cate_id = $this->input->post('cate_id');
        print_r($this->categoryModel->get_sub_cate($cate_id));
    }
}
?>