<div class="Cursos_box1">
    <div class="container">
        <div>
            <div class="Cursos_box1-left">
                <h1>Eventos Inscritos/Meus Eventos</h1>
            </div>
        </div>

        <div class="col-md-12">
            <div class="list">
                <div class="table-header clearfix">
                    <div class="id_col">ID</div>
                    <div class="name_col">Nome Curso</div>
                    <div class="">Ação</div>
                </div>
                <ul class="table-list">
                    <?php foreach ($usuevento as $ue): ?>
                        <li class="clearfix">
                            <div class="id_col"><a href="<?php echo base_url() . 'evento/detalharEvento/' . $ue->idevento; ?>"><?php echo $ue->idevento; ?></a></div>
                            <div class="name_col"><a href="<?php echo base_url() . 'evento/detalharEvento/' . $ue->idevento; ?>"><?php echo $ue->nome; ?></a></div>
                            <div class="acao_col">
                                <a href= "<?php echo base_url() . 'conteudo/index/' . $ue->idevento; ?>"><button type="button" class="btn btn-spread disponibilizar"><i  class = "fa fa-share" > </i>&nbsp; Conteúdo</button></a>
                                <a href= "<?php echo base_url() . 'evento/editar/' . $ue->idevento; ?>"><button type="button" class="btn btn-success"><i  class = "fa fa-pencil" > </i>&nbsp; Frequência</button></a> 
                                <a href= "<?php echo base_url() . 'evento/cancelar/' . $ue->idevento; ?>"><button type="button" class="btn btn-danger" onclick="return confirm('Deseja cancelar inscrição em evento?')"><i  class = "fa fa-trash-o fa-cog" > </i>&nbsp; Cancelar Inscrição</button></a> 
                                <a href= "<?php echo base_url() . 'certificado/index/' . $ue->idevento; ?>"><button type="button" class="btn btn-spread"><i  class = "fa fa-share" > </i>&nbsp; Certificado</button></a>
                            </div>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </div>
</div>