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
			<a href="<?=esc_url( home_url( '/index.php/atendimento/servicos' ) ); ?>" class="col-md-4 text-center selected">
				<span>Serviços</span>
			</a>
			<a href="<?=esc_url( home_url( '/index.php/atendimento/informacoes' ) ); ?>" class="col-md-4 text-center">
				<span>Informações</span>
			</a>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h2 class="row">Geral</h2>
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
				<h2 class="row">Pesquisas moleculares</h2>
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
		<div class="row">
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#testes" aria-controls="testes" role="tab" data-toggle="tab">
					<span class="vatxt">Testes moleculares</span>
				</a></li>
				<li role="presentation"><a href="#paaf" aria-controls="paaf" role="tab" data-toggle="tab">
					<span class="vatxt">PAAF</span>
				</a></li>
				<li role="presentation"><a href="#imuno" aria-controls="imuno" role="tab" data-toggle="tab">
					<span class="vatxt">Imuno-histoquímica</span>
				</a></li>
				<li role="presentation"><a href="#citopatologia" aria-controls="citopatologia" role="tab" data-toggle="tab">
					<span class="vatxt">Citopatologia</span>
				</a></li>
				<li role="presentation"><a href="#anatomo" aria-controls="anatomo" role="tab" data-toggle="tab">
					<span class="vatxt">Anátomo-patologia</span>
				</a></li>



			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="testes">
					Os testes moleculares também podem chamar-se reacção em cadeia da polimerase. É o teste mais sensível, disponível para as pessoas com Leucemia Mielóide Crónica (LMC). Os testes PCR podem ser utilizados para ajudar a diagnosticar e também para determinar até que ponto o organismo está respondendo ao tratamento. 
				</div>
				<div role="tabpanel" class="tab-pane" id="paaf">
					PAAF chamar-se reacção em cadeia da polimerase. É o teste mais sensível, disponível para as pessoas com Leucemia Mielóide Crónica (LMC). Os testes PCR podem ser utilizados para ajudar a diagnosticar e também para determinar até que ponto o organismo está respondendo ao tratamento. 
				</div>
				<div role="tabpanel" class="tab-pane" id="imuno">
					imuno chamar-se reacção em cadeia da polimerase. É o teste mais sensível, disponível para as pessoas com Leucemia Mielóide Crónica (LMC). Os testes PCR podem ser utilizados para ajudar a diagnosticar e também para determinar até que ponto o organismo está respondendo ao tratamento. 
				</div>
				<div role="tabpanel" class="tab-pane" id="citopatologia">
					citopatologia chamar-se reacção em cadeia da polimerase. É o teste mais sensível, disponível para as pessoas com Leucemia Mielóide Crónica (LMC). Os testes PCR podem ser utilizados para ajudar a diagnosticar e também para determinar até que ponto o organismo está respondendo ao tratamento. 
				</div>
				<div role="tabpanel" class="tab-pane" id="anatomo">
					anatomo chamar-se reacção em cadeia da polimerase. É o teste mais sensível, disponível para as pessoas com Leucemia Mielóide Crónica (LMC). Os testes PCR podem ser utilizados para ajudar a diagnosticar e também para determinar até que ponto o organismo está respondendo ao tratamento. 
				</div>
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