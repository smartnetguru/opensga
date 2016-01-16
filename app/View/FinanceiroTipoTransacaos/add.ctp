<div class="financeiroTipoTransacaos form">
<?php echo $this->Form->create('FinanceiroTipoTransacao'); ?>
	<fieldset>
		<legend><?php echo __('Add Financeiro Tipo Transacao'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Financeiro Tipo Transacaos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Financeiro Transacaos'), array('controller' => 'financeiro_transacaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Financeiro Transacao'), array('controller' => 'financeiro_transacaos', 'action' => 'add')); ?> </li>
	</ul>
</div>
