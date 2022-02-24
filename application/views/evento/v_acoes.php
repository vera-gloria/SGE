<div class="col-sm-10">
    <h3 class="titulo"><?php echo $nomeevento->nome; ?></h3>
</div>

<div class="btn alinhamento col-sm-1">
    <a href="javascript:window.history.go(-1)" class="botao">Voltar</a>
</div>

<!--<a href="<?php echo base_url() . 'conteudo/index/' . $idevento->idevento; ?>" class="btn btn-info button-menu" role="button">Disponibilizar conteudo</a>-->
<div class="btn col-sm-10">
    <a href="<?php echo base_url() . 'email/escreveremail/' . $id; ?>" class="btn btn-info button-menu" role="button">E-mail</a>
</div>
<!--<div class="btn col-sm-10">
    <a href="<?php echo base_url() . 'divulgacao/index/' . $id; ?>" class="btn btn-info button-menu" role="button">Divulgar</a>
</div>-->
<div class="btn col-sm-10">
    <a href="<?php echo base_url() . 'conteudo/index/' . $id; ?>" class="btn btn-info button-menu" role="button">Disponibilizar Conteudo</a>
</div>
<div class="btn col-sm-10">
    <a href="<?php echo base_url() . 'cracha/index/' . $id; ?>" class="btn btn-info button-menu" role="button">Emissão de Crachá</a>
</div>
<div class="btn col-sm-10">
    <a href="<?php echo base_url() . 'controlePresenca/index/' . $id; ?>" class="btn btn-info button-menu" role="button">Lista de Presença</a>
</div>
<div class="btn col-sm-10">
    <a href="<?php echo base_url() . 'certificado/index/' . $id; ?>" class="btn btn-info button-menu" role="button">Liberar Certificado</a>
</div>
<div class="btn col-sm-10">
    <a href="<?php echo base_url() . 'relatoriografico/index/' . $id; ?>" class="btn btn-info button-menu" role="button">Gerenciamento de Inscrições</a>
</div>
<!--</div>-->
<!--</div>-->

