<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class controlePresenca extends My_Controller {

    //variavel global usuario logado
    var $data;

    function __construct() {
        parent::__construct();
        /* Carrega o modelo */
        $this->load->model('usuario_model', 'model', TRUE);
        $this->load->model('evento_model', 'model', TRUE);
        $this->load->model('usuarioEvento_model', 'model', TRUE);

        //variavel global array
        $this->data = array(
            'idusuario' => $this->session->userdata("idusuario"),
            'nomeusuario' => $this->session->userdata("nomeusuario"),
            'tipousuario' => $this->session->userdata("tipousuario")
        );

        //$this->horario = date('d/m/Y H:i:s');
    }

    public function index($idevento) {
        $data = $this->data;
        $idevento = $idevento;
//        echo $idevento;
        
        $data['titulo'] = "SGE | Cadastro Usuário";
        $data['usuario'] = $this->model->listarParticipanteEventoPresenca($idevento); 
//        print_r($data);
        $this->template->load('template/v_headerInterno', 'evento/v_listaPresenca', $data);
    }
    
//    public function imprimirLista($idevento) {
////        $data = $this->data;
//        $this->load->model('usuario_model', 'model', TRUE);
////        $data['titulo'] = "SGE | Cadastro Usuário";
////        $data['usuario'] = $this->model->listarParticipanteEvento($idevento);        
//        $this->load->view('evento/v_listaPresenca');
//    }
}