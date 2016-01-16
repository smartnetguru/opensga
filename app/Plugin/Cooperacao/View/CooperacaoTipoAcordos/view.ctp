<div class="cooperacaoTipoAcordos view">
<h2><?php echo __('Cooperacao Tipo Acordo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cooperacaoTipoAcordo['CooperacaoTipoAcordo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($cooperacaoTipoAcordo['CooperacaoTipoAcordo']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cooperacao Tipo Acordo'), array('action' => 'edit', $cooperacaoTipoAcordo['CooperacaoTipoAcordo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cooperacao Tipo Acordo'), array('action' => 'delete', $cooperacaoTipoAcordo['CooperacaoTipoAcordo']['id']), null, __('Are you sure you want to delete # %s?', $cooperacaoTipoAcordo['CooperacaoTipoAcordo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cooperacao Tipo Acordos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cooperacao Tipo Acordo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cooperacao Acordos'), array('controller' => 'cooperacao_acordos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cooperacao Acordo'), array('controller' => 'cooperacao_acordos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Cooperacao Acordos'); ?></h3>
	<?php if (!empty($cooperacaoTipoAcordo['CooperacaoAcordo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Instituicao Id'); ?></th>
		<th><?php echo __('Data Assinatura'); ?></th>
		<th><?php echo __('Data Validade'); ?></th>
		<th><?php echo __('Prazo Validade'); ?></th>
		<th><?php echo __('Cooperacao Tipo Acordo Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cooperacaoTipoAcordo['CooperacaoAcordo'] as $cooperacaoAcordo): ?>
		<tr>
			<td><?php echo $cooperacaoAcordo['id']; ?></td>
			<td><?php echo $cooperacaoAcordo['name']; ?></td>
			<td><?php echo $cooperacaoAcordo['instituicao_id']; ?></td>
			<td><?php echo $cooperacaoAcordo['data_assinatura']; ?></td>
			<td><?php echo $cooperacaoAcordo['data_validade']; ?></td>
			<td><?php echo $cooperacaoAcordo['prazo_validade']; ?></td>
			<td><?php echo $cooperacaoAcordo['cooperacao_tipo_acordo_id']; ?></td>
			<td><?php echo $cooperacaoAcordo['created']; ?></td>
			<td><?php echo $cooperacaoAcordo['modified']; ?></td>
			<td><?php echo $cooperacaoAcordo['created_by']; ?></td>
			<td><?php echo $cooperacaoAcordo['modified_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cooperacao_acordos', 'action' => 'view', $cooperacaoAcordo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cooperacao_acordos', 'action' => 'edit', $cooperacaoAcordo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cooperacao_acordos', 'action' => 'delete', $cooperacaoAcordo['id']), null, __('Are you sure you want to delete # %s?', $cooperacaoAcordo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cooperacao Acordo'), array('controller' => 'cooperacao_acordos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
