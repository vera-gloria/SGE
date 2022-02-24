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
        <link href="<?php echo base_url('css/bootstrap-3.1.1.min.css')?>" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <script src="<?php echo base_url('js/jquery.min.js')?>"></script>
        <script src="<?php echo base_url('js/bootstrap.min.js')?>"></script>
        <!-- Custom Theme files -->
        <link href="<?php echo base_url('css/style.css')?>" rel='stylesheet' type='text/css' />
        <link rel="stylesheet" href="<?php echo base_url('css/jquery.countdown.css')?>" />
        <link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
        <!----font-Awesome----->
        <link href="<?php echo base_url('css/font-awesome.css')?>" rel="stylesheet"> 
        <!----font-Awesome----->
        <script src="<?php echo base_url('js/menu.js')?>"></script>
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
                <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;" >
                    <ul class="nav navbar-nav"> 
                        <li class="dropdown">
                            <a href="noticias.php"><i class="fa fa-newspaper-o"></i><span>Notícias</span></a>
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
                        <li class="dropdown">
                            <a href="<?= base_url('home/logout') ?>"><i class="dropdown-toggle fa fa-sign-out" ></i><span>Sair</span></a>
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
        <div>
            <?php echo $contents; ?>
        </div>
        
