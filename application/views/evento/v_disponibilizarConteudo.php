<div class="Cursos_box1">
    <?php if (isset($error)): ?>
        <div><?= $error ?></div>
    <?php endif; ?>

    <?php echo form_open_multipart('conteudo/upload/'. $idevento); ?>
    
    <div class="panel panel-info cadastroevento">
        <div class="panel-heading">
            <div class="panel-title">Disponibilização de Conteúdo - <?php echo $nomeevento->nome; ?></div>
        </div>  
        <div class="panel-body" >
            <div class="form-group">
                <label for="nome" class="col-md-2 control-label">Nome</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="nomeconteudo" placeholder="" value="<?php echo set_value('nome'); ?>"/>
                    <div class="error"><?php echo form_error('nome'); ?></div>
                </div>
            </div>
            <div class="form-group">
                <label for="descricao" class="col-md-2 control-label">Descrição</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="descricaoconteudo" placeholder="" value="<?php echo set_value('descricao'); ?>"/>
                    <div class="error"><?php echo form_error('descricao'); ?></div>
                </div>
            </div>
            <div class="form-group">
                <label for="conteudo" class="col-md-2 control-label">Escolha o Arquivo</label>
                <div class="col-md-10">
                    <input type="file" class="form-control" name="conteudo" />
                    <!--<div class="error"><?php echo form_error('upload_data'); ?></div>-->
                </div>
            </div>
            <div class="btn form-group col-sm-12">
                <!-- Button -->                                        
                <!--<div class="btn col-sm-6">-->
                   <!--<input type="submit" name="salvar" value="Salvar" <?php echo base_url() . '' . $conteudo[0]->idevento; ?>/>-->
                    <a href="<?php echo base_url() . 'conteudo/upload/' . $idevento; ?>"><input type="submit" value="Salvar" class="botao" data-toggle="modal" data-target="#myModal"></a>
                     <!--<input type="button" name="voltar" onclick='history.go(-1)' value="Voltar" />-->
                <!--</div>-->
                <!--<div class="btn col-sm-6">-->
                    <a href="javascript:window.history.go(-1)" class="botao">Voltar</a>
                <!--</div>-->
            </div>
        </div>
    </div>
<!--</div>-->

<?php echo form_close(); ?> 
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Disponibilizar Conteúdo</h4>
            </div>
            <div class="modal-body">
                <p><?php echo $this->session->flashdata('message'); ?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

