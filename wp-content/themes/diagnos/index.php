<?php
	get_header();
?>

<main class="container">
	<menu>
		<div class="arrow-nav prev"></div>
		<div class="arrow-nav next"></div>
		<ul>
			<li>
				<a href="<?=esc_url( home_url( '/index.php/a-diagnos' ) ); ?>">
					<img data-src="<?=get_template_directory_uri()?>/assets/image/home/diagnos.png" class="img-responsive" alt="">
					A Diagnos<span><bdi>-</bdi> Conheça mais sobre a empresa e nossos serviços</span>
				</a>
			</li>
			<li>
				<a href="<?=esc_url( home_url( '/index.php/solucoes-diagnos' ) ); ?>">
					<img data-src="<?=get_template_directory_uri()?>/assets/image/home/solucoes.png" class="img-responsive" alt="">
					Soluções Diagnos <span><bdi> - </bdi> Saiba como podemos ajudá-lo</span>
				</a>
			</li>
			<li>
				<a href="<?=esc_url( home_url( '/index.php/atendimento' ) ); ?>">
					<img data-src="<?=get_template_directory_uri()?>/assets/image/home/atendimento.png" class="img-responsive" alt="">
					Atendimento <span><bdi> - </bdi> Veja os detalhes de cada serviço</span>
				</a>
				<ul class="sub">
					<li><a href="<?=esc_url( home_url( '/index.php/atendimento/agendamento-online' ) ); ?>">Agendamento Online</a></li>
					<li><a href="<?=esc_url( home_url( '/index.php/atendimento/servicos' ) ); ?>">Serviços</a></li>
					<li><a href="<?=esc_url( home_url( '/index.php/atendimento/informacoes' ) ); ?>">Informações</a></li>
				</ul>
			</li>
			<li>
				<a href="<?=esc_url( home_url( '/index.php/central-de-relacionamento' ) ); ?>">
					<img data-src="<?=get_template_directory_uri()?>/assets/image/home/central-de-relacionamento.png" class="img-responsive" alt="">
					Central de <br>Relacionamento <span><bdi> - </bdi> Cadastre-se, fale conosco, fique por dentro das últimas novidades e oportunidades</span>
				</a>
				<ul class="sub">
					<li><a href="<?=esc_url( home_url( '/index.php/central-de-relacionamento/blog' ) ); ?>">Blog</a></li>
					<li><a href="<?=esc_url( home_url( '/index.php/central-de-relacionamento/fale-conosco' ) ); ?>">Fale Conosco</a></li>
					<li><a href="<?=esc_url( home_url( '/index.php/central-de-relacionamento/oportunidades' ) ); ?>">Oportunidades</a></li>
					<li><a href="<?=esc_url( home_url( '/index.php/central-de-relacionamento/cadastro-medico' ) ); ?>">Cadastro Médico</a></li>
					<li><a href="<?=esc_url( home_url( '/index.php/central-de-relacionamento/seja-um-fornecedor' ) ); ?>">Seja um fornecedor</a></li>
				</ul>
			</li>
		</ul>
	</menu>
	<div id="descriptions"></div>
	<div id="sublinks"></div>
</main>

<?php
	get_footer();
?>