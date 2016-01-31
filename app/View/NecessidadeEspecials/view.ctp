<div class="necessidadeEspecials view">
<h2><?php echo __('Necessidade Especial'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($necessidadeEspecial['NecessidadeEspecial']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($necessidadeEspecial['NecessidadeEspecial']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Necessidade Especial'), array('action' => 'edit', $necessidadeEspecial['NecessidadeEspecial']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Necessidade Especial'), array('action' => 'delete', $necessidadeEspecial['NecessidadeEspecial']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $necessidadeEspecial['NecessidadeEspecial']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Necessidade Especials'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Necessidade Especial'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entidade Necessidades'), array('controller' => 'entidade_necessidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entidade Necessidade'), array('controller' => 'entidade_necessidades', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Entidade Necessidades'); ?></h3>
	<?php if (!empty($necessidadeEspecial['EntidadeNecessidade'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Entidadade Id'); ?></th>
		<th><?php echo __('Necessidade Especial Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('Estado Objecto Id'); ?></th>
		<th><?php echo __('Detalhes'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($necessidadeEspecial['EntidadeNecessidade'] as $entidadeNecessidade): ?>
		<tr>
			<td><?php echo $entidadeNecessidade['id']; ?></td>
			<td><?php echo $entidadeNecessidade['entidadade_id']; ?></td>
			<td><?php echo $entidadeNecessidade['necessidade_especial_id']; ?></td>
			<td><?php echo $entidadeNecessidade['created']; ?></td>
			<td><?php echo $entidadeNecessidade['modified']; ?></td>
			<td><?php echo $entidadeNecessidade['created_by']; ?></td>
			<td><?php echo $entidadeNecessidade['modified_by']; ?></td>
			<td><?php echo $entidadeNecessidade['estado_objecto_id']; ?></td>
			<td><?php echo $entidadeNecessidade['detalhes']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'entidade_necessidades', 'action' => 'view', $entidadeNecessidade['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'entidade_necessidades', 'action' => 'edit', $entidadeNecessidade['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'entidade_necessidades', 'action' => 'delete', $entidadeNecessidade['id']), array('confirm' => __('Are you sure you want to delete # %s?', $entidadeNecessidade['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Entidade Necessidade'), array('controller' => 'entidade_necessidades', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
