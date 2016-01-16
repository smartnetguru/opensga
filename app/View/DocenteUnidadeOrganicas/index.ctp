<div class="docenteUnidadeOrganicas index">
	<h2><?php echo __('Docente Unidade Organicas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('docente_id'); ?></th>
			<th><?php echo $this->Paginator->sort('unidade_organica_id'); ?></th>
			<th><?php echo $this->Paginator->sort('estado_objecto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('data_inicio'); ?></th>
			<th><?php echo $this->Paginator->sort('data_fim'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('create_by'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($docenteUnidadeOrganicas as $docenteUnidadeOrganica): ?>
	<tr>
		<td><?php echo h($docenteUnidadeOrganica['DocenteUnidadeOrganica']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($docenteUnidadeOrganica['Docente']['id'], array('controller' => 'docentes', 'action' => 'view', $docenteUnidadeOrganica['Docente']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($docenteUnidadeOrganica['UnidadeOrganica']['name'], array('controller' => 'unidade_organicas', 'action' => 'view', $docenteUnidadeOrganica['UnidadeOrganica']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($docenteUnidadeOrganica['EstadoObjecto']['name'], array('controller' => 'estado_objectos', 'action' => 'view', $docenteUnidadeOrganica['EstadoObjecto']['id'])); ?>
		</td>
		<td><?php echo h($docenteUnidadeOrganica['DocenteUnidadeOrganica']['data_inicio']); ?>&nbsp;</td>
		<td><?php echo h($docenteUnidadeOrganica['DocenteUnidadeOrganica']['data_fim']); ?>&nbsp;</td>
		<td><?php echo h($docenteUnidadeOrganica['DocenteUnidadeOrganica']['created']); ?>&nbsp;</td>
		<td><?php echo h($docenteUnidadeOrganica['DocenteUnidadeOrganica']['modified']); ?>&nbsp;</td>
		<td><?php echo h($docenteUnidadeOrganica['DocenteUnidadeOrganica']['create_by']); ?>&nbsp;</td>
		<td><?php echo h($docenteUnidadeOrganica['DocenteUnidadeOrganica']['modified_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $docenteUnidadeOrganica['DocenteUnidadeOrganica']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $docenteUnidadeOrganica['DocenteUnidadeOrganica']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $docenteUnidadeOrganica['DocenteUnidadeOrganica']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $docenteUnidadeOrganica['DocenteUnidadeOrganica']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Docente Unidade Organica'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Docentes'), array('controller' => 'docentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docente'), array('controller' => 'docentes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Unidade Organicas'), array('controller' => 'unidade_organicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unidade Organica'), array('controller' => 'unidade_organicas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estado Objectos'), array('controller' => 'estado_objectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Objecto'), array('controller' => 'estado_objectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
