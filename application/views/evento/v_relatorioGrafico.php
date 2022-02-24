<div class="container col-sm-12">
    <div class="btn alinhamento_rigth col-sm-2">
        <a href="javascript:window.history.go(-1)" class="botao">Voltar</a>
    </div>  
    <!--<div id="imprime">-->
    <h4>Gerenciamento de Inscrições</h4>
    <ul class="nav nav-tabs noneImprime">
        <li class="active"><a data-toggle="tab" href="#relatorio">Relatório</a></li>
        <li><a data-toggle="tab" href="#grafico">Gráfico</a></li>
    </ul>
    <div id="bt_imprimi" ><input type="button" name="imprimir" class="noneImprime botao alinhamento_rigth col-sm-2" value="Imprimir" onclick="window.print();"></div>
    <div class="tab-content">
        <div id="relatorio" class="tab-pane fade in active">
            <h6> Quantidade de inscritos por sexo</h6>
            <!--<h5>Relatório</h5>-->
            <table id="paginacao" class="table table-inbox table-hover table-striped table-bordered id_usuario" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="id_col">Gênero</th>
                        <th class="name_col">Total Inscritos</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dadosgenero as $e): ?>
                        <tr>                    
                            <td class="id_col"><?php echo $e->Label; ?></td>
                            <td class="name_col"><?php echo $e->total; ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <h6>Quantidade de inscritos por  região geográfica (cidade/estado)</h6>
            <table id="paginacao" class="table table-inbox table-hover table-striped table-bordered id_usuario" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="id_col">Região</th>
                        <th class="name_col">Total Inscritos</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dadosregiao as $e): ?>
                        <tr>                    
                            <td class="id_col"><?php echo $e->Regiao; ?></td>
                            <td class="name_col"><?php echo $e->total; ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </div>
        <!--</div>-->

        <div id="grafico" class="tab-pane fade">
            <!--<div id="chart_div" style="width: 900px; height: 500px;"></div>-->
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 grid_box1">
                                    <label class="button play-icon popup-with-zoom-anim">Por Gênero</label>
                                    <div id="chart_div" style="height: 200px;"></div>
                                </div>
                                <div class="col-md-6">
                                    <label class="button play-icon popup-with-zoom-anim">Por Região Geográfica</label>
                                    <div id="chart_regiao" style="height: 200px;"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--<div id="bt_imprimi" ><input type="button" name="imprimir" class="noneImprime botao" value="Imprimir" onclick="window.print();"></div>-->

            </div>

            <script>
                $(document).ready(function () {

                    Morris.Donut({
                        element: 'donut',
                        data: <?= $generos ?>
                    });

                    Morris.Bar({
                        element: 'bar',
                        data: <?= $regioes ?>,
                        xkey: 'uf',
                        ykeys: ['quantidade'],
                        labels: ['Inscritos'],
                        barRatio: 0.4,
                        xLabelAngle: 35,
                        hideHover: 'auto'
                    });

                });

            </script>
            <script type="text/javascript">

                //carregando modulo visualization
                google.load("visualization", "1", {packages: ["corechart"]});

                //função de monta e desenha o gráfico
                function drawChart() {
                    //variavel com armazenamos os dados, um array de array's 
                    //no qual a primeira posição são os nomes das colunas
                    var data = google.visualization.arrayToDataTable([
<?php echo $dados ?>
                    ]);

                    var dataRegioes = google.visualization.arrayToDataTable([
<?php echo $regiao ?>
                    ]);

                    //opções para exibição do gráfico
                    var options = {
                        //                        title: , //titulo do gráfico
                        is3D: true // false para 2d e true para 3d o padrão é false
                    };
                    //cria novo objeto PeiChart que recebe 
                    //como parâmetro uma div onde o gráfico será desenhado
                    var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
                    //desenha passando os dados e as opções
                    chart.draw(data, options);

                    var chartRegioes = new google.visualization.PieChart(document.getElementById('chart_regiao'));
                    //desenha passando os dados e as opções
                    chartRegioes.draw(dataRegioes, options);


                }
                //metodo chamado após o carregamento
                google.setOnLoadCallback(drawChart);


            </script>
        </div>
    </div>
</div>