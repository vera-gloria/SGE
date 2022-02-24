<?php

class conteudo_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function listarConteudo($idevento) {
//        $query = $this->db->get('conteudo');
//        return $query->result();
        
        $query = $this->db->query("SELECT c.idconteudo, c.descricao, c.nome as NomeConteudo, c.conteudo, e.idevento, e.nome as NomeEvento
        FROM  conteudo c
        join evento e on c.idevento=e.idevento
        where c.idevento=$idevento"
        );
        return $query->result();
    }
    
    function nomearEvento($idevento) {
        $this->db->select('nome');
        $this->db->where('idevento', $idevento);
        $query = $this->db->get('evento');
        return $query->row();
    }
    
    function baixarConteudo($idconteudo, $idevento) {
//        $query = $this->db->get('conteudo');
//        return $query->result();
        
        $query = $this->db->query("SELECT c.conteudo
        FROM  conteudo c
        join evento e on c.idevento=e.idevento
        where c.idevento=$idevento and c.idconteudo=$idconteudo"
        );
        return $query->row();
    }
        
    function inserirConteudo($data) {
        return $this->db->insert('conteudo', $data);
        $retorno['retorno'] = $this->db->insert('arquivos', $this);
        $retorno['idarquivo'] = $this->db->insert_idarquivo();

        return $retorno;
    }
    
    function inserir($data) {
        return $this->db->insert('conteudo', $data);
    }
    
    function deletar($idconteudo) {
        $this->db->where('idconteudo', $idconteudo);
        return $this->db->delete('conteudo');
    }
}