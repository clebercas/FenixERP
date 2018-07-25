<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        if (!$this->ion_auth->logged_in()) {
            redirect('login');
        }
        $this->load->model('ion_auth_model');
    }

    public function index() {

        $data['users'] = $this->ion_auth->users()->result();

        $this->load->view('layout/header');
        $this->load->view('usuarios/index',$data);
        $this->load->view('layout/footer');
    }

}
