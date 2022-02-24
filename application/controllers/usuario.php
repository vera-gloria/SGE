<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends My_Controller {

    //variavel global usuario logado
    var $data;
//     var $tipousuario;

    function __construct() {
        parent::__construct();
        /* Carrega o modelo */

        $this->load->model('usuario_model');
        $this->load->model('estado_model');
        $this->load->model('evento_model');
        //$this->load->model('usuario_model');



        //variavel global array
        $this->data = array(
            'idusuario' => $this->session->userdata("idusuario"),
            'nomeusuario' => $this->session->userdata("nomeusuario"),
            'tipousuario' => $this->session->userdata("tipousuario")
        );

        //$this->horario = date('d/m/Y H:i:s');
    }
    
     //Home - acesso geral
    public function index() {
        $this->load->helper('form');
        $data = $this->data;
        $this -> session -> set_userdata ($data);
        $data['titulo'] = "SGE | Cadastro Usuário";
        $data['idusuario'] = $this->session->userdata("idusuario");
        $data['nomeusuario'] = $this->session->userdata("nomeusuario");
        
        $this->template->load('template/v_headerInterno', 'usuario/index', $data);
    }


 
    //area do participante tipo = 2
    public function index_participante() {
        $this->load->helper('form');
        $data = $this->data;
        $data['titulo'] = "SGE | Participante";
        $data['idusuario'] = $this->session->userdata("idusuario");
        $data['nomeusuario'] = $this->session->userdata("nomeusuario");
        $data['participanteevento'] = $this->usuario_model->listarEventoParticipante($data['idusuario']);
 
        $this->template->load('template/v_headerInterno', 'participante/v_participante', $data);
       
    }
    
    //area do participante tipo = 3
    public function index_organizador() {
        $this->load->helper('form');
        $data = $this->data;
        $data['titulo'] = "SGE | Participante";
        $data['idusuario'] = $this->session->userdata("idusuario");
        $data['nomeusuario'] = $this->session->userdata("nomeusuario");
        $data['participanteevento'] = $this->usuario_model->listarEventoOrganizador($data['idusuario']);
        $this->template->load('template/v_headerInterno', 'evento/v_evento', $data);
        //$this->template->load('template/v_rodape');
        //  $this->template->load('template/v_headerInterno', 'participante/v_cursoparticipante', $data);
    }
    
    //area do participante tipo = 4
    public function index_palestranteinstrutor() {
        $this->load->helper('form');
        $data = $this->data;
        $data['titulo'] = "SGE | Participante";
        $data['idusuario'] = $this->session->userdata("idusuario");
        $data['nomeusuario'] = $this->session->userdata("nomeusuario");
        $data['eventopalestrante'] = $this->usuario_model->listarEventoPalestranteInstrutor($data['idusuario']);
        $this->template->load('template/v_headerInterno', 'palestranteInstrutor/v_palestranteinstrutor', $data);
    }

    //incrição de participante em curso, login obrigatório
    public function inscricao_participante() {
        $data['titulo'] = "SGE | Participante";
        $data['idusuario'] = $this->session->userdata("idusuario");
        $data['participanteevento'] = $this->evento_model->listarEvento();
        $this->template->load('template/v_headerInterno', 'participante/v_inscricaoparticipante', $data);
    }

    //tela cadastro usuário interno - acesso gerente de eventos tipo = 1
    public function listar() {
        $this->load->helper('form');
        $data = $this->data;
        $data['titulo'] = "SGE | Cadastro Usuário";
        $data['usuario'] = $this->usuario_model->listar();
        $this->template->load('template/v_headerInterno', 'usuario/v_lista', $data);
    }

//tela cadastro usuário interno - acesso gerente de eventos tipo = 1
    public function cadastrar() {
        $this->load->model('estado_model');
        $this->load->model('cidade_model');
        $this->load->helper('form');
        $data = $this->data;
        $data['estados'] = $this->estado_model->listarTodosEstados();
        $data['cidades'] = $this->cidade_model->listarCidadesEstado();
        $data['titulo'] = "SGE | Cadastro Usuário";
        $this->template->load('template/v_headerInterno', 'usuario/v_cadastro', $data);
    }

    public function listarCidade($idestado) {
        $this->load->model('estado_model');
        $this->load->model('cidade_model');

        $cidade = $this->cidade_model->listarCidadesEstado($idestado);
        $json = json_encode($cidade);

        echo $json;
    }

    //insere o usuário interno
    public function inserir() {
        $data = $this->data;
        $this->load->library('form_validation');
        $this->load->helper('form');

        /* Define as tags onde a mensagem de erro será exibida na página */
        $this->form_validation->set_error_delimiters('<span>', '</span>');

        /* Define as regras para validação */
//        $this->form_validation->set_rules('idusuario', 'idusuario');
        $this->form_validation->set_rules('nome', 'nome', 'required|max_length[40]');
        $this->form_validation->set_rules('cpf', 'cpf', 'required|max_length[11]');
        $this->form_validation->set_rules('sexo', 'sexo', 'required|max_length[100]');
//        $this->form_validation->set_rules('cpf', 'cpf', 'required|valid_cpf');
        $this->form_validation->set_rules('endereco', 'endereco', 'required|max_length[100]');
//        $this->form_validation->set_rules('estado', 'estado');
        // $this->form_validation->set_rules('cidade', 'cidade');
        $this->form_validation->set_rules('tipo', 'tipo', 'required|max_length[100]');
        $this->form_validation->set_rules('email', 'e-mail', 'trim|required|max_length[100]');
        $this->form_validation->set_rules('senha', 'senha', 'required|md5');


        /* Executa a validação e caso houver erro chama a função index do controlador */
        if ($this->form_validation->run() == FALSE) {
            //$this->index();
            echo 'Erro';
            /* Senão, caso sucesso: */
        } else {
            /* Recebe os dados do formulário (visão) */
//            $data['idusuario'] = $this->input->post('idusuario');
            $data['nome'] = $this->input->post('nome');
            $data['cpf'] = $this->input->post('cpf');
            $data['sexo'] = $this->input->post('sexo');
            $data['endereco'] = $this->input->post('endereco');
            $data['estado'] = $this->input->post('estado');
//       $data['estados'] = $this->estado_model->listarTodosEstados();
            $data['cidade'] = $this->input->post('cidade');
            $data['tipo'] = $this->input->post('tipo');
             $data['foto'] = ucwords($this->input->post('foto'));
            $data['email'] = $this->input->post('email');
            $data['senha'] = $this->input->post('senha');


            /* Carrega o modelo */
//            $this->load->model('usuario_model', 'model', TRUE);

            /* Chama a função inserir do modelo */
            if ($this->usuario_model->inserir($data)) {
//                $this->session->flashdata('mensagem');
                $this->session->set_flashdata('mensagem', 'Cadastro realizado com sucesso.');
                redirect('usuario/cadastrar', 'refresh');
//                echo 'cadastro realizado com sucesso';
            } else {
                log_message('error', 'Erro ao cadastrar usuário interno.');
            }
        }
    }

    
//edita usuario
    public function editar($idusuario) {
        $data = $this->data;
        $this->load->model('estado_model');
        $this->load->model('cidade_model');
        /* Busca os dados do usuario que será editado */
        $data['dados_usuario'] = $this->usuario_model->editar($idusuario);
//        $data['dados_estado'] = $this->estado_model->editar($Uf);
        $data['estado_participante'] = $this->estado_model->listarEstadoParticipante($idusuario);
        $data['estados'] = $this->estado_model->listarTodosEstados();
        $data['cidades'] = $this->cidade_model->listarCidadesEstado($data['estados'][0]->Uf);
        
        $data['cidade_participante'] = $this->cidade_model->listarCidadeParticipante($idusuario);

        /* Carrega a página de edição com os dados de usuario */
        $this->template->load('template/v_headerInterno', 'usuario/v_edicao', $data);
    }

    function atualizar() {
//        $data = $this->data;
        $this->load->helper('form');
        $idusuario = $this->input->post("idusuario");

        /* Carrega a biblioteca do CodeIgniter responsável pela validação dos formulários */
        $this->load->library('form_validation');

        /* Define as tags onde a mensagem de erro será exibida na página */
        $this->form_validation->set_error_delimiters('<span>', '</span>');

        /* Aqui estou definindo as regras de validação do formulário, assim como 
          na função inserir do controlador, porém estou mudando a forma de escrita */
        $this->form_validation->set_rules('nome', 'nome', 'required|max_length[40]');
        $this->form_validation->set_rules('cpf', 'cpf', 'required|max_length[11]');
        $this->form_validation->set_rules('sexo', 'sexo', 'required|max_length[100]');
//        $this->form_validation->set_rules('cpf', 'cpf', 'required|valid_cpf');
        $this->form_validation->set_rules('endereco', 'endereco', 'required|max_length[100]');
        $this->form_validation->set_rules('tipo', 'tipo', 'required|max_length[100]');
        $this->form_validation->set_rules('email', 'e-mail', 'trim|required|max_length[100]');
        $this->form_validation->set_rules('senha', 'senha', 'required|md5');

        /* Executa a validação e caso houver erro chama a função editar do controlador novamente */
        if ($this->form_validation->run() === FALSE) {
//            $this->editar($this->input->post('idusuario'));
            echo 'erro';
        } else {
            /* Senão obtém os dados do formulário */
            $data['nome'] = ucwords($this->input->post('nome'));
            $data['cpf'] = ucwords($this->input->post('cpf'));
            $data['sexo'] = $this->input->post('sexo');
            $data['endereco'] = ucwords($this->input->post('endereco'));
            $data['estado'] = $this->input->post('estado');
//       $data['estados'] = $this->estado_model->listarTodosEstados();
            $data['cidade'] = $this->input->post('cidade');
            $data['tipo'] = ucwords($this->input->post('tipo'));
            $data['foto'] = ucwords($this->input->post('foto'));
            $data['email'] = ucwords($this->input->post('email'));
            $data['senha'] = ucwords($this->input->post('senha'));
            $data['idusuario'] = $idusuario;
            
//            print_r($data);
            /* Executa a função atualizar do modelo passando como parâmetro os dados obtidos do formulário */
            if ($this->usuario_model->atualizar($data, $idusuario)) {
//                redirect('/usuario/listar');
//                echo 'Edição realizada com sucesso!';
                $this->session->set_flashdata('message', 'Edição realizada com sucesso!');
                redirect(base_url() . 'usuario/editar/' . $idusuario);
//               redirect('/usuario/listar');
//                print_r($data);
            } else {
                $this->session->set_flashdata('message', 'Erro ao atualizar usuário.');
                redirect(base_url() . 'usuario/editar/' . $idusuario);
//                log_message('error', 'Erro ao atualizar usuário.');
            }
        }
    }

    function deletar($idusuario) {

        /* Executa a função deletar do modelo passando como parâmetro o id do usuário */
        if ($this->model->deletar($idusuario)) {
            redirect('/usuario/listar');
        } else {
            log_message('error', 'Erro ao deletar o usuário.');
        }
    }

}
