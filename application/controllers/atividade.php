<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Atividades extends CI_Controller {

    function __construct() {
        parent::__construct();
        /* Carrega o modelo */
        $this->load->model('evento_model', 'model', TRUE);
    }

    //lista eventos
    public function index() {
        $this->load->helper('form');
        $data['titulo'] = "SGE | Cadastro Evento";
        $data['evento'] = $this->model->listarEventos();
        $this->template->load('v_headerInterno', 'v_evento', $data);
    }
}
