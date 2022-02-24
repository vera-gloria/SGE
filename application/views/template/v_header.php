<!--
Author: Vera Lúcia<twiiggi@gmail.com>
-->
<!DOCTYPE HTML>
<html>
    <head>
        <title>SGE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Learn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href="<?php echo base_url('css/bootstrap-3.1.1.min.css') ?>" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <script src="<?php echo base_url('js/jquery.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('js/jsapi.js') ?>"></script>
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
                    <a class="navbar-brand" href="<?= base_url('home') ?>">SGE</a>
                </div>
                <!--/.navbar-header-->
                <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="<?= base_url('home/login') ?>"><i class="dropdown-toggle fa fa-user" data-toggle="dropdown"></i><span>Login</span></a>
                            <div class="dropdown-menu">
                                <form style="margin: 0px" accept-charset="UTF-8" action="<?= base_url('home/logar') ?>" method="post">
                                    <fieldset class="fundologin" style="padding:10px">
                                      <p class="wrapper"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                                            <input type="email" name="email" placeholder="Email">
                                            <i class="fa fa-lock"></i>
                                            <input type="password" name="senha" placeholder="Senha">
                                            <button type="submit" class="btn btn-primary botaologin">Entrar <i class="fa fa-sign-in" aria-hidden="true"></i></button><br />
                                            <?php if (isset($erro)): ?>
                                            <div class="alert alert-danger" role="alert" style="margin-top: 10px;">
                                                <?= $erro; ?></div>
                                        <?php endif; ?>
                                        <a href="<?php echo base_url('home/inserirParticipante') ?>">Cadastre-se</a>
                                    </fieldset>
                                    <input type=hidden name="tipo" value="<?php echo set_value('tipo'); ?>">
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <!--/.navbar-collapse-->
        </nav>    
       
