<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signup extends CI_Controller
{ 
    public function index()
    {
	
        //Form Validation
        $this->form_validation->set_rules('username', 'Username', 'required|alpha');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.Email]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'required|min_length[6]|matches[password]');
        $this->form_validation->set_message('is_unique', 'This email is already exists.');
        if ($this->form_validation->run()) {
            //Getting Post Values
            $username = $this->input->post('username');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $this->load->model('Signup_model');
            $this->Signup_model->insert( $username, $email, $password);
        } else {
            $this->load->view('Signup');

        }
    }
}
