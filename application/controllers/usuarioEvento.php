<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UsuarioEvento extends CI_Controller {

      function __construct() {
        parent::__construct();
        /* Carrega o modelo */
        $this->load->model('usuarioEvento_model', 'model', TRUE);
        $this->load->model('usuario_model', 'model', TRUE);
        $this->load->model('evento_model', 'model', TRUE);
        //$this->horario = date('d/m/Y H:i:s');
    }

    //repetido(tela usuário), verificar exclusão, listar eventos participante, login obrigatório
//    public function listarEventoParticipante($idusuario) {
//        $this->load->helper('form');
//        $data['titulo'] = "SGE | Participante";
//        $data['idusuario'] = $this->session->userdata("idusuario");
//        $data['participanteevento'] = $this->model->listarEventoParticipante($idusuario);
//        $this->template->load('template/v_headerInterno', 'participante/v_inscricaoparticipante', $data);
//      //  $this->template->load('template/v_headerInterno', 'participante/v_cursoparticipante', $data);
//    }
    
    //inscrição de participante em curso, login obrigatório
    public function inscricao_participante() {
        $this->load->helper('form');
        $data['titulo'] = "SGE | Participante";
        $data['idusuario'] = $this->session->userdata("idusuario");
        $data['participanteevento'] = $this->model->listarEventoParticipante();
        $this->template->load('template/v_headerInterno', 'participante/v_inscricaoparticipante', $data);
      //  $this->template->load('template/v_headerInterno', 'participante/v_cursoparticipante', $data);
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
        $this->form_validation->set_rules('tipo', 'tipo', 'required|max_length[100]');

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
            $data['tipo'] = $this->input->post('tipo');

            /* Carrega o modelo */
            $this->load->model('usuario_model', 'model', TRUE);

            /* Chama a função inserir do modelo */
            if ($this->model->inserir($data)) {
                echo 'cadastro realizado com sucesso';
            } else {
                log_message('error', 'Erro ao cadastrar usuário interno.');
            }
        }
    }

    function deletar($idusuarioevento) {

        /* Executa a função deletar do modelo o curso que o participante inscreveu passando como parâmetro o id do usuárioevento */
        if ($this->model->deletar($idusuarioevento)) {
            redirect('/usuario/index_participante');
        } else {
            log_message('error', 'Erro ao cancelar a inscrição.');
        }
    }
}
