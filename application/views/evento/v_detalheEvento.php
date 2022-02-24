<!-- //banner -->
<div class="Cursos_box1 ">
    <div class="container">
        <div class="col-md-8 detail center-me">
            <img src="images/event.jpg" class="img-responsive" alt=""/>
            <h3><?php echo $evento->nome; ?></h3>
            <ul class="meta-post">
                <li class="author">
                    Palestrante/Instrutor <a href="#"><?php echo $evento->palestranteinstrutor; ?></a>
                </li>
                <li class="far fa-calendar-o">
                    Início:   <?php echo date('d/m/Y', strtotime($evento->dtinicio)); ?>
                </li>
                <li class="view far fa-calendar">
                    Término:   <?php echo date('d/m/Y', strtotime($evento->dttermino)); ?>
                </li>
                <li class="far fa-money ">
                    Investimento:  <?php echo $evento->valor; ?>
                </li>                             
            </ul>
            <div class="author-box author-box1">
                <h4>Objetivo do Curso:</h4>
                <p><?php echo $evento->descricao; ?></p>

<!--                <div class="right">
                    <iframe height="350px" width="350px" src="<?php echo $evento->url; ?>"></iframe>
                </div>-->
                <iframe width="420" height="315"
                        src="<?php echo $evento->url; ?>">
                </iframe>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
