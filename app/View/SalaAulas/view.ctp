<div class="salaAulas view">
<h2><?php  echo __('Sala Aula'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($salaAula['SalaAula']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($salaAula['SalaAula']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Capacidade Maxima'); ?></dt>
		<dd>
			<?php echo h($salaAula['SalaAula']['capacidade_maxima']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sala Aula'), array('action' => 'edit', $salaAula['SalaAula']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sala Aula'), array('action' => 'delete', $salaAula['SalaAula']['id']), null, __('Are you sure you want to delete # %s?', $salaAula['SalaAula']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sala Aulas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sala Aula'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Turmas'), array('controller' => 'turmas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Turma'), array('controller' => 'turmas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Turmas'); ?></h3>
	<?php if (!empty($salaAula['Turma'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('AnoLectivo Id'); ?></th>
		<th><?php echo __('Curso Id'); ?></th>
		<th><?php echo __('PlanoEstudo Id'); ?></th>
		<th><?php echo __('Anosemestrecurr'); ?></th>
		<th><?php echo __('Turno Id'); ?></th>
		<th><?php echo __('Disciplina Id'); ?></th>
		<th><?php echo __('Docente Id'); ?></th>
		<th><?php echo __('Assistente Id'); ?></th>
		<th><?php echo __('Nummaximo'); ?></th>
		<th><?php echo __('Numaprovados'); ?></th>
		<th><?php echo __('Mediaturma'); ?></th>
		<th><?php echo __('EstadoTurma Id'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Numreprovados'); ?></th>
		<th><?php echo __('Escola Id'); ?></th>
		<th><?php echo __('Codigo'); ?></th>
		<th><?php echo __('Anocurricular'); ?></th>
		<th><?php echo __('Semestrecurricular'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('SemestreLectivo Id'); ?></th>
		<th><?php echo __('Sala Aula Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($salaAula['Turma'] as $turma): ?>
		<tr>
			<td><?php echo $turma['id']; ?></td>
			<td><?php echo $turma['ano_lectivo_id']; ?></td>
			<td><?php echo $turma['curso_id']; ?></td>
			<td><?php echo $turma['plano_estudo_id']; ?></td>
			<td><?php echo $turma['anosemestrecurr']; ?></td>
			<td><?php echo $turma['turno_id']; ?></td>
			<td><?php echo $turma['disciplina_id']; ?></td>
			<td><?php echo $turma['docente_id']; ?></td>
			<td><?php echo $turma['assistente_id']; ?></td>
			<td><?php echo $turma['nummaximo']; ?></td>
			<td><?php echo $turma['numaprovados']; ?></td>
			<td><?php echo $turma['mediaturma']; ?></td>
			<td><?php echo $turma['estado_turma_id']; ?></td>
			<td><?php echo $turma['modified']; ?></td>
			<td><?php echo $turma['created']; ?></td>
			<td><?php echo $turma['numreprovados']; ?></td>
			<td><?php echo $turma['escola_id']; ?></td>
			<td><?php echo $turma['codigo']; ?></td>
			<td><?php echo $turma['ano_curricular']; ?></td>
			<td><?php echo $turma['semestre_curricular']; ?></td>
			<td><?php echo $turma['name']; ?></td>
			<td><?php echo $turma['semestre_lectivo_id']; ?></td>
			<td><?php echo $turma['sala_aula_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'turmas', 'action' => 'view', $turma['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'turmas', 'action' => 'edit', $turma['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'turmas', 'action' => 'delete', $turma['id']), null, __('Are you sure you want to delete # %s?', $turma['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Turma'), array('controller' => 'turmas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
