<div class="funcaoProfissionalRoles index">
	<h2><?php echo __('Funcao Profissional Roles'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('funcao_profissional_id'); ?></th>
			<th><?php echo $this->Paginator->sort('role_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created_by'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_by'); ?></th>
			<th><?php echo $this->Paginator->sort('estado_objecto_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($funcaoProfissionalRoles as $funcaoProfissionalRole): ?>
	<tr>
		<td><?php echo h($funcaoProfissionalRole['FuncaoProfissionalRole']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($funcaoProfissionalRole['FuncaoProfissional']['name'], array('controller' => 'funcao_profissionals', 'action' => 'view', $funcaoProfissionalRole['FuncaoProfissional']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($funcaoProfissionalRole['Role']['name'], array('controller' => 'roles', 'action' => 'view', $funcaoProfissionalRole['Role']['id'])); ?>
		</td>
		<td><?php echo h($funcaoProfissionalRole['FuncaoProfissionalRole']['created']); ?>&nbsp;</td>
		<td><?php echo h($funcaoProfissionalRole['FuncaoProfissionalRole']['modified']); ?>&nbsp;</td>
		<td><?php echo h($funcaoProfissionalRole['FuncaoProfissionalRole']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($funcaoProfissionalRole['FuncaoProfissionalRole']['modified_by']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($funcaoProfissionalRole['EstadoObjecto']['name'], array('controller' => 'estado_objectos', 'action' => 'view', $funcaoProfissionalRole['EstadoObjecto']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $funcaoProfissionalRole['FuncaoProfissionalRole']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $funcaoProfissionalRole['FuncaoProfissionalRole']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $funcaoProfissionalRole['FuncaoProfissionalRole']['id']), null, __('Are you sure you want to delete # %s?', $funcaoProfissionalRole['FuncaoProfissionalRole']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Funcao Profissional Role'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Funcao Profissionals'), array('controller' => 'funcao_profissionals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcao Profissional'), array('controller' => 'funcao_profissionals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estado Objectos'), array('controller' => 'estado_objectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Objecto'), array('controller' => 'estado_objectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
