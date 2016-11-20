<?php
	get_header();
?>

<div class="container-fluid">
	<div class="container" data-bg-image="<?=wp_get_attachment_url( get_post_thumbnail_id($post->ID) )?>">
		<?//=$post->post_content;?>
		<div class="row nav">
			<a href="<?=esc_url( home_url( '/index.php/central-de-relacionamento/blog' ) ); ?>" class="text-center selected">
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
			<a href="<?=esc_url( home_url( '/index.php/central-de-relacionamento/seja-um-fornecedor' ) ); ?>" class=" text-center">
				<span><bdi class="vatxt">Seja um <br> Fornecedor</bdi></span>
			</a>
		</div>
		<div class="row">
			<h2 class="hidden">Blog</h2>
			<div class="post-content">
					
					
					<div>
						<div class="post-img">
							<img src="<?=wp_get_attachment_url( get_post_thumbnail_id($post->ID) )?>" alt="<?=the_title();?>">
							<div class="post-share">
								Compartilhe: 
							</div>
						</div>
						<h1><?=$post->post_title?></h1>
						<?=$post->post_content?>
					</div>						
				
			</div>
		</div>
	</div>
		
</div>

<?php
	get_footer();
?>