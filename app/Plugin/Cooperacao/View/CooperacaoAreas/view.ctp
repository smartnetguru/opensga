<div class="cooperacaoAreas view">
<h2><?php echo __('Cooperacao Area'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cooperacaoArea['CooperacaoArea']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($cooperacaoArea['CooperacaoArea']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($cooperacaoArea['CooperacaoArea']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($cooperacaoArea['CooperacaoArea']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($cooperacaoArea['CooperacaoArea']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($cooperacaoArea['CooperacaoArea']['modified_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cooperacao Area'), array('action' => 'edit', $cooperacaoArea['CooperacaoArea']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cooperacao Area'), array('action' => 'delete', $cooperacaoArea['CooperacaoArea']['id']), null, __('Are you sure you want to delete # %s?', $cooperacaoArea['CooperacaoArea']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cooperacao Areas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cooperacao Area'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cooperacao Acordo Areas'), array('controller' => 'cooperacao_acordo_areas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cooperacao Acordo Area'), array('controller' => 'cooperacao_acordo_areas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Cooperacao Acordo Areas'); ?></h3>
	<?php if (!empty($cooperacaoArea['CooperacaoAcordoArea'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cooperacao Acordo Id'); ?></th>
		<th><?php echo __('Cooperacao Area Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cooperacaoArea['CooperacaoAcordoArea'] as $cooperacaoAcordoArea): ?>
		<tr>
			<td><?php echo $cooperacaoAcordoArea['id']; ?></td>
			<td><?php echo $cooperacaoAcordoArea['cooperacao_acordo_id']; ?></td>
			<td><?php echo $cooperacaoAcordoArea['cooperacao_area_id']; ?></td>
			<td><?php echo $cooperacaoAcordoArea['created']; ?></td>
			<td><?php echo $cooperacaoAcordoArea['modified']; ?></td>
			<td><?php echo $cooperacaoAcordoArea['created_by']; ?></td>
			<td><?php echo $cooperacaoAcordoArea['modified_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cooperacao_acordo_areas', 'action' => 'view', $cooperacaoAcordoArea['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cooperacao_acordo_areas', 'action' => 'edit', $cooperacaoAcordoArea['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cooperacao_acordo_areas', 'action' => 'delete', $cooperacaoAcordoArea['id']), null, __('Are you sure you want to delete # %s?', $cooperacaoAcordoArea['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cooperacao Acordo Area'), array('controller' => 'cooperacao_acordo_areas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
