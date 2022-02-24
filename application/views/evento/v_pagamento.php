<div class="tittle-head">
    <div class=" col-sm-12">
        <div class=" col-sm-10">  
            <h3 class="tittle"><?php echo $evento->nome; ?></h3>
        </div>

        <div class="btn alinhamento-left col-sm-2">
            <a href="javascript:window.history.go(-1)" class="botao">Voltar</a>
        </div>
    <!--    <span class="pull-right">
            <a   class="btn btn-warning" href="<?php echo base_url('usuario/index/participante'); ?>" ><i class="fa fa-reply"></i> Voltar</a>
        </span>-->
    </div>
    <div class="clearfix"></div>

    <?php if ($this->session->flashdata('message')): ?>
        <div class="col-lg-12 col-md-12">
            <div class="alert alert-info alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <?= $this->session->flashdata('message') ?>
            </div>
        </div>
    <?php endif; ?>

    <div class="form-group">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6 grid_box1">
                            <label>Início: </label> <?php echo date('d/m/Y', strtotime($evento->dtinicio)); ?>
                        </div>
                        <div class="col-md-6">
                            <label>Término: </label> <?php echo date('d/m/Y', strtotime($evento->dttermino)); ?>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4 grid_box1">
                            <label>Vagas: </label> <?php echo $evento->qtdevagas; ?>
                        </div>
                        <div class="col-md-4">
                            <label>Valor</label> R$ <?php echo number_format($evento->valor, 2, ",", ""); ?>
                        </div>
                    </div>
                </div>

                <form class="form-horizontal" role="form" method="POST" action="<?php echo base_url('evento/gerarBoleto/' . $evento->idevento); ?>">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Pagamento</div>
                        <div class="panel-body">
                            <fieldset>
                                <form class="form-horizontal" role="form" method="POST" action="<?php echo base_url('evento/gerarBoleto/' . $evento->idevento); ?>">

                                    <legend><input type="radio" name="forma_pagamento" value="Boleto" required <?php echo set_radio('forma_pagamento', 'Boleto'); ?> /> Boleto</legend>

                                    <div class="form-group text-center">
                                        <!--<button class="btn btn-success"><a href="<?= base_url('evento/gerarBoleto/' . $evento->idevento); ?>">Gerar Boleto</button>-->
                                        <button type="submit" class="btn btn-success" data-target="#myModal">Pagar e Finalizar Inscrição</button>
                                    </div>

                            </fieldset>
                            <fieldset>
                                <form class="form-horizontal" role="form" method="POST" action="<?php echo base_url('evento/finalizarInscricao/' . $evento->idevento); ?>">

                                    <legend><input type="radio" name="forma_pagamento" value="'Cartão de Crédito" required <?php echo set_radio('forma_pagamento', 'Cartão de Crédito'); ?> /> Cartão de Crédito</legend>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="card-holder-name">Nome no Cartão</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="card-holder-name" id="card-holder-name" placeholder="Nome do titular do cartão">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="card-number">Número do Cartão</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="card-number" id="card-number" placeholder="Número do cartão de Débido/Crédito">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="expiry-month">Data de Validade</label>
                                        <div class="col-sm-9">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <select class="form-control col-sm-2" name="expiry-month" id="expiry-month">
                                                        <option>Mês</option>
                                                        <option value="01">Jan (01)</option>
                                                        <option value="02">Fev (02)</option>
                                                        <option value="03">Mar (03)</option>
                                                        <option value="04">Abr (04)</option>
                                                        <option value="05">Mai (05)</option>
                                                        <option value="06">Jun (06)</option>
                                                        <option value="07">Jul (07)</option>
                                                        <option value="08">Ago (08)</option>
                                                        <option value="09">Set (09)</option>
                                                        <option value="10">Out (10)</option>
                                                        <option value="11">Nov (11)</option>
                                                        <option value="12">Dez (12)</option>
                                                    </select>
                                                </div>
                                                <div class="col-xs-3">
                                                    <select class="form-control" name="expiry-year">
                                                        <?php for ($i = date('Y'); $i <= (date('Y') + 10); $i++) { ?>
                                                            <option value="<?= $i ?>"><?= $i ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="cvv">Código de Segurança</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" name="cvv" id="cvv" placeholder="Código de Segurança">
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-success" data-target="#myModal">Pagar e Finalizar Inscrição</button>
                                        <!--<button class="btn btn-success"><a href="<?= base_url('evento/pagarCartao/' . $evento->idevento); ?>">Concluir Pagamento</button>-->
                                    </div>
                                </form>
                            </fieldset>


                        </div>
                        <div class="panel-footer">TOTAL R$ <?php echo number_format($evento->valor, 2, ",", ""); ?></div>
                    </div>

                    <!--                <div class="form-group text-center">
                                        <button type="submit" class="btn btn-success">Pagar e Finalizar Inscrição</button>
                                    </div>-->
                </form>
            </div>

        </div>
        <!-- /.row (nested) -->
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">E-mail</h4>
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
