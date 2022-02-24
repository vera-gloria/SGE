<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

//    public $tipo;
    public $logado;
    public $evento;

    function __construct() {
        parent::__construct();
        /* Carrega o modelo */
        $this->load->model('usuario_model');
        $this->load->model('evento_model', 'model', TRUE);
    }

    public function index() {

//        $data['evento'] = $this->model->listarEventos();
//        $data['evento'] = $this->model->listarEventoAtivo();
        $logado = $this->session->userdata("logado");
//        $data['tipoevento'] = $this->model->listarTipos();
//        
//        print_r($idevento);
        $eventos = $this->model->listarEventoHome();



//        print_r($data);
        foreach ($eventos as $e) {

            $vagas = $this->model->contadorVagas($e->idevento);

            foreach ($vagas as $row) {
                $e->vagasrestantes = $row; //    
            }
        }

        $data['evento'] = $eventos;

// print_r($data);
//        print_r($idevento);
//        $data['tabtipoevento'] = $this->model->listarEventoTipoAtivo($tipo);
//        print_r($data);
//        print_r($data);
//        $this->template->load('template/v_headerInterno', 'evento/v_evento', $data);
//        echo 'Você confirma a inscrição no curso?';
        if ($logado != 1) {
            $this->load->view('template/v_header');
            $this->load->view('home/v_home', $data);
//            print_r($data);
//             $this->template->load('template/v_header', 'home/v_home', $data);
        } else if ($logado) {
            $this->data = array(
                $data['idusuario'] = $this->session->userdata("idusuario"),
                $data['nomeusuario'] = $this->session->userdata("nomeusuario"),
                $data['tipousuario'] = $this->session->userdata("tipousuario")
            );

//            $this->template->load('template/v_headerInterno', 'home/v_homelogado', $data);
            $this->template->load('template/v_headerInterno', 'home/v_home', $data);
        }
    }

    public function exibirTipo() {

        $logado = $this->session->userdata("logado");
        $data['tipo'] = $this->model->Tipos();
        $data['evento'] = $this->model->listarEventoTipoAtivo();

        if ($logado != 1) {
            $this->load->view('template/v_header');
            $this->load->view('home/v_home', $data);
        } else if ($logado) {
            $this->data = array(
                $data['idusuario'] = $this->session->userdata("idusuario"),
                $data['nomeusuario'] = $this->session->userdata("nomeusuario")
            );
            $this->template->load('template/v_headerInterno', 'home/v_homelogado', $data);
        }
    }

    //comparação do usuário/senha digitados com os gravados
    public function logar() {

        if (filter_input_array(INPUT_POST)) {
            $resultado = $this->usuario_model->validaUsuario($_POST);
            // print_r($resultado);

            if (!empty($resultado)) {
                $this->session->set_userdata("logado", 1);
                $this->session->set_userdata("idusuario", $resultado->idusuario);
                $this->session->set_userdata("nomeusuario", $resultado->nome);
                $this->session->set_userdata("tipousuario", $resultado->tipo);

                redirect(base_url('usuario/index'));
//                if ($resultado->tipo == '1') {
////                    $this->session->set_userdata('tipousuario','1');
//                    redirect(base_url('usuario/index_gerenteeventos'));
//                } else if ($resultado->tipo == '2') {
////                    $this->session->set_userdata('tipousuario','2');
//                    redirect(base_url('usuario/index_participante'));
//                } else if ($resultado->tipo == '3') {
////                    $this->session->set_userdata('tipousuario','3');
//                    redirect(base_url('usuario/index_organizador'));
//                } else if ($resultado->tipo == '4') {
////                    $this->session->set_userdata('tipousuario','4');
//                    redirect(base_url('usuario/index_palestranteinstrutor'));
//                }
            } else {
                // $this->session->set_flashdata('flash_data', 'E-mail ou senha incprreta!');
//                redirect(base_url('acessoRestrito/participante'));
                //redirect('login');
                //$this->load->view('v_erro_senha');
                //caso a senha/usuário estejam incorretos, então mando o usuário novamente para a tela de login com uma mensagem de erro.
                $dados['erro'] = "Usuário/Senha incorretos";
                $this->load->view('template/v_header');
                $this->load->view("login/v_login", $dados);
            }
        }
    }

    //destroi a variavel logado na sessão e redireciona para a url base
    public function logout() {
        $this->session->unset_userdata("logado");
        $this->session->unset_userdata("data");
//        $this->session->unset_userdata("tipousuario");
        redirect(base_url('home'));
    }

    //tela detalhe eventos
    public function detalharEvento($idevento) {
        $data['titulo'] = "SGE | Detalhe Evento xxxx";
        $data['idevento'] = $idevento;
        $data['evento'] = $this->model->listarDetalheEvento($idevento);
        $logado = $this->session->userdata("logado");
        if ($logado != 1) {
            $this->template->load('template/v_header', 'evento/v_detalheEvento', $data);
            $this->load->view('evento/v_detalheEvento');
        } else {
            $this->data = array(
                $data['idusuario'] = $this->session->userdata("idusuario"),
                $data['nomeusuario'] = $this->session->userdata("nomeusuario"),
                $data['tipousuario'] = $this->session->userdata("tipousuario")
                
            );
            $this->template->load('template/v_headerInterno', 'evento/v_detalheEvento', $data);
        }
    }

    public function curso() {

        $this->load->helper('form');
        $data['titulo'] = "SGE | Cadastro Evento";
        $data['evento'] = $this->model->listarEventos();
        $this->template->load('template/v_headerInterno', 'evento/v_cursos', $data);
    }

    public function login() {

        $this->load->view('template/v_header');
        $this->load->view('login/v_login');
    }

    //inscrição do participante no evento
    public function inscrever($idevento) {
        $data['idevento'] = $idevento;
        $logado = $this->session->userdata("logado");

        if ($logado != 1) {
            redirect(base_url('home/login'));
            if ($logado) {
//                echo 'Você confirma a inscrição no curso2?';
                $this->data = array(
                    $data['idusuario'] = $this->session->userdata("idusuario"),
                    $data['idevento'] = $idevento,
                    $data['nomeusuario'] = $this->session->userdata("nomeusuario"),
                    $data['tipousuario'] = $this->session->userdata("tipousuario"),
//            'nomeusuario' => $this->session->userdata("nomeusuario")
                );
                $dados['evento'] = $this->model->pagarInscricao($idevento);
                $this->template->load('template/v_headerInterno', 'evento/v_pagamento', $dados, $data);
            }
        } else {
//            $this->load->view('template/v_header');
//            echo 'Você confirma a inscrição no curso2?';

            $this->data = array(
                $data['idusuario'] = $this->session->userdata("idusuario"),
                $data['idevento'] = $idevento,
                 $data['tipousuario'] = $this->session->userdata("tipousuario"),
            );
            $dados['idusuario'] = $this->session->userdata("idusuario");
            $dados['nomeusuario'] = $this->session->userdata("nomeusuario");
            $dados['tipousuario'] = $this->session->userdata("tipousuario");

            $dados['evento'] = $this->model->pagarInscricao($idevento);
            $this->template->load('template/v_headerInterno', 'evento/v_pagamento', $dados, $data);
        }
    }

    //Formulário cadastro do participante
    public function inserirParticipante() {
        $this->load->model('estado_model');
        $this->load->model('cidade_model');
        $this->load->helper('form');
//        $data = $this->data;
        $data['estados'] = $this->estado_model->listarTodosEstados();
        $data['cidades'] = $this->cidade_model->listarCidadesEstado();
        $data['titulo'] = "SGE | Cadastro Usuário";
        $this->template->load('template/v_header', 'usuario/v_cadastroparticipante', $data);
//        $this->load->view('template/v_headerInterno', 'usuario/v_cadastroparticipante', $data);
    }

}
