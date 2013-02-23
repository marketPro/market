<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
    function index(){
        
        $this->profile();
        
    }
    ///////////////////
    function profile(){
         if ($this->session->userdata('logged_in')) {
             
			// print_r($this->session->userdata); 
            $this->load->view('user_profile');
            
        }else{
            redirect('site/index');
        }
        
        
    }
}

?>