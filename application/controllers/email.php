<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends My_Controller {

    function __construct() {
        parent::__construct();
        /* Carrega o modelo */
//        $this->load->model('conteudo_model', 'model', TRUE);
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->model('evento_model', 'model', TRUE);
        $this->load->model('usuario_model', 'model', TRUE);

        //variavel global array
        $this->data = array(
            'idusuario' => $this->session->userdata("idusuario"),
            'nomeusuario' => $this->session->userdata("nomeusuario"),
            'tipousuario' => $this->session->userdata("tipousuario")
        );
    }

//exibe tela de email
    public function index() {
        $this->load->helper('form');
        $data['titulo'] = "SGE | E-mail";
        $data['idusuario'] = $this->session->userdata("idusuario");
        $data['nomeusuario'] = $this->session->userdata("nomeusuario");
        $this->template->load('template/v_headerEmail', 'email/index', $data);
    }

    public function escreveremail($idevento) {
        $this->load->helper('form');
        $data = $this->data;
        $data['titulo'] = "SGE | E-mail";
        $data['idevento'] = $idevento;
        $data['idusuario'] = $this->session->userdata("idusuario");
        $data['nomeusuario'] = $this->session->userdata("nomeusuario");
        $data['dadosemail'] = $this->model->listarEmailParticipanteEvento($idevento);
        $this->template->load('template/v_headerInterno', 'email/v_enviaremail', $data);


//        $this->email->from('contato@sge.com', 'SGE');
//        $this->email->to('someone@example.com');
//        $this->email->cc('another@another-example.com');
//        $this->email->bcc('them@their-example.com');
//
//        $this->email->subject($this->input->post('assunto') . " - Evento " . $this->session->descricao);
//        $this->email->message($this->input->post('mensagem'));
//        if ($this->email->send())
//            $this->session->set_flashdata('message', 'Email enviado com sucesso.');
//        else
//            $this->session->set_flashdata("email_sent", "You have encountered an error");
//        $this->load->view('contact_email_form');
//        
    }

    /**
     * Envia o email
     */
    public function enviaremail($idevento) {
//$from_email = "email@example.com";
//$to_email = $this->input->post('email');
        $idevento = $idevento;
        $data['dadosemail'] = $this->model->listarEmailParticipanteEvento($idevento);
        $nomeevento = $this->model->listarEventoParticipante($idevento);
//        print_r($dadosemail);
//        print_r($nomeevento);
//        $data['nomeevento'] = $this->model->listarEmailParticipanteEvento($idevento);
        //     print_r($data);
//        $this->load->library('Email');
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_port' => 465,
//            'smtp_crypto' => 'ssl',
            'smtp_user' => 'sistemagerenciadoreventos@gmail.com',
            'smtp_pass' => 'sgevera@13',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'mailtype' => 'html',
            'smtp_timeout' => '5',
            'wordwrap' => TRUE
        );


        $this->load->library('email');
        $this->email->initialize($config);

//        $emailist = $this->input->post('emailist');
        $assunto = $this->input->post('assunto');
        $msg = $this->input->post('mensagem');
//        print_r($emailist);
//        print_r($assunto);
//        print_r($msg);
        //  $this->email->initialize($config);
        $this->email->set_newline("\r\n");

        foreach ($data['dadosemail'] as $d) {
            $this->email->clear();
            $this->email->from('sistemagerenciadoreventos@gmail.com', 'SGE');
            $this->email->to($d->email);
            $this->email->subject($assunto . " - " . $nomeevento->nome);
            $this->email->message($msg);
            if ($this->email->send()) {
               $this->session->set_flashdata('message', 'Email enviado com sucesso.');
                redirect(base_url() . 'email/escreveremail/' . $idevento);
//               $this->load->view('email/escreveremail/', $idevento, true);
               
            } else {
                $this->session->set_flashdata('message', 'Email NÃO enviado.');
                redirect(base_url() . 'email/escreveremail/' . $idevento);
//            redirect('email/escreveremail/' , $idevento);
//            $this->template->load('email/escreveremail/', $idevento);
            }
        }


        //$this->email->cc('another@another-example.com');
//        $this->email->bcc($d->email);
//        $this->email->to($data['dadosemail']);
//        $this->email->to($emailist);
//        print_r($emailist);
//        $this->email->subject($this->input->post('assunto') . " - Evento ");
//        <!--$this->email->subject('Here is your info ' . $name->nomeevento);
        //        $this->email->subject($this->input->post('assunto') . " - Evento " . $this->session->descricao);
//        $this->email->reply_to('sge@evaldo.com.br');
//        <!--$this->email->message('Hi ' . $nome->usuario . ' Here is the info you requested.');
    }

}
