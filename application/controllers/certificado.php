<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Certificado extends CI_Controller {

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
         $data['idevento'] = $idevento;
        $data['titulo'] = "SGE | Cadastro Usuário";
         $data['idusuario'] = $this->session->userdata("idusuario");
        $data['usuario'] = $this->model->listarParticipanteEvento($idevento);
        $this->template->load('template/v_headerInterno', 'evento/v_listaCertificado', $data);
    }

    public function imprimirCertificado($idevento) {
         $this->load->helper('form');
         $idusuario = $this->session->userdata("idusuario");
         $data['certificado'] = $this->model->informarDadosCertificado($idevento); 
//        print_r($data);
//Carregando a biblioteca mPDF
        $this->load->library('mpdf/mpdf'
                
                
                
                
                );
//Inicia o buffer, qualquer HTML que for sair agora sera capturado para o buffer
        ob_start();
//A seguir você verá o seu relatório
//Fazendo o include de um HTML em outro arquivo, ficara retido no buffer

//        $data['usuario'] = $this->model->listarParticipanteEvento($idevento);
//        $this->template->load('evento/v_certificado', $data);
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

}

?>
