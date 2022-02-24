<div class="container col-sm-8 grid_1_right center-me">
    <h2>Eventos</h2>
    <div class="but_list">
        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
            <ul id="myTab" class="nav nav-tabs nav-tabs1" role="tablist">
                <li class="active"><a href="#todosEventos" data-toggle="tab" >Todos Eventos</a></li>
                <?php foreach ($evento as $e): ?>
                <li role="presentation"><a href="#<?php echo $e->tipo; ?>" role="tab" 
                                           data-toggle="tab" aria-controls="<?php echo $e->tipo; ?>"><?= $e->tipo; ?></a></li>
                <?php endforeach ?>            
                <!--  <li role="presentation"><a href="#profile1" role="tab" id="profile-tab1" data-toggle="tab" aria-controls="profile1">Day 3&nbsp;&nbsp;&nbsp;05-09-2015</a></li>-->
            </ul>


            <?php foreach ($evento as $e): ?>
            <div id="<?php echo $e->tipo; ?>" class="tab tab-pane fade in active events_box tab-content" aria-labelledby="<?php echo $e->tipo; ?>">
                <div class="event_left">
                    <div class="event_left-item">
                        <!--<div class="icon_2">-->
                        <i class="fa fa-calendar-o"></i>
                        <?php echo date('d/m/Y', strtotime($e->dtinicio)); ?> a <?php echo date('d/m/Y', strtotime($e->dttermino)); ?>
                        <!--</div>-->
                        <div class="icon_2"><i class="fa fa-clock-o"></i>
                            <?php echo $e->horarioinicio; ?> as <?php echo $e->horariotermino; ?></div>
                        <div class="icon_2">
                            <div class="speaker">
                                <i class="fa fa-user"></i>
                                <div class="speaker_item">
                                    <?php
                                    echo $e->vagasrestantes;
                                    ?>
                                    vagas
                                </div>
                                <div class="clearfix"></div></div>
                        </div>
                    </div>
                </div>
                <div class="event_right">
                    <div class="name_colcol-md-9 fonte"><a href="<?php echo base_url() . 'home/detalharEvento/' . $e->idevento; ?>"><?php echo $e->nome; ?></a></div>
                    <div class="name_col col-md-9"><a href="<?php echo base_url() . 'home/detalharEvento/' . $e->idevento; ?>"><?php echo $e->descricao; ?></a></div>
                    <div class="name_col col-md-9"><?php echo $e->tipo; ?></div>

                    <?php if($e->vagasrestantes=='0'){ ?>
                    <div class="acao_col col-md-3">
                        <button onclick="confirmar()" type="button" class="btn btn-success fonte botaodisabilitado" disabled><i  class = "fa fa-pencil" ><a href= "<?php echo base_url() . 'home/inscrever/' . $e->idevento; ?>" class="fonte botaodisabilitado"> </i>&nbsp; Inscrever</button></a> <br>
                    Vagas esgotadas.
                    </div>
                    <?php } else{ ?>
                    <div class="acao_col col-md-3">
                        <a href= "<?php echo base_url() . 'home/inscrever/' . $e->idevento; ?>"><button onclick="confirmar()" type="button" class="btn btn-success" ><i  class = "fa fa-pencil" > </i>&nbsp; Inscrever</button></a> 
                    </div>
                    <?php } ?>
                </div>
                <!--<div class="clearfix"></div>-->
            </div>


            <!--</div>-->

            <?php endforeach ?>
        </div>

    </div>
</div>
<!--<div class="clearfix"> </div>-->


