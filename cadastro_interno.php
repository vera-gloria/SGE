<?php
require 'header_interno.html';
?>

<div clas="Cursos_box1">
    <div class="container">
        <form class="login_interno">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">Cadastro</div>
                </div>  
                <div class="panel-body" >
                    <form id="signupform" class="form-horizontal" role="form">

                        <div class="form-group">
                            <label for="firstname" class="col-md-2 control-label">Nome Completo</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="firstname" placeholder="Como consta no seu CPF">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lastname" class="col-md-2 col-lg-2 control-label">CPF</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" class="form-control" name="lastname" placeholder="Apenas números, ex: 00011122233">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="endereco" class="col-md-2 control-label">Endereço</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="endereco" placeholder="Ex: Rua, Nº, Bairro, Cidade, Estado">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-md-2 control-label">E-mail</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="email" placeholder="exemplo@gmail.com">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-md-2 control-label">Senha</label>
                            <div class="col-md-10">
                                <input type="password" class="form-control" name="passwd" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-md-2 control-label">Repita a Senha</label>
                            <div class="col-md-10">
                                <input type="password" class="form-control" name="passwd2" placeholder="">
                            </div>
                        </div>

                        <div class="form-group">
                            <!-- Button -->                                        
                            <div class="col-md-offset-3 col-md-9">
                                <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> Cadastrar</button>
                            </div>
                        </div>

                        <!--                                <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">
                                                            
                                                            <div class="col-md-offset-3 col-md-9">
                                                                <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Cadastre-se com o Facebook</button>
                                                            </div>
                                                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Voltar à tela de Login <<<</a></div>                                           
                                                                
                                                        </div>         -->

                </div>
            </div>
        </form>
    </div>

</div>

<?php
require 'footer_interno.html';
?>