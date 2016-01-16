<div class="requisicoesPedidoLogs form">
<?php echo $this->Form->create('RequisicoesPedidoLog'); ?>
	<fieldset>
		<legend><?php echo __('Edit Requisicoes Pedido Log'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('requisicoes_pedido_id');
		echo $this->Form->input('estado_anterior');
		echo $this->Form->input('estado_actual');
		echo $this->Form->input('data_mudanca');
		echo $this->Form->input('funcionario_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('RequisicoesPedidoLog.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('RequisicoesPedidoLog.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Requisicoes Pedido Logs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Requisicoes Pedidos'), array('controller' => 'requisicoes_pedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requisicoes Pedido'), array('controller' => 'requisicoes_pedidos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Funcionarios'), array('controller' => 'funcionarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcionario'), array('controller' => 'funcionarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Requisicoes Estado Pedidos'), array('controller' => 'requisicoes_estado_pedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Pedido Anterior'), array('controller' => 'requisicoes_estado_pedidos', 'action' => 'add')); ?> </li>
	</ul>
</div>
