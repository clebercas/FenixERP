<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        if (!$this->ion_auth->logged_in()) {
            redirect('login');
        }
        if (!$this->ion_auth->in_group(1)) {
            $this->session->set_flashdata('message', 'You must be an admin to view this page');
            redirect('principal');
        }

        $this->load->model('ion_auth_model');
    }

    public function index() {

        $data['users'] = $this->ion_auth->users()->result();

        $this->load->view('layout/header');
        $this->load->view('usuarios/index', $data);
        $this->load->view('layout/footer');
    }
    
    public function add() {


        $this->load->view('layout/header');
        $this->load->view('usuarios/add');
        $this->load->view('layout/footer');
    }

}
