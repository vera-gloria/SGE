<?php

class evento_model extends CI_Model {

    public $tipo;
    public $dataHoje;

    function __construct() {
        parent::__construct();
    }

    function inserir($data) {
        return $this->db->insert('evento', $data);
    }

    function listarEvento() {
        $query = $this->db->get('evento');
        return $query->result();
    }

    function pagarInscricao($idevento) {
        $this->db->select('idevento,nome,dtinicio,dttermino,qtdevagas,valor');
        $this->db->where('idevento', $idevento);
        $query = $this->db->get('evento');
        return $query->row();
    }

    function listarEventoAtivo() {
        $this->db->where('status', 'Ativo');
        $query = $this->db->get('evento');
        return $query->result();
    }

    function retornarDadosBoletoEvento($idevento) {
        $query = $this->db->query("SELECT idevento, nome, valor
            FROM evento
        WHERE status='Ativo' AND idevento=$idevento"
        );
        return $query->row();
    }

    function listarEventoOrganizador($idusuario) {
        $this->db->select('evento.idevento, evento.nome as nomeevento, evento.tipo, evento.descricao, evento.dtinicio, evento.dttermino, evento.qtdevagas, evento.horarioinicio, evento.horariotermino, evento.url, evento.status, usuario.idusuario, usuario.nome, evento.organizador');
        $this->db->from('usuario');
        $this->db->join('evento', 'evento.organizador = usuario.idusuario');
        $this->db->where('usuario.tipo', 3);
//        $this->db->where('evento.idevento', $idevento);
        return $this->db->get()->result();
    }

    function retornarDadosBoletoUsuario($idusuario) {
        $query = $this->db->query("SELECT u.idusuario, u.nome, u.endereco, u.estado, c.Nome as cidade
        FROM usuario u
        join cidade c on u.cidade=c.Id
        where idusuario=$idusuario"
        );
        return $query->result();
    }

    function listarEmailParticipanteEvento($idevento) {
//        $this->db->Select('email');
//        $this->db->where('status', 'Ativo');
//        $query = $this->db->get('usuario');
//        return $query->result();
//        $this->db->select('evento.nome, evento.dtinicio, evento.dttermino, usuarioevento.idusuario, usuario.email, usuario.nome as nomeusuario, evento.palestranteinstrutor');
//        $this->db->from('usuarioevento', 'usuario', 'evento');
//        $this->db->join('evento', 'usuarioevento.idevento = evento.idevento');
//        $this->db->join('usuario', 'usuarioevento.idusuario = usuario.idusuario');
//        $this->db->where('evento.status', 'Ativo');
//        $this->db->where('evento.idevento', $idevento);
//        return $this->db->get()->result();

        $query = $this->db->query("select usuario.email, evento.idevento
                                        from usuarioevento
                                        join evento on usuarioevento.idevento = evento.idevento
                                        join usuario on usuarioevento.idusuario = usuario.idusuario
                                        where evento.status='Ativo' and evento.idevento=$idevento");
        return $query->result();
    }

    function listarEventoParticipante($idevento) {
//        $this->db->Select('email');
//        $this->db->where('status', 'Ativo');
//        $query = $this->db->get('usuario');
//        return $query->result();
//        $this->db->select('evento.nome, evento.dtinicio, evento.dttermino, usuarioevento.idusuario, usuario.email, usuario.nome as nomeusuario, evento.palestranteinstrutor');
//        $this->db->from('usuarioevento', 'usuario', 'evento');
//        $this->db->join('evento', 'usuarioevento.idevento = evento.idevento');
//        $this->db->join('usuario', 'usuarioevento.idusuario = usuario.idusuario');
//        $this->db->where('evento.status', 'Ativo');
//        $this->db->where('evento.idevento', $idevento);
//        return $this->db->get()->result();
//
//        $query = $this->db->query("select evento.nome, evento.dtinicio, evento.dttermino, usuarioevento.idusuario, usuario.email, usuario.nome as nomeusuario, evento.palestranteinstrutor
//                                        from usuarioevento
//                                        join evento on usuarioevento.idevento = evento.idevento
//                                        join usuario on usuarioevento.idusuario = usuario.idusuario
//                                        where evento.status='Ativo' and evento.idevento=$idevento");
//        return $query->result();
//    }
        $query = $this->db->query("select evento.nome
                                        from usuarioevento
                                        join evento on usuarioevento.idevento = evento.idevento
                                        join usuario on usuarioevento.idusuario = usuario.idusuario
                                        where evento.status='Ativo' and evento.idevento=$idevento");
        return $query->row();
    }

    function listarEventoHome() {
        $query = $this->db->query("
                SELECT idevento, tipo, nome,  descricao, dtinicio, dttermino, qtdevagas, horarioinicio, horariotermino, url, status, palestranteinstrutor, valor
                FROM evento
                WHERE status='Ativo' and dtinicio>now()"
        );
        return $query->result();
    }

    function listarTipos() {

        $query = $this->db->query("
                SELECT tipo
                FROM evento
                WHERE status='Ativo'  and dtinicio>now()
                GROUP BY tipo");
        return $query->result_object();
    }

    function contadorVagas($idevento) {
        $query = $this->db->query("
                SELECT (e.qtdevagas - COALESCE(ue.totalInscritos, 0)) as qtdevagas 
                    FROM evento e
                    LEFT JOIN (SELECT count(idevento) AS totalInscritos
                    FROM usuarioevento
                    WHERE status= 'Inscrito' and idevento = $idevento
                    GROUP BY idevento) ue ON (idevento)
                WHERE idevento = $idevento");

        return $query->row_array();
    }

    function listarDetalheEvento($idevento) {
        $this->db->where('idevento', $idevento);
        $query = $this->db->get('evento');
        return $query->row_object();
    }

    function listarEventoTipoAtivo($tipo) {
        $this->db->where('tipo', '$tipo');
        $query = $this->db->get('evento');
        return $query->result();
    }

    function listarEventoCursos() {
        $this->db->where('tipo', 'Curso');
        $query = $this->db->get('evento');
        return $query->result();
    }

    function listarEventoFeiras() {
        $this->db->where('tipo', 'Feira');
        $query = $this->db->get('evento');
        return $query->result();
    }

    function listarEventoMiniCursos() {
        $this->db->where('tipo', 'Mini-Curso');
        $query = $this->db->get('evento');
        return $query->result();
    }

    function listarEventoPalestras() {
        $this->db->where('tipo', 'Palestra');
        $query = $this->db->get('evento');
        return $query->result();
    }

    function listarEventoSeminarios() {
        $this->db->where('tipo', 'Curso');
        $query = $this->db->get('evento');
        return $query->result();
    }

    function editar($idevento) {
        $this->db->where('idevento', $idevento);
        $query = $this->db->get('evento');
        return $query->result();
    }

    function acionarEvento($idevento) {
        $this->db->select('idevento');
        $this->db->where('idevento', $idevento);

        $query = $this->db->get('evento');
        return $query->row();
    }

    function nomearEvento($idevento) {
        $this->db->select('nome');
        $this->db->where('idevento', $idevento);
        $query = $this->db->get('evento');
        return $query->row();
    }

    function atualizar($data) {
        $this->db->where('idevento', $data['idevento']);
        $this->db->set($data);
        return $this->db->update('evento');
    }

    function deletar($idevento) {
        $this->db->where('idevento', $idevento);
        return $this->db->delete('evento');
    }

    public function inscrever($data) {
        return $this->db->insert('usuarioevento', $data);
    }

    function cancelarInscricao($idusuario, $idevento) {
        $this->db->where('idusuario', $idusuario);
        $this->db->where('idevento', $idevento);
        return $this->db->delete('usuarioevento');
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

    public function getGeneros($idevento) {
        $query = $this->db->query("
                SELECT  
                    CASE
                        WHEN u.sexo = 1 THEN  'Feminino'
                        WHEN u.sexo = 2  then 'Masculino'
                        ELSE 'Indefinido'
                    END as Label,
                    count(u.idusuario) AS total
                FROM usuarioevento ue
                JOIN usuario u ON ue.idusuario=u.idusuario
                WHERE ue.idevento = $idevento and u.sexo is not null
                GROUP BY u.sexo");
        return $query->result();
    }

// public function informarDadosCertificado($idevento, $idusuario) {
//        $query = $this->db->query("
//                select evento.nome, evento.dtinicio, evento.dttermino, usuarioevento.idusuario, usuario.nome as nomeusuario, evento.palestranteinstrutor
//                    from usuarioevento
//                    join evento on usuarioevento.idevento = evento.idevento
//                    join usuario on usuarioevento.idusuario = usuario.idusuario
//                    where evento.idevento= '$idevento' and usuario.idusuario= '$idusuario' ");
//        return $query->result();
//        }
    public function getRegioes($idevento) {
        $query = $this->db->query("
                SELECT  
                    CASE
                        WHEN e.regiao = 1 THEN  'Norte'
                        WHEN e.regiao = 2  THEN 'Nordeste'
                        WHEN e.regiao = 3  THEN 'Sudeste'
                        WHEN e.regiao = 4  THEN 'Sul'
                        WHEN e.regiao = 5  THEN 'Centro-Oeste'
                        ELSE 'Indefinido'
                    END as Regiao,
                    count(ue.idusuario) AS total
                FROM usuarioevento ue
                JOIN usuario u ON ue.idusuario=u.idusuario
                JOIN estado e ON u.estado=e.uf
                WHERE ue.idevento = $idevento and e.regiao is not null
                GROUP BY e.regiao");
        return $query->result();
    }

}
