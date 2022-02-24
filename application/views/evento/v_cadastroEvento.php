<!--<div class="Cursos_box1">-->
<?php echo form_open('evento/inserir', 'id="form-cadastroEvento"'); ?>
<form class="login_interno">
    <!--<div class="container">-->

    <div class="panel panel-info cadastroevento">
        <div class="panel-heading">
            <div class="panel-title">Cadastro de Eventos</div>
        </div>  
        <div class="panel-body" >
            <div class="form-group">
                <label for="nome" class="col-md-2 control-label">Nome</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="nome" placeholder="" value="<?php echo set_value('nome'); ?>"/><br>
                    <div class="error"><?php echo form_error('nome'); ?></div>
                </div>
            </div>
            <div class="form-group esp-form">
                <label for="descricao" class="col-md-2 control-label">Descrição</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="descricao" placeholder="" value="<?php echo set_value('descricao'); ?>"/><br>
                    <div class="error"><?php echo form_error('descricao'); ?></div>
                </div>
            </div>

            <input type="hidden" name="organizador" id="organizador" value="<?php echo set_value('idorganizador'); ?>"/>

            <div class="form-group">
                <label for="palestranteinstrutor" class="col-md-2 control-label">Palestrante/Instrutor:</label>
                <div class="col-md-10">
                    <select id="palestranteinstrutor" name="palestranteinstrutor" class="form-control">
                        <option value='' selected="selected"> Selecione o palestrante/instrutor </option>
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
                        <option value="" selected="selected">Selecione o tipo</option>
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
            <div class="form-group esp-form">
                <label for="dtinicio" class="col-md-2 control-label">Data Início</label>
                <div class="col-md-2">
                    <input type="date" class="form-control" name="dtinicio" placeholder="" value="<?php echo set_value('dtinicio'); ?>"/>
                    <div class="error"><?php echo form_error('dtinicio'); ?></div>
                </div>
            </div>
            <div class="form-group esp-form">
                <label for="dttermino" class="col-md-2 control-label">Data de Término</label>
                <div class="col-md-2">
                    <input type="date" class="form-control" name="dttermino" placeholder="" value="<?php echo set_value('dttermino'); ?>"/><br>
                    <div class="error"><?php echo form_error('dttermino'); ?></div>
                </div>
            </div>
            <div class="form-group esp-form">
                <label for="qtdevagas" class="col-md-2 control-label">Quantidade de vagas</label>
                <div class="col-md-2">
                    <input max="999999999999999" min="0" type="number" class="form-control" name="qtdevagas" placeholder="" value="<?php echo set_value('qtdevagas'); ?>"/>
                    <div class="error"><?php echo form_error('qtdevagas'); ?></div>
                </div>
            </div>
            <div class="form-group esp-form">
                <label for="horarioinicio" class="col-md-2 control-label">Horário de Início</label>
                <div class="col-md-2">
                    <input type="time" class="form-control" name="horarioinicio" placeholder="" value="<?php echo set_value('horarioinicio'); ?>"/>
                    <div class="error"><?php echo form_error('horarioinicio'); ?></div>
                </div>
            </div>
            <div class="form-group esp-form">
                <label for="horariotermino" class="col-md-2 control-label">Horário de Término</label>
                <div class="col-md-2">
                    <input type="time" class="form-control" name="horariotermino" placeholder="" value="<?php echo set_value('horariotermino'); ?>"/><br>
                    <div class="error"><?php echo form_error('horariotermino'); ?></div>
                </div>
            </div>
            <div class="form-group esp-form">
                <label for="url" class="col-md-2 control-label">URL</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="url" placeholder="" value="<?php echo set_value('url'); ?>"/>
                    <div class="error"><?php echo form_error('url'); ?></div>
                </div>
            </div>
             <div class="form-group esp-form">
                <label for="valor" class="col-md-1 control-label">Valor</label>
                <div class="col-md-3">
                    <input type="number" min="0,00" max="10000,00" step="0,01" class="form-control money2" name="valor" placeholder="" value="<?php echo set_value('valor'); ?>"/><br>
                    <div class="error"><?php echo form_error('valor'); ?></div>
                </div>
            </div>
            <div class="form-group esp-form">
                <label for="status" class="col-md-2 control-label">Situação</label>
                <div class="col-md-2">
                    <input type="radio" class="radio" name="status" value="Ativo" <?php echo set_radio('status', 'Ativo', TRUE); ?> />Ativo
                </div>
                <div class="col-md-2">
                    <input type="radio" class="radio" name="status" value="Inativo" <?php echo set_radio('status', 'Inativo'); ?> />Inativo
                </div>
            </div>
            <!--            <div class="form-group esp-form">
                            <label for="tipopagamento" class="col-md-2 control-label">Tipo de Pagamento</label>
                            <div class="col-md-2">
                                <input type="radio" class="radio" name="tipopagamento" value="cartao" <?php echo set_radio('status', 'Ativo', TRUE); ?> />Ativo
                            </div>
                            <div class="col-md-2">
                                <input type="radio" class="radio" name="tipopagamento" value="cartao" <?php echo set_radio('status', 'Inativo'); ?> />Inativo
                            </div>
                            
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="tipo" placeholder="" value="<?php echo set_value('tipo'); ?>"/>
                                <div class="error"><?php echo form_error('tipo'); ?></div>
                            </div>
                        </div>-->
           
            <div class="form-group ">
                <!-- Button -->                                        
                <div class="col-md-offset-3 col-md-9">
                    <input type="submit" name="cadastrar" value="Cadastrar" class="botao" />

                    <input type="button" name="voltar" onclick='history.go(-1)' value="Voltar" class="botao" />
                </div>
            </div>
        </div>

    </div>

    <!--</div>-->
</form>
<?php echo form_close(); ?> 
<!--</div>-->
