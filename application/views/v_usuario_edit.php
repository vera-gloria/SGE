<div clas="Cursos_box1">
    <div class="container">
        <?php echo form_open('usuarioInterno/atualizar', 'id="form-usuarioInterno"'); ?>
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Cadastro</div>
            </div>  
            <div class="panel-body" >

                <div class="form-group">
                    <label for="nome" class="col-md-2 control-label">Nome Completo</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="nome" placeholder="Como consta no seu CPF" value="<?php echo $dados_usuario[0]->nome; ?>"/>
                        <div class="error"><?php echo form_error('nome'); ?></div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="cpf" class="col-md-2 col-lg-2 control-label">CPF</label>
                    <div class="col-md-10 col-lg-10">
                        <input type="text" class="form-control" name="cpf" placeholder="Apenas números, ex: 00011122233" value="<?php echo $dados_usuario[0]->cpf; ?>"/>
                        <div class="error"><?php echo form_error('cpf'); ?></div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="endereco" class="col-md-2 control-label">Endereço</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="endereco" placeholder="Ex: Rua, Nº, Bairro, Cidade, Estado" value="<?php echo $dados_usuario[0]->endereco; ?>"/>
                        <div class="error"><?php echo form_error('endereco'); ?></div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-md-2 control-label">E-mail</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="email" placeholder="exemplo@gmail.com" value="<?php echo $dados_usuario[0]->email; ?>"/>
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
                        <input type="submit" name="cadastrar" value="Cadastrar" />
                        <input type="button" name="voltar" onclick='javascript:history.back();self.location.reload();' value="Voltar" />
                    </div>
                </div>

            </div>
        </div>
        <?php echo form_close(); ?>  

    </div>
</div>
