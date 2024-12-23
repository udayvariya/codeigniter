<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('categoryModel');
        $this->load->model('productModel');
        $this->load->model('HomeModel');


    }

    public function index(){
        $this->form_validation->set_rules('pro_id','product id','required|trim');
        $this->form_validation->set_rules('category','category','required|trim');
        $this->form_validation->set_rules('pro_name','product name','required|trim');
        $this->form_validation->set_rules('brand','brand','required|trim');
        $this->form_validation->set_rules('featured','featured','required|trim');
        $this->form_validation->set_rules('highlights','highlights','required|trim');
        $this->form_validation->set_rules('description','description','required|trim');
        $this->form_validation->set_rules('stock','stock','required|trim');
        $this->form_validation->set_rules('mrp','mrp','required|trim');
        $this->form_validation->set_rules('selling_price','selling price','required|trim');
        $this->form_validation->set_rules('status','status','required|trim');
       
        if(empty($_FILES['pro_main_image']['name'])){
        $this->form_validation->set_rules('pro_main_image','product image','required|trim');
        }
        if(empty($_FILES['gallery_image']['name'])){
            $this->form_validation->set_rules('gallery_image','gallery image','required|trim');
            }
    

        if($this->form_validation->run()){
           
            $post = $this->input->post();

            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = '*';

            $this->load->library('upload',$config);
            $this->upload->do_upload('pro_main_image');
            $this->upload->do_upload('gallery_image');
            
            $data=$this->upload->data();
            $post['pro_main_image']=$data['raw_name'].$data['file_ext'];
            $post['gallery_image'] = $data['raw_name'].$data['file_ext'];
            

            $check = $this->productModel->add_product($post);
            if($check){
                $this->session->set_flashdata('succMsg','Product added successfuly');
                redirect('product');
            }else{
                $this->session->set_flashdata('errMsg','Product not added ');
                redirect('product');
            }
        
        }   
        else{
            $data['categories'] = $this->categoryModel->all_category();
        $data['get_category_nav'] = $this->HomeModel->get_category_nav();
            $this->load->view('product',$data);
        } 
    }

    public function product_by_cat($slug,$slug2 = ''){
        if(!empty($slug) && !empty($slug2)){
            $slug = $slug2;
        }
        else{
            $slug = $slug;
        }
      
        $cat_id = $this->productModel->fetch_cat($slug);
       $product = $this->productModel->fetch_product($cat_id);
       echo "<pre>";
       print_r($product);
    }


}
?>