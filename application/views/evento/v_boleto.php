<div class="row" id="3">
		<h2><i class="fa fa-bank"></i> Informações necessárias para todos os bancos</h2>
		<p>Há alguns dados que são padrão para gerar o boleto.</p>
		<p>Abaixo, temos uma tabela explicando cada parâmetro:</p>
		<table class="table table-bordered table-striped table-hover">
			<thead>
			<tr>
				<th>Regra</th>
				<th>Descrição</th>
				<th>Exemplo</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>dias_de_prazo_para_pagamento</td>
				<td>Número de dias para o prazo de pagamento</td>
				<td>$dados['dias_de_prazo_para_pagamento'] = 5;</td>
			</tr>
			<tr>
				<td>taxa_boleto</td>
				<td>Taxa adicional cobrada pela geração do boleto</td>
				<td>$dados['taxa_boleto'] = 1;</td>
			</tr>
			<tr>
				<td>pedido['quantidade']</td>
				<td>Quantidade de itens do pedido</td>
				<td>$dados['pedido']['quantidade'] = 10;</td>
			</tr>
			<tr>
				<td>pedido['valor_unitario']</td>
				<td>Valor de cada item do pedido</td>
				<td>$dados['pedido']['valor_unitario'] = 80;</td>
			</tr>
			<tr>
				<td>pedido['numero']</td>
				<td>Número do pedido</td>
				<td>$dados['pedido']['numero'] = 10000000025;</td>
			</tr>
			<tr>
				<td>pedido['aceite']</td>
				<td>Indica se o documento de cobrança do pedido foi assinado pelo cliente</td>
				<td>$dados['pedido']['aceite'] = 'N';</td>
			</tr>
			<tr>
				<td>pedido['especie']</td>
				<td>Sigla da moeda em que deve ser realizado o pagamento</td>
				<td>$dados['pedido']['especie'] = 'R$';</td>
			</tr>
			<tr>
				<td>pedido['especie_doc']</td>
				<td>Sigla do tipo de Espécie do Documento</td>
				<td>$dados['pedido']['especie_doc'] = 'DM';</td>
			</tr>
			<tr>
				<td>sacado['nome']</td>
				<td>Nome ou razão social do cliente</td>
				<td>$dados['sacado']['nome'] = 'João da Silva';</td>
			</tr>
			<tr>
				<td>sacado['endereco']</td>
				<td>Logradouro do cliente</td>
				<td>$dados['sacado']['endereco'] = 'Av. Meninas Bonitas, 777';</td>
			</tr>
			<tr>
				<td>sacado['cidade']</td>
				<td>Cidade do cliente</td>
				<td>$dados['sacado']['cidade'] = 'Sapiranga';</td>
			</tr>
			<tr>
				<td>sacado['uf']</td>
				<td>Sigla do estado (Unidade Federal) do cliente</td>
				<td>$dados['sacado']['uf'] = 'RS';</td>
			</tr>
			<tr>
				<td>sacado['cep']</td>
				<td>CEP do cliente</td>
				<td>$dados['sacado']['cep'] = '93816-630';</td>
			</tr>
			</tbody>
		</table>
	</div>
	<div class="row" id="4">
		<h2><i class="fa fa-bank"></i> Informações necessárias que são específicas de cada banco</h2>
		<p>Há alguns dados que são específicos de acordo com o banco em que o boleto será gerado.</p>
		<p>Os bancos que necessitam de dados específicos estão listados abaixo com seus devidos parâmetros.</p>
		<div class="row">
			<div class="col-md-3">
				<ul class="nav nav-pills nav-stacked" id="banks-list">
					<li class="active"><a href="#bancoob" data-toggle="tab">Bancoob</a></li>
					<li><a href="#banespa" data-toggle="tab">Banespa</a></li>
					<li><a href="#banestes" data-toggle="tab">Banestes</a></li>
					<li><a href="#bb" data-toggle="tab">Banco do Brasil</a></li>
					<li><a href="#hsbc" data-toggle="tab">HSBC</a></li>
					<li><a href="#nossacaixa" data-toggle="tab">Nossa Caixa</a></li>
					<li><a href="#santander_banespa" data-toggle="tab">Santander Banespa</a></li>
					<li><a href="#sicredi" data-toggle="tab">Sicredi</a></li>
					<li><a href="#sudameris" data-toggle="tab">Sudameris</a></li>
					<li><a href="#unibanco" data-toggle="tab">Unibanco</a></li>
				</ul>
			</div>
			<div class="col-md-9 tab-content" id="banks-content">
				<div class="panel panel-default tab-pane fade in active" id="bancoob">
					<div class="panel-heading">Banco Cooperativo do Brasil S/A</div>
					<div class="panel-body">
						<table class="table table-bordered table-striped table-hover">
							<thead>
							<tr>
								<th>Regra</th>
								<th>Descrição</th>
								<th>Exemplo</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>convenio</td>
								<td>Número do convênio</td>
								<td>$dados['convenio'] = 56789;</td>
							</tr>
							<tr>
								<td>modalidade_cobranca</td>
								<td>Código da modalidade de cobrança</td>
								<td>$dados['modalidade_cobranca'] = '02';</td>
							</tr>
							<tr>
								<td>pedido['numero_parcela']</td>
								<td>Número da parcela do pedido</td>
								<td>$dados['pedido']['numero_parcela'] = 2;</td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="panel panel-default tab-pane fade in" id="banespa">
					<div class="panel-heading">Banco do Estado de São Paulo</div>
					<div class="panel-body">
						<table class="table table-bordered table-striped table-hover">
							<thead>
							<tr>
								<th>Regra</th>
								<th>Descrição</th>
								<th>Exemplo</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>codigo_cedente</td>
								<td>Código do cedente</td>
								<td>$dados['codigo_cedente'] = 40013012168;</td>
							</tr>
							<tr>
								<td>ponto_venda</td>
								<td>Código do ponto de venda (agência)</td>
								<td>$dados['ponto_venda'] = 400;</td>
							</tr>
							<tr>
								<td>nome_da_agencia</td>
								<td>Nome da agência do cedente (opcional)</td>
								<td>$dados['nome_da_agencia'] = 'ACLIMAÇÃO';</td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="panel panel-default tab-pane fade in" id="banestes">
					<div class="panel-heading">Banco do Estado do Espírito Santo</div>
					<div class="panel-body">
						<table class="table table-bordered table-striped table-hover">
							<thead>
							<tr>
								<th>Regra</th>
								<th>Descrição</th>
								<th>Exemplo</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>tipo_cobranca</td>
								<td>Tipo de cobrança</td>
								<td>$dados['tipo_cobranca'] = 2;</td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="panel panel-default tab-pane fade in" id="bb">
					<div class="panel-heading">Banco do Brasil</div>
					<div class="panel-body">
						<table class="table table-bordered table-striped table-hover">
							<thead>
							<tr>
								<th>Regra</th>
								<th>Descrição</th>
								<th>Exemplo</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>variacao_carteira</td>
								<td>Variação da carteira (opcional)</td>
								<td>$dados['variacao_carteira'] = '019';</td>
							</tr>
							<tr>
								<td>contrato</td>
								<td>Número do contrato</td>
								<td>$dados['contrato'] = 999999;</td>
							</tr>
							<tr>
								<td>convenio</td>
								<td>Número do convênio</td>
								<td>$dados['convenio'] = 7777777;</td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="panel panel-default tab-pane fade in" id="hsbc">
					<div class="panel-heading">HSBC Bank Brasil</div>
					<div class="panel-body">
						<table class="table table-bordered table-striped table-hover">
							<thead>
							<tr>
								<th>Regra</th>
								<th>Descrição</th>
								<th>Exemplo</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>codigo_cedente</td>
								<td>Código do cedente</td>
								<td>$dados['codigo_cedente'] = '1234567';</td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="panel panel-default tab-pane fade in" id="nossacaixa">
					<div class="panel-heading">Banco Nossa Caixa</div>
					<div class="panel-body">
						<table class="table table-bordered table-striped table-hover">
							<thead>
							<tr>
								<th>Regra</th>
								<th>Descrição</th>
								<th>Exemplo</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>modalidade_conta</td>
								<td>Modalidade da conta</td>
								<td>$dados['modalidade_conta'] = '04';</td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="panel panel-default tab-pane fade in" id="santander_banespa">
					<div class="panel-heading">Santander Banespa</div>
					<div class="panel-body">
						<table class="table table-bordered table-striped table-hover">
							<thead>
							<tr>
								<th>Regra</th>
								<th>Descrição</th>
								<th>Exemplo</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>codigo_cliente</td>
								<td>Código do cliente</td>
								<td>$dados['codigo_cliente'] = '1234567';</td>
							</tr>
							<tr>
								<td>carteira_descricao</td>
								<td>Descrição da carteira</td>
								<td>$dados['carteira_descricao'] = 'COBRANÇA SIMPLES - CSR';</td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="panel panel-default tab-pane fade in" id="sicredi">
					<div class="panel-heading">Banco Cooperativo Sicredi - BANSICREDI</div>
					<div class="panel-body">
						<table class="table table-bordered table-striped table-hover">
							<thead>
							<tr>
								<th>Regra</th>
								<th>Descrição</th>
								<th>Exemplo</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>posto</td>
								<td>Código do posto da cooperativa de crédito</td>
								<td>$dados['posto'] = '18';</td>
							</tr>
							<tr>
								<td>byte_idt</td>
								<td>Byte de identificação do cedente</td>
								<td>$dados['byte_idt'] = '2';</td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="panel panel-default tab-pane fade in" id="sudameris">
					<div class="panel-heading">Banco Sudameris</div>
					<div class="panel-body">
						<table class="table table-bordered table-striped table-hover">
							<thead>
							<tr>
								<th>Regra</th>
								<th>Descrição</th>
								<th>Exemplo</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>nosso_numero</td>
								<td>Código do posto da cooperativa de crédito</td>
								<td>$dados['nosso_numero'] = '3020';</td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="panel panel-default tab-pane fade in" id="unibanco">
					<div class="panel-heading">Unibanco</div>
					<div class="panel-body">
						<table class="table table-bordered table-striped table-hover">
							<thead>
							<tr>
								<th>Regra</th>
								<th>Descrição</th>
								<th>Exemplo</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>codigo_cliente</td>
								<td>Código do cliente</td>
								<td>$dados['codigo_cliente'] = '1234567';</td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row" id="5">
		<h2><i class="fa fa-cogs"></i> Funções de acordo com o banco</h2>
		<p>Supondo que as informações necessários foram armazenadas na variável <code>$dados</code>, gere o boleto:</p>
		<table class="table table-bordered table-striped table-hover">
			<thead>
			<tr>
				<th>Banco</th>
				<th>Exemplo</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>Banco Cooperativo do Brasil S/A</td>
				<td>$this->boleto->bancoob($dados);</td>
			</tr>
			<tr>
				<td>Banco do Estado de São Paulo</td>
				<td>$this->boleto->banespa($dados);</td>
			</tr>
			<tr>
				<td>Banco do Estado do Espírito Santo</td>
				<td>$this->boleto->banestes($dados);</td>
			</tr>
			<tr>
				<td>Banco do Brasil</td>
				<td>$this->boleto->bb($dados);</td>
			</tr>
			<tr>
				<td>Banco do Estado de Santa Catarina</td>
				<td>$this->boleto->besc($dados);</td>
			</tr>
			<tr>
				<td>Bradesco</td>
				<td>$this->boleto->bradesco($dados);</td>
			</tr>
			<tr>
				<td>Caixa Econômica Federal</td>
				<td>$this->boleto->cef($dados);</td>
			</tr>
			<tr>
				<td>Caixa Econômica Federal SIGCB</td>
				<td>$this->boleto->cef_sigcb($dados);</td>
			</tr>
			<tr>
				<td>Caixa Econômica Federal SINCO</td>
				<td>$this->boleto->cef_sinco($dados);</td>
			</tr>
			<tr>
				<td>HSBC Bank Brasil</td>
				<td>$this->boleto->hsbc($dados);</td>
			</tr>
			<tr>
				<td>Itaú Unibanco</td>
				<td>$this->boleto->itau($dados);</td>
			</tr>
			<tr>
				<td>Banco Nossa Caixa</td>
				<td>$this->boleto->nossacaixa($dados);</td>
			</tr>
			<tr>
				<td>Banco Real</td>
				<td>$this->boleto->real($dados);</td>
			</tr>
			<tr>
				<td>Santander Banespa</td>
				<td>$this->boleto->santander_banespa($dados);</td>
			</tr>
			<tr>
				<td>Banco Cooperativo Sicredi - BANSICREDI</td>
				<td>$this->boleto->sicredi($dados);</td>
			</tr>
			<tr>
				<td>Banco Sofisa</td>
				<td>$this->boleto->sofisa($dados);</td>
			</tr>
			<tr>
				<td>Banco Sudameris</td>
				<td>$this->boleto->sudameris($dados);</td>
			</tr>
			<tr>
				<td>Unibanco</td>
				<td>$this->boleto->unibanco($dados);</td>
			</tr>
			</tbody>
		</table>
	</div>
	<div class="row" style="margin-top:40px;">
		<div class="alert alert-info text-center" role="alert">
			<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="W42ZHKP2DAZMJ">
				<button type="submit" class="btn btn-primary"><i class="fa fa-paypal"></i> Fazer uma doação</button>
			</form>
		</div>
	</div>
</div>
<footer class="footer" style="margin-top:40px; padding: 40px 0; border-top: 1px solid #ddd">
	<div class="container">
		<p class="text-center">
			<a href="https://github.com/natanfelles/codeigniter-boleto" target="_blank">
				<i class="fa fa-github" style="font-size: 36px"></i>
				<br>
				CodeIgniter Boleto
			</a>
		</p>
	</div>
</footer>
<a id="toTop" class="text-center" href="#"><i class="fa fa-chevron-up"></i></a>
<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script>
	// toTop
	jQuery(window).scroll(function () {
		if (jQuery(this).scrollTop() >= 110) {
			jQuery('#toTop').show();
		} else {
			jQuery('#toTop').hide();
		}
	});
	jQuery('#toTop').click(function (e) {
		jQuery('body,html').animate({scrollTop: 0}, 800);
		e.preventDefault();
	});
</script>