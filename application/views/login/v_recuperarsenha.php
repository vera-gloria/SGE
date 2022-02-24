<div class="container-fluid">    
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
        <div class="panel panel-info" >
            <div class="panel-heading">
                <div class="panel-title">Recuperação de Senha</div>
            </div>     

            <div style="padding-top:30px" class="panel-body" >

                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                <form style="margin: 0px" accept-charset="UTF-8" action="<?= base_url('home/logar') ?>" method="post">
                    <input type=hidden name="tipo" value="<?php echo set_value('tipo'); ?>">

                    <div style="margin-bottom: 25px" class="input-group">
                        <label>Insira o email cadastrado no sistema</label><br />
                                                              
                    </div>
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                        <input type="email" class="form-control" name="email" value="" placeholder="E-mail">                                        
                    </div>

                    <div style="margin-top:10px" class="form-group">
                          <div class="col-sm-12 controls">
                            <button type="submit" class="btn btn-primary botaologin">Recuperar <i class="fa fa-sign-in" aria-hidden="true"></i></button><br />
                            
                        </div>
                    </div>


                    
                </form>     



            </div>                     
        </div>  
    </div>
</div>
