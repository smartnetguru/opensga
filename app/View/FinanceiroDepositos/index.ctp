<div class="financeiroDepositos index">
	<h2><?php echo __('Financeiro Depositos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('entidade_id'); ?></th>
			<th><?php echo $this->Paginator->sort('financeiro_conta_id'); ?></th>
			<th><?php echo $this->Paginator->sort('data_deposito'); ?></th>
			<th><?php echo $this->Paginator->sort('data_reconciliacao'); ?></th>
			<th><?php echo $this->Paginator->sort('financeiro_estado_deposito_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created_by'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_by'); ?></th>
			<th><?php echo $this->Paginator->sort('numero_comprovativo'); ?></th>
			<th><?php echo $this->Paginator->sort('financeiro_forma_deposito_id'); ?></th>
			<th><?php echo $this->Paginator->sort('financeiro_banco_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($financeiroDepositos as $financeiroDeposito): ?>
	<tr>
		<td><?php echo h($financeiroDeposito['FinanceiroDeposito']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($financeiroDeposito['Entidade']['name'], array('controller' => 'entidades', 'action' => 'view', $financeiroDeposito['Entidade']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($financeiroDeposito['FinanceiroConta']['id'], array('controller' => 'financeiro_contas', 'action' => 'view', $financeiroDeposito['FinanceiroConta']['id'])); ?>
		</td>
		<td><?php echo h($financeiroDeposito['FinanceiroDeposito']['data_deposito']); ?>&nbsp;</td>
		<td><?php echo h($financeiroDeposito['FinanceiroDeposito']['data_reconciliacao']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($financeiroDeposito['FinanceiroEstadoDeposito']['name'], array('controller' => 'financeiro_estado_depositos', 'action' => 'view', $financeiroDeposito['FinanceiroEstadoDeposito']['id'])); ?>
		</td>
		<td><?php echo h($financeiroDeposito['FinanceiroDeposito']['created']); ?>&nbsp;</td>
		<td><?php echo h($financeiroDeposito['FinanceiroDeposito']['modified']); ?>&nbsp;</td>
		<td><?php echo h($financeiroDeposito['FinanceiroDeposito']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($financeiroDeposito['FinanceiroDeposito']['modified_by']); ?>&nbsp;</td>
		<td><?php echo h($financeiroDeposito['FinanceiroDeposito']['numero_comprovativo']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($financeiroDeposito['FinanceiroFormaDeposito']['name'], array('controller' => 'financeiro_forma_depositos', 'action' => 'view', $financeiroDeposito['FinanceiroFormaDeposito']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($financeiroDeposito['FinanceiroBanco']['name'], array('controller' => 'financeiro_bancos', 'action' => 'view', $financeiroDeposito['FinanceiroBanco']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $financeiroDeposito['FinanceiroDeposito']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $financeiroDeposito['FinanceiroDeposito']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $financeiroDeposito['FinanceiroDeposito']['id']), null, __('Are you sure you want to delete # %s?', $financeiroDeposito['FinanceiroDeposito']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Financeiro Deposito'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Entidades'), array('controller' => 'entidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entidade'), array('controller' => 'entidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Financeiro Contas'), array('controller' => 'financeiro_contas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Financeiro Conta'), array('controller' => 'financeiro_contas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Financeiro Estado Depositos'), array('controller' => 'financeiro_estado_depositos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Financeiro Estado Deposito'), array('controller' => 'financeiro_estado_depositos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Financeiro Forma Depositos'), array('controller' => 'financeiro_forma_depositos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Financeiro Forma Deposito'), array('controller' => 'financeiro_forma_depositos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Financeiro Bancos'), array('controller' => 'financeiro_bancos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Financeiro Banco'), array('controller' => 'financeiro_bancos', 'action' => 'add')); ?> </li>
	</ul>
</div>
