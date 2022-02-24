<div clas="Cursos_box1">
    <?php echo form_open('conteudo/salvar', 'enctype="multipart/form-data"', 'method="POST"', 'class="login_interno"', 'action="salvar"'); ?>
    
      <div class="container">

            <div class="panel panel-info cadastroevento">
                <div class="panel-heading">
                    <div class="panel-title">Disponibilização de Conteúdo</div>
                </div>  
                <div class="panel-body" >
                        <div class="form-group">
                        <label for="nome" class="col-md-2 control-label">Nome</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="nome" placeholder="" value="<?php echo set_value('nome'); ?>"/>
                            <div class="error"><?php echo form_error('nome'); ?></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="descricao" class="col-md-2 control-label">Descrição</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="descricao" placeholder="" value="<?php echo set_value('descricao'); ?>"/>
                            <div class="error"><?php echo form_error('descricao'); ?></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="conteudo" class="col-md-2 control-label">Escolha o Arquivo</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control" name="conteudo" />
                            <div class="error"><?php echo form_error('conteudo'); ?></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- Button -->                                        
                        <div class="col-md-offset-3 col-md-9">
                            <input type="submit" name="salvar" value="Salvar" />
                            <input type="button" name="voltar" onclick='javascript:history.back();self.location.reload();' value="Voltar" />
                        </div>
                    </div>
                </div>

            </div>

        </div>
    
    <?php echo form_close(); ?> 
</div>
