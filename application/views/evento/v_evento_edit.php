<div class="Cursos_box1">
    <?php if (isset($error)): ?>
        <div><?= $error ?></div>
    <?php endif; ?>

    <?php echo form_open_multipart('evento/atualizar'); ?>
    <form class="login_interno">
        <!--<div class="container">-->
        <div class="panel panel-info cadastroevento">
            <div class="panel-heading">
                <div class="panel-title">Edição de Eventos</div>
            </div>  
            <div class="panel-body" >
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
                        <input type="text" class="form-control" name="descricao" placeholder="" value="<?php echo $dados_evento[0]->descricao; ?>"/><br>
                        <div class="error"><?php echo form_error('descricao'); ?></div>
                    </div>
                </div>
                <input type="hidden" name="organizador" id="organizador" value="<?php echo set_value('idorganizador'); ?>"/>

                <div class="form-group">
                    <label for="palestranteinstrutor" class="col-md-2 control-label">Palestrante/Instrutor:</label>
                    <div class="col-md-10">
                        <select id="palestranteinstrutor" name="palestranteinstrutor" class="form-control">
                            <option value="<?php echo $dados_evento[0]->palestranteinstrutor; ?>" selected="selected"> <?php echo $dados_evento[0]->palestranteinstrutor; ?> </option>
                            <?php foreach ($palestranteinstrutor as $pi): ?>                
                                <option value="<?php echo $pi->idusuario ?> "><?php echo $pi->nome ?></option> 
                            <?php endforeach; ?>
                        </select><br>
                    </div>
                </div>
                <div class="form-group esp-form">
                    <label for="tipo" class="col-md-2 control-label">Tipo de Evento</label>
                    <div class="col-md-2">
                        <select name="tipo">
                            <!--<option value="" selected="selected">Selecione o tipo</option>-->
                            <option value="<?php echo $dados_evento[0]->tipo; ?>" selected="selected"><?php echo $dadosevento[0]->tipo; ?></option>
                                    <!--value="<?php echo $rowpesquisa['id']; ?>">-->
                            <option value="Congresso" <?php echo set_select('tipo', 'Congresso'); ?> >Congresso</option>
                            <option value="Curso" <?php echo set_select('tipo', 'Curso'); ?>>Curso</option>
                            <option value="Feira" <?php echo set_value('tipo'); ?>> Feira  </option>
                            <option value="Mini-curso" <?php echo set_value('tipo'); ?>> Mini-curso  </option>
                            <option value="Palestras" <?php echo set_value('tipo'); ?>>Palestra </option>
                            <option value="Seminário" <?php echo set_value('tipo'); ?>>Seminário </option>
                            <option value="Simpósio" <?php echo set_value('tipo'); ?>>Simpósio </option>
                        </select>
                        <div class="error"><?php echo form_error('tipo'); ?></div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="dtinicio" class="col-md-2 control-label">Data Inicio</label>
                    <div class="col-md-2">
                        <input type="date" class="form-control" name="dtinicio" placeholder="" value="<?php echo $dados_evento[0]->dtinicio; ?>"/>
                        <div class="error"><?php echo form_error('dtinicio'); ?></div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="dttermino" class="col-md-2 control-label">Data de Término</label>
                    <div class="col-md-2">
                        <input type="date" class="form-control" name="dttermino" placeholder="" value="<?php echo $dados_evento[0]->dttermino; ?>"/><br>
                        <div class="error"><?php echo form_error('dttermino'); ?></div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="qtdevagas" class="col-md-2 control-label">Quantidade de vagas</label>
                    <div class="col-md-2">
                        <input max="999999999999999" min="0" type="number"  class="form-control" name="qtdevagas" placeholder="" value="<?php echo $dados_evento[0]->qtdevagas; ?>"/>
                        <div class="error"><?php echo form_error('qtdevagas'); ?></div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="horarioinicio" class="col-md-2 control-label">Horário de Início</label>
                    <div class="col-md-2">
                        <input type="time" class="form-control" name="horarioinicio" placeholder="" value="<?php echo $dados_evento[0]->horarioinicio; ?>"/>
                        <div class="error"><?php echo form_error('horarioinicio'); ?></div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="horariotermino" class="col-md-2 control-label">Horário de Término</label>
                    <div class="col-md-2">
                        <input type="time" class="form-control" name="horariotermino" placeholder="" value="<?php echo $dados_evento[0]->horariotermino; ?>"/><br>
                        <div class="error"><?php echo form_error('horariotermino'); ?></div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="url" class="col-md-2 control-label">URL</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="url" placeholder="" value="<?php echo $dados_evento[0]->url; ?>"/><br>
                        <div class="error"><?php echo form_error('url'); ?></div>
                    </div>
                </div>
                <div class="form-group esp-form">
                <label for="valor" class="col-md-1 control-label">Valor</label>
                <div class="col-md-3">
                    <input type="number" min="0,00" max="10000,00" step="0,01" class="form-control money2" name="valor" placeholder="" value="<?php echo $dados_evento[0]->valor; ?>"/><br>
                    <div class="error"><?php echo form_error('valor'); ?></div>
                </div>
            </div>
                <div class="form-group">
                    <label for="status" class="col-md-2 control-label">Situação</label>
                    <div class="col-md-2">
                        <input type="radio" name="status" value ="Ativo" <?php echo ($dados_evento[0]->status == 'Ativo') ? 'checked' : ''; ?>> Ativo <br>
                        <div class="error"><?php echo form_error('status'); ?></div>
                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="status" value ="Inativo" <?php echo ($dados_evento[0]->status == 'Inativo') ? 'checked' : ''; ?>> Inativo <br>
                        <div class="error"><?php echo form_error('status'); ?></div>
                    </div>
                </div>
                <div class="form-group">
                    <!-- Button -->                                        
                    <div class="col-md-offset-3 col-md-9">
                        <input type="hidden" name="idevento" id="idevento" value="<?php echo $dados_evento[0]->idevento; ?>"/>
                        <input type="submit" name="cadastrar" value="Salvar" class="botao" data-toggle="modal" data-target="#myModal" />
                        <input type="button" name="voltar" onclick='history.go(-1)' value="Voltar" class="botao" />
                    </div>
                </div>
                <!--<input type='hidden' name="idevento" value="<?= set_value('idevento') ? : (isset($idevento) ? $idevento : ''); ?>">-->

            </div>
        </div>
        <!--</div>-->
    </form>
    <?php echo form_close(); ?> 
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edição Evento</h4>
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


