<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inscricao extends CI_Controller {

    function __construct() {
        parent::__construct();
        /* Carrega o modelo */
        $this->load->model('evento_model', 'model', TRUE);
    }

    //lista eventos
    public function index($idevento) {
        $this->load->helper('form');
        $data['titulo'] = "SGE | Cadastro Evento";
        $this->template->load('v_header', 'participante/cadastro', $data);
    }
}
