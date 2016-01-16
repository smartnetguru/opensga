<div class="financeiroEstadoDepositos form">
<?php echo $this->Form->create('FinanceiroEstadoDeposito'); ?>
	<fieldset>
		<legend><?php echo __('Add Financeiro Estado Deposito'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Financeiro Estado Depositos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Financeiro Depositos'), array('controller' => 'financeiro_depositos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Financeiro Deposito'), array('controller' => 'financeiro_depositos', 'action' => 'add')); ?> </li>
	</ul>
</div>
