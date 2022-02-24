<!--<div class="Cursos_box1">
    <div class="container fundo">
        <a href="<?= base_url('/usuario/editar') ?>"><img src="../images/usuario.png" alt="..." class="img-rounded img-circle" width="304" height="236"></a>
        <a href= "<?php echo base_url() . 'usuario/editar/' . $idusuario; ?>"><img src="../images/usuario.png" alt="..." class="img-rounded img-circle" width="304" height="236"></a> 
        <a href="<?= base_url('/participante/listarEvento/') ?>"><img src="../images/eventos.png" alt="..." class="img-rounded img-circle" width="304" height="236"></a>
        <a href="<?= base_url('/noticia') ?>"><img src="../images/news.png" alt="..." class="img-rounded img-circle" width="304" height="236"></a>
        <a href="<?= base_url('/evento') ?>"><img src="../images/email.png" alt="..." class="img-rounded img-circle" width="304" height="236"></a>
    </div>
</div>-->


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

<!--//skycons-icons-->


<div class="page-container">
    <!--/content-inner-->
    <div class="left-content">
        <div class="inner-content">
            <div class="outter-wp">
                <!--custom-widgets-->
                <div class="custom-widgets">
                    <div class="row-one">
                        <?php foreach ($participanteevento as $pe): ?>
                        <div class="col-md-8">
                            <div class="stats-left ">
                                <h4> <div class="name_col"><a href="<?php echo base_url() . 'evento/detalharEvento/' . $pe->idevento; ?>"><?php echo $pe->nome; ?></a></div></h4>
                            </div>
                            <div class="stats-right">
                                <h5>Acessar</h5>
                                 <h5>Cancelar</h5>
                            </div>
                            
                            <div class="clearfix"> </div>	
                        </div>
                                               

<!--                            <li class="clearfix">
                                <div class="id_col"><a href="<?php echo base_url() . 'evento/detalharEvento/' . $e->idevento; ?>"><?php echo $e->idevento; ?></a></div>

                                <div class="tipo_col"><?php echo $e->tipo; ?></div>
                                <div class="acao_col">
                                    <a href= "<?php echo base_url() . 'evento/editar/' . $e->idevento; ?>"><button type="button" class="btn btn-success"><i  class = "fa fa-pencil" > </i>&nbsp; Editar</button></a> 
                                    <a href= "#"><button type="button" class="btn btn-spread"><i  class = "fa fa-share" > </i>&nbsp; Divulgar</button></a>
                                    <a href= "<?php echo base_url() . 'conteudo/index/' . $e->idevento; ?>"><button type="button" class="btn btn-spread disponibilizar"><i  class = "fa fa-share" > </i>&nbsp; Disponibilizar Conteúdo</button></a>
                                    <a href= "<?php echo base_url() . 'email/index/' . $e->idevento; ?>"><button type="button" class="btn btn-spread disponibilizar"><i  class = "fa fa-share" > </i>&nbsp; E-mail</button></a>
                                    <a href= "<?php echo base_url() . 'evento/deletar/' . $e->idevento; ?>"><button type="button" class="btn btn-danger" onclick="return confirm('Confirma a exclusão deste registro?')"><i  class = "fa fa-trash-o fa-cog" > </i>&nbsp; Excluir</button></a> 
                                </div>
                            </li>-->
                    <?php endforeach ?>

                        <div class="col-md-8  states-mdl">
                            <div class="stats-left">
                                <h5>Today</h5>
                                <h4>Visitors</h4>
                            </div>
                            <div class="stats-right">
                                <label> 85</label>
                            </div>
                            <!--<div class="clearfix"> </div>-->	
                        </div>
                        <div class="col-md-8  states-thrd">
                            <div class="stats-left">
                                <h5>Today</h5>
                                <h4>Tasks</h4>
                            </div>
                            <div class="stats-right">
                                <label>51</label>
                            </div>
                            <!--<div class="clearfix"> </div>-->	
                        </div>
                        <div class="col-md-8  states-last">
                            <div class="stats-left">
                                <h5>Today</h5>
                                <h4>Alerts</h4>
                            </div>
                            <div class="stats-right">
                                <label>30</label>
                            </div>
                            <!--<div class="clearfix"> </div>-->	
                        </div>
                        <!--<div class="clearfix"> </div>-->	
                    </div>
                </div>
              
               
            </div>
            <!--footer section start-->
            <footer>
                <p> Vera Lucia Silva da Gloria -  &copy 2017</p>
            </footer>
            <!--footer section end-->
        </div>
    </div>
        <div class="usuarioLogado col-md-2 col-sm-2">	
            <a href="index.html"><img src="../images/admin.jpg"></a>
            <a href="index.html"><span class=" name-caret">Jasmin Leo</span></a>
            <p>System Administrator in Company</p>
            <ul>
                <li><a class="tooltips" href="index.html"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
                <li><a class="tooltips" href="index.html"><span>Settings</span><i class="lnr lnr-cog"></i></a></li>
                <li><a class="tooltips" href="index.html"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
            </ul>
        </div>
        <!--//down-->
        <div class="menu sidebar-menu">
            <ul id="menu" >
                <li><a href="index.html"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
                <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> Tabs &amp; Panels</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                    <ul id="menu-academico-sub" >
                        <li id="menu-academico-avaliacoes" ><a href="tabs.html"> Tabs &amp; Panels</a></li>
                        <li id="menu-academico-boletim" ><a href="widget.html">Widgets</a></li>
                        <li id="menu-academico-avaliacoes" ><a href="calender.html">Calendário</a></li>

                    </ul>
                </li>
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
    <div class="clearfix"></div>		
</div>