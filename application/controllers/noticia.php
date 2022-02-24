<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Noticia extends My_Controller {
    
    public function _construct() {
        parent::_construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('noticia_model','noticia');
    }
    
    public function index(){
        redirect('noticia/listar', 'refresh');
    }
    
    public function listar(){
       $dados['titulo'] = "SGE | Listagem de Notícias";
       $dados['h2'] = "Listagem de Notícias";
       $dados['tela'] = "listar";
       $this->template->load('v_headerInterno', 'v_noticias', $dados); 
    }
}