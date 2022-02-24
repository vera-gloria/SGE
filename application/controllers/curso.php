<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Curso extends My_Controller {

    function __construct() {
        parent::__construct();
        /* Carrega o modelo */
        $this->load->model('evento_model', 'model', TRUE);
    }

    //verifica se o usuário esta logado para redirecionar para inscrição
//    public function index() {
//        if ($logado = 1) {
//            
//        } else {
//
//            $this->load->view('v_header');
//            $this->load->view('v_login');
//        }
//    }

}
    