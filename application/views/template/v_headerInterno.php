<!--
Author: Vera Lúcia<twiiggi@gmail.com>
-->
<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <title>SGE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Learn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href="<?php echo base_url('css/bootstrap-3.1.1.min.css') ?>" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo base_url('js/modernizr.min.js') ?>"></script>
        <script src="<?php echo base_url('js/jquery.min.js') ?>"></script>
        <script src="<?php echo base_url('js/bootstrap.min.js') ?>"></script>
        <!-- Custom Theme files -->
        <link href="<?php echo base_url('css/interno/style.css') ?>" rel='stylesheet' type='text/css' />
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
     <!--   <link href="<?php echo base_url('css/interno/bootstrap.min.css') ?>" rel='stylesheet' type='text/css' />
        <!-- Custom CSS -->
    <!--    <link href="<?php echo base_url('css/interno/style.css') ?>" rel='stylesheet' type='text/css' />
        <!-- Graph CSS -->
      <!--  <link href="<?php echo base_url('css/font-awesome.css') ?>" rel="stylesheet"> 
        <!-- jQuery -->
        <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
        <!-- lined-icons -->
        <link rel="stylesheet" href="<?php echo base_url('css/interno/icon-font.min.css') ?>" type='text/css' />
        <!-- //lined-icons -->
       
        <!--<script src="<?php echo base_url('js/amcharts.js'); ?>"></script>-->	
        <!--<script src="<?php echo base_url('js/serial.js'); ?>"></script>-->	
        <!--<script src="<?php echo base_url('js/light.js'); ?>"></script>-->	
        <!--<script src="<?php echo base_url('js/radar.js'); ?>"></script>-->
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
        <!--<link href="<?php echo base_url('css/barChart.css') ?>" rel='stylesheet' type='text/css' />-->
        <link rel='stylesheet' href="<?php echo base_url('css/interno/fabochart.css') ?>"  type='text/css' />
        <!--clock init-->
        <!--<script src="<?php echo base_url('js/css3clock.js') ?>"></script>-->
        <!--Easy Pie Chart-->
        <!--skycons-icons-->
       <!--<script src="<?php echo base_url('js/skycons.js') ?>"></script>-->
        <script type="text/javascript" src="<?php echo base_url('js/jsapi.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('js/graficoChart.js') ?>"></script>
        <!--<script src="<?php echo base_url('js/jquery.easydropdown.js') ?> "></script>-->
        <script type="text/javascript" src="<?php echo base_url('js/config.js') ?>"></script>
        <link href="<?php echo base_url('datatables/datatables.css') ?>" rel='stylesheet' type='text/css' />
        <link href="<?php echo base_url('datatables/datatables.min.css') ?>" rel='stylesheet' type='text/css' />
        <script type="text/javascript" src="<?php echo base_url('datatables/datatables.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('datatables/datatables.min.js') ?>"></script>
        <!--<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />-->
        <!--<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>-->
        <script type="text/javascript"></script>
        <link href="<?php echo base_url('css/interno/email/style.css') ?>" rel='stylesheet' type='text/css' />
        <script type="text/javascript" src="<?php echo base_url('js/paginacao.js') ?>"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css"/>
        <script type="text/javascript" src="//cdn.datatables.net/plug-ins/1.10.16/i18n/Portuguese-Brasil.json"></script>
        <!--<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">--> 
        <link href="<?php echo base_url('css/interno/email/style.css') ?>" rel='stylesheet' type='text/css' />
        <script src="<?php echo base_url('js/email/escreveremail.js') ?>"></script>
        <!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">-->
<!--        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->


        <script>
            function confirmar() {
                var txt;
                var r = confirm("Você confirma a inscrição no curso?");
                if (r === true) {
                    txt = "Inscrito!";
                } else {
                    txt = "Não Inscrito!";
                }
                document.getElementById("demo").innerHTML = txt;
            }
        </script>

        <script type="text/javascript">
            function abc() {
               // document.getElementById("idIframe").src = "atuapagina.html";
            }
        </script>

        <script type="text/javascript">
            $(document).ready(function () {

                $('#estado').change(function () {
                    var uf = $('#estado').val();

                    var url = "<?php echo base_url('usuario/listarCidade/') ?>/" + uf;

                    console.info(uf);
                    console.info(url);

                    $.getJSON(url, null, function (dados) {
                        //console.log(dados);   
                        $("#cidade")
                                .find('option')
                                .remove()
                                .end();


                        $.each(dados, function (i, item) {
                            console.info(dados[i].Nome);

                            $('#cidade').append($('<option>', {
                                value: dados[i].Id,
                                text: dados[i].Nome
                            }));

                        });

                        $('#cidade').prop('disabled', false);

                    });

                });


                function openModal() {
                    $('#myModal').openModal(); // Ok

                }
            });
        </script>
        <script>

            function exibirMenu(tipo) {
                var display = document.getElementById(tipo).style.display;
                if (tipo == '')
                    if (display == "none")
                        document.getElementById(tipo).style.display = 'block';
                    else
                        document.getElementById(tipo).style.display = 'none';
            }

        </script>

    </head>
    <body onload="abc()">
        <!--menu-->
        <nav class="navbar  navbar-default" role="navigation">
            <div class="container">
                <!--                <header class="row col-md-12">-->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?= base_url('home') ?>">SGE</a>
                </div>
                <!--<div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;" >-->
                <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
                    <ul class="nav navbar-nav alinhamento_rigth"> 
                        <li class="dropdown">
                            <a href="<?= base_url('home/logout') ?>"><i class="dropdown-toggle fa fa-sign-out" ></i><span>Sair</span></a>
                        </li>
                    </ul>
                </div>

                <!--</div>-->
                <!--/.navbar-header-->
                <div class="clearfix"> </div>
                <!--</header>-->
                <!--</div> div container-->
                <!--/.navbar-collapse-->
            </div>
        </nav>
        <div class="container-fluid conteudo">
            <div class="row content">
                <!--menu lateral-->
                <nav class="noneImprime col-sm-3 col-md-2 sidenav d-none d-sm-block bg-light sidebar menu sidebar-menu menu-lateral">

                    <!--<div class="menu sidebar-menu menu-lateral col-sm-2 sidenav">-->
                    <img src="<?php echo base_url('images/admin.jpg') ?>"  /><br />
<!--                    <img src="../images/admin.jpg">-->
                    <a class="tooltips" href="<?php echo base_url() . 'usuario/editar/' . $idusuario; ?>"><span class="name-caret"><?php echo $nomeusuario; ?></span></a>
                    <a class="tooltips" href="<?php echo base_url() . 'usuario/editar/' . $idusuario; ?>"><i class="lnr lnr-cog"></i></a>

                    <ul id="tipo" class="nav nav-pills flex-column" >
                        <li class="nav-item">
                        <!--<a class="tooltips" href="<?= base_url('/usuario/editar') ?>"><span>Configurações</span><i class="lnr lnr-cog"></i></a>-->
                            <a class="nav-link" href="<?= base_url('/home') ?>"><i class="fa fa-home"></i> <span>Home</span></a>
                        </li>
                    </ul>
                    
                    <?php if ($tipousuario === '1'):  ?>
                        <ul id="tipo" class="nav nav-pills flex-column menu-academico" >
                            <li id="menu-academico" >
                                <a class="nav-link" href="<?= base_url('/evento') ?>"><i class="lnr lnr-layers"></i> <span>Eventos</span> </a>
                            </li>
                        </ul>
                        <ul id="menu" class="nav nav-pills flex-column" >
                            <li id="menu-academico" >
                                <a class="nav-link" href="<?= base_url('/usuario/listar') ?>"><i class="fa fa-file-text-o"></i> <span>Usuários</span></a>
                            </li>
                        </ul>
                    <?php endif; ?>
                    <?php if ($tipousuario === '2'): ?>

                        <ul id="tipo" class="nav nav-pills flex-column" >
                            <li id="menu-academico" >
                                <a class="nav-link" href="<?= base_url('/usuario/index_participante') ?>"><i class="fa fa-file-text-o"></i> <span>Meus Eventos</span></a>
                            </li>
                        </ul>
                    <?php endif; ?>
                    <?php if ($tipousuario == '3') { ?>
                        <ul id="tipo" class="nav nav-pills flex-column" >
                            <li id="menu-academico" >
                                <a class="nav-link" href="<?= base_url('/evento/index') ?>"><i class="fa fa-file-text-o"></i> <span>Meus Eventos</span></a>
                            </li>
                        </ul>
                    <?php } ?>
                    <?php if ($tipousuario == '4') { ?>
                        <ul id="tipo" class="nav nav-pills flex-column" >
                            <li id="menu-academico" >
                                <a class="nav-link" href="<?= base_url('/usuario/index_palestranteinstrutor') ?>"><i class="fa fa-file-text-o"></i> <span>Meus Eventos</span></a>
                            </li>
                        </ul>
                    <?php } ?>

                </nav>

                <!--conteudo central-->
                <div class="col-sm-10 text-left conteudo"> 
                    <!--<main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3 ">-->
                    <?php echo $contents; ?>
                    <!--</main>-->
                </div>
            </div><!--end row content-->
        </div> <!--end conteudo central com menus laterais-->
        
        <!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Enviar E-mail</h4>
            </div>
            <div class="modal-body">
                <p><?php echo $this->session->flashdata('message'); ?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

        <footer class="container-fluid footer navbar-fixed-bottom">
            <p> Vera Lucia Silva da Gloria -  &copy 2017</p>
        </footer>
    </body>
</html>

