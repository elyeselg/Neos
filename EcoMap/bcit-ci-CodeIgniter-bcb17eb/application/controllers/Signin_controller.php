<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Signin extends CI_Controller{
   


        public function __construct()
        {
            parent::__construct();
            
            
        }
    




    public function index(){

        $this->form_validation->set_rules('username','Username','required|valid_email');
        $this->form_validation->set_rules('password','Password','required');
        
        if($this->form_validation->run()){
            $username=$this->input->post('username');
            $password=$this->input->post('password');
            $this->load->model('Signin_model');
            $validate=$this->Signin_model->index($username,$password);
            
            if($validate){
                $this->session->set_userdata('user_data',$validate);	
                redirect('map');
            
            } 
            
            else {
                $this->session->set_flashdata('error','Invalid login details.Please try again.');
                redirect('signin');
            }
        } 
        else{
            $this->load->view('signin');	
        }
}
}
