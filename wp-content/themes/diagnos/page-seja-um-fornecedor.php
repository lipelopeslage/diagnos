<?php
	get_header();
?>

<div class="container-fluid">
	<div class="container">
		<?//=$post->post_content;?>
		<div class="row nav">
			<a href="<?=esc_url( home_url( '/index.php/central-de-relacionamento/blog' ) ); ?>" class="text-center">
				<span><bdi class="vatxt">Blog</bdi></span>
			</a>
			<a href="<?=esc_url( home_url( '/index.php/central-de-relacionamento/fale-conosco' ) ); ?>" class=" text-center">
				<span><bdi class="vatxt">Fale <br> Conosco</bdi></span>
			</a>
			<a href="<?=esc_url( home_url( '/index.php/central-de-relacionamento/oportunidades' ) ); ?>" class=" text-center">
				<span><bdi class="vatxt">Oportunidades</bdi></span>
			</a>
			<a href="<?=esc_url( home_url( '/index.php/central-de-relacionamento/cadastro-medico' ) ); ?>" class=" text-center">
				<span><bdi class="vatxt">Cadastro <br> Médico</bdi></span>
			</a>
			<a href="<?=esc_url( home_url( '/index.php/central-de-relacionamento/seja-um-fornecedor' ) ); ?>" class=" text-center selected">
				<span><bdi class="vatxt">Seja um <br> Fornecedor</bdi></span>
			</a>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h2 class="hidden">Seja um fornecedor</h2>
				<form class="form">
					<fieldset>
						<div class="row form-group">
							<div class="col-md-3">
								<input type="radio" name="tipo-fornecedor" id="servicos">
								<label for="servicos">Fornecedor de Serviços</label>
							</div>
							<div class="col-md-3">
								<input type="radio" name="tipo-fornecedor" id="materiais">
								<label for="materiais">Fornecedor de Materiais</label>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-6">
								<label for="razao-social">Razão Social</label>
								<input type="text" class="form-control" id="razao-social" name="razao-social">
							</div>
							<div class="col-md-6">
								<label for="nome-fantasia">Nome Fantasia</label>
								<input type="text" class="form-control" id="nome-fantasia" name="nome-fantasia">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-6">
								<label for="endereco">Endereço</label>
								<input type="text" class="form-control" id="endereco" name="endereco">
							</div>
							<div class="col-md-3">
								<label for="numero">Número</label>
								<input type="text" class="form-control" id="numero" name="numero">
							</div>
							<div class="col-md-3">
								<label for="complemento">Complemento</label>
								<input type="text" class="form-control" id="complemento" name="complemento">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-2">
								<label for="cidade">Cidade</label>
								<input type="text" class="form-control" name="cidade" id="cidade">
							</div>
							<div class="col-md-1">
								<label for="uf">UF</label>
								<input type="text" class="form-control" name="uf" id="uf">
							</div>
							<div class="col-md-3">
								<label for="telefone">Telefone</label>
								<input type="text" class="form-control" name="telefone" id="telefone">
							</div>
							<div class="col-md-3">
								<label for="fax">Fax</label>
								<input type="text" class="form-control" name="fax" id="fax">
							</div>
							<div class="col-md-3">
								<label for="celular">Celular</label>
								<input type="text" class="form-control" name="celular" id="celular">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-3">
								<label for="email">E-mail</label>
								<input type="text" class="form-control" id="email" name="email">
							</div>
							<div class="col-md-3">
								<label for="cnpj-cpf">CNPJ/CPF</label>
								<input type="text" class="form-control" id="cnpj-cpf" name="cnpj-cpf">							
							</div>
							<div class="col-md-3">
								<label for="ie">I.E</label>
								<input type="text" class="form-control" id="ie" name="ie">							
							</div>
							<div class="col-md-3">
								<label for="inscricao-municipal">Insc. Municipal</label>
								<input type="text" class="form-control" id="inscricao-municipal" name="inscricao-municipal">							
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-6">
								<label for="servicos">Serviços</label>
								<input type="text" class="form-control" id="servicos" name="servicos">							
							</div>
							<div class="col-md-3">
								<div class="chkbx">
									<input type="checkbox" class="" id="simples" name="simples">
									<label for="simples">Optante pelo simples?</label>
								</div>
							</div>
							<div class="col-md-3">
								<label for="segmento">Segmento</label>
								<select class="form-control" id="segmento" name="segmento">							
								</select>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-6">
								<label for="crm-cro">CRM/CRO</label>
								<input type="text" class="form-control" id="crm-cro" name="crm-cro">
							</div>
							<div class="col-md-6">
								<label for="especialidade">Especialidade</label>
								<input type="text" class="form-control" id="especialidade" name="especialidade">
							</div>
						</div>
					</fieldset>
					<fieldset>
						<legend>Dados Bancários</legend>
						<div class="row form-group">
							<div class="col-md-4">
								<label for="banco">Banco</label>
								<input type="text" class="form-control" id="banco" name="banco">
							</div>
							<div class="col-md-2">
								<label for="agencia">Agência</label>
								<input type="text" class="form-control" id="agencia" name="agencia">
							</div>
							<div class="col-md-3">
								<label for="conta-corrente">Conta Corrente</label>
								<input type="text" class="form-control" id="conta-corrente" name="conta-corrente">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-3">
								<label for="titular-conta">Titular da Conta</label>
								<input type="text" class="form-control" id="titular-conta" name="titular-conta">
							</div>
							<div class="col-md-6">
								<label for="">Condições de Pagamento</label><br>
								<input type="radio" class="" id="a-vista" name="condicao-pagamento">
									<label for="a-vista">À vista</label>	
									<input type="radio" class="" id="parcelamento" name="condicao-pagamento">
									<label for="parcelamento">Parcelamento</label>
								<label for="condicao">Condição</label>
								<input type="text" class="" id="condicao" name="condicao-parcelas">
							</div>
							<div class="col-md-2">
								<button type="submit">Cadastrar</button>		
							</div>
						</div>
					</fieldset>
				</form>
			</div>
		
	</div>
</div>

<?php
	get_footer();
?>