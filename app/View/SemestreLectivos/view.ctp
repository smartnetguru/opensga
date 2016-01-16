<div class="semestreLectivos view">
<h2><?php echo __('Semestre Lectivo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($semestreLectivo['SemestreLectivo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo'); ?></dt>
		<dd>
			<?php echo h($semestreLectivo['SemestreLectivo']['codigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ano Lectivo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($semestreLectivo['AnoLectivo']['codigo'], array('controller' => 'ano_lectivos', 'action' => 'view', $semestreLectivo['AnoLectivo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Semestre'); ?></dt>
		<dd>
			<?php echo h($semestreLectivo['SemestreLectivo']['semestre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Inicio'); ?></dt>
		<dd>
			<?php echo h($semestreLectivo['SemestreLectivo']['data_inicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Fim'); ?></dt>
		<dd>
			<?php echo h($semestreLectivo['SemestreLectivo']['data_fim']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Semestre'); ?></dt>
		<dd>
			<?php echo $this->Html->link($semestreLectivo['Semestre']['name'], array('controller' => 'semestres', 'action' => 'view', $semestreLectivo['Semestre']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Semestre Lectivo'), array('action' => 'edit', $semestreLectivo['SemestreLectivo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Semestre Lectivo'), array('action' => 'delete', $semestreLectivo['SemestreLectivo']['id']), array(), __('Are you sure you want to delete # %s?', $semestreLectivo['SemestreLectivo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Semestre Lectivos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Semestre Lectivo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ano Lectivos'), array('controller' => 'ano_lectivos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ano Lectivo'), array('controller' => 'ano_lectivos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Semestres'), array('controller' => 'semestres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Semestre'), array('controller' => 'semestres', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Financeiro Depositos'), array('controller' => 'financeiro_depositos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Financeiro Deposito'), array('controller' => 'financeiro_depositos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Financeiro Pagamentos'), array('controller' => 'financeiro_pagamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Financeiro Pagamento'), array('controller' => 'financeiro_pagamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Turmas'), array('controller' => 'turmas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Turma'), array('controller' => 'turmas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Financeiro Depositos'); ?></h3>
	<?php if (!empty($semestreLectivo['FinanceiroDeposito'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Entidade Id'); ?></th>
		<th><?php echo __('Financeiro Conta Id'); ?></th>
		<th><?php echo __('Data Deposito'); ?></th>
		<th><?php echo __('Data Reconciliacao'); ?></th>
		<th><?php echo __('Financeiro Estado Deposito Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('Numero Comprovativo'); ?></th>
		<th><?php echo __('Financeiro Forma Deposito Id'); ?></th>
		<th><?php echo __('Financeiro Banco Id'); ?></th>
		<th><?php echo __('Financeiro Transacao Id'); ?></th>
		<th><?php echo __('Valor'); ?></th>
		<th><?php echo __('Semestre Lectivo Id'); ?></th>
		<th><?php echo __('Referencia Deposito'); ?></th>
		<th><?php echo __('Id Transacao Banco'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($semestreLectivo['FinanceiroDeposito'] as $financeiroDeposito): ?>
		<tr>
			<td><?php echo $financeiroDeposito['id']; ?></td>
			<td><?php echo $financeiroDeposito['entidade_id']; ?></td>
			<td><?php echo $financeiroDeposito['financeiro_conta_id']; ?></td>
			<td><?php echo $financeiroDeposito['data_deposito']; ?></td>
			<td><?php echo $financeiroDeposito['data_reconciliacao']; ?></td>
			<td><?php echo $financeiroDeposito['financeiro_estado_deposito_id']; ?></td>
			<td><?php echo $financeiroDeposito['created']; ?></td>
			<td><?php echo $financeiroDeposito['modified']; ?></td>
			<td><?php echo $financeiroDeposito['created_by']; ?></td>
			<td><?php echo $financeiroDeposito['modified_by']; ?></td>
			<td><?php echo $financeiroDeposito['numero_comprovativo']; ?></td>
			<td><?php echo $financeiroDeposito['financeiro_forma_deposito_id']; ?></td>
			<td><?php echo $financeiroDeposito['financeiro_banco_id']; ?></td>
			<td><?php echo $financeiroDeposito['financeiro_transacao_id']; ?></td>
			<td><?php echo $financeiroDeposito['valor']; ?></td>
			<td><?php echo $financeiroDeposito['semestre_lectivo_id']; ?></td>
			<td><?php echo $financeiroDeposito['referencia_deposito']; ?></td>
			<td><?php echo $financeiroDeposito['id_transacao_banco']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'financeiro_depositos', 'action' => 'view', $financeiroDeposito['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'financeiro_depositos', 'action' => 'edit', $financeiroDeposito['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'financeiro_depositos', 'action' => 'delete', $financeiroDeposito['id']), array(), __('Are you sure you want to delete # %s?', $financeiroDeposito['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Financeiro Deposito'), array('controller' => 'financeiro_depositos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Financeiro Pagamentos'); ?></h3>
	<?php if (!empty($semestreLectivo['FinanceiroPagamento'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Aluno Id'); ?></th>
		<th><?php echo __('Financeiro Conta Id'); ?></th>
		<th><?php echo __('Valor'); ?></th>
		<th><?php echo __('Data Pagamento'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Financeiro Tipo Pagamento Id'); ?></th>
		<th><?php echo __('Data Limite'); ?></th>
		<th><?php echo __('Ano Lectivo Id'); ?></th>
		<th><?php echo __('Financeiro Estado Pagamento Id'); ?></th>
		<th><?php echo __('Codigo'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('Data Emissao'); ?></th>
		<th><?php echo __('Financeiro Transacao Id'); ?></th>
		<th><?php echo __('Semestre Lectivo Id'); ?></th>
		<th><?php echo __('Referencia Pagamento'); ?></th>
		<th><?php echo __('Entidade Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($semestreLectivo['FinanceiroPagamento'] as $financeiroPagamento): ?>
		<tr>
			<td><?php echo $financeiroPagamento['id']; ?></td>
			<td><?php echo $financeiroPagamento['aluno_id']; ?></td>
			<td><?php echo $financeiroPagamento['financeiro_conta_id']; ?></td>
			<td><?php echo $financeiroPagamento['valor']; ?></td>
			<td><?php echo $financeiroPagamento['data_pagamento']; ?></td>
			<td><?php echo $financeiroPagamento['created']; ?></td>
			<td><?php echo $financeiroPagamento['modified']; ?></td>
			<td><?php echo $financeiroPagamento['financeiro_tipo_pagamento_id']; ?></td>
			<td><?php echo $financeiroPagamento['data_limite']; ?></td>
			<td><?php echo $financeiroPagamento['ano_lectivo_id']; ?></td>
			<td><?php echo $financeiroPagamento['financeiro_estado_pagamento_id']; ?></td>
			<td><?php echo $financeiroPagamento['codigo']; ?></td>
			<td><?php echo $financeiroPagamento['created_by']; ?></td>
			<td><?php echo $financeiroPagamento['modified_by']; ?></td>
			<td><?php echo $financeiroPagamento['data_emissao']; ?></td>
			<td><?php echo $financeiroPagamento['financeiro_transacao_id']; ?></td>
			<td><?php echo $financeiroPagamento['semestre_lectivo_id']; ?></td>
			<td><?php echo $financeiroPagamento['referencia_pagamento']; ?></td>
			<td><?php echo $financeiroPagamento['entidade_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'financeiro_pagamentos', 'action' => 'view', $financeiroPagamento['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'financeiro_pagamentos', 'action' => 'edit', $financeiroPagamento['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'financeiro_pagamentos', 'action' => 'delete', $financeiroPagamento['id']), array(), __('Are you sure you want to delete # %s?', $financeiroPagamento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Financeiro Pagamento'), array('controller' => 'financeiro_pagamentos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Turmas'); ?></h3>
	<?php if (!empty($semestreLectivo['Turma'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Ano Lectivo Id'); ?></th>
		<th><?php echo __('Curso Id'); ?></th>
		<th><?php echo __('Plano Estudo Id'); ?></th>
		<th><?php echo __('Turno Id'); ?></th>
		<th><?php echo __('Disciplina Id'); ?></th>
		<th><?php echo __('Capacidade Maxima'); ?></th>
		<th><?php echo __('Total Aprovados'); ?></th>
		<th><?php echo __('Media Turma'); ?></th>
		<th><?php echo __('Estado Turma Id'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Total Reprovados'); ?></th>
		<th><?php echo __('Codigo'); ?></th>
		<th><?php echo __('Ano Curricular'); ?></th>
		<th><?php echo __('Semestre Curricular'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Semestre Lectivo Id'); ?></th>
		<th><?php echo __('Sala Aula Id'); ?></th>
		<th><?php echo __('Sequencia'); ?></th>
		<th><?php echo __('Peso Nota Frequencia'); ?></th>
		<th><?php echo __('Peso Nota Exame'); ?></th>
		<th><?php echo __('Nota Minima Frequencia'); ?></th>
		<th><?php echo __('Nota Minima Dispensa'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('Unidade Organica Id'); ?></th>
		<th><?php echo __('Pauta Path'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($semestreLectivo['Turma'] as $turma): ?>
		<tr>
			<td><?php echo $turma['id']; ?></td>
			<td><?php echo $turma['ano_lectivo_id']; ?></td>
			<td><?php echo $turma['curso_id']; ?></td>
			<td><?php echo $turma['plano_estudo_id']; ?></td>
			<td><?php echo $turma['turno_id']; ?></td>
			<td><?php echo $turma['disciplina_id']; ?></td>
			<td><?php echo $turma['capacidade_maxima']; ?></td>
			<td><?php echo $turma['total_aprovados']; ?></td>
			<td><?php echo $turma['media_turma']; ?></td>
			<td><?php echo $turma['estado_turma_id']; ?></td>
			<td><?php echo $turma['modified']; ?></td>
			<td><?php echo $turma['created']; ?></td>
			<td><?php echo $turma['total_reprovados']; ?></td>
			<td><?php echo $turma['codigo']; ?></td>
			<td><?php echo $turma['ano_curricular']; ?></td>
			<td><?php echo $turma['semestre_curricular']; ?></td>
			<td><?php echo $turma['name']; ?></td>
			<td><?php echo $turma['semestre_lectivo_id']; ?></td>
			<td><?php echo $turma['sala_aula_id']; ?></td>
			<td><?php echo $turma['sequencia']; ?></td>
			<td><?php echo $turma['peso_nota_frequencia']; ?></td>
			<td><?php echo $turma['peso_nota_exame']; ?></td>
			<td><?php echo $turma['nota_minima_frequencia']; ?></td>
			<td><?php echo $turma['nota_minima_dispensa']; ?></td>
			<td><?php echo $turma['created_by']; ?></td>
			<td><?php echo $turma['modified_by']; ?></td>
			<td><?php echo $turma['unidade_organica_id']; ?></td>
			<td><?php echo $turma['pauta_path']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'turmas', 'action' => 'view', $turma['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'turmas', 'action' => 'edit', $turma['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'turmas', 'action' => 'delete', $turma['id']), array(), __('Are you sure you want to delete # %s?', $turma['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Turma'), array('controller' => 'turmas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
