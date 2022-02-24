<?php

class usuarioEvento_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function inserir($data) {
        $sql = "INSERT INTO table (eventousuario) VALUES(" . $this->db->escape($title) . ")";
        return $this->db->insert('usuario', $data);
    }

    

}
