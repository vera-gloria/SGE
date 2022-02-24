<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Evento extends My_Controller {

    var $data;

    function __construct() {
        parent::__construct();
        /* Carrega o modelo */

        $this->load->model('evento_model', 'model', TRUE);
        $this->load->model('usuario_model', 'model', TRUE);
        $this->load->model('usuarioEvento_model', 'model', TRUE);
        $this->load->model('conteudo_model', 'model');
        $this->load->library('Boleto');

        //variavel global array
        $this->data = array(
            'idusuario' => $this->session->userdata("idusuario"),
            'nomeusuario' => $this->session->userdata("nomeusuario"),
            'tipousuario' => $this->session->userdata("tipousuario")
        );
    }

    //lista eventos
    public function index() {
//        $this->output-> enable_profiler(TRUE);
        $this->load->helper('form');
        $data = $this->data;
        $data['titulo'] = "SGE | Cadastro Evento";
        $tipousuario = $this->session->userdata("tipousuario");

        if ($tipousuario == '1') {
            $data['evento'] = $this->model->listarEvento();
            $this->template->load('template/v_headerInterno', 'evento/v_evento', $data);
        }
        if ($tipousuario == '3') {
            $data['evento'] = $this->model->listarEventoOrganizador($data['idusuario']);
            $this->template->load('template/v_headerInterno', 'evento/v_evento', $data);
        }

        // Vera ATENÇÂO inserir a condição  para dependendo do usuario ir para tela indicada
//        if ($resultado->tipo == '1') {
//            redirect(base_url('usuario/index_gerenteeventos'));
//        } else if ($resultado->tipo == '2') {
//            redirect(base_url('participante/index/'));
//        } else if ($resultado->tipo == '3') {
//            redirect(base_url('palestrante/interno'));
//        } else {
//            // $this->session->set_flashdata('flash_data', 'E-mail ou senha incprreta!');
////                redirect(base_url('acessoRestrito/participante'));
//            //redirect('login');
//            $this->load->view('v_erro_senha');
//        }
    }

    //tela cadastro eventos
    public function cadastrar() {
        $this->load->helper('form');
        $data = $this->data;
        $this->load->model('usuario_model');
        $data['titulo'] = "SGE | Cadastro Evento";
        $data['palestranteinstrutor'] = $this->usuario_model->listarPalestranteInstrutor();
        $this->template->load('template/v_headerInterno', 'evento/v_cadastroEvento', $data);
    }

    //tela detalhe eventos
//    public function detalharEvento($idevento) {
//        $data['titulo'] = "SGE | Detalhe Evento xxxx";
//        $data['idevento'] = $idevento;
//        $data = $this->data;
//
//        $logado = $this->session->userdata("logado");
////        echo 'Você confirma a inscrição no curso?';
//        if ($logado != 1) {
////            $data = $this->data;
//            $this->template->load('template/v_header', 'evento/v_detalheEvento', $data);
//        } else {
//            $data = $this->data;
//            $this->template->load('template/v_headerInterno', 'evento/v_detalheEvento', $data);
//        }
//    }
    //função cadastro eventos
    public function inserir() {
        /* biblioteca do CodeIgniter responsável por validar formulários */
        $this->load->library('form_validation');

        /* Define as tags onde a mensagem de erro será exibida na página */
        $this->form_validation->set_error_delimiters('<span>', '</span>');

        /* Define as regras para validação */
        $this->form_validation->set_rules('idevento', 'idevento');
        $this->form_validation->set_rules('nome', 'nome', 'required|max_length[200]');
        $this->form_validation->set_rules('descricao', 'descricao', 'required|max_length[250]');
        $this->form_validation->set_rules('palestrante', 'palestrante', 'required|max_length[200]');
        $this->form_validation->set_rules('organizador', 'organizador', 'required|max_length[200]');
        $this->form_validation->set_rules('tipo', 'tipo', 'required|max_length[30]');
        $this->form_validation->set_rules('dtinicio', 'dtinicio', 'required|max_length[30]');
        $this->form_validation->set_rules('dttermino', 'dttermino', 'required|max_length[50]');
        $this->form_validation->set_rules('qtdevagas', 'qtdevagas', 'required|max_length[50]');
        $this->form_validation->set_rules('horarioinicio', 'horarioinicio', 'required|max_length[50]');
        $this->form_validation->set_rules('horariotermino', 'horariotermino', 'required|max_length[50]');
        $this->form_validation->set_rules('url', 'url', 'required|max_length[50]');
        $this->form_validation->set_rules('status', 'status', 'required|max_length[50]');
        $this->form_validation->set_rules('tipopagamento', 'tipopagamento', 'required|max_length[50]');
        $this->form_validation->set_rules('valor', 'valor', 'required|max_length[50]');

        /* Executa a validação e caso houver erro chama a função index do controlador */
        if ($this->form_validation->run() === FALSE) {
            //$this->index();
            echo 'Erro';
            /* Senão, caso sucesso: */
        } else {
            /* Recebe os dados do formulário (visão) */
            $data['idevento'] = $this->input->post('idevento');
            $data['tipo'] = $this->input->post('tipo');
            $data['nome'] = $this->input->post('nome');
            $data['descricao'] = $this->input->post('descricao');
            $data['organizador'] = $this->input->post('organizador');
            $data['palestranteinstrutor'] = $this->input->post('palestranteinstrutor');
            $data['dtinicio'] = $this->input->post('dtinicio');
            $data['dttermino'] = $this->input->post('dttermino');
            $data['qtdevagas'] = $this->input->post('qtdevagas');
            $data['horarioinicio'] = $this->input->post('horarioinicio');
            $data['horariotermino'] = $this->input->post('horariotermino');
            $data['url'] = $this->input->post('url');
            $data['status'] = $this->input->post('status');
            $data['tipoPagamento'] = $this->input->post('tipoPagamento');
            $data['valor'] = $this->input->post('valor');

            /* Chama a função inserir do modelo */
            if ($this->model->inserir($data)) {
//                $this->session->set_flashdata('mensagem', 'Cadastrado com sucesso!');
                echo 'cadastro realizado com sucesso';
            } else {
                log_message('error', 'Erro ao cadastrar usuário interno.');
            }
        }
    }

    //edita eventos
    function editar($idevento) {
        $data = $this->data;
        $idevento = $idevento;

        /* Aqui vamos definir o título da página de edição */
//        $data['titulo'] = "SGE|Edição de Evento";

        /* Busca os dados do evento que será editado */
        $data['dados_evento'] = $this->model->editar($idevento);

        /* Carrega a página de edição com os dados de evento */
        $this->template->load('template/v_headerInterno', 'evento/v_evento_edit', $data);


        /* Carrega a página de edição com os dados da pessoa */
//        $this->load->view();
//        $this->load->view('v_evento_edit', $data);
    }

    function atualizar() {
//        $idevento=$idevento;
        /* Carrega a biblioteca do CodeIgniter responsável pela validação dos formulários */
        $this->load->library('form_validation');
        $idevento = $this->input->post("idevento");

        /* Define as tags onde a mensagem de erro será exibida na página */
        $this->form_validation->set_error_delimiters('<span>', '</span>');

        /* Aqui estou definindo as regras de validação do formulário, assim como 
          na função inserir do controlador, porém estou mudando a forma de escrita */
        $validations = array(
            array(
                'field' => 'tipo',
                'label' => 'Tipo',
                'rules' => 'required|max_length[40]'
            ),
            array(
                'field' => 'nome',
                'label' => 'nome',
                'rules' => 'required|max_length[100]'
            ),
            array(
                'field' => 'descricao',
                'label' => 'descricao',
                'rules' => 'required|max_length[255]'
            ),
            array(
                'field' => 'dtinicio',
                'label' => 'dtinicio',
                'rules' => 'required|max_length[40]'
            ),
            array(
                'field' => 'dttermino',
                'label' => 'dttermino',
                'rules' => 'required|max_length[40]'
            ),
            array(
                'field' => 'qtdevagas',
                'label' => 'qtdevagas',
                'rules' => 'required|max_length[40]'
            ),
            array(
                'field' => 'horarioinicio',
                'label' => 'horarioinicio',
                'rules' => 'required|max_length[40]'
            ),
            array(
                'field' => 'horariotermino',
                'label' => 'horariotermino',
                'rules' => 'required|max_length[40]'
            ),
            array(
                'field' => 'url',
                'label' => 'url',
                'rules' => 'required|max_length[100]'
            ),
            array(
                'field' => 'status',
                'label' => 'status',
                'rules' => 'required|max_length[40]'
            )
        );
        $this->form_validation->set_rules($validations);

        /* Executa a validação e caso houver erro chama a função editar do controlador novamente */
        if ($this->form_validation->run() === FALSE) {
            $this->editar($this->input->post('idevento'));
        } else {
            /* Senão obtém os dados do formulário */

            $data['idevento'] = $this->input->post('idevento');
            $data['tipo'] = $this->input->post('tipo');
            $data['nome'] = $this->input->post('nome');
            $data['descricao'] = $this->input->post('descricao');
            $data['organizador'] = $this->input->post('organizador');
            $data['palestranteinstrutor'] = $this->input->post('palestranteinstrutor');
            $data['dtinicio'] = $this->input->post('dtinicio');
            $data['dttermino'] = $this->input->post('dttermino');
            $data['qtdevagas'] = $this->input->post('qtdevagas');
            $data['horarioinicio'] = $this->input->post('horarioinicio');
            $data['horariotermino'] = $this->input->post('horariotermino');
            $data['url'] = $this->input->post('url');
            $data['status'] = $this->input->post('status');
            $data['valor'] = $this->input->post('valor');

            /* Executa a função atualizar do modelo passando como parâmetro os dados obtidos do formulário */
            if ($this->model->atualizar($data)) {
//                redirect('/evento/index');
                echo 'Edição realizada com sucesso!';
                $this->session->set_flashdata('message', 'Edição realizada com sucesso!');
                redirect(base_url() . 'evento/editar/' . $idevento);
//                print_r($data);
            } else {
                $this->session->set_flashdata('message', 'Erro ao atualizar evento.');
                redirect(base_url() . 'evento/editar/' . $idevento);
//                log_message('error', 'Erro ao atualizar evento.');
            }
        }
    }

    //divulga eventos
    public function divulgarEvento() {
        $this->load->view('template/v_headerInterno');
        $this->load->view('evento/v_divulgaEvento');
        $this->load->view('v_footerInterno');
    }

    //redireciona tela de ações dos eventos
    function redirecionarAcoes($idevento) {
        $data = $this->data;
        $data['id'] = $idevento;
        $data['nomeevento'] = $this->model->nomearEvento($idevento);

        /* Carrega a página de ações que podem ser realizadas no evento */
        $this->template->load('template/v_headerInterno', 'evento/v_acoes', $data);
    }

    function deletar($idevento) {

        /* Executa a função deletar do modelo passando como parâmetro o id do evento */
        if ($this->model->deletar($idevento)) {
            redirect('/evento/index');
        } else {
            log_message('error', 'Erro ao deletar o evento.');
        }
    }

    public function finalizarInscricao($idevento, $fp) {
        $this->load->library('form_validation');
        $data['idevento'] = $idevento;
//         $data[''] = $fp;
        $data['idusuario'] = $this->session->userdata("idusuario");
        // $data['idusuario'] = $idusuario; 
        $data['status'] = 'Inscrito';
        $data['forma_pagamento'] = $fp;
//        print_r($data);
        $this->form_validation->set_rules('idevento', 'idevento', 'trim|required|is_unique[evento.idevento]');
        $this->form_validation->set_rules('idusuario', 'idusuario', 'trim|required|is_unique[usuario.idusuario]');

//        if ($this->form_validation->run() === FALSE) {
////            $this->editar($this->input->post('idusuario'));
//            echo 'Você já está cadastrado nesse curso';
//        } else {

        if ($this->model->inscreverParticipanteEvento($data)) {
            $this->session->set_flashdata('message', 'Inscrição realizada com sucesso.');
//                redirect(base_url() . 'email/escreveremail/' . $idevento);
//                echo '$data';
//                echo 'Inscrição realizada com sucesso';
        } else {
            $this->session->set_flashdata('message', 'Você já esta cadastrado nesse curso!');
            redirect(base_url() . 'evento/inscrever/' . $idevento);
//                log_message('error', 'Erro ao inscrever.');
//                echo 'Você já esta cadastrado nesse curso!';
        }
//        }
    }

    public function pagarCartao($idevento) {
        $data['idevento'] = $idevento;
        $idusuario = $this->session->userdata("idusuario");
        $fp['forma_pagamento'] = $this->input->post("forma_pagamento");
        $this->finalizarInscricao($idevento, $fp);
    }

    public function gerarBoleto($idevento) {
        $data['idevento'] = $idevento;
        $idusuario = $this->session->userdata("idusuario");
//            $this->load->libraries('boleto');
//            $data
        $data['dadosboletoevento'] = $this->model->retornarDadosBoletoEvento($idevento);
        $data['dadosboletousuario'] = $this->model->retornarDadosBoletoUsuario($idusuario);
//            print_r($data);
        $nomeevento = $data['dadosboletoevento']->nome;
//            print_r($nomeevento);
        $dados = array(
            // Informações necessárias para todos os bancos
            'dias_de_prazo_para_pagamento' => 2,
            'taxa_boleto' => 0, // taxa boleto
            'pedido' => array(
                'nome' => $data['dadosboletoevento']->nome, //nome do curso
                'quantidade' => '1', //qtde
                'valor_unitario' => $data['dadosboletoevento']->valor, //valor unitario
                'numero' => 10000000025,
                'aceite' => 'N',
                'especie' => 'R$',
                'especie_doc' => 'DM',
            ),
            'sacado' => array(
                'nome' => $data['dadosboletousuario'][0]->nome, // nome aluno
                'endereco' => $data['dadosboletousuario'][0]->endereco,
                'cidade' => $data['dadosboletousuario'][0]->cidade,
                'uf' => $data['dadosboletousuario'][0]->estado,
//				'cep'      => '93816-630',
            ),
            // Informações necessárias que são específicas do Banco do Brasil
            'variacao_carteira' => '019',
            'contrato' => 999999,
            'convenio' => 7777777,
        );
// Gera o boleto
        $this->boleto->bb($dados);
        $fp = $this->input->post("forma_pagamento");
//                print_r(data);
        $this->finalizarInscricao($idevento, $fp);
//	$this->load->view('evento/v_boleto', $dados);
    }

    //cancela inscrição
    public function cancelarInscricao($idusuario, $idevento) {

        /* Executa a função deletar do modelo passando como parâmetro o id do usuarioevento */
        if ($this->model->cancelarInscricao($idusuario, $idevento)) {
            redirect('usuario/index_participante');
        } else {
            log_message('error', 'Erro ao deletar o evento.');
        }
    }

    //lista eventos do aluno
    public function listarEventoParticipante() {
        $this->load->helper('form');
        $data['titulo'] = "SGE | Cadastro Evento";
        $data['evento'] = $this->model->listarEventoParticipante();
        $this->template->load('template/v_headerInterno', 'evento/v_evento', $data);
    }

    public function emitirCertificado($idevento) {
        $data['certificado'] = $this->model->informarDadosCertificado($idevento);
        //Carregando a biblioteca mPDF
        $this->load->library('mpdf/mpdf');
        //Inicia o buffer, qualquer HTML que for sair agora sera capturado para o buffer
        ob_start();
        //A seguir você verá o seu relatório
        //Fazendo o include de um HTML em outro arquivo, ficara retido no buffer

        $this->load->view('evento/v_certificado.php', $data);
        //Limpa o buffer jogando todo o HTML em uma variavel.
        $html = ob_get_clean();
        $mpdf = new mPDF('utf-8', 'A4-L');
        $mpdf->SetMargins(20, 20, 20, 20);
        $mpdf->WriteHTML($html);
        //Colocando o rodape
        //$mpdf->SetFooter('{DATE j/m/Y H:i}|Página {PAGENO} de {nb}|www.sge.com.br');

        $mpdf->Output();

        //exit;
    }

    //disponibiliza conteudo para no evento
    public function disponibilizarConteudo($idevento) {
        $data = $this->data;
        $this->load->helper('form');
        $data['titulo'] = "SGE | Disponibilizar Conteudo";
        $this->template->load('template/v_headerInterno', 'evento/v_disponibilizarConteudo', $data);

        $retorno = $this->conteudo_model->inserirConteudo($idevento);

        if ($retorno['retorno']) {
            $nomeArquivo = $this->upload($retorno['idconteudo']);

            if ($nomeArquivo != false) {
                $this->conteudo_model->arquivo = $nomeArquivo;
//                $this->conteudo_model->editar($retorno['id']);
            }

            $this->session->set_flashdata('message', 'Arquivo cadastrado com sucesso!');
            redirect('/arquivos', 'refresh');
        } else {
            $this->session->set_flashdata('message', 'Erro ao cadastrar o arquivo.');
        }
    }

    public function upload() {

        // definimos um nome aleatório para o diretório 
        $folder = random_string('alpha');
        // definimos o path onde o arquivo será gravado
        $path = $_SERVER['DOCUMENT_ROOT'] . '/SGE/uploads/';

        // verificamos se o diretório existe
        // se não existe criamos com permissão de leitura e escrita
        if (!is_dir($path)) {
            mkdir($path, 0777, $recursive = true);
        }

        // definimos as configurações para o upload
        // determinamos o path para gravar o arquivo
        $configUpload['upload_path'] = $path;
        // definimos - através da extensão - 
        // os tipos de arquivos suportados
        $configUpload['allowed_types'] = 'jpg|png|gif|pdf|zip|rar|doc|xls';
        // definimos que o nome do arquivo
        // será alterado para um nome criptografado
        $configUpload['encrypt_name'] = TRUE;

        // passamos as configurações para a library upload
        $this->upload->initialize($configUpload);

        // verificamos se o upload foi processado com sucesso
        if (!$this->upload->do_upload('conteudo')) {
            // em caso de erro retornamos os mesmos para uma variável
            // e enviamos para a home
            $data = array('error' => $this->upload->display_errors());
            echo 'erro';
//            $this->load->view('evento',$data);
        } else {
            //se correu tudo bem, recuperamos os dados do arquivo
            $data['dadosArquivo'] = $this->upload->data();
            // definimos o path original do arquivo
            $arquivoPath = 'uploads/' . "/" . $data['dadosArquivo']['file_name'];
            // passando para o array '$data'
            $data['urlArquivo'] = base_url($arquivoPath);
            // definimos a URL para download
            $downloadPath = 'download/' . $data['dadosArquivo']['file_name'];

            // passando para o array '$data'
            $data['urlDownload'] = base_url($downloadPath);

            // carregamos a view com as informações e link para download
            $this->load->view('evento/v_baixarConteudo', $data);
        }
    }

    // Método que fará o download do arquivo
    public function download() {
        // recuperamos o terceiro segmento da url, que é o nome do arquivo
        $arquivo = $this->uri->segment(2);
        // recuperamos o segundo segmento da url, que é o diretório
        // definimos original path do arquivo
        $arquivoPath = './uploads/' . $arquivo;

        // forçamos o download no browser 
        // passando como parâmetro o path original do arquivo
        force_download($arquivoPath, null);
    }

}
