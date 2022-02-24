<div class="Cursos_box1">
    <div class="container fundo">
        <div>
            <a href="javascript:window.history.go(-1)"><img align="center" class="img-responsive voltar" src="<?= base_url('images/voltar.png') ?>" width="50" height="50"></a>
        </div>    

        <div class="col-md-12 cadastro-button centro-block">
            <div class="col-md-12 cadastro-button centro-block">
                <a href="<?= base_url('usuario/listar') ?>"><input type="submit" value="Cadastrar Usuário" class="usuariocadastro"></a>
            </div> 
        </div> 

        <div class="col-md-12">
            <div class="list">
                <div class="table-header clearfix">
                    <div class="id_usuario">ID</div>
                    <div class="name_usuario">Nome</div>
                    <div class="tipo_usuario">Tipo</div>
                    <div class="email_usuario">Email</div>
                    <div class="acao_usuario">Ação</div>
                </div>


                <ul class="list-usuario table-list">
                    <?php foreach ($usuario as $u): ?>
                        <li class="clearfix">
                            <div class="id_usuario"><?php echo $u->idusuario; ?></div>
                            <div class="name_usuario"><?php echo $u->nome; ?></div>
                            <div class="tipo_usuario"><?php echo $u->tipo; ?></div>
                            <div class="email_usuario"><?php echo $u->email; ?></div>
                            <div class="acao_usuario">
                                <a href= "<?php echo base_url() . 'usuario/editar/' . $u->idusuario; ?>"><button type="button" class="btn btn-success"><i  class = "fa fa-pencil" > </i>&nbsp; Editar</button></a> 
                                <a href= "<?php echo base_url() . 'usuario/deletar/' . $u->idusuario; ?>"><button type="button" class="btn btn-danger" onclick="return confirm('Confirma a exclusão deste registro?')"><i  class = "fa fa-trash-o fa-cog" > </i>&nbsp; Excluir</button></a> 
                            </div>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>  
    </div>
</div>
