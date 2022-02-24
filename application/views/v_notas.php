<div class="Cursos_box1">
    <div class="container fundo">
        <div>
            <a href="javascript:window.history.go(-1)"><img align="center" class="img-responsive voltar" src="<?= base_url('images/voltar.png') ?>" width="50" height="50"></a>
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
                            <div class="id_col"><a href="curso_detalhe.php"><?php echo $e->idevento; ?></a></div>
                            <div class="name_col"><a href="curso_detalhe.php"><?php echo $e->nome; ?></a></div>
                            <div class="tipo_col"><?php echo $e->tipo; ?></div>
                            <div class="acao_col">
                                <!--<a href= "<?php echo base_url() . 'curso/inscrever/' . $e->idevento; ?>"><button type="button" class="btn btn-success"><i  class = "fa fa-pencil" > </i>&nbsp; Inscrever</button></a>--> 
                                <a href= "<?php echo base_url('curso/inscrever/') ?>"><button type="button" class="btn btn-success"><i  class = "fa fa-pencil" > </i>&nbsp; Inscrever</button></a> 
                            </div>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>  
    </div>
</div>
