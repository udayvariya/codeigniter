<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterModel extends CI_Model {

    public function register($post){
     

        $data['user_id'] = mt_rand(11111,99999);
        $data['username'] = $post['username'];
        $data['email'] = $post['email'];

        $data['password'] = $post['password'];
        $data['status'] = 1 ;
        $data['ip'] = $_SERVER['REMOTE_ADDR'];
        $data['added_on'] = date('d M,Y');  

        $q = $this->db->insert('ec_user',$data);
        if($q){
            return true;
            redirect('front/login');
        }
        else
        {
            return false;
        }
    }
}
?>