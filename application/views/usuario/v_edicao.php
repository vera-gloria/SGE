<?php echo form_open('usuario/atualizar', 'id="form-usuarioeditar"'); ?>
<div class="panel panel-info">
    <div class="panel-heading">
        <div class="panel-title">Edição de Usuário</div>
    </div>  
    <div class="panel-body" >
        <div class="form-group">
            <label for="nome" class="col-sm-2 control-label">Nome Completo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nome" placeholder="Como consta no seu CPF" value="<?php echo $dados_usuario[0]->nome; ?>"/>
                <div class="error"><?php echo form_error('nome'); ?></div>
            </div>
        </div>
        <div class="form-group">
            <label for="cpf" class="col-sm-2 control-label">CPF</label>
            <div class="col-sm-4">
                <input type="text" class="form-control cpf-mask input-md" required="" type="text" maxlength="11" pattern="[0-9]+$" name="cpf" placeholder="Apenas números, ex: 00011122233" value="<?php echo $dados_usuario[0]->cpf; ?>"/>
                <div class="error"><?php echo form_error('cpf'); ?></div>
            </div>
        </div>
        <div class="form-group">
            <label for="sexo" class="col-sm-1 control-label">Sexo:</label>
            <div class="col-sm-2">
                <input type="radio" class="radio" name="sexo" value ="1" <?php echo ($dados_usuario[0]->tipo == '1') ? 'checked' : ''; ?>> Feminino <br>
            </div>
            <div class="col-sm-2">
                <input type="radio" class="radio" name="sexo" value ="2" <?php echo ($dados_usuario[0]->tipo == '2') ? 'checked' : ''; ?>> Masculino <br>
            </div>
        </div><br>
        <div class="form-group">
            <label for="endereco" class="col-sm-2 control-label">Endereço</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="endereco" placeholder="Ex: Rua, Nº, Bairro, Complemento, CEP" value="<?php echo $dados_usuario[0]->endereco; ?>"/><br>
                <div class="error"><?php echo form_error('endereco'); ?></div>
            </div>
        </div>

        <div class="form-group">
            <label for="estados" class="col-sm-2 control-label">Estado:</label>
            <div class="col-sm-4">
                <select id="estado" class="form-control" name="estado" >
                    <?php foreach ($estados as $uf): ?>                

                        <?php if ($estado_participante->Uf == $uf->Uf) { ?>
                            <option selected value="<?php echo $uf->Uf ?> "><?php echo $uf->Nome ?></option> 
                        <?php } else { ?>
                            <option value="<?php echo $uf->Uf ?> "><?php echo $uf->Nome ?></option> 
                        <?php } ?>

                    <?php endforeach; ?>
                </select>
                <!--<div class="error"><?php echo form_error('estado'); ?></div>-->
            </div>
        </div>
        <div class="form-group">
            <label for="cidades" class="col-sm-1 control-label">Cidade:</label>
            <div class="col-sm-4">
                <select id="cidade" name="cidade" class="form-control" >
                    <?php foreach ($cidades as $cidade): ?>             
                        <?php if ($cidade_participante->Id == $cidade->Id) { ?>
                            <option selected value="<?php echo $cidade->Id ?> "><?php echo $cidade->Nome ?></option>
                        <?php } else { ?>
                            <option value="<?php echo $cidade->Id ?> "><?php echo $cidade->Nome ?></option>
                        <?php } ?>

                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="tipo" class="col-md-2 control-label">Tipo</label>
            <div class="col-md-10">
                <div class="col-md-3">
                    <input type="radio" class="radio" name="tipousuario" value ="1" <?php echo ($dados_usuario[0]->tipo == '1') ? 'checked' : ''; ?>> Gerente de Eventos <br>
                </div>
                <div class="col-md-3">
                    <input type="radio" class="radio" name="tipousuario" value ="2" <?php echo ($dados_usuario[0]->tipo == '2') ? 'checked' : ''; ?>> Participante <br>
                </div>
                <div class="col-md-3">
                    <input type="radio" class="radio" name="tipousuario" value="3" <?php echo ($dados_usuario[0]->tipo == '4') ? 'checked' : ''; ?> />Organizador
                </div>
                <div class="col-md-3">
                    <input type="radio" class="radio" name="tipousuario" value ="4" <?php echo ($dados_usuario[0]->tipo == '4') ? 'checked' : ''; ?>> Palestrante/instrutor <br>
                </div>
                    <!--<div class="error"><?php echo form_error('tipo'); ?></div>-->
                </div>
            </div>

            <div class="form-group">
                <label for="foto" class="col-md-2 control-label">Foto</label>
                <div class="col-md-10">
                    <!--<input type="file" name="userfile" size="20" />-->
                    <input type="file" class="form-control" name="img" id="Imagem"  accept="images/*" value=""><br>
                    <div class="error"><?php echo form_error('foto'); ?></div>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-md-2 control-label">E-mail</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="email" placeholder="exemplo@gmail.com" value="<?php echo $dados_usuario[0]->email; ?>"/><br>
                    <div class="error"><?php echo form_error('email'); ?></div>
                </div>
            </div>
            <div class="form-group">
                <label for="senha" class="col-md-2 control-label">Senha</label>
                <div class="col-md-10">
                    <input type="password" class="form-control" name="senha" placeholder="Digite a senha" value="<?php echo $dados_usuario[0]->senha; ?>"/>
                    <div class="error"><?php echo form_error('senha'); ?></div>
                </div>
            </div>

            <div class="form-group">
                <!-- Button -->                                        
                <div class="col-md-offset-3 col-md-9">
                    <input type="hidden" name="idusuario" id="idusuario" value="<?php echo $dados_usuario[0]->idusuario; ?>"/>
                    <input type="submit" name="salvar" value="Salvar" class="botao" data-toggle="modal" data-target="#myModal" />
                    <input type="button" name="voltar" onclick='history.go(-1)' value="Voltar" class="botao"/>
                </div>
            </div>

        </div>
    </div>
    <?php echo form_close(); ?>  

    <!--</div>-->
    <!--</div>-->

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edição Usuário</h4>
                </div>
                <div class="modal-body">
                    <p><?php echo $this->session->flashdata('message'); ?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                </div>
            </div>

        </div>
    </div>

