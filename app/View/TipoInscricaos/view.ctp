<div class="tipoInscricaos view">
<h2><?php echo __('Tipo Inscricao'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tipoInscricao['TipoInscricao']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($tipoInscricao['TipoInscricao']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tipo Inscricao'), array('action' => 'edit', $tipoInscricao['TipoInscricao']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tipo Inscricao'), array('action' => 'delete', $tipoInscricao['TipoInscricao']['id']), array(), __('Are you sure you want to delete # %s?', $tipoInscricao['TipoInscricao']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Inscricaos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Inscricao'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscricaos'), array('controller' => 'inscricaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscricao'), array('controller' => 'inscricaos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Inscricaos'); ?></h3>
	<?php if (!empty($tipoInscricao['Inscricao'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Codigo'); ?></th>
		<th><?php echo __('Aluno Id'); ?></th>
		<th><?php echo __('Turma Id'); ?></th>
		<th><?php echo __('Estado Inscricao Id'); ?></th>
		<th><?php echo __('Nota Frequencia'); ?></th>
		<th><?php echo __('Nota Final'); ?></th>
		<th><?php echo __('Epocaavaliacao Id'); ?></th>
		<th><?php echo __('Data'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Matricula Id'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('Pagamento Id'); ?></th>
		<th><?php echo __('Tipo Inscricao Id'); ?></th>
		<th><?php echo __('Nota Exame Normal'); ?></th>
		<th><?php echo __('Nota Exame Recorrencia'); ?></th>
		<th><?php echo __('Estado Inscricao'); ?></th>
		<th><?php echo __('Turma Inscricao Id'); ?></th>
		<th><?php echo __('Turma Frequencia Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tipoInscricao['Inscricao'] as $inscricao): ?>
		<tr>
			<td><?php echo $inscricao['id']; ?></td>
			<td><?php echo $inscricao['codigo']; ?></td>
			<td><?php echo $inscricao['aluno_id']; ?></td>
			<td><?php echo $inscricao['turma_id']; ?></td>
			<td><?php echo $inscricao['estado_inscricao_id']; ?></td>
			<td><?php echo $inscricao['nota_frequencia']; ?></td>
			<td><?php echo $inscricao['nota_final']; ?></td>
			<td><?php echo $inscricao['epocaavaliacao_id']; ?></td>
			<td><?php echo $inscricao['data']; ?></td>
			<td><?php echo $inscricao['created']; ?></td>
			<td><?php echo $inscricao['modified']; ?></td>
			<td><?php echo $inscricao['matricula_id']; ?></td>
			<td><?php echo $inscricao['created_by']; ?></td>
			<td><?php echo $inscricao['modified_by']; ?></td>
			<td><?php echo $inscricao['pagamento_id']; ?></td>
			<td><?php echo $inscricao['tipo_inscricao_id']; ?></td>
			<td><?php echo $inscricao['nota_exame_normal']; ?></td>
			<td><?php echo $inscricao['nota_exame_recorrencia']; ?></td>
			<td><?php echo $inscricao['estado_inscricao']; ?></td>
			<td><?php echo $inscricao['turma_inscricao_id']; ?></td>
			<td><?php echo $inscricao['turma_frequencia_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'inscricaos', 'action' => 'view', $inscricao['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'inscricaos', 'action' => 'edit', $inscricao['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'inscricaos', 'action' => 'delete', $inscricao['id']), array(), __('Are you sure you want to delete # %s?', $inscricao['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Inscricao'), array('controller' => 'inscricaos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
