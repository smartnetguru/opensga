<div class="regimeLectivos view">
<h2><?php echo __('Regime Lectivo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($regimeLectivo['RegimeLectivo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($regimeLectivo['RegimeLectivo']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Regime Lectivo'), array('action' => 'edit', $regimeLectivo['RegimeLectivo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Regime Lectivo'), array('action' => 'delete', $regimeLectivo['RegimeLectivo']['id']), array(), __('Are you sure you want to delete # %s?', $regimeLectivo['RegimeLectivo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Regime Lectivos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Regime Lectivo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Matriculas'), array('controller' => 'matriculas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Matricula'), array('controller' => 'matriculas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Matriculas'); ?></h3>
	<?php if (!empty($regimeLectivo['Matricula'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Codigo'); ?></th>
		<th><?php echo __('Aluno Id'); ?></th>
		<th><?php echo __('Curso Id'); ?></th>
		<th><?php echo __('Plano Estudo Id'); ?></th>
		<th><?php echo __('Data'); ?></th>
		<th><?php echo __('Estado Matricula Id'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Ano Lectivo Id'); ?></th>
		<th><?php echo __('Turno Id'); ?></th>
		<th><?php echo __('Nivel'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('Tipo Matricula Id'); ?></th>
		<th><?php echo __('Regime Lectivo Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($regimeLectivo['Matricula'] as $matricula): ?>
		<tr>
			<td><?php echo $matricula['id']; ?></td>
			<td><?php echo $matricula['codigo']; ?></td>
			<td><?php echo $matricula['aluno_id']; ?></td>
			<td><?php echo $matricula['curso_id']; ?></td>
			<td><?php echo $matricula['plano_estudo_id']; ?></td>
			<td><?php echo $matricula['data']; ?></td>
			<td><?php echo $matricula['estado_matricula_id']; ?></td>
			<td><?php echo $matricula['modified']; ?></td>
			<td><?php echo $matricula['created']; ?></td>
			<td><?php echo $matricula['user_id']; ?></td>
			<td><?php echo $matricula['ano_lectivo_id']; ?></td>
			<td><?php echo $matricula['turno_id']; ?></td>
			<td><?php echo $matricula['nivel']; ?></td>
			<td><?php echo $matricula['created_by']; ?></td>
			<td><?php echo $matricula['modified_by']; ?></td>
			<td><?php echo $matricula['tipo_matricula_id']; ?></td>
			<td><?php echo $matricula['regime_lectivo_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'matriculas', 'action' => 'view', $matricula['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'matriculas', 'action' => 'edit', $matricula['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'matriculas', 'action' => 'delete', $matricula['id']), array(), __('Are you sure you want to delete # %s?', $matricula['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Matricula'), array('controller' => 'matriculas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
