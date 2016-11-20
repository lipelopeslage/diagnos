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
			<?
				$posts = get_posts(array('offset'=>0, 'posts_per_page'=>5, 'post_status'=>'publish'));
				if(!empty($posts)):
			?>
			<ul class="blog-post-list clearfix row">
				<?foreach($posts as $p):?>
				<li class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
				<?//var_dump($p);?>
					<a href="<?=get_post_permalink($p->ID);?>">
						<img class="img-responsive" src="<?=wp_get_attachment_url( get_post_thumbnail_id($p->ID) )?>" alt="<?=$p->post_title;?>">
						<h3><?=$p->post_title?></h3>
						<p><?=$p->post_excerpt?></p>
					</a>
				</li>
				<?endforeach;?>
				<!-- <li class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
					<a href="">
						<img src="" alt="Thumb">
						<h3>Cras viverra nibh vellacinia imperdiet</h3>
						<p>Proin id dui vel mauris ultrices faucibus eu vitae leo. Ut id varius urna. Morbi.</p>
					</a>
				</li>
				<li class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
					<a href="">
						<img src="" alt="Thumb">
						<h3>Cras viverra nibh vellacinia imperdiet</h3>
						<p>Proin id dui vel mauris ultrices faucibus eu vitae leo. Ut id varius urna. Morbi.</p>
					</a>
				</li>
				<li class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
					<a href="">
						<img src="" alt="Thumb">
						<h3>Cras viverra nibh vellacinia imperdiet</h3>
						<p>Proin id dui vel mauris ultrices faucibus eu vitae leo. Ut id varius urna. Morbi.</p>
					</a>
				</li>
				<li class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
					<a href="">
						<img src="" alt="Thumb">
						<h3>Cras viverra nibh vellacinia imperdiet</h3>
						<p>Proin id dui vel mauris ultrices faucibus eu vitae leo. Ut id varius urna. Morbi.</p>
					</a>
				</li>
				<li class="col-md-4 col-xs-12 col-sm-6 col-lg-4 more">
					<a href="" class="more-link">
						Veja mais <br>matérias
					</a>
					<div class="pagination">
						<a href="" class="prev arr">Página anterior</a>
						<a href="" class="num">1</a>
						<a href="" class="next arr">Próxima página</a>
					</div>
				</li> -->
				<?
					if(sizeof($posts) > 5):
				?>
				<li class="col-md-4 col-xs-12 col-sm-6 col-lg-4 more">
					<a href="" class="more-link">
						Veja mais <br>matérias
					</a>
					<div class="pagination">
						<a href="" class="prev arr">Página anterior</a>
						<a href="" class="num">1</a>
						<a href="" class="next arr">Próxima página</a>
					</div>
				</li>
				<?
					endif;
				?>
			</ul>
			<?
				else:
			?>

			<p><br>Ainda não há postagens.</p>
			<?	endif;?>
		</div>
	</div>
		
</div>

<?php
	get_footer();
?>