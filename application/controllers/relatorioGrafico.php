<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class RelatorioGrafico extends CI_Controller {

    //variavel global usuario logado
    var $data;

    function __construct() {
        parent::__construct();
        /* Carrega o modelo */
        $this->load->model('evento_model', 'model', TRUE);
        $this->load->model('usuario_model', 'model', TRUE);
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
        $this->load->model('evento_model');
        $this->load->helper('form');
        $data = $this->data;
        $data['titulo'] = "SGE | Cadastro Usuário";
        $data['evento'] = $this->model->listarEvento();
        $data['dados'] = $this->dadosGraficoGenero($idevento);
        $data['regiao'] = $this->dadosGraficoRegiao($idevento);
        $data['dadosgenero'] = $this->model->getGeneros($idevento);
        $data['dadosregiao'] = $this->model->getRegioes($idevento);

//        $json = json_encode($genero);
//        $data['generos'] = $json; 
////        $data['generos'] = $this->model->getGeneros($idevento);
        $this->template->load('template/v_headerInterno', 'evento/v_relatorioGrafico', $data);
    }

    public function dadosGraficoGenero($idevento) {
        $this->load->model('evento_model');

        $dados = $this->model->getGeneros($idevento);

        $entry = "['Generos', 'Quantidades'],";
        foreach ($dados as $value) {
            $entry .= "['" . $value->Label . "'," . $value->total . "],";
            //  array_push($entry, $value);
        }

        return ($entry);
    }

     public function dadosGraficoRegiao($idevento) {
        $this->load->model('evento_model');

        $dadosRegiao = $this->model->getRegioes($idevento);

        $regioes = "['Região', 'Quantidades'],";
        foreach ($dadosRegiao as $value) {
            $regioes .= "['" . $value->Regiao . "'," . $value->total . "],";
        }
//        print_graph($regioes);
        return ($regioes);
    }

//    public function imprimirCracha() {
////Carregando a biblioteca mPDF
//        $this->load->library('mpdf/mpdf');
////Inicia o buffer, qualquer HTML que for sair agora sera capturado para o buffer
//        ob_start();
////A seguir você verá o seu relatório
////Fazendo o include de um HTML em outro arquivo, ficara retido no buffer
//
//
//        $this->load->view('evento/v_cracha.php');
////Limpa o buffer jogando todo o HTML em uma variavel.
//        $html = ob_get_clean();
//        $mpdf = new mPDF();
//        $mpdf->WriteHTML($html);
////Colocando o rodape
//        $mpdf->SetFooter('{DATE j/m/Y H:i}|Página {PAGENO} de {nb}|www.gqferreira.com.br');
//
//        $mpdf->Output();
//
//        exit;
//    }

}

?>
