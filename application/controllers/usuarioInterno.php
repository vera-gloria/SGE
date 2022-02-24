<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UsuarioInterno extends CI_Controller {

    function _construct() {
        parent::_construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index() {
        $this->load->helper('form');
        $data['titulo'] = "SGE | Cadastro Usuário";
        $this->load->view('v_headerInterno');
        $this->load->view('v_usuarioInterno.php', $data);
    }

    //insere o usuário interno
    public function inserir() {
        /* biblioteca do CodeIgniter responsável por validar formulários */
        $this->load->library('form_validation');

        /* Define as tags onde a mensagem de erro será exibida na página */
        $this->form_validation->set_error_delimiters('<span>', '</span>');

        /* Define as regras para validação */
        $this->form_validation->set_rules('idusuario', 'idusuario');
        $this->form_validation->set_rules('nome', 'nome', 'required|max_length[40]');
        $this->form_validation->set_rules('cpf', 'cpf', 'required|max_length[11]');
        $this->form_validation->set_rules('endereco', 'endereco', 'required|max_length[100]');
        $this->form_validation->set_rules('email', 'e-mail', 'trim|required|max_length[100]');
        $this->form_validation->set_rules('senha', 'senha', 'required|max_length[100]');

        /* Executa a validação e caso houver erro chama a função index do controlador */
        if ($this->form_validation->run() === FALSE) {
            //$this->index();
            echo 'Erro';
            /* Senão, caso sucesso: */
        } else {
            /* Recebe os dados do formulário (visão) */
            $data['idusuario'] = $this->input->post('idusuario');
            $data['nome'] = $this->input->post('nome');
            $data['cpf'] = $this->input->post('cpf');
            $data['endereco'] = $this->input->post('endereco');
            $data['email'] = $this->input->post('email');
            $data['senha'] = $this->input->post('senha');

            /* Carrega o modelo */
            $this->load->model('usuarioInterno_model', 'model', TRUE);

            /* Chama a função inserir do modelo */
            if ($this->model->inserir($data)) {
                echo 'cadastro realizado com sucesso';
            } else {
                log_message('error', 'Erro ao cadastrar usuário interno.');
            }
        }
    }
}
