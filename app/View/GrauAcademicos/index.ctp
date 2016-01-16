<div class="grauAcademicos index">
	<h2><?php echo __('Grau Academicos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($grauAcademicos as $grauAcademico): ?>
	<tr>
		<td><?php echo h($grauAcademico['GrauAcademico']['id']); ?>&nbsp;</td>
		<td><?php echo h($grauAcademico['GrauAcademico']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $grauAcademico['GrauAcademico']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $grauAcademico['GrauAcademico']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $grauAcademico['GrauAcademico']['id']), array(), __('Are you sure you want to delete # %s?', $grauAcademico['GrauAcademico']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Grau Academico'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Candidato Alumnis'), array('controller' => 'candidato_alumnis', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidato Alumni'), array('controller' => 'candidato_alumnis', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Funcionarios'), array('controller' => 'funcionarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcionario'), array('controller' => 'funcionarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
