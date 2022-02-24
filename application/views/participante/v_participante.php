<h2>Meus Eventos</h2>
<div id="paginacao">
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr class="col-sm-12">
                    <th class="col-sm-11">Nome</th>
                    <th class="col-sm-1">Ações</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($participanteevento as $e): ?>
                    <tr class="col-sm-12">
                        <td class="col-sm-8"><?= $e['nome']; ?></td>

                        <?php if ($e['dtinicio'] <= date("Y-m-d")) { ?>
                            <td class="col-sm-1"> <a href= "<?php echo base_url() . 'evento/cancelarInscricao/' . $e['idusuario'] . '/' . $e['idevento']; ?>"><button type="button" class="btn btn-danger" onclick="return confirm('Deseja cancelar inscrição em evento?')"><i  class = "fa fa-times" > </i>&nbsp; Cancelar Inscrição</button></a></td> 
                        <?php } else{(!$e['dtinicio'] < date("Y-m-d"))?>
                            <td class="col-sm-1"><a href= "<?php echo base_url() . 'conteudo/index/' . $e['idevento']; ?>"><button type="button" class="btn "><i  class = "fa fa-book" > </i>&nbsp; Conteúdo</button></a></td>
                        <?php } ?>

                    </tr>
                <?php endforeach ?>

            </tbody>
        </table>
    </div>
</div>       
<!--<div class="page-container">
    /content-inner
    <div class="left-content">
        <div class="inner-content">
            <div class="outter-wp">
                custom-widgets
                <div class="custom-widgets">
                    <div class="row-one">
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>

                        <div class="clearfix"> </div>	
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>-->



<div class="clearfix"></div>		
