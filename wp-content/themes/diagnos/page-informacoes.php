<?php
	get_header();
?>

<div class="container-fluid">
	<div class="container" data-bg-image="<?=wp_get_attachment_url( get_post_thumbnail_id($post->ID) )?>">
		<?//=$post->post_content;?>
		<div class="row nav">
			<a href="<?=esc_url( home_url( '/index.php/atendimento/agendamento-online' ) ); ?>" class="col-md-4 text-center">
				<span>Agendamento Online</span>
			</a>
			<a href="<?=esc_url( home_url( '/index.php/atendimento/servicos' ) ); ?>" class="col-md-4 text-center">
				<span>Serviços</span>
			</a>
			<a href="<?=esc_url( home_url( '/index.php/atendimento/informacoes' ) ); ?>" class="col-md-4 text-center selected">
				<span>Informações</span>
			</a>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h2 class="row">Produtos</h2>
				<ul class="row multi-column">
					<li>Lorem ipsum</li>
					<li>Phasellus</li>
					<li>Dapibus semper</li>
					<li>Tincidunt vel.</li>
					<li>Proin</li>
					<li>Faucibus</li>
					<li>Utidvariusurna</li>
					<li>Morbi in turpis sit amet</li>
					<li>Phasellus</li>
					<li>Euismod dolor</li>
					<li>Pretium ipsum iaculis</li>
				</ul>
			</div>
		</div>
		<hr class="row">
		<div class="row">
			<div class="col-md-12">
				<h2 class="row">Serviços</h2>
				<p class="row">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dapibus semper quam, eget imperdiet mi tincidunt vel. Proin id dui vel mauris ultrices faucibus eu vitae leo. Ut id varius urna. Morbi in turpis sit amet lacus viverra hendrerit.</p>
				<ul class="row multi-column">
					<li>Lorem ipsum</li>
					<li>Phasellus</li>
					<li>Dapibus semper</li>
					<li>Tincidunt vel.</li>
					<li>Proin</li>
					<li>Faucibus</li>
					<li>Utidvariusurna</li>
					<li>Morbi in turpis sit amet</li>
					<li>Phasellus</li>
					<li>Euismod dolor</li>
					<li>Pretium ipsum iaculis</li>
				</ul>
			</div>

		</div>
	</div>
		<script>
			var $ = jQuery;
			$(function(){
				$('#myTabs a').click(function (e) {
				  e.preventDefault()
				  $(this).tab('show')
				});
			});
		</script>
</div>

<?php
	get_footer();
?>