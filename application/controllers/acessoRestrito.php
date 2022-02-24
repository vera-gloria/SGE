<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AcessoRestrito extends My_Controller {
    
    //private $horario = null;

    public function _construct() {
        parent::_construct();
        //$this->horario = date('d/m/Y H:i:s');
    }

    public function index() {
        
    }

    //area do funcionario
    public function interno() {
        //$this->load->view('v_headerInterno');
        $this->load->helper('form');
        $data['titulo'] = "SGE | Funcionário";
        $this->template->load('v_headerInterno', 'v_funcionario', $data);
    }

    //area do participante
//    public function participante() {
//        $this->load->helper('form');
//        $data['titulo'] = "SGE | Participante";
//        $data['idusuario'] = $this->session->userdata("idusuario");
//        $this->template->load('v_headerInterno', 'participante/index', $data);
//    }

    public function evento() {
        $this->load->view('v_headerInterno');
        $this->load->view('v_evento');
        $this->load->view('v_footerInterno');
    }

}
