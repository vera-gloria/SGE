<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
function __construct() {
        parent::__construct();
        /* Carrega o modelo */
//        $this->load->model('conteudo_model', 'model', TRUE);
    }

    public function index() {
        $this->load->view('template/v_header');    
        $this->load->view('login/v_login');        
  }
  
  public function recuperarSenha() {
        $this->load->view('template/v_header');    
        $this->load->view('login/v_recuperarsenha');        
  }
}
    

?>