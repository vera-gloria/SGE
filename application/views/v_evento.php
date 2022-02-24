<div class="Cursos_box1">
    <div class="container fundo">
        <div>
            <a href="javascript:window.history.go(-1)"><img align="center" class="img-responsive voltar" src="<?= base_url('images/voltar.png') ?>" width="50" height="50"></a>
        </div>    

        <div class="col-md-12 cadastro-button centro-block">
            <a href="<?= base_url('evento/listar') ?>"><input type="submit" value="Cadastrar Evento" class="cursocadastro"></a>
        </div> 

        <div class="col-md-12">
            <div class="list">
                <div class="table-header clearfix">
                    <div class="id_col">ID</div>
                    <div class="name_col">Nome Curso</div>
                    <div class="tipo_col">Tipo de Evento</div>
                    <div class="acao_col">Ação</div>
                </div>


                <ul class="table-list">
                    <?php foreach ($evento as $e): ?>
                        <li class="clearfix">
                            <div class="id_col"><a href="<?php echo base_url() . 'evento/detalharEvento/' . $e->idevento; ?>"><?php echo $e->idevento; ?></a></div>
                            <div class="name_col"><a href="<?php echo base_url() . 'evento/detalharEvento/' . $e->idevento; ?>"><?php echo $e->nome; ?></a></div>
                            <div class="tipo_col"><?php echo $e->tipo; ?></div>
                            <div class="acao_col">
                                <a href= "<?php echo base_url() . 'evento/editar/' . $e->idevento; ?>"><button type="button" class="btn btn-success"><i  class = "fa fa-pencil" > </i>&nbsp; Editar</button></a> 
                                <a href= "#"><button type="button" class="btn btn-spread"><i  class = "fa fa-share" > </i>&nbsp; Divulgar</button></a>
                                <a href= "<?php echo base_url() . 'conteudo/index/' . $e->idevento; ?>"><button type="button" class="btn btn-spread disponibilizar"><i  class = "fa fa-share" > </i>&nbsp; Disponibilizar Conteúdo</button></a>
                                <a href= "<?php echo base_url() . 'email/index/' . $e->idevento; ?>"><button type="button" class="btn btn-spread disponibilizar"><i  class = "fa fa-share" > </i>&nbsp; E-mail</button></a>
                                <a href= "<?php echo base_url() . 'evento/deletar/' . $e->idevento; ?>"><button type="button" class="btn btn-danger" onclick="return confirm('Confirma a exclusão deste registro?')"><i  class = "fa fa-trash-o fa-cog" > </i>&nbsp; Excluir</button></a> 
                            </div>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>  
    </div>
</div>
