<div class="requisicoesTipoPedidos form">
<?php echo $this->Form->create('RequisicoesTipoPedido'); ?>
	<fieldset>
		<legend><?php echo __('Edit Requisicoes Tipo Pedido'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('RequisicoesTipoPedido.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('RequisicoesTipoPedido.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Requisicoes Tipo Pedidos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Requisicoes Pedidos'), array('controller' => 'requisicoes_pedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requisicoes Pedido'), array('controller' => 'requisicoes_pedidos', 'action' => 'add')); ?> </li>
	</ul>
</div>
