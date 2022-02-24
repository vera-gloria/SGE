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
        <link href="<?php echo base_url('css/style.css') ?>" rel='stylesheet' type='text/css' />
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
        <link href="<?php echo base_url('css/fabochart.css') ?>" rel='stylesheet' type='text/css' />
        <!--clock init-->
        <script src="js/css3clock.js"></script>
        <!--Easy Pie Chart-->
        <!--skycons-icons-->
        <script src="js/skycons.js"></script>

        <script src="js/jquery.easydropdown.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-default" role="navigation">
            <!--<div class="container">-->

            <header class="row col-md-12">
                <div class="navbar-header navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
                    <!--                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>-->
                    <a class="navbar-brand" href="<?= base_url('home') ?>">SGE</a>
                    <!--<div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;" >-->
                    <ul class="nav navbar-nav menu-direita"> 
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
        <div class="menu sidebar-menu">
            <ul id="menu" >
                <li><a href="index.html"><i class="fa fa-tachometer"></i> <span>Página Principal</span></a></li>
                <li><a href="calender.html"><i class="fa fa-table"></i>Calendário</a></li>
                <li id="menu-academico" ><a href="#"><i class="fa fa-file-text-o"></i> <span>Ui Elements</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                    <ul id="menu-academico-sub" >
                        <li id="menu-academico-avaliacoes" ><a href="forms.html">Forms</a></li>
                        <li id="menu-academico-boletim" ><a href="validation.html">Validation Forms</a></li>
                        <li id="menu-academico-boletim" ><a href="table.html">Tables</a></li>
                        <li id="menu-academico-boletim" ><a href="buttons.html">Buttons</a></li>
                    </ul>
                </li>
                <li><a href="typography.html"><i class="lnr lnr-pencil"></i> <span>Typography</span></a></li>
                <li id="menu-academico" ><a href="#"><i class="lnr lnr-book"></i> <span>Pages</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                    <ul id="menu-academico-sub" >
                        <li id="menu-academico-avaliacoes" ><a href="login.html">Login</a></li>
                        <li id="menu-academico-boletim" ><a href="register.html">Register</a></li>
                        <li id="menu-academico-boletim" ><a href="404.html">404</a></li>
                        <li id="menu-academico-boletim" ><a href="sign.html">Sign up</a></li>
                        <li id="menu-academico-boletim" ><a href="profile.html">Profile</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="lnr lnr-envelope"></i> <span>Mail Box</span><span class="fa fa-angle-right" style="float: right"></span></a>
                    <ul>
                        <li><a href="inbox.html"><i class="fa fa-inbox"></i> Inbox</a></li>
                        <li><a href="compose.html"><i class="fa fa-pencil-square-o"></i> Compose Mail</a></li>
                        <li><a href="editor.html"><span class="lnr lnr-highlight"></span> Editors Page</a></li>

                    </ul>
                </li>
                <li id="menu-academico" ><a href="#"><i class="lnr lnr-layers"></i> <span>Components</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                    <ul id="menu-academico-sub" >
                        <li id="menu-academico-avaliacoes" ><a href="grids.html">Grids</a></li>
                        <li id="menu-academico-boletim" ><a href="media.html">Media Objects</a></li>

                    </ul>
                </li>
                <li><a href="chart.html"><i class="lnr lnr-chart-bars"></i> <span>Charts</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                    <ul>
                        <li><a href="map.html"><i class="lnr lnr-map"></i> Maps</a></li>
                        <li><a href="graph.html"><i class="lnr lnr-apartment"></i> Graph Visualization</a></li>
                    </ul>
                </li>
                <li id="menu-comunicacao" ><a href="#"><i class="fa fa-smile-o"></i> <span>More</span><span class="fa fa-angle-double-right" style="float: right"></span></a>
                    <ul id="menu-comunicacao-sub" >
                        <li id="menu-mensagens" style="width:120px" ><a href="project.html">Projects <i class="fa fa-angle-right" style="float: right; margin-right: -8px; margin-top: 2px;"></i></a>
                            <ul id="menu-mensagens-sub" >
                                <li id="menu-mensagens-enviadas" style="width:130px" ><a href="ribbon.html">Ribbons</a></li>
                                <li id="menu-mensagens-recebidas"  style="width:130px"><a href="blank.html">Blank</a></li>
                            </ul>
                        </li>
                        <li id="menu-arquivos" ><a href="500.html">500</a></li>
                    </ul>
                </li>
            </ul>

        </div>
        <div>
            <?php echo $contents; ?>
        </div>
        <!--identificação do usuário logado-->
        <div class="usuarioLogado col-md-2 col-sm-2">	
            <img src="../images/admin.jpg">
            <!--<span class=" name-caret"><?php echo $nomeusuario; ?></span>-->
            <!--<a class="tooltips" href="<?= base_url('/usuario/editar') ?>"><span>Configurações</span><i class="lnr lnr-cog"></i></a>-->
            <span class=" name-caret">nome usuario</span>
            <a class="tooltips" href=""><span>Configurações</span><i class="lnr lnr-cog"></i></a>
        </div>

        <footer class="row">
            <p> Vera Lucia Silva da Gloria -  &copy 2017</p>
        </footer>>
    </body>
</html>

