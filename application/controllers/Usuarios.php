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
        $this->load->library('form_validation');
    }

    public function index() {

        $data['users'] = $this->ion_auth->users()->result();

        $this->load->view('layout/header');
        $this->load->view('usuarios/index', $data);
        $this->load->view('layout/footer');
    }
    
    public function add() {

        $this->form_validation->set_rules('username', 'Nome', 'required|min_length[4]|max_length[12]',array('min_length'=>'O campo nome de usuário deve ter pelo menos 4 caracteres.'));
        $this->form_validation->set_rules('password', 'Senha', 'required|min_length[6]|max_length[12]',array('min_length'=>'O campo senha precisa ter 6 caracteres no mínimo.','max_length'=>'O campo senha precisa ter no máximo12 caracteres.'));
        $this->form_validation->set_rules('password2', 'Conferir senha', 'required|matches[password]',array('matches'=>'O campo senha não confere.'));
        $this->form_validation->set_rules('email', 'e-mail', 'required|valid_email|is_unique[users.email]');

        if ($this->form_validation->run() == TRUE)
        {
                $username = $this->input->post('username');
		$password = $this->input->post('password');
		$email = $this->input->post('email');
                $grupo = $this->input->post('grupo');
		$additional_data = array(
                                    'username'=>$username,
                );
		$group = array($grupo); // Sets user to admin.

		$this->ion_auth->register($username, $password, $email, $additional_data, $group);
                set_msg('msgsucess','Cadastro realizado com sucesso.','sucesso');
                redirect('usuarios','refresh');
        }
        else
            {
                $this->load->view('layout/header');
                $this->load->view('usuarios/add');
                $this->load->view('layout/footer');
            }
    }
    
    public function edit($id=NULL){
        if($id==NULL){
            set_msg('msgerro','Você precisa selecionar um usuário para alterar','erro');
            redirect('usuarios','refresh');
        }   
        
        $user = $this->ion_auth->user($id)->row();
        
        if($user==NULL){
            set_msg('msgerro','Você precisa selecionar um usuário para alterar','erro');
            redirect('usuarios','refresh');
        }
        
        $group = $this->ion_auth->get_users_groups($user->id)->row();
        
        $data['user'] = $user;
        $data['group'] = $group->id;
        $this->load->view('layout/header');
        $this->load->view('usuarios/edit',$data);
        $this->load->view('layout/footer');
       
        
    }

}
