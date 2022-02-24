<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Certificado de participação de {{ certificado.participante.nome }}</title>
        <link href="<?php echo base_url('css/pdf.css') ?>" rel='stylesheet' type='text/css' />
    </head>
    <body>
        <div id="certificado">
            <div class="logo"><img "{{ STATIC_URL }}" src="images\logo.jpg" width="400" height="149" alt="Dev in Cachu 2012" /></div>
            <h1>Certificado</h1>
            <p class="texto">Certificamos que <strong>{{ certificado.participante.nome }}</strong> participou do Dev in Cachu 2012, no dia 05 de Maio de 2012, com uma carga horária total de {{ certificado.horas }} horas.</p>
            <!--<p class="validacao">Para confirmar a validade deste certificado, acesse a URL <strong>http://2012.devincachu.com.br/certificado/validar/</strong> e digite o código <strong>{{ certificado.codigo }}</strong>.</p>-->
            <p class="assinatura"><strong>Francisco Antônio da Silva Souza</strong><br />Organizador do evento</p>
        </div>
    </body>
</html>