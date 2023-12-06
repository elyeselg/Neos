<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Map extends CI_Controller
{
    public function index()
    {
        //proteger cette page 
        //tester si utilisateur est connecté

        if ($this->session->has_userdata('user_data')) {
            $this->load->view('map_view');
        } else {
            redirect('signin');
        }
    }
}
