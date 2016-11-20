<?php
	get_header();
?>

<div class="container-fluid">
	<div class="container" data-bg-image="<?=wp_get_attachment_url( get_post_thumbnail_id($post->ID) )?>">
		<?//=$post->post_content;?>
		<div class="row nav">
			<a href="<?=esc_url( home_url( '/index.php/atendimento/agendamento-online' ) ); ?>" class="col-md-4 text-center selected	">
				<span>Agendamento Online</span>
			</a>
			<a href="<?=esc_url( home_url( '/index.php/atendimento/servicos' ) ); ?>" class="col-md-4 text-center">
				<span>Serviços</span>
			</a>
			<a href="<?=esc_url( home_url( '/index.php/atendimento/informacoes' ) ); ?>" class="col-md-4 text-center">
				<span>Informações</span>
			</a>
		</div>
		<div class="row">
			<ul class="nav nav-tabs" role="tablist" id="form-types">
				<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">PAAF | Punção Aspirativa por Agulha Fina</a></li>
				<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Congelação | Exame intra-operatório de congelação</a></li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="home">
					<form>
						<fieldset>
							<div class="row form-group">
								<div class="col-md-6">
									<label for="nome">Nome completo do paciente</label>
									<input type="text" name="nome" id="nome" class="form-control">
								</div>
								<div class="col-md-6">
									<label for="medico">Nome do médico solicitante</label>
									<input type="text" name="medico" id="medico" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-6">
									<label for="email">E-mail</label>
									<input type="text" name="email" id="email" class="form-control">
								</div>
								<div class="col-md-3">
									<label for="telefone">Telefone</label>
									<input type="text" name="telefone" id="telefone" class="form-control">
								</div>
								<div class="col-md-3">
									<label for="celular">Celular</label>
									<input type="text" name="celular" id="celular" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-6">
									<label for="convenio">Convênio</label>
									<select name="convenio" id="convenio" class="form-control">
									</select>
								</div>
								<div class="col-md-6">
									<div class="chkbx">
										<input type="checkbox" name="particular" id="particular" >
										<label for="particular">Particular</label>
									</div>
								</div>
							</div>
						</fieldset>
						<div class="text-center">
							<button type="submit">Agendar</button>
						</div>
					</form>
				</div>
				<div role="tabpanel" class="tab-pane" id="profile">
					<form>
						<fieldset>
							<div class="row form-group">
								<div class="col-md-9">
									<label for="hospital">Hospital</label>
									<select name="hospital" id="hospital" class="form-control"></select>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-6">
									<label for="email">E-mail</label>
									<input type="text" name="email" id="email" class="form-control">
								</div>
								<div class="col-md-3">
									<label for="telefone">Telefone</label>
									<input type="text" name="telefone" id="telefone" class="form-control">
								</div>
								<div class="col-md-3">
									<label for="celular">Celular</label>
									<input type="text" name="celular" id="celular" class="form-control">
								</div>
							</div>
							<hr>
							<div class="row form-group">
								<div class="col-md-6">
									<label for="nome">Nome completo do paciente</label>
									<input type="text" name="nome" id="nome" class="form-control">
								</div>
								<div class="col-md-3">
									<label for="cirurgia">Tipo da cirurgia</label>
									<input type="text" name="cirurgia" id="cirurgia" class="form-control">
								</div>
								<div class="col-md-3">
									<label for="convenio">Convênio</label>
									<select name="convenio" id="convenio" class="form-control"></select>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-3">
									<label for="dia-cirurgia">Dia da cirurgia</label>
									<input type="text" name="dia-cirurgia" id="dia-cirurgia" class="form-control">
								</div>
								<div class="col-md-3">
									<label for="hora-cirurgia">Hora da cirurgia</label>
									<input type="text" name="hora-cirurgia" id="hora-cirurgia" class="form-control">
								</div>
								<div class="col-md-6">
									<label for="medico-solicitante">Nome do médico solicitante</label>
									<input type="text" name="medico-solicitante" id="medico-solicitante" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-9">
									<label for="observacoes">Observações</label>
									<input type="text" name="observacoes" id="observacoes" class="form-control">
								</div>
								<div class="col-md-3">
									<div class="btn-holder">
										<button>Adicionar</button>
									</div>
								</div>
							</div>
						</fieldset>
						<div class="text-center">
							<button type="submit">Agendar</button>
						</div>
					</form>
				</div>
			</div>
			<div>
				<h3>Documentos necessários</h3>
				<p>
					Serão orientados por e-mail se necessários.
				</p>
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