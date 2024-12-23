<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaymentModel extends CI_Model {
        
        
        public function sucess($data){
        $q = $this->db->where('user_id',$this->session->userdata('login_id'))->update('ec_cart',['success_place'=>'1']);

        if($q){
            $this->session->set_flashdata('orderPlaced',"Order Placed Sucessfuly");

            redirect('#');

        }
        else{
            echo "not complete";
        }
    
    }
}

?>