<?php $this->layout = 'guest_users';?><div class="row">
						<!-- start: 404 -->
						<div class="col-sm-12 page-error">
							<div class="error-number teal">
								404
							</div>
							<div class="error-details col-sm-6 col-sm-offset-3">
								<h3>Ops, Erro no Sistema :( </h3>
								<p>
									Este erro quer dizer que, infelizmente, a funcao que pretende aceder nao foi encontrada.
									<br>
									Ela pode estar temporariamente indisponivel, pode ter sido movida ou removida, ou pode numca ter existido.
									<br>
									Verifique os passos que o fizeram chegar aqui e tente novamente.
									<br>
									<?php echo $this->Html->link('Voltar a Pagina Inicial',array('/'))?>
									
									<br>
									Ainda sem Sorte?
									<br>
									Tente contactar o administrador do Sistema e explicar o que aconteceu.
								</p>
							<!--	<form action="#">
									<div class="input-group">
										<input type="text" class="form-control" size="16" placeholder="keyword...">
										<span class="input-group-btn">
											<button class="btn btn-teal">
												Search
											</button> </span>
									</div>
								</form>-->
							</div>
						</div>
						<!-- end: 404 -->
					</div>

					<?php
if (Configure::read('debug') > 0):
    echo $error;
	echo $this->element('exception_stack_trace');
endif;
?>