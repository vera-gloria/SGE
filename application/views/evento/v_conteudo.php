<?php if( empty( $conteudo) === false ) { ?> 
<h4><?php echo $conteudo[0]->NomeEvento; ?> - Material Disponibilizado</h4>
<?php } ?>
<div id="paginacao">
    <div class="table-responsive">
        <div>
             <?php if($tipousuario=='2'){ ?>
            <div class="btn alinhamento col-sm-9">
                <!--<a href="<?php echo base_url() . 'conteudo/inserirConteudo/' . $idevento; ?>"><input type="submit" value="Inserir Conteudo" class="botao"></a>-->
            </div> 
             <?php } else{ ?>
            <div class="btn alinhamento col-sm-9">
                <a href="<?php echo base_url() . 'conteudo/inserirConteudo/' . $idevento; ?>"><input type="submit" value="Inserir Conteudo" class="botao"></a>
            </div> 
            <?php } ?>
            <div class="btn alinhamento col-sm-3">
                <a href="javascript:window.history.go(-1)" class="botao">Voltar</a>
            </div>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($conteudo as $c): ?>
                    <tr>
                        <td><?php echo $c->NomeConteudo; ?></td>
                        <td><a href= "<?php echo base_url() . 'conteudo/download/' . $c->idconteudo .'/' . $c->idevento; ?>"><button type="button" class="btn btn-success"><i  class = "fa fa-download" > </i>&nbsp; Baixar</button></a> </td>
                        <?php if($tipousuario=='2'){ ?>
                        <td></td>
                        <?php } else { ?>
                        <td><a href= "<?php echo base_url() . 'conteudo/deletar/' . $c->idconteudo .'/' . $c->idevento; ?>"><button type="button" class="btn btn-danger" onclick="return confirm('Confirma a exclusão deste registro?')"><i  class = "fa fa-trash-o fa-cog" > </i>&nbsp; Excluir</button></a> </td>
                    <?php } ?>
                    </tr>
                <?php endforeach ?>

            </tbody>
        </table>
    </div>
</div>       
<div class="clearfix"></div>	

