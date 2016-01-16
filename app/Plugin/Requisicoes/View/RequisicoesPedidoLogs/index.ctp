<div class="requisicoesPedidoLogs index">
	<h2><?php echo __('Requisicoes Pedido Logs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('requisicoes_pedido_id'); ?></th>
			<th><?php echo $this->Paginator->sort('estado_anterior'); ?></th>
			<th><?php echo $this->Paginator->sort('estado_actual'); ?></th>
			<th><?php echo $this->Paginator->sort('data_mudanca'); ?></th>
			<th><?php echo $this->Paginator->sort('funcionario_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($requisicoesPedidoLogs as $requisicoesPedidoLog): ?>
	<tr>
		<td><?php echo h($requisicoesPedidoLog['RequisicoesPedidoLog']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($requisicoesPedidoLog['RequisicoesPedido']['id'], array('controller' => 'requisicoes_pedidos', 'action' => 'view', $requisicoesPedidoLog['RequisicoesPedido']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($requisicoesPedidoLog['EstadoPedidoAnterior']['name'], array('controller' => 'requisicoes_estado_pedidos', 'action' => 'view', $requisicoesPedidoLog['EstadoPedidoAnterior']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($requisicoesPedidoLog['EstadoPedidoActual']['name'], array('controller' => 'requisicoes_estado_pedidos', 'action' => 'view', $requisicoesPedidoLog['EstadoPedidoActual']['id'])); ?>
		</td>
		<td><?php echo h($requisicoesPedidoLog['RequisicoesPedidoLog']['data_mudanca']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($requisicoesPedidoLog['Funcionario']['id'], array('controller' => 'funcionarios', 'action' => 'view', $requisicoesPedidoLog['Funcionario']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $requisicoesPedidoLog['RequisicoesPedidoLog']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $requisicoesPedidoLog['RequisicoesPedidoLog']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $requisicoesPedidoLog['RequisicoesPedidoLog']['id']), null, __('Are you sure you want to delete # %s?', $requisicoesPedidoLog['RequisicoesPedidoLog']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Requisicoes Pedido Log'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Requisicoes Pedidos'), array('controller' => 'requisicoes_pedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requisicoes Pedido'), array('controller' => 'requisicoes_pedidos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Funcionarios'), array('controller' => 'funcionarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcionario'), array('controller' => 'funcionarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Requisicoes Estado Pedidos'), array('controller' => 'requisicoes_estado_pedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Pedido Anterior'), array('controller' => 'requisicoes_estado_pedidos', 'action' => 'add')); ?> </li>
	</ul>
</div>
