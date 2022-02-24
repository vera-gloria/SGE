<?php

class usuario_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function inserir($data) {
        return $this->db->insert('usuario', $data);
    }

    function listar() {
        $query = $this->db->get('usuario');
        return $query->result();
    }

    function listarParticipante($idevento) {
         $this->db->select('usuario.idusuario,usuario.tipo, usuario.nome, evento.idevento, evento.nome');
        $this->db->from('usuarioevento','usuario', 'evento');
        $this->db->join('evento', 'usuarioevento.idevento = evento.idevento');
        $this->db->join('usuario', 'usuarioevento.idusuario = usuario.idusuario');
        $this->db->where('usuario.tipo', 2);
        $this->db->where('evento.idevento', $idevento);
//        $query = $this->db->get('usuario');
        return $this->db->get()->result();
    }
    
    function exibirDadosCracha($idevento) {
        $this->db->select('usuario.idusuario, usuario.nome as participante, evento.idevento, evento.nome, evento.dtinicio, evento.dttermino');
        $this->db->from('usuarioevento','usuario', 'evento');
        $this->db->join('evento', 'usuarioevento.idevento = evento.idevento');
        $this->db->join('usuario', 'usuarioevento.idusuario = usuario.idusuario');
        $this->db->where('usuario.tipo', 2);
        $this->db->where('evento.idevento', $idevento);
        return $this->db->get()->result();
    }

    function listarParticipanteEvento($idevento) {
        $this->db->select('usuario.idusuario, usuario.nome, evento.idevento, evento.nome as nomeevento ');
        $this->db->from('usuarioevento', 'usuario', 'evento');
        $this->db->join('evento', 'usuarioevento.idevento = evento.idevento');
        $this->db->join('usuario', 'usuarioevento.idusuario = usuario.idusuario');
        $this->db->where('usuario.tipo', 2);
        $this->db->where('evento.idevento', $idevento);
        return $this->db->get()->result();
     
    }
    
    function listarParticipanteEventoPresenca($idevento) {
        $this->db->select('usuario.idusuario, usuario.nome, evento.idevento, evento.nome as nomeevento ');
        $this->db->from('usuarioevento', 'usuario', 'evento');
        $this->db->join('evento', 'usuarioevento.idevento = evento.idevento');
        $this->db->join('usuario', 'usuarioevento.idusuario = usuario.idusuario');
        $this->db->where('usuario.tipo', 2);
        $this->db->where('evento.idevento', $idevento);
        return $this->db->get()->result();
     
    }
    
    function listarEventoOrganizador($idusuario) {
        $this->db->select('evento.idevento, evento.nome as nomeevento, evento.tipo, evento.descricao, evento.dtinicio, evento.dttermino, evento.qtdevagas, evento.horarioinicio, evento.horariotermino, evento.url, evento.status usuario.idusuario, usuario.nome');
        $this->db->from('usuario');
        $this->db->join('evento', 'evento.organizador = usuario.idusuario');
        $this->db->where('usuario.tipo', 3);
//        $this->db->where('evento.idevento', $idevento);
        return $this->db->get()->result();
     
    }
    
    function listarEventoPalestranteInstrutor($idusuario) {
        $this->db->select('usuario.idusuario, usuario.nome, evento.idevento, evento.nome as nomeevento, evento.palestranteinstrutor, evento.dtinicio ');
        $this->db->from('evento');
        $this->db->join('usuario', 'usuario.idusuario = evento.palestranteinstrutor');
        $this->db->where('usuario.tipo', 4);
//        $this->db->where('evento.idevento', $idevento);
        return $this->db->get()->result();
     
    }
     
    function listarPalestranteInstrutor() {
            $query = $this->db->query("
                SELECT idusuario, nome
                FROM usuario
                WHERE tipo = 4");
        return $query->result();
     
    }

    function editar($idusuario) {
        $this->db->where('idusuario', $idusuario);
        $query = $this->db->get('usuario');
        return $query->result();
    }

    function atualizar($data, $idusuario) {
        $this->db->where('idusuario', $idusuario);
        $this->db->set($data);
        return $this->db->update('usuario');
    }

    function deletar($idusuario) {
        $this->db->where('idusuario', $idusuario);
        return $this->db->delete('usuario');
    }

    public function validaUsuario($data) {
        //   $this->output->enable_profiler(TRUE);
        $this->db->where('email', $data['email']);
        $this->db->where('senha', md5($data['senha']));
//        $this->db->where('tipo', $data['tipo']);
        return $this->db->get('usuario')->row();
        //$query = $this->db->get('usuario')->row();
        //print_r($this->db->last_query());        
    }

    public function listarEventoParticipante($idusuario) {
        $this->db->select("evento.nome,evento.dttermino, evento.dtinicio, usuarioevento.idusuario, usuarioevento.idevento,");
        $this->db->from("usuarioevento");
        $this->db->join("evento", "usuarioevento.idevento = evento.idevento");
        $this->db->join("usuario", "usuarioevento.idusuario = usuario.idusuario");
        $this->db->where("usuario.idusuario", $idusuario);
        return $this->db->get()->result_array();
         $query = $this->db->get_where('usuario', array('idusuario' => $idusuario));
//        return $query->row_object();
    }
    
     public function inscreverParticipanteEvento($data) {
//         return $this->db->insert('usuario', $data);
//        $this->db->select("evento.nome, usuarioevento.idusuarioevento");
//        $this->db->from("usuarioevento");
//        $this->db->join("evento", "usuarioevento.idevento = evento.idevento");
//        $this->db->join("usuario", "usuarioevento.idusuario = usuario.idusuario");
//        $this->db->where("usuario.idusuario", $idusuario);
//        
//        $inscricao=$this->db->query("INSERT INTO usuarioevento (idusuario, idevento) VALUES ('$idusuario','$idevento')");
//        return $inscricao;
        return $this->db->insert('usuarioevento', $data);
// Produces: INSERT INTO mytable (title, content, date) VALUES ('My Title', 'My Content', 'My Date')
    }
     public function informarDadosCertificado($idevento) {
         $this->db->select('evento.nome, evento.dtinicio, evento.dttermino, usuarioevento.idusuario, usuario.nome as nomeusuario, evento.palestranteinstrutor');
         $this->db->from('usuarioevento', 'usuario', 'evento');
          $this->db->join ('evento', 'usuarioevento.idevento = evento.idevento');
           $this->db->join('usuario', 'usuarioevento.idusuario = usuario.idusuario');
           $this->db->where('evento.idevento', $idevento);
         return $this->db->get()->result();
        
//        $this->db->select('usuario.idusuario, usuario.nome as participante, evento.idevento, evento.nome, evento.dtinicio, evento.dttermino');
//        $this->db->from('usuarioevento','usuario', 'evento');
//        $this->db->join('evento', 'usuarioevento.idevento = evento.idevento');
//        $this->db->join('usuario', 'usuarioevento.idusuario = usuario.idusuario');
//        $this->db->where('usuario.tipo', 2);
//        $this->db->where('evento.idevento', $idevento);
       
        }

}
