<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Conteudo extends My_Controller {

    var $data;

    function __construct() {
        parent::__construct();
        /* Carrega o modelo */
        $this->load->model('conteudo_model', 'model', TRUE);
        $this->load->model('evento_model', 'model', TRUE);
//        $this->load->model('conteudo_model', 'model', TRUE);
        //variavel global array
        $this->data = array(
            'idusuario' => $this->session->userdata("idusuario"),
            'nomeusuario' => $this->session->userdata("nomeusuario"),
            'tipousuario' => $this->session->userdata("tipousuario")
        );
    }

    //exibe tela de cadastro de conteudo
    public function index($idevento) {
        $data = $this->data;
        $this->load->helper('form');
        $data['idevento'] = $idevento;
        $data['conteudo'] = $this->model->listarConteudo($idevento);

        $this->template->load('template/v_headerInterno', 'evento/v_conteudo', $data);
    }

    public function inserirConteudo($idevento) {
        $this->load->helper('form');
        $data = $this->data;
        $data['idevento'] = $idevento;
        $data['nomeevento'] = $this->model->nomearEvento($idevento);
        $data['titulo'] = "SGE | Disponibilizar Conteudo";
        $this->template->load('template/v_headerInterno', 'evento/v_disponibilizarConteudo', $data);
    }

    public function salvar($idevento) {
        $nomeconteudo = $this->input->post('nomeconteudo');
        $descricaoconteudo = $this->input->post('descricaoconteudo');
        $configuracao = array(
            'upload_path' => FCPATH . 'conteudos/',
            'allowed_types' => 'jpg|png|gif|pdf|zip|rar|doc|xls',
            'file_name' => $nomeconteudo . '.jpg|png|gif|pdf|zip|rar|doc|xls',
            'max_size' => '500'
        );

        $this->load->library('upload');
        $this->upload->initialize($configuracao);

        $data['idconteudo'] = $this->input->post('idconteudo');
        $data['nome'] = $this->input->post('nomeconteudo');
        $data['descricao'] = $this->input->post('descricaoconteudo');
        $data['idevento'] = $idevento;

        /* Chama a função inserir do modelo */
        if ($this->model->inserir($data)) {
            $this->session->set_flashdata('message', 'Arquivo inserido com sucesso!');
            redirect(base_url() . 'conteudo/inserirConteudo/' . $idevento);
        } else {
            $this->session->set_flashdata('message', 'Erro ao inserir arquivo.');
        }
        if ($this->upload->do_upload('conteudo')) {
            echo 'Arquivo salvo com sucesso.';
        } else {
            echo $this->upload->display_errors();
        }
    }

    // Método que processar o upload do arquivo
    public function upload($idevento) {

        // definimos um nome aleatório para o diretório 
        $folder = $idevento;
        // definimos o path onde o arquivo será gravado
        $path = "./uploads/" . $folder;

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
            echo "Arquivo não inserido";
//            $this->load->view('SGE/evento/disponibilizarConteudo', $data);
        } else {
            //se correu tudo bem, recuperamos os dados do arquivo
            $arquivo['dadosArquivo'] = $this->upload->data();
            // definimos o path original do arquivo
//            $arquivoPath = 'uploads/' . $folder . "/" . $data['dadosArquivo']['file_name'];
//             $arquivoPath = 'uploads/' . $folder . "/" . $data['dadosArquivo']['file_name'];

            $arquivoPath = 'uploads/' . $folder . "/" . $arquivo['dadosArquivo']['file_name'];

            // passando para o array '$data'
//            $data['idconteudo'] = $this->input->post('idconteudo');
            $data['nome'] = $this->input->post('nomeconteudo');
            $data['descricao'] = $this->input->post('descricaoconteudo');
//            $data['conteudo'] = 'uploads/' . $folder . "/" . $data['nome'];
            $data['conteudo'] = $arquivoPath;
            $data['idevento'] = $idevento;
//            $data['conteudo'] = $arquivoPath;
//            print_r($data);

            /* Chama a função inserir do modelo */
            if ($this->model->inserir($data)) {
                $this->session->set_flashdata('message', 'Arquivo inserido com sucesso!');
                redirect(base_url() . 'conteudo/inserirConteudo/' . $idevento);
//               $this->session->set_flashdata('mensagem', 'Cadastrado com sucesso!');
                echo 'cadastro realizado com sucesso';
            } else {
                log_message('error', 'Erro ao inserir arquivo.');
            }


// definimos a URL para download
//            $downloadPath = 'download/' . $folder . "/" . $data['dadosArquivo']['file_name'];
            $downloadPath = 'download/' . $folder . "/" . $arquivo['dadosArquivo']['file_name'];

            // passando para o array '$data'
            $data['urlDownload'] = base_url($downloadPath);
        }
    }

    // Método que fará o download do arquivo
    public function download($idconteudo, $idevento) {
        // recuperamos o terceiro segmento da url, que é o nome do arquivo
        $arquivo = $this->uri->segment(3);
        // recuperamos o segundo segmento da url, que é o diretório
        $diretorio = $this->uri->segment(2);
        $data['conteudo'] = $this->model->baixarConteudo($idconteudo, $idevento);
//        print_r($data->conteudo);
        // definimos original path do arquivo
//        $arquivoPath = './uploads/' . $idarquivo . "/" . $arquivo;
//        $arquivoPath = 'download/' . $folder . "/" . $arquivo['dadosArquivo']['file_name'];
//        $arquivoPath = 'urlDownload';
//        print_r($arquivoPath);
//        // forçamos o download no browser 
        // passando como parâmetro o path original do arquivo
        $arquivoPath = $data['conteudo']->conteudo;

        // passando para o array '$data'
        $data['urlDownload'] = base_url($arquivoPath) . $arquivoPath;
        print_r($data);
        force_download($arquivoPath, null);
    }

    function deletar($idconteudo, $idevento) {

        /* Executa a função deletar do modelo passando como parâmetro o id do conteudo */
        if ($this->model->deletar($idconteudo)) {
            redirect('/conteudo/index/' . $idevento);
        } else {
            log_message('error', 'Erro ao deletar o evento.');
        }
    }

}
