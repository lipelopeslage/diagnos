<?php
	get_header();
?>

<div class="container-fluid">
	<div class="container" data-bg-image="<?=wp_get_attachment_url( get_post_thumbnail_id($post->ID) )?>">
		<?//=$post->post_content;?>
		<div class="row nav">
			<a href="<?=esc_url( home_url( '/index.php/central-de-relacionamento/blog' ) ); ?>" class="text-center">
				<span><bdi class="vatxt">Blog</bdi></span>
			</a>
			<a href="<?=esc_url( home_url( '/index.php/central-de-relacionamento/fale-conosco' ) ); ?>" class=" text-center">
				<span><bdi class="vatxt">Fale <br> Conosco</bdi></span>
			</a>
			<a href="<?=esc_url( home_url( '/index.php/central-de-relacionamento/oportunidades' ) ); ?>" class=" text-center selected">
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
			<div class="">
				<h2 class="hidden">Oportunidades</h2>
				<p>Curabitur tincidunt nisl tortor, pharetra malesuada ligula auctor ac. Donec varius sit amet dolor ac hendrerit. Vivamus molestie vel lectus vitae ultrices. Nulla at leo nec ante finibus volutpat. Morbi sed urna augue. Duis vitae sapien eu lectus aliquet vestibulum vitae id nibh. Aliquam gravida commodo tellus ut congue.
Sed at metus nisi. Morbi quis sodales sapien, a pellentesque lectus. Integer dictum neque at rutrum dignissim. </p><br>
				<form class="form row">
					<legend class="col-md-12">
						<bdi>Curabitur consequat odio vel velit elementum gravida. Etiam viverra felis nisl, non mattis enim cursus non. In molestie placerat tincidunt. Praesent pulvinar tempus neque vitae suscipit.</bdi>
					</legend>
					<fieldset class="col-md-6">
						<div class="form-group">
							<label for="nome">Nome</label>
							<input type="text" class="form-control" id="nome" name="nome">
						</div>
						<div class="form-group">
							<label for="email">E-mail</label>
							<input type="text" class="form-control" id="email" name="email">
						</div>
						<div class="row">
							<div class="col-md-6">
								<label for="telefone">Telefone</label>
								<input type="text" class="form-control" id="telefone" name="telefone">							
							</div>
							<div class="col-md-6">
								<label for="celular">Celular</label>
								<input type="text" class="form-control" id="celular" name="celular">							
							</div>
						</div>
					</fieldset>
					<fieldset class="col-md-6">
						<div class="form-group">
							<label for="mensagem">Mensagem</label>
							<textarea class="form-control" id="mensagem" name="mensagem"></textarea>
						</div>
						<div class="row">
							<div class="col-md-7">
								<label for="curriculo">Carregue seu currículo</label>
								<input type="file" class="" id="curriculo" name="curriculo"></textarea>
							</div>
							<div class="col-md-5">
								<button type="submit">Enviar</button>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
		
	</div>
</div>

<?php
	get_footer();
?>