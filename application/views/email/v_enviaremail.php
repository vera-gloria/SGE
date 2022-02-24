<?php echo form_open('email/enviaremail/' . $idevento); ?>
<div class="row inbox col-sm-12">
    <div class="col-md-12">

        <div class="panel panel-default">
            <div class="panel-body message">
                <div class="col-sm-9">
                    <h4 class="text-center">Enviar Email aos Inscritos</h4>
                </div>
                <div class="btn alinhamento col-sm-3">
                    <a href="javascript:window.history.go(-1)" class="botao">Voltar</a>
                </div>      
                  <div class="form-group hidden">
                    <label for="email" class="col-sm-1 control-label">Para:</label>
                    <div class="col-sm-11">
                        <?php foreach ($dadosemail as $d): ?>
                            <input type="hidden" id="email" name="emailist" <?php echo $d->email; ?> >;
                        <?php endforeach ?>
                    </div>           
                </div>
                <div class="form-group">
                    <label for="assunto" class="col-sm-1 control-label">Assunto:</label>
                    <div class="col-sm-11">
                        <input type="text" name="assunto" class="form-control select2-offscreen" id="assunto" placeholder="" tabindex="-1" required><br>
                    </div>
                </div>
                <div class="form-group">
                    <label for="assunto" class="col-sm-1 control-label">Mensagem:</label>
                    <div class="col-sm-11">
                        <textarea type="textarea" class="form-control" id="mensagem" name="mensagem"   rows="12" value="<?php echo set_value('mensagem'); ?>" required ></textarea>
                    </div>
                </div>
                <div class="form-group alinhamento col-sm-12 btn btn-lg">	
                    <a href="<?php echo base_url() . 'email/enviaremail/' . $idevento; ?>"><input type="submit" value="Enviar" class=" botao" data-toggle="modal" data-target="#myModal"></a>
                </div>
                <?php echo form_close(); ?> 
                <br>	
            </div>	
        </div>	
    </div>	
</div><!--/.col-->		

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Enviar E-mail</h4>
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
