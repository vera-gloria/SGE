<?php
require 'header_interno.html';
?>

<div class="Cursos_box1">
    <div class="container fundo">
        <div class="col-md-12 cadastro-button centro-block">
            <form>
                <a href= "cadastro_interno.php"><input value="Cadastrar usuário" class="usuariocadastro"></a>		                            
            </form>
        </div>
              
        <div class="col-md-12">
            <div class="list">
                <div class="table-header clearfix">
                    <div class="id_col">ID</div>
                    <div class="name_col">Nome Usuário</div>
                    <div class="tipo_col">Tipo de Usuário</div>
                    <div class="acao_col">Ação</div>
                </div>
                <ul class="table-list">
                    <li class="clearfix">
                        <div class="id_col">PA - 001</div>

                        <div class="name_col">Sirlene Pereira Soares</div>
                        <div class="tipo_col">Gerente de Eventos</div>

                        <div class="acao_col">
                            <a href= "editar_usuario.php"><button type="button" class="btn btn-success"><i  class = "fa fa-pencil" > </i>&nbsp; Editar</button></a> 
                            <a href= "#"><button type="button" class="btn btn-danger"><i  class = "fa fa-trash-o fa-cog" > </i>&nbsp; Excluir</button></a> 
                         </div>
                    </li>

                    <li class="clearfix">                        
                        <div class="id_col">PA - 001</div>

                        <div class="name_col">Carla Luiza Andrade</div>
                        <div class="tipo_col">Organizador</div>

                        <div class="acao_col">
                            <a href= "#"><button type="button" class="btn btn-success"><i  class = "fa fa-pencil" > </i>&nbsp; Editar</button></a> 
                            <a href= "#"><button type="button" class="btn btn-danger"><i  class = "fa fa-trash-o fa-cog" > </i>&nbsp; Excluir</button></a> 
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