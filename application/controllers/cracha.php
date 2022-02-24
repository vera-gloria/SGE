<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cracha extends MY_Controller {

    //variavel global usuario logado
    var $data;

    function __construct() {
        parent::__construct();
        /* Carrega o modelo */
        $this->load->model('usuario_model', 'model', TRUE);
        $this->load->model('evento_model', 'model', TRUE);
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
        $this->load->helper('form');
        $data = $this->data;
        $data['titulo'] = "SGE | Cadastro Usuário";
        $data['idevento'] = $idevento;
        $data['usuario'] = $this->model->listarParticipante($idevento);
        $this->template->load('template/v_headerInterno', 'evento/v_listaParticipanteCracha', $data);
    }

    public function imprimirCracha($idevento) {
//Carregando a biblioteca mPDF
        $this->load->library('mpdf/mpdf');
//Inicia o buffer, qualquer HTML que for sair agora sera capturado para o buffer
        ob_start();
//A seguir você verá o seu relatório
//Fazendo o include de um HTML em outro arquivo, ficara retido no buffer
        $data['idevento'] = $idevento;
        $data['dadoscracha'] = $this->model->exibirDadosCracha($idevento);

        $this->load->view('evento/v_cracha.php', $data);
//Limpa o buffer jogando todo o HTML em uma variavel.
        $html = ob_get_clean();
        $mpdf = new mPDF();
        $mpdf->WriteHTML($html);
//Colocando o rodape
//        $mpdf->SetFooter('{DATE j/m/Y H:i}|Página {PAGENO} de {nb}|www.gqferreira.com.br');

        $mpdf->Output();

        exit;
    }

}

?>
