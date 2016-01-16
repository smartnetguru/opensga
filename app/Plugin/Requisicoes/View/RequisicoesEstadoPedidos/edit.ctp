<div class="requisicoesEstadoPedidos form">
<?php echo $this->Form->create('RequisicoesEstadoPedido'); ?>
	<fieldset>
		<legend><?php echo __('Edit Requisicoes Estado Pedido'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('RequisicoesEstadoPedido.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('RequisicoesEstadoPedido.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Requisicoes Estado Pedidos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Requisicoes Pedidos'), array('controller' => 'requisicoes_pedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requisicoes Pedido'), array('controller' => 'requisicoes_pedidos', 'action' => 'add')); ?> </li>
	</ul>
</div>
