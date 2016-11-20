<?php
	get_header();
?>

<div class="container-fluid">
	<div class="container" data-bg-image="<?=wp_get_attachment_url( get_post_thumbnail_id($post->ID) )?>">
		<?//=$post->post_content;?>
		<div class="row nav">
			<a href="<?=esc_url( home_url( '/index.php/entral-de-relacionamento/blog' ) ); ?>" class="text-center">
				<span><bdi class="vatxt">Blog</bdi></span>
			</a>
			<a href="<?=esc_url( home_url( '/index.php/central-de-relacionamento/fale-conosco' ) ); ?>" class=" text-center selected">
				<span><bdi class="vatxt">Fale <br> Conosco</bdi></span>
			</a>
			<a href="<?=esc_url( home_url( '/index.php/central-de-relacionamento/oportunidades' ) ); ?>" class=" text-center">
				<span><bdi class="vatxt">Oportunidades</bdi></span>
			</a>
			<a href="<?=esc_url( home_url( '/index.php/central-de-relacionamento/cadastro-medico' ) ); ?>" class=" text-center">
				<span><bdi class="vatxt">Cadastro <br> Médico</bdi></span>
			</a>
			<a href="<?=esc_url( home_url( '/index.php/central-de-relacionamento/seja-um-fornecedor' ) ); ?>" class=" text-center">
				<span><bdi class="vatxt">Seja um <br> Fornecedor</bdi></span>
			</a>
		</div>
		<div class="row">
			<div class="col-md-6">
				<h2 class="hidden">Fale Conosco</h2>
				<form class="form row">
					<legend>
						<bdi>Seja bem vindo.</bdi> Aqui você poderá solicitar informações e opinar.<br><a href="mailto:contato@diagnoscom.br">contato@diagnoscom.br</a>
					</legend>
					<fieldset>
						<div class="form-group">
							<label for="nome">Nome</label>
							<input type="text" class="form-control" id="nome" name="nome">
						</div>
						<div class="form-group">
							<label for="email">E-mail</label>
							<input type="text" class="form-control" id="email" name="email">
						</div>
						<div class="form-group">
							<label for="telefone">Telefone/Celular</label>
							<input type="text" class="form-control" id="telefone" name="telefone">							
						</div>
						<div class="form-group">
							<label for="mensagem">Mensagem</label>
							<textarea class="form-control" id="mensagem" name="mensagem"></textarea>
						</div>
					</fieldset>
					<button type="submit">Enviar</button>
				</form>
			</div>
			<div class="col-md-6">
				<h3>Diagnos</h3>
				<address>Avenida Siqueira Campos, 551, Embaré, Santos - São Paulo</address>
				<div id="map">
					<img class="img-responsive" src="<?=get_template_directory_uri()?>/assets/image/central-de-relacionamento/map_placeholder.jpg" alt="">
				</div>
				<p class="tel"><strong>3-DIAGNOS |</strong> (13) 3342.4667</p>
			</div>
		</div>
	</div>
		
</div>

<?php
	get_footer();
?>