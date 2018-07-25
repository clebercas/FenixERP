<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index() {

        $this->form_validation->set_rules('username', 'E-mail', 'required');
        $this->form_validation->set_rules('password', 'Senha', 'required');

        if ($this->form_validation->run() == TRUE) {
            $identity = $this->input->post('username');
            $password = $this->input->post('password');
            $remember = TRUE; // remember the user

            if ($this->ion_auth->login($identity, $password, $remember)) {
                redirect('principal', 'refresh');
            } else {
                redirect('login', 'refresh');
            }
        } else {
            $this->load->view('layout/header');
            $this->load->view('login/index');
            $this->load->view('layout/footer');
        }
    }
    
    public function logout()
    {        
        $logout = $this->ion_auth->logout();
        redirect('login','refresh');
    }

}
