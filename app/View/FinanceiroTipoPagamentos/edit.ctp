<div class="financeiroTipoPagamentos form">
<?php echo $this->Form->create('FinanceiroTipoPagamento'); ?>
	<fieldset>
		<legend><?php echo __('Edit Financeiro Tipo Pagamento'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('valor');
		echo $this->Form->input('codigo');
		echo $this->Form->input('month_id');
		echo $this->Form->input('data_limite');
		echo $this->Form->input('mes_limite');
		echo $this->Form->input('dia_limite');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('FinanceiroTipoPagamento.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('FinanceiroTipoPagamento.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Financeiro Tipo Pagamentos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Months'), array('controller' => 'months', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Month'), array('controller' => 'months', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Financeiro Pagamentos'), array('controller' => 'financeiro_pagamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Financeiro Pagamento'), array('controller' => 'financeiro_pagamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
