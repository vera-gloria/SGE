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
<div>
    <div class="btn alinhamento col-sm-10">
        <a href="<?= base_url('evento/cadastrar') ?>"><input type="submit" value="Cadastrar Evento" class="botao"></a>
    </div> 
    <div class="btn alinhamento col-sm-1">
        <a href="javascript:window.history.go(-1)" class="botao">Voltar</a>
    </div>
</div>

<table id="paginacao" class="table table-inbox table-hover table-striped table-bordered id_usuario" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th class="id_col">ID</th>
            <th class="name_col">Nome Curso</th>
            <th class="tipo_col">Tipo de Evento</th>
            <th class="acao_col">Ação</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($evento as $e): ?>
            <tr>                    
                <td class="id_col"><a href="<?php echo base_url() . 'evento/detalharEvento/' . $e->idevento; ?>"><?php echo $e->idevento; ?></a></td>
                <td class="name_col"><a href="<?php echo base_url() . 'evento/detalharEvento/' . $e->idevento; ?>"><?php echo $e->nome; ?></a></td>
                <td class="tipo_col"><?php echo $e->tipo; ?></td>
                <td class="acao_col">
                    <a href= "<?php echo base_url() . 'evento/editar/' . $e->idevento; ?>"><button type="button" class="btn btn-success"><i  class = "fa fa-pencil" > </i>&nbsp; Editar</button></a> 
                    <a href= "<?php echo base_url() . 'evento/redirecionarAcoes/' . $e->idevento; ?>"><button type="button" class="btn btn-spread disponibilizar"><i  class = "fa fa-cogs" > </i>&nbsp; Ações</button></a>
                    <a href= "<?php echo base_url() . 'evento/deletar/' . $e->idevento; ?>"><button type="button" class="btn btn-danger" onclick="return confirm('Confirma a exclusão deste registro?')"><i  class = "fa fa-trash-o fa-cog" > </i>&nbsp; Excluir</button></a> 
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>