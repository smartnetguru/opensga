<div class="financeiroEstadoPagamentos view">
<h2><?php  echo __('Financeiro Estado Pagamento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($financeiroEstadoPagamento['FinanceiroEstadoPagamento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($financeiroEstadoPagamento['FinanceiroEstadoPagamento']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Financeiro Estado Pagamento'), array('action' => 'edit', $financeiroEstadoPagamento['FinanceiroEstadoPagamento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Financeiro Estado Pagamento'), array('action' => 'delete', $financeiroEstadoPagamento['FinanceiroEstadoPagamento']['id']), null, __('Are you sure you want to delete # %s?', $financeiroEstadoPagamento['FinanceiroEstadoPagamento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Financeiro Estado Pagamentos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Financeiro Estado Pagamento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Financeiro Pagamentos'), array('controller' => 'financeiro_pagamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Financeiro Pagamento'), array('controller' => 'financeiro_pagamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Financeiro Pagamentos'); ?></h3>
	<?php if (!empty($financeiroEstadoPagamento['FinanceiroPagamento'])): ?>
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
		<th><?php echo __('AnoLectivo Id'); ?></th>
		<th><?php echo __('Financeiro Estado Pagamento Id'); ?></th>
		<th><?php echo __('Codigo'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('Data Emissao'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($financeiroEstadoPagamento['FinanceiroPagamento'] as $financeiroPagamento): ?>
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
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'financeiro_pagamentos', 'action' => 'view', $financeiroPagamento['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'financeiro_pagamentos', 'action' => 'edit', $financeiroPagamento['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'financeiro_pagamentos', 'action' => 'delete', $financeiroPagamento['id']), null, __('Are you sure you want to delete # %s?', $financeiroPagamento['id'])); ?>
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
