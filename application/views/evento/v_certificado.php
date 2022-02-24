<!DOCTYPE html>
<html>
    <head>
       
        <meta charset="utf-8">
        <title>Certificado de participação</title>
        <link href="<?php echo base_url('css/pdf.css') ?>" rel='stylesheet' type='text/css' />
    </head>
    <body>
         <?php foreach ($certificado as $c): ?>
        <div id="certificado">
            <!--<div class="logo"><img "{{ STATIC_URL }}" src="images\logo.jpg" width="400" height="149" alt="Dev in Cachu 2012" /></div>-->
            <h1>Certificado</h1>
            <p class="texto">Certificamos que <strong><?php echo $c->nomeusuario; ?></strong> participou do <strong><?php echo $c->nome; ?></strong>, no período de <?php echo $c->dtinicio; ?> a <?php echo $c->dttermino; ?>.</p>
            <!--<p class="validacao">Para confirmar a validade deste certificado, acesse a URL <strong>http://2012.devincachu.com.br/certificado/validar/</strong> e digite o código <strong>{{ certificado.codigo }}</strong>.</p>-->
            <p class="assinatura"><strong><?php echo $c->palestranteinstrutor; ?></strong><br />Organizador do evento</p>
        </div>
        <?php endforeach ?>
    </body>
    
</html>