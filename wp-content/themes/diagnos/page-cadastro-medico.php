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
			<a href="<?=esc_url( home_url( '/index.php/central-de-relacionamento/cadastro-medico' ) ); ?>" class=" text-center selected">
				<span><bdi class="vatxt">Cadastro <br> Médico</bdi></span>
			</a>
			<a href="<?=esc_url( home_url( '/index.php/central-de-relacionamento/seja-um-fornecedor' ) ); ?>" class=" text-center">
				<span><bdi class="vatxt">Seja um <br> Fornecedor</bdi></span>
			</a>
		</div>
		<div class="row">
			<div class="">
				<h2 class="hidden">Cadastro Médico</h2>
				<form class="form">
					<legend>
						Curabitur consequat odio vel velit elementum gravida. Etiam viverra felis nisl, non mattis enim cursus non. In molestie placerat tincidunt. Praesent pulvinar tempus neque vitae suscipit.
Curabitur tincidunt nisl tortor, pharetra malesuada ligula auctor ac. Donec varius sit amet dolor ac hendrerit.
					</legend>
					<fieldset>
						<div class="row form-group">
							<div class="col-md-9">
								<label for="nome">Nome</label>
								<input type="text" class="form-control" id="nome" name="nome">
							</div>
							<div class="col-md-3">
								<label for="nome">Data de nascimento</label>
								<input type="text" class="form-control" id="nome" name="nome">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-6">
								<label for="email">E-mail</label>
								<input type="text" class="form-control" id="email" name="email">
							</div>
							<div class="col-md-3">
								<label for="telefone">Telefone</label>
								<input type="text" class="form-control" id="telefone" name="telefone">							
							</div>
							<div class="col-md-3">
								<label for="celular">Celular</label>
								<input type="text" class="form-control" id="celular" name="celular">							
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-3">
								<label for="cep">CEP</label>
								<input type="text" class="form-control" id="cep" name="cep">							
							</div>
							<div class="col-md-9">
								<label for="endereco">Endereço</label>
								<input type="text" class="form-control" id="endereco" name="endereco">
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
					<div class="text-center">
						<button type="submit">Cadastrar</button>
					</div>
				</form>
				<img src="<?=get_template_directory_uri()?>/assets/image/central-de-relacionamento/cadastro-medico.jpg" alt="">
			</div>
		
	</div>
</div>

<?php
	get_footer();
?>