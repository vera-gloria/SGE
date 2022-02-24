<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeInterna extends My_Controller {

    public function index(){
        $this->load->view('v_headerInterno');
        $this->load->view('v_homeParticipante');
        $this->load->view('v_footerInterno');
    }
}
