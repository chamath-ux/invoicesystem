<?php

class Invoice_controller extends CI_Controller{
    
    public function loading($page = 'home'){
        
        $this->load->view('pages/'.$page);
    }
}