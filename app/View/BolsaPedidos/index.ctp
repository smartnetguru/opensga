<div class="bolsaPedidos index">
	<h2><?php echo __('Bolsa Pedidos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('aluno_id'); ?></th>
			<th><?php echo $this->Paginator->sort('ano_lectivo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('bolsa_bolsa_id'); ?></th>
			<th><?php echo $this->Paginator->sort('estado_objecto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('bolsa_tipo_bolsa_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('data_pedido'); ?></th>
			<th><?php echo $this->Paginator->sort('nivel_estudante'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_bolsa_actual'); ?></th>
			<th><?php echo $this->Paginator->sort('observacoes'); ?></th>
			<th><?php echo $this->Paginator->sort('agregado_familiar'); ?></th>
			<th><?php echo $this->Paginator->sort('irmaos_estudantes'); ?></th>
			<th><?php echo $this->Paginator->sort('irmaos_trabalhadores'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($bolsaPedidos as $bolsaPedido): ?>
	<tr>
		<td><?php echo h($bolsaPedido['BolsaPedido']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($bolsaPedido['Aluno']['id'], array('controller' => 'alunos', 'action' => 'view', $bolsaPedido['Aluno']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($bolsaPedido['AnoLectivo']['codigo'], array('controller' => 'ano_lectivos', 'action' => 'view', $bolsaPedido['AnoLectivo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($bolsaPedido['BolsaBolsa']['id'], array('controller' => 'bolsa_bolsas', 'action' => 'view', $bolsaPedido['BolsaBolsa']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($bolsaPedido['EstadoObjecto']['name'], array('controller' => 'estado_objectos', 'action' => 'view', $bolsaPedido['EstadoObjecto']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($bolsaPedido['BolsaTipoBolsa']['name'], array('controller' => 'bolsa_tipo_bolsas', 'action' => 'view', $bolsaPedido['BolsaTipoBolsa']['id'])); ?>
		</td>
		<td><?php echo h($bolsaPedido['BolsaPedido']['created']); ?>&nbsp;</td>
		<td><?php echo h($bolsaPedido['BolsaPedido']['modified']); ?>&nbsp;</td>
		<td><?php echo h($bolsaPedido['BolsaPedido']['data_pedido']); ?>&nbsp;</td>
		<td><?php echo h($bolsaPedido['BolsaPedido']['nivel_estudante']); ?>&nbsp;</td>
		<td><?php echo h($bolsaPedido['BolsaPedido']['tipo_bolsa_actual']); ?>&nbsp;</td>
		<td><?php echo h($bolsaPedido['BolsaPedido']['observacoes']); ?>&nbsp;</td>
		<td><?php echo h($bolsaPedido['BolsaPedido']['agregado_familiar']); ?>&nbsp;</td>
		<td><?php echo h($bolsaPedido['BolsaPedido']['irmaos_estudantes']); ?>&nbsp;</td>
		<td><?php echo h($bolsaPedido['BolsaPedido']['irmaos_trabalhadores']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $bolsaPedido['BolsaPedido']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $bolsaPedido['BolsaPedido']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $bolsaPedido['BolsaPedido']['id']), array(), __('Are you sure you want to delete # %s?', $bolsaPedido['BolsaPedido']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
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
		<li><?php echo $this->Html->link(__('New Bolsa Pedido'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Alunos'), array('controller' => 'alunos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aluno'), array('controller' => 'alunos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ano Lectivos'), array('controller' => 'ano_lectivos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ano Lectivo'), array('controller' => 'ano_lectivos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bolsa Bolsas'), array('controller' => 'bolsa_bolsas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bolsa Bolsa'), array('controller' => 'bolsa_bolsas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estado Objectos'), array('controller' => 'estado_objectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Objecto'), array('controller' => 'estado_objectos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bolsa Tipo Bolsas'), array('controller' => 'bolsa_tipo_bolsas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bolsa Tipo Bolsa'), array('controller' => 'bolsa_tipo_bolsas', 'action' => 'add')); ?> </li>
	</ul>
</div>
