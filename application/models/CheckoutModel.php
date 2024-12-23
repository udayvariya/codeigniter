<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CheckoutModel extends CI_Model {
        
        
        public function add_to_cart($post){
        $post['user_id'] = mt_rand(11111,99999);
        $q = $this->db->insert('ec_address',$post);
        if($q){
            return true;
        }
        else{
            return false;
        }
    
    }
}

?>