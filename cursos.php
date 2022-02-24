<?php
require 'header.html';
?>
<div class="Cursos_banner">
    <div class="container">
        <h3>Cursos</h3>
        <div class="breadcrumb1">
            <ul>
                <li class="icon6"><a href="index.php">Home</a></li>
                <li class="current-page">Cursos</li>
            </ul>
        </div>
    </div>
</div>

<!-- //banner -->
<div class="Cursos_box1">
    <div class="container">
        <div>
            <div class="Cursos_box1-left">
                <form>
                    <div class="select-block1 col-md-3">
                        <select>
                            <option value="">Curso</option>
                            <option value="">Desenvolvimento de Aplicações Web</option>
                            <option value="">Gestão de Projetos</option>
                        </select>
                    </div>
                    <!-- select-block -->
                    
                    <div class="select-block1 col-md-3">
                        <select>
                            <option value="">Nível</option>
                            <option value="">Graduação</option>
                            <option value="">Level</option>
                            <option value="">Level</option>
                            <option value="">Level</option>
                        </select>
                    </div>
                    <!-- select-block -->
                    <div class="select-block1 col-md-3">
                        <select>
                            <option value="">Localização</option>
                            <option value="">São Paulo</option>
                            <option value="">Rio de Janeiro</option>
                            <option value="">Belo Horizonte</option>
                            <option value="">Online</option>
                        </select>
                    </div>
                    <!-- select-block -->
                    <input type="submit" value="pesquisar" class="Curso-submit">		                            
                </form>
            </div>
        </div>
        
        <div class="col-md-12">
            <div class="Curso_list">
                <div class="table-header clearfix">
                    <div class="id_col">ID</div>
                    <div class="name_col">Nome Curso</div>
                    <div class="duration_col">Duração</div>
                    <div class="date_col">Período</div>
                    <div class="inscricao_col">Inscrição</div>
                </div>
                <ul class="table-list">
                    <li class="clearfix">
                        <div class="id_col">PA - 001</div>

                        <div class="name_col"><a href="curso_detalhe.php">Curso de Especialização em TI</a></div>

                        <div class="duration_col">9 Months</div>

                        <div class="date_col">Fri, Dec 25 - 2015</div>

                        <div class="inscricao_col"><button type="button"><a href="inscricao.php">Inscrição</a></button></div>
<!--                            <button type="button" name="Inscrição"><a href="inscricao.php"></button></div>-->
                    </li>

                    <li class="clearfix">                        
                        <div class="id_col">PA - 001</div>

                        <div class="name_col"><a href="curso_detalhe.php">Curso de Especialização em Gerente de Projetos</a></div>

                        <div class="duration_col">9 Months</div>

                        <div class="date_col">Fri, Dec 25 - 2015</div>

                        <div class="inscricao_col"><button type="button"><a href="inscricao.php">Inscrição</a></button></div>
                    </li>
                    <li class="clearfix">
                        <div class="id_col">PA - 001</div>

                         <div class="name_col"><a href="curso_detalhe.php">Curso de Especialização em Tecnologias Web</a></div>

                        <div class="duration_col">9 Months</div>

                        <div class="date_col">Fri, Dec 25 - 2015</div>

                        <div class="inscricao_col"><button type="button"><a href="inscricao.php">Inscrição</a></button></div>

<?php
require 'footer.html';
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