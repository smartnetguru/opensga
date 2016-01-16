<div class="row">
						<!-- start: 500 -->
						<div class="col-sm-12 page-error">
							<div class="error-number bricky">
								500
							</div>
							<div class="error-details col-sm-6 col-sm-offset-3">
								<h3>Oops! Aconteceu um probleminha no sistema!</h3>
								<p>
									Algo nao saiu conforme o previsto!
									<br>
									Parece que quebramos algo no nosso sistema.
									<br>
									Nao entre em panico, nossos tecnicos ja receberam esta notificacao e estao neste momento a resolver o problema.
									<br>
									Por favor, tente de novo daqui a alguns minutos!
								</p>
							</div>
						</div>
						<!-- end: 500 -->
					</div>

					<?php
if (Configure::read('debug') > 0):
	echo $this->element('exception_stack_trace');
endif;
?>