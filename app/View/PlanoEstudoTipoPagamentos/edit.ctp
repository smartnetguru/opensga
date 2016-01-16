<div class="planoEstudoTipoPagamentos form">
<?php echo $this->Form->create('PlanoEstudoTipoPagamento'); ?>
	<fieldset>
		<legend><?php echo __('Edit Plano Estudo Tipo Pagamento'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('plano_estudo_id');
		echo $this->Form->input('tipopagamento_id');
		echo $this->Form->input('valor');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PlanoEstudoTipoPagamento.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PlanoEstudoTipoPagamento.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Plano Estudo Tipo Pagamentos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Planoestudos'), array('controller' => 'planoestudos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New PlanoEstudo'), array('controller' => 'planoestudos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipopagamentos'), array('controller' => 'tipopagamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipopagamento'), array('controller' => 'tipopagamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
