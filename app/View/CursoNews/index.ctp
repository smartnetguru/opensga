<div class="cursoNews index">
	<h2><?php echo __('Curso News'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('grau_academico_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_curso_id'); ?></th>
			<th><?php echo $this->Paginator->sort('codigo'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('pagamento_exclusivo'); ?></th>
			<th><?php echo $this->Paginator->sort('unidade_organica_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created_by'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_by'); ?></th>
			<th><?php echo $this->Paginator->sort('codigo_admissao'); ?></th>
			<th><?php echo $this->Paginator->sort('estado_objecto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('ano_criacao'); ?></th>
			<th><?php echo $this->Paginator->sort('duracao'); ?></th>
			<th><?php echo $this->Paginator->sort('user_responsavel_curso'); ?></th>
			<th><?php echo $this->Paginator->sort('curso_responsavel_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($cursoNews as $cursoNews): ?>
	<tr>
		<td><?php echo h($cursoNews['CursoNews']['id']); ?>&nbsp;</td>
		<td><?php echo h($cursoNews['CursoNews']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cursoNews['GrauAcademico']['name'], array('controller' => 'grau_academicos', 'action' => 'view', $cursoNews['GrauAcademico']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($cursoNews['TipoCurso']['name'], array('controller' => 'tipo_cursos', 'action' => 'view', $cursoNews['TipoCurso']['id'])); ?>
		</td>
		<td><?php echo h($cursoNews['CursoNews']['codigo']); ?>&nbsp;</td>
		<td><?php echo h($cursoNews['CursoNews']['created']); ?>&nbsp;</td>
		<td><?php echo h($cursoNews['CursoNews']['modified']); ?>&nbsp;</td>
		<td><?php echo h($cursoNews['CursoNews']['pagamento_exclusivo']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cursoNews['UnidadeOrganica']['name'], array('controller' => 'unidade_organicas', 'action' => 'view', $cursoNews['UnidadeOrganica']['id'])); ?>
		</td>
		<td><?php echo h($cursoNews['CursoNews']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($cursoNews['CursoNews']['modified_by']); ?>&nbsp;</td>
		<td><?php echo h($cursoNews['CursoNews']['codigo_admissao']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cursoNews['EstadoObjecto']['name'], array('controller' => 'estado_objectos', 'action' => 'view', $cursoNews['EstadoObjecto']['id'])); ?>
		</td>
		<td><?php echo h($cursoNews['CursoNews']['ano_criacao']); ?>&nbsp;</td>
		<td><?php echo h($cursoNews['CursoNews']['duracao']); ?>&nbsp;</td>
		<td><?php echo h($cursoNews['CursoNews']['user_responsavel_curso']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cursoNews['CursoResponsavel']['id'], array('controller' => 'curso_responsavels', 'action' => 'view', $cursoNews['CursoResponsavel']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cursoNews['CursoNews']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cursoNews['CursoNews']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cursoNews['CursoNews']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $cursoNews['CursoNews']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Curso News'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Grau Academicos'), array('controller' => 'grau_academicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grau Academico'), array('controller' => 'grau_academicos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Cursos'), array('controller' => 'tipo_cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Curso'), array('controller' => 'tipo_cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Unidade Organicas'), array('controller' => 'unidade_organicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unidade Organica'), array('controller' => 'unidade_organicas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estado Objectos'), array('controller' => 'estado_objectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Objecto'), array('controller' => 'estado_objectos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Curso Responsavels'), array('controller' => 'curso_responsavels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso Responsavel'), array('controller' => 'curso_responsavels', 'action' => 'add')); ?> </li>
	</ul>
</div>
