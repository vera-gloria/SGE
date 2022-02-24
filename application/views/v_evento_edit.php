<div clas="Cursos_box1">
    <?php echo form_open('evento/atualizar', 'id="form-editaEvento"'); ?>
    <form class="login_interno">
        <div class="container">
            <div class="panel panel-info cadastroevento">
                <div class="panel-heading">
                    <div class="panel-title">Edição de Eventos</div>
                </div>  
                <div class="panel-body" >
                    <div class="form-group">
                        <label for="tipo" class="col-md-2 control-label">Tipo de Evento</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="tipo" placeholder="" value="<?php echo $dados_evento[0]->tipo; ?>"/>
                            <div class="error"><?php echo form_error('tipo'); ?></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nome" class="col-md-2 control-label">Nome</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="nome" placeholder="" value="<?php echo $dados_evento[0]->nome; ?>"/>
                            <div class="error"><?php echo form_error('nome'); ?></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="descricao" class="col-md-2 control-label">Descrição</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="descricao" placeholder="" value="<?php echo $dados_evento[0]->descricao; ?>"/>
                            <div class="error"><?php echo form_error('descricao'); ?></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dtinicio" class="col-md-2 control-label">Data Inicio</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="dtinicio" placeholder="" value="<?php echo $dados_evento[0]->dtinicio; ?>"/>
                            <div class="error"><?php echo form_error('dtinicio'); ?></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dttermino" class="col-md-2 control-label">Data de Término</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="dttermino" placeholder="" value="<?php echo $dados_evento[0]->dttermino; ?>"/>
                            <div class="error"><?php echo form_error('dttermino'); ?></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="qtdevagas" class="col-md-2 control-label">Quantidade de vagas</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="qtdevagas" placeholder="" value="<?php echo $dados_evento[0]->qtdevagas; ?>"/>
                            <div class="error"><?php echo form_error('qtdevagas'); ?></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="horario" class="col-md-2 control-label">Horário</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="horario" placeholder="" value="<?php echo $dados_evento[0]->horario; ?>"/>
                            <div class="error"><?php echo form_error('horario'); ?></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="url" class="col-md-2 control-label">URL</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="url" placeholder="" value="<?php echo $dados_evento[0]->url; ?>"/>
                            <div class="error"><?php echo form_error('url'); ?></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-md-2 control-label">status</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="status" placeholder="" value="<?php echo $dados_evento[0]->status; ?>"/>
                            <div class="error"><?php echo form_error('status'); ?></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- Button -->                                        
                        <div class="col-md-offset-3 col-md-9">
                            <input type="submit" name="cadastrar" value="Salvar" />
                            <input type="button" name="voltar" onclick='javascript:history.back();self.location.reload();' value="Voltar" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <?php echo form_close(); ?> 
</div>
