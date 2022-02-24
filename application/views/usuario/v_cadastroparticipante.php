<?php echo form_open('usuario/inserir', 'id="form-usuarioInterno"'); ?>
<div class="panel panel-info">
    <div class="panel-heading">
        <div class="panel-title">Cadastro</div>
    </div>  
    <div class="panel-body" >
        <div class="form-group">
            <label for="nome" class="col-md-2 control-label">Nome Completo</label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="nome" placeholder="Como consta no seu CPF" value="<?php echo set_value('nome'); ?>"/>
                <div class="error"><?php echo form_error('nome'); ?></div>
            </div>
        </div>
        <div class="form-group">
            <label for="cpf" class="col-md-2 col-lg-2 control-label">CPF</label>
            <div class="col-md-10 col-md-4">
                <input type="text" class="form-control" name="cpf" placeholder="Apenas números, ex: 00011122233" value="<?php echo set_value('cpf'); ?>"/>
                <div class="error"><?php echo form_error('cpf'); ?></div>
            </div>
        </div>
        <div class="form-group">
            <label for="sexo" class="col-md-1 control-label">Sexo:</label>
            <div class="col-md-2">
                <input type="radio" class="radio" name="sexo" value="1" <?php echo set_radio('sexo', '1', TRUE); ?> />Feminino
            </div>
            <div class="col-md-2">
                <input type="radio" class="radio" name="sexo" value="2" <?php echo set_radio('sexo', '2'); ?> />Masculino
            </div>
        </div>
        <div class="form-group">
            <label for="endereco" class="col-md-2 control-label">Endereço</label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="endereco" placeholder="Ex: Rua, Nº, Bairro, Cidade, Estado" value="<?php echo set_value('endereco'); ?>"/>
                <div class="error"><?php echo form_error('endereco'); ?></div>
            </div>
        </div>
        <div class="form-group">
            <label for="estados" class="col-md-2 control-label">Estado:</label>
            <div class="col-md-4">
                <select id="estado" class="form-control" name="estado" >
                    <option value='' selected="selected"> Selecione o Estado </option>
                    <?php foreach ($estados as $uf): ?>                
                        <option value="<?php echo $uf->Uf ?> "><?php echo $uf->Nome ?></option> 
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="cidades" class="col-md-1 control-label">Cidade:</label>
            <div class="col-md-4">
                <select id="cidade" name="cidade" class="form-control" disabled>
                    <option value='' selected="selected"> Selecione a Cidade </option>
                    <?php foreach ($cidades as $cidade): ?>                
                        <option value="<?php echo $cidade->Id ?> "><?php echo $cidade->Nome ?></option> 
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="tipo" class="col-md-2 control-label">Tipo:</label>
            <div class="col-md-2">
                <input type="hidden" name="tipo" value="2" <?php echo set_radio('tipo', '2'); ?> />
            </div>
        </div>

        <div class="form-group">
            <label for="foto" class="col-md-2 control-label">Foto</label>
            <div class="col-md-10">
                <input type="file" class="form-control" name="img" id="Imagem"  accept="images/*" value="">
                <div class="error"><?php echo form_error('foto'); ?></div>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-md-2 control-label">E-mail</label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="email" placeholder="exemplo@gmail.com" value="<?php echo set_value('email'); ?>"/>
                <div class="error"><?php echo form_error('email'); ?></div>
            </div>
        </div>
        <div class="form-group">
            <label for="senha" class="col-md-2 control-label">Senha</label>
            <div class="col-md-10">
                <input type="password" class="form-control" name="senha" placeholder="Digite a senha" value="<?php echo set_value('senha'); ?>"/>
                <div class="error"><?php echo form_error('senha'); ?></div>
            </div>
        </div>

        <div class="form-group">
            <!-- Button -->                                        
            <div class="col-md-offset-3 col-md-10">
                <input type="submit" name="cadastrar" data-toggle="modal" data-target="#myModal" value="Cadastrar" />
                <!--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>-->
                <input type="button" name="voltar" onclick='history.go(-1)' value="Voltar" />
            </div>
        </div>
   </div>
</div>
<?php if ($this->session->flashdata('mensagem')) { ?>
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="submit" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
<?php } ?>
<?php echo form_close(); ?> 