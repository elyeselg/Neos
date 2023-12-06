<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signup_Model extends CI_Model
{
    public function insert( $username, $email, $password)
    {
        $data = array(
            'Username' => $username,
            'Email' => $email,
            'Password' => $password
        );
        $query = $this->db->insert('users', $data);
        if ($query) {
            $this->session->set_flashdata('success', 'Registration successfull, Now you can login.');
            redirect('signin');
        } else {
            $this->session->set_flashdata('error', 'Something went wrong. Please try again.');
            redirect('signup');
        }
    }
}
