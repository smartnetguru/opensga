<div class="requisicoesPedidos view">
<h2><?php  echo __('Requisicoes Pedido'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($requisicoesPedido['RequisicoesPedido']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aluno'); ?></dt>
		<dd>
			<?php echo $this->Html->link($requisicoesPedido['Aluno']['id'], array('controller' => 'alunos', 'action' => 'view', $requisicoesPedido['Aluno']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero Pedido'); ?></dt>
		<dd>
			<?php echo h($requisicoesPedido['RequisicoesPedido']['numero_pedido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Pedido'); ?></dt>
		<dd>
			<?php echo h($requisicoesPedido['RequisicoesPedido']['data_pedido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entidade'); ?></dt>
		<dd>
			<?php echo $this->Html->link($requisicoesPedido['Entidade']['name'], array('controller' => 'entidades', 'action' => 'view', $requisicoesPedido['Entidade']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome Requerente'); ?></dt>
		<dd>
			<?php echo h($requisicoesPedido['RequisicoesPedido']['nome_requerente']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Curso'); ?></dt>
		<dd>
			<?php echo $this->Html->link($requisicoesPedido['Curso']['name'], array('controller' => 'cursos', 'action' => 'view', $requisicoesPedido['Curso']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Requisicoes Tipo Pedido'); ?></dt>
		<dd>
			<?php echo $this->Html->link($requisicoesPedido['RequisicoesTipoPedido']['name'], array('controller' => 'requisicoes_tipo_pedidos', 'action' => 'view', $requisicoesPedido['RequisicoesTipoPedido']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Requisicoes Estado Pedido'); ?></dt>
		<dd>
			<?php echo $this->Html->link($requisicoesPedido['RequisicoesEstadoPedido']['name'], array('controller' => 'requisicoes_estado_pedidos', 'action' => 'view', $requisicoesPedido['RequisicoesEstadoPedido']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Funcionario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($requisicoesPedido['Funcionario']['id'], array('controller' => 'funcionarios', 'action' => 'view', $requisicoesPedido['Funcionario']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estudante Bolseiro'); ?></dt>
		<dd>
			<?php echo h($requisicoesPedido['RequisicoesPedido']['estudante_bolseiro']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Requisicoes Pedido'), array('action' => 'edit', $requisicoesPedido['RequisicoesPedido']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Requisicoes Pedido'), array('action' => 'delete', $requisicoesPedido['RequisicoesPedido']['id']), null, __('Are you sure you want to delete # %s?', $requisicoesPedido['RequisicoesPedido']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Requisicoes Pedidos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requisicoes Pedido'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alunos'), array('controller' => 'alunos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aluno'), array('controller' => 'alunos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entidades'), array('controller' => 'entidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entidade'), array('controller' => 'entidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Requisicoes Tipo Pedidos'), array('controller' => 'requisicoes_tipo_pedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requisicoes Tipo Pedido'), array('controller' => 'requisicoes_tipo_pedidos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Requisicoes Estado Pedidos'), array('controller' => 'requisicoes_estado_pedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requisicoes Estado Pedido'), array('controller' => 'requisicoes_estado_pedidos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Funcionarios'), array('controller' => 'funcionarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcionario'), array('controller' => 'funcionarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Requisicoes Pedido Logs'), array('controller' => 'requisicoes_pedido_logs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requisicoes Pedido Log'), array('controller' => 'requisicoes_pedido_logs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Requisicoes Pedido Logs'); ?></h3>
	<?php if (!empty($requisicoesPedido['RequisicoesPedidoLog'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Requisicoes Pedido Id'); ?></th>
		<th><?php echo __('Estado Anterior'); ?></th>
		<th><?php echo __('Estado Actual'); ?></th>
		<th><?php echo __('Data Mudanca'); ?></th>
		<th><?php echo __('Funcionario Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($requisicoesPedido['RequisicoesPedidoLog'] as $requisicoesPedidoLog): ?>
		<tr>
			<td><?php echo $requisicoesPedidoLog['id']; ?></td>
			<td><?php echo $requisicoesPedidoLog['requisicoes_pedido_id']; ?></td>
			<td><?php echo $requisicoesPedidoLog['estado_anterior']; ?></td>
			<td><?php echo $requisicoesPedidoLog['estado_actual']; ?></td>
			<td><?php echo $requisicoesPedidoLog['data_mudanca']; ?></td>
			<td><?php echo $requisicoesPedidoLog['funcionario_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'requisicoes_pedido_logs', 'action' => 'view', $requisicoesPedidoLog['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'requisicoes_pedido_logs', 'action' => 'edit', $requisicoesPedidoLog['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'requisicoes_pedido_logs', 'action' => 'delete', $requisicoesPedidoLog['id']), null, __('Are you sure you want to delete # %s?', $requisicoesPedidoLog['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Requisicoes Pedido Log'), array('controller' => 'requisicoes_pedido_logs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
