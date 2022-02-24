<div class="container-fluid">    
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
        <div class="panel panel-info" >
            <div class="panel-heading">
                <div class="panel-title">Login</div>
                <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="<?= base_url('login/recuperarSenha') ?>">Esqueceu a senha?</a></div>
            </div>     

            <div style="padding-top:30px" class="panel-body" >

                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                <form style="margin: 0px" accept-charset="UTF-8" action="<?= base_url('home/logar') ?>" method="post">
                    <input type=hidden name="tipo" value="<?php echo set_value('tipo'); ?>">

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                        <input type="email" class="form-control" name="email" value="" placeholder="E-mail">                                        
                    </div>

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" name=senha class="form-control" name="password" placeholder="Senha">
                    </div>


                    <div style="margin-top:10px" class="form-group">
                        <!-- Button -->

                        <div class="col-sm-12 controls">
                            <button type="submit" class="btn btn-primary botaologin">Entrar <i class="fa fa-sign-in" aria-hidden="true"></i></button><br />
                            <?php if (isset($erro)): ?>
                            <div class="alert alert-danger" role="alert" style="margin-top: 10px;">
                                    <?=$erro; ?></div>
                            <?php endif; ?>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-md-12 control">
                            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                Não tem uma conta! 
                                <a href="<?php echo base_url('home/inserirParticipante/') ?>" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                    Crie uma agora.
                                </a>
                            </div>
                        </div>
                    </div>    
                </form>     



            </div>                     
        </div>  
    </div>
</div>
