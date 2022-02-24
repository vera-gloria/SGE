<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Participante extends My_Controller {

    function _construct() {
        parent::_construct();
//        $this->load->helper('form');
//        $this->load->library('form_validation');
        $this->load->model('evento_model', 'model', TRUE);
    }

    //area do participante
    public function index() {
        $this->load->helper('form');
        $data['titulo'] = "SGE | Participante";
        $data['idusuario'] = $this->session->userdata("idusuario");
        $this->template->load('v_headerInterno', 'participante/index', $data);
    }

    //lista eventos vinculados ao participante
    public function listarEvento() {
        $this->load->helper('form');
        $this->load->model('evento_model', 'model', TRUE);
        $data['titulo'] = "SGE | Cadastro";
        $data['usuevento'] = $this->model->listarEventos();
        $this->template->load('v_headerInterno', 'participante/cursoparticipante', $data);
    }

    //insere o usuário interno
    public function inserir() {
        /* biblioteca do CodeIgniter responsável por validar formulários */
        $this->load->library('form_validation');

        /* Define as tags onde a mensagem de erro será exibida na página */
        $this->form_validation->set_error_delimiters('<span>', '</span>');

        /* Define as regras para validação */
        $this->form_validation->set_rules('nome', 'Nome', 'required|max_length[40]');
        $this->form_validation->set_rules('email', 'E-mail', 'trim|required|valid_email|max_length[100]');

        /* Executa a validação e caso houver erro chama a função index do controlador */
        if ($this->form_validation->run() === FALSE) {
            $this->index();
            /* Senão, caso sucesso: */
        } else {
            /* Recebe os dados do formulário (visão) */
            $data['nome'] = $this->input->post('nome');
            $data['email'] = $this->input->post('email');

            /* Carrega o modelo */
            $this->load->model('cadastroParticipante_model', 'model', TRUE);

            /* Chama a função inserir do modelo */
            if ($this->model->inserir($data)) {
                redirect('v_sucesso');
            } else {
                log_message('error', 'Erro usuário interno.');
            }
        }
    }

//inscrever participante no evento
    public function inscreverparticipante() {
        if (filter_input_array(INPUT_POST)) {
            $resultado = $this->usuario_model->validaUsuario($_POST);
            if (!empty($resultado)) {
                $this->session->set_userdata("logado", 1);
                if ($resultado->tipo == '2') {
                    redirect(base_url('acessoRestrito/participante'));
                }
            } else {
                redirect(base_url('acessoRestrito/participante'));
            }
        }
    }

}
