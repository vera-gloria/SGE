<div>
    <h3>Informações do arquivo</h3>
    <?php
        foreach($dadosArquivo as $key => $value):
            if($value): 
    ?>
                <strong><?=$key?></strong>: <?=$value?>
    <?php
            endif; 
        endforeach;
    ?>
    <hr />
    <a href="<?=base_url()?>" >Novo arquivo</a>
    <a href="<?=$urlDownload?>">Download</a>
</div>
