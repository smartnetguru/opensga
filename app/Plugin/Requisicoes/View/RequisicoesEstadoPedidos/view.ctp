<div class="requisicoesEstadoPedidos view">
<h2><?php  echo __('Requisicoes Estado Pedido'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($requisicoesEstadoPedido['RequisicoesEstadoPedido']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($requisicoesEstadoPedido['RequisicoesEstadoPedido']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Requisicoes Estado Pedido'), array('action' => 'edit', $requisicoesEstadoPedido['RequisicoesEstadoPedido']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Requisicoes Estado Pedido'), array('action' => 'delete', $requisicoesEstadoPedido['RequisicoesEstadoPedido']['id']), null, __('Are you sure you want to delete # %s?', $requisicoesEstadoPedido['RequisicoesEstadoPedido']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Requisicoes Estado Pedidos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requisicoes Estado Pedido'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Requisicoes Pedidos'), array('controller' => 'requisicoes_pedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requisicoes Pedido'), array('controller' => 'requisicoes_pedidos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Requisicoes Pedidos'); ?></h3>
	<?php if (!empty($requisicoesEstadoPedido['RequisicoesPedido'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Aluno Id'); ?></th>
		<th><?php echo __('Numero Pedido'); ?></th>
		<th><?php echo __('Data Pedido'); ?></th>
		<th><?php echo __('Entidade Id'); ?></th>
		<th><?php echo __('Nome Requerente'); ?></th>
		<th><?php echo __('Curso Id'); ?></th>
		<th><?php echo __('Requisicoes Tipo Pedido Id'); ?></th>
		<th><?php echo __('Requisicoes Estado Pedido Id'); ?></th>
		<th><?php echo __('Funcionario Id'); ?></th>
		<th><?php echo __('Estudante Bolseiro'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($requisicoesEstadoPedido['RequisicoesPedido'] as $requisicoesPedido): ?>
		<tr>
			<td><?php echo $requisicoesPedido['id']; ?></td>
			<td><?php echo $requisicoesPedido['aluno_id']; ?></td>
			<td><?php echo $requisicoesPedido['numero_pedido']; ?></td>
			<td><?php echo $requisicoesPedido['data_pedido']; ?></td>
			<td><?php echo $requisicoesPedido['entidade_id']; ?></td>
			<td><?php echo $requisicoesPedido['nome_requerente']; ?></td>
			<td><?php echo $requisicoesPedido['curso_id']; ?></td>
			<td><?php echo $requisicoesPedido['requisicoes_tipo_pedido_id']; ?></td>
			<td><?php echo $requisicoesPedido['requisicoes_estado_pedido_id']; ?></td>
			<td><?php echo $requisicoesPedido['funcionario_id']; ?></td>
			<td><?php echo $requisicoesPedido['estudante_bolseiro']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'requisicoes_pedidos', 'action' => 'view', $requisicoesPedido['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'requisicoes_pedidos', 'action' => 'edit', $requisicoesPedido['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'requisicoes_pedidos', 'action' => 'delete', $requisicoesPedido['id']), null, __('Are you sure you want to delete # %s?', $requisicoesPedido['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Requisicoes Pedido'), array('controller' => 'requisicoes_pedidos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
