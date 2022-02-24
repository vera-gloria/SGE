<?php
require 'header_interno.html';
?>

<div class="Cursos_box1">
    <div class="container fundo">
        <div class="col-md-12 cadastro-button centro-block">
            <form>
                <input type="submit" value="Cadastrar Evento" class="cursocadastro">		                            
            </form>
        </div>
       
        
        <div class="col-md-12">
            <div class="Curso_list">
                <div class="table-header clearfix">
                    <div class="id_col">ID</div>
                    <div class="name_col">Nome Curso</div>
                    <div class="tipo_col">Tipo de Evento</div>
                    <div class="acao_col">Ação</div>
                </div>
                <ul class="table-list">
                    <li class="clearfix">
                        <div class="id_col">PA - 001</div>

                        <div class="name_col"><a href="curso_detalhe.php">Curso de Especialização em TI</a></div>
                        <div class="tipo_col">Palestra</div>

                        <div class="acao_col">
                            <a href= "#"><button type="button" class="btn btn-success"><i  class = "fa fa-pencil" > </i>&nbsp; Editar</button></a> 
                            <a href= "#"><button type="button" class="btn btn-spread"><i  class = "fa fa-share" > </i>&nbsp; Divulgar</button></a>
                            <a href= "#"><button type="button" class="btn btn-danger"><i  class = "fa fa-trash-o fa-cog" > </i>&nbsp; Excluir</button></a> 
                         </div>
                    </li>

                    <li class="clearfix">                        
                        <div class="id_col">PA - 001</div>

                        <div class="name_col"><a href="curso_detalhe.php">Curso de Especialização em Gerente de Projetos</a></div>

                        <div class="tipo_col">Curso</div>

                        <div class="acao_col">
                            <a href= "#"><button type="button" class="btn btn-success"><i  class = "fa fa-pencil" > </i>&nbsp;Editar</button></a> 
                            <a href= "#"><button type="button" class="btn btn-spread"><i  class = "fa fa-share" > </i>&nbsp;Divulgar</button></a>
                            <a href= "#"><button type="button" class="btn btn-danger"><i  class = "fa fa-trash-o fa-cog" > </i>&nbsp;Excluir</button></a> 
                         </div>
                    </li>
                    <li class="clearfix">
                        <div class="id_col">PA - 001</div>

                         <div class="name_col"><a href="curso_detalhe.php">Curso de Especialização em Tecnologias Web</a></div>

                        <div class="tipo_col">Seminários</div>

                         <div class="acao_col">
                            <a href= "#"><button type="button" class="btn btn-success"><i  class = "fa fa-pencil" > </i>Editar</button></a> 
                            <a href= "#"><button type="button" class="btn btn-spread"><i  class = "fa fa-share" > </i>Divulgar</button></a>
                            <a href= "#"><button type="button" class="btn btn-danger"><i  class = "fa fa-trash-o fa-cog" > </i>Excluir</button></a> 
                         </div>
                    </li>
                </ul>
            </div>
        </div>  
<?php
require 'footer_interno.html';
?>
<link href="css/flexslider.css" rel='stylesheet' type='text/css' />
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
    $(function () {
        SyntaxHighlighter.all();
    });
    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "slide",
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });
    });
</script>
<!-- FlexSlider -->
</body>
</html>	