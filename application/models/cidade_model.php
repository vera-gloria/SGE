<?php

class cidade_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    //Retorna todos as cidades por estado cadastrados no banco.
    function listarCidadesEstado($uf=null) {
        return $this->db
                ->where("UF", $uf)
                        ->order_by('Nome')
                        ->get('cidade')
                        ->result_object();
        
    }
    
    function listarCidadeParticipante($idusuario){
       
      //  $this->output->enable_profiler(TRUE); 
        
       $this->db->select("cidade.Nome");
       $this->db->select("cidade.Uf");
        $this->db->from("cidade");
        $this->db->join("usuario", "usuario.cidade = cidade.id");
        $this->db->where("usuario.idusuario", $idusuario);
        return $this->db->get()->row();
   }
    
    function listarTodasCidades() {
        $query = $this->db->get('cidade');
        return $query->result();
    }

}
