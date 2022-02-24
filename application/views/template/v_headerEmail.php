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
        <script src="<?php echo base_url('js/bootstrap.min.js') ?>"></script>
        <!-- Custom Theme files -->
        <link href="<?php echo base_url('css/interno/style.css') ?>" rel='stylesheet' type='text/css' />
        <link href="<?php echo base_url('css/interno/style.css') ?>" rel='stylesheet' type='text/css' />
        <link rel="stylesheet" href="<?php echo base_url('css/jquery.countdown.css') ?>" />
        <link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
        <!----font-Awesome----->
        <link href="<?php echo base_url('css/font-awesome.css') ?>" rel="stylesheet"> 
        <!----font-Awesome----->
        <script src="<?php echo base_url('js/menu.js') ?>"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url('css/interno/bootstrap.min.css') ?>" rel='stylesheet' type='text/css' />
        <!-- Custom CSS -->
        <link href="<?php echo base_url('css/interno/style.css') ?>" rel='stylesheet' type='text/css' />
        <!-- Graph CSS -->
        <link href="<?php echo base_url('css/font-awesome.css') ?>" rel="stylesheet"> 
        <!-- jQuery -->
        <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
        <!-- lined-icons -->
        <link rel="stylesheet" href="<?php echo base_url('css/interno/icon-font.min.css') ?>" type='text/css' />
        <!-- //lined-icons -->
        <script src="js/jquery-1.10.2.min.js"></script>
        <script src="js/amcharts.js"></script>	
        <script src="js/serial.js"></script>	
        <script src="js/light.js"></script>	
        <script src="js/radar.js"></script>	
        <link href="<?php echo base_url('css/barChart.css') ?>" rel='stylesheet' type='text/css' />
        <link href="<?php echo base_url('css/interno/fabochart.css') ?>" rel='stylesheet' type='text/css' />
        <!--clock init-->
        <script src="js/css3clock.js"></script>
        <!--Easy Pie Chart-->
        <!--skycons-icons-->
        <script src="js/skycons.js"></script>

        <script src="js/jquery.easydropdown.js"></script>
    </head>
    <body>
        <!--menu-->
        <nav class="navbar  navbar-default" role="navigation">
            <div class="container-fluid ">
                <!--<div class="container">-->

                <header class="row col-md-12">
                    <div class="navbar-header menu navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
                        <!--                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>-->
                        <a class="navbar-brand" href="<?= base_url('home') ?>">SGE</a>
                        <!--<div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;" >-->
                        <ul class="nav navbar-nav navbar-right menu-topo"> 
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

                    <!--</div>-->
                    <!--/.navbar-header-->
                    <div class="clearfix"> </div>
                </header>
                <!--</div> div container-->
                <!--/.navbar-collapse-->
            </div>
        </nav>
        <!--excluir-->
        

        <!--conteudo central com menus laterais-->
        <div class="container-fluid conteudo">
            <div class="row content">
              
                    <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3 ">
                        <?php echo $contents; ?>
                    </main>
                <!--</div>-->
            </div><!--end row content-->
        </div> <!--end conteudo central com menus laterais-->
        <footer class="container-fluid footer">
            <p> Vera Lucia Silva da Gloria -  &copy 2017</p>
        </footer>
    </body>
</html>

