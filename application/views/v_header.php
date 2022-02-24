<!--
Author: Vera Lúcia<twiiggi@gmail.com>
-->
<!DOCTYPE HTML>
<html>
    <head>
        <title>SISGEV</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Learn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href="<?php echo base_url('css/bootstrap-3.1.1.min.css') ?>" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <script src="<?php echo base_url('js/jquery.min.js') ?>"></script>
        <script src="<?php echo base_url('js/bootstrap.min.js') ?>"></script>
        <!-- Custom Theme files -->
        <link href="<?php echo base_url('css/style.css') ?>" rel='stylesheet' type='text/css' />
        <link rel="stylesheet" href="<?php echo base_url('css/jquery.countdown.css') ?>" />
        <link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
        <!----font-Awesome----->
        <link href="<?php echo base_url('css/font-awesome.css') ?>" rel="stylesheet"> 
        <!----font-Awesome----->
        <script>
            $(document).ready(function () {
                $(".dropdown").hover(
                        function () {
                            $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                            $(this).toggleClass('open');
                        },
                        function () {
                            $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                            $(this).toggleClass('open');
                        }
                );
            });
        </script>
    </head>
    <body>
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?= base_url('home') ?>">SGE ou SISGEV</a>
                </div>
                <!--/.navbar-header-->
                <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#"><i class="dropdown-toggle fa fa-user" data-toggle="dropdown"></i><span>Login</span></a>

                            <div class="dropdown-menu">
                                <form style="margin: 0px" accept-charset="UTF-8" action="<?= base_url('home/logar') ?>" method="post">
                                    <fieldset class="fundologin" style="padding:10px">
<!--                                        <select name="tipo_usuario">
                                            <option value="">Selecione</option>
                                            <option value="1">Usuario Comum</option>
                                            <option value="2">Administrador</option>
                                        </select><br />-->
                                        <p class="wrapper"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                                            <input type="email" name="email" placeholder="Email">
                                            <i class="fa fa-lock"></i>
                                            <input type="password" name="senha" placeholder="Senha">
                                            <button type="submit" class="btn btn-primary botaologin">Entrar <i class="fa fa-sign-in" aria-hidden="true"></i></button><br />
<!--                                    <? if (isset($erro)): ?>
                                        <script language=javascript type= "text/javascript">
                                            newpopupWindow = window.open ('', 'pagina', "width=250 height=250");
                                            newpopupWindow.document.write ("Usuário/Senha incorretos");
                                        </script>
                                    <? endif; ?>-->
                                            <a href="cadastro.php">Cadastre-se</a>
                                    </fieldset>
                                    <input type=hidden name="tipo" value="<?php echo set_value('tipo'); ?>">
                                </form>
                            </div>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i><span>Procurar</span></a>
                            <ul class="dropdown-menu search-form">
                                <form>        
                                    <input type="text" class="search-text" name="s" placeholder="Buscar">    
                                    <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
                                </form>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <!--/.navbar-collapse-->
        </nav>    
        <nav class="navbar nav_bottom" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header nav_2">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"></a>
                </div> 
            </div>
        </nav>
