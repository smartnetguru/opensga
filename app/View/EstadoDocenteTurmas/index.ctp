<div class="estadoDocenteTurmas index">
	<h2><?php echo __('Estado Docente Turmas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($estadoDocenteTurmas as $estadoDocenteTurma): ?>
	<tr>
		<td><?php echo h($estadoDocenteTurma['EstadoDocenteTurma']['id']); ?>&nbsp;</td>
		<td><?php echo h($estadoDocenteTurma['EstadoDocenteTurma']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $estadoDocenteTurma['EstadoDocenteTurma']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $estadoDocenteTurma['EstadoDocenteTurma']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $estadoDocenteTurma['EstadoDocenteTurma']['id']), array(), __('Are you sure you want to delete # %s?', $estadoDocenteTurma['EstadoDocenteTurma']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Estado Docente Turma'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Docente Turmas'), array('controller' => 'docente_turmas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docente Turma'), array('controller' => 'docente_turmas', 'action' => 'add')); ?> </li>
	</ul>
</div>
