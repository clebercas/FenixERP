<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

public function __construct() {
        parent::__construct();
        if(!$this->ion_auth->logged_in())
        {
            redirect('login');
        }
    }
	public function index()
	{
		$this->load->view('layout/header');
                $this->load->view('principal/index');
                $this->load->view('layout/footer');
	}
}
