<head>
    <link ref="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="paginacao.js"></script>
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script type="text/javascript"></script>
    <link href="<?php echo base_url('css/interno/email/style.css') ?>" rel='stylesheet' type='text/css' />
    <script src="<?php echo base_url('js/paginacao.js') ?>"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css"/>
    <script type="text/javascript" sr="//cdn.datatables.net/plug-ins/1.10.16/i18n/Portuguese-Brasil.json"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script> 
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script> 
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function () {
            $('#paginacao').DataTable();

        });

    </script>
</head>
<div class="col-sm-12">
    <div class="col-sm-7">
        <h3>Crachá</h3>
    </div>
    <div class="btn alinhamento col-sm-3">
    <a href="<?php echo base_url().'cracha/imprimircracha/'.$idevento; ?>"><input type="submit" value="Imprimir" class="botao"></a>
    </div>      
    <div class="btn alinhamento col-sm-1">
        <a href="javascript:window.history.go(-1)" class="botao">Voltar</a>
    </div>
</div>


<table id="paginacao" class="table table-inbox table-hover table-striped table-bordered id_usuario" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th class="id_tabela">Código</th>
            <th class="name_usuario">Nome</th>
            <!--<th class="name_usuario">Ação</th>-->
        </tr>
    </thead>
    <tbody>

        <!--<ul class="list-usuario table-list">-->
        <?php foreach ($usuario as $u): ?>
            <tr>
                <td><?php echo $u->idusuario; ?></td>
                <td><?php echo $u->nome; ?></td>
                 </tr>
            <!--</div>-->
            <!--</li>-->
        <?php endforeach ?>
    </tbody>
</table>
<!--</div>-->
<!--</div>-->  
<!--</div>-->
<!--</div>-->
