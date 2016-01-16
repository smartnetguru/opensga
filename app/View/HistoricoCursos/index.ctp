<div class="historicoCursos index">
	<h2><?php echo __('Historico Cursos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('aluno_id'); ?></th>
			<th><?php echo $this->Paginator->sort('curso_id'); ?></th>
			<th><?php echo $this->Paginator->sort('ano_ingresso'); ?></th>
			<th><?php echo $this->Paginator->sort('ano_fim'); ?></th>
			<th><?php echo $this->Paginator->sort('ano_lectivo_ingresso'); ?></th>
			<th><?php echo $this->Paginator->sort('ano_lectivo_fim'); ?></th>
			<th><?php echo $this->Paginator->sort('data_conclusao'); ?></th>
			<th><?php echo $this->Paginator->sort('nota_final'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created_by'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_by'); ?></th>
			<th><?php echo $this->Paginator->sort('anexo_url'); ?></th>
			<th><?php echo $this->Paginator->sort('conclusao_confirmada'); ?></th>
			<th><?php echo $this->Paginator->sort('funcionario_confirmador'); ?></th>
			<th><?php echo $this->Paginator->sort('plano_estudo_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($historicoCursos as $historicoCurso): ?>
	<tr>
		<td><?php echo h($historicoCurso['HistoricoCurso']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($historicoCurso['Aluno']['id'], array('controller' => 'alunos', 'action' => 'view', $historicoCurso['Aluno']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($historicoCurso['Curso']['name'], array('controller' => 'cursos', 'action' => 'view', $historicoCurso['Curso']['id'])); ?>
		</td>
		<td><?php echo h($historicoCurso['HistoricoCurso']['ano_ingresso']); ?>&nbsp;</td>
		<td><?php echo h($historicoCurso['HistoricoCurso']['ano_fim']); ?>&nbsp;</td>
		<td><?php echo h($historicoCurso['HistoricoCurso']['ano_lectivo_ingresso']); ?>&nbsp;</td>
		<td><?php echo h($historicoCurso['HistoricoCurso']['ano_lectivo_fim']); ?>&nbsp;</td>
		<td><?php echo h($historicoCurso['HistoricoCurso']['data_conclusao']); ?>&nbsp;</td>
		<td><?php echo h($historicoCurso['HistoricoCurso']['nota_final']); ?>&nbsp;</td>
		<td><?php echo h($historicoCurso['HistoricoCurso']['created']); ?>&nbsp;</td>
		<td><?php echo h($historicoCurso['HistoricoCurso']['modified']); ?>&nbsp;</td>
		<td><?php echo h($historicoCurso['HistoricoCurso']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($historicoCurso['HistoricoCurso']['modified_by']); ?>&nbsp;</td>
		<td><?php echo h($historicoCurso['HistoricoCurso']['anexo_url']); ?>&nbsp;</td>
		<td><?php echo h($historicoCurso['HistoricoCurso']['conclusao_confirmada']); ?>&nbsp;</td>
		<td><?php echo h($historicoCurso['HistoricoCurso']['funcionario_confirmador']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($historicoCurso['PlanoEstudo']['name'], array('controller' => 'plano_estudos', 'action' => 'view', $historicoCurso['PlanoEstudo']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $historicoCurso['HistoricoCurso']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $historicoCurso['HistoricoCurso']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $historicoCurso['HistoricoCurso']['id']), array(), __('Are you sure you want to delete # %s?', $historicoCurso['HistoricoCurso']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Historico Curso'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Alunos'), array('controller' => 'alunos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aluno'), array('controller' => 'alunos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Plano Estudos'), array('controller' => 'plano_estudos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plano Estudo'), array('controller' => 'plano_estudos', 'action' => 'add')); ?> </li>
	</ul>
</div>
