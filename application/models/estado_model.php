<?php

class estado_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

//Retorna todos os Estados cadastrados no banco.
    function listarTodosEstados() {
//        $query = $this->db->get('estado');
        
//                print_r($query);
//        return $this->db
//                ->order_by('Nome')
//                ->get('estado');
        
         $query = $this->db->get('estado');
        return $query->result();
    }
    
   function listarEstadoParticipante($idusuario){
       
      //  $this->output->enable_profiler(TRUE); 
        
       $this->db->select("estado.Nome");
       $this->db->select("estado.Uf");
        $this->db->from("usuario");
        $this->db->join("estado", "usuario.estado = estado.Uf");
        $this->db->where("usuario.idusuario", $idusuario);
        return $this->db->get()->row();
   }

//Monta o select de option com todos os estados cadastrados
    function selecionarEstado() {
        $options = "<option value=''> Selecione o Estado</option>";
        $estados = $this->listarTodosEstados();
//        print_r($estados);

        foreach ($estados->result() as $estado) {
            $options .= "<option value='{$estado->Id}'>{$estado->Nome}</option>";
        }
        return $options;
    }
    
    function editar($Uf) {
        $this->db->where('Uf', $Uf);
        $query = $this->db->get('estado');
        return $query->result();
    }

}
