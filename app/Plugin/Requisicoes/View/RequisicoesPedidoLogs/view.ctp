<div class="requisicoesPedidoLogs view">
<h2><?php  echo __('Requisicoes Pedido Log'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($requisicoesPedidoLog['RequisicoesPedidoLog']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Requisicoes Pedido'); ?></dt>
		<dd>
			<?php echo $this->Html->link($requisicoesPedidoLog['RequisicoesPedido']['id'], array('controller' => 'requisicoes_pedidos', 'action' => 'view', $requisicoesPedidoLog['RequisicoesPedido']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado Pedido Anterior'); ?></dt>
		<dd>
			<?php echo $this->Html->link($requisicoesPedidoLog['EstadoPedidoAnterior']['name'], array('controller' => 'requisicoes_estado_pedidos', 'action' => 'view', $requisicoesPedidoLog['EstadoPedidoAnterior']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado Pedido Actual'); ?></dt>
		<dd>
			<?php echo $this->Html->link($requisicoesPedidoLog['EstadoPedidoActual']['name'], array('controller' => 'requisicoes_estado_pedidos', 'action' => 'view', $requisicoesPedidoLog['EstadoPedidoActual']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Mudanca'); ?></dt>
		<dd>
			<?php echo h($requisicoesPedidoLog['RequisicoesPedidoLog']['data_mudanca']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Funcionario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($requisicoesPedidoLog['Funcionario']['id'], array('controller' => 'funcionarios', 'action' => 'view', $requisicoesPedidoLog['Funcionario']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Requisicoes Pedido Log'), array('action' => 'edit', $requisicoesPedidoLog['RequisicoesPedidoLog']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Requisicoes Pedido Log'), array('action' => 'delete', $requisicoesPedidoLog['RequisicoesPedidoLog']['id']), null, __('Are you sure you want to delete # %s?', $requisicoesPedidoLog['RequisicoesPedidoLog']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Requisicoes Pedido Logs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requisicoes Pedido Log'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Requisicoes Pedidos'), array('controller' => 'requisicoes_pedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requisicoes Pedido'), array('controller' => 'requisicoes_pedidos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Funcionarios'), array('controller' => 'funcionarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcionario'), array('controller' => 'funcionarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Requisicoes Estado Pedidos'), array('controller' => 'requisicoes_estado_pedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Pedido Anterior'), array('controller' => 'requisicoes_estado_pedidos', 'action' => 'add')); ?> </li>
	</ul>
</div>
