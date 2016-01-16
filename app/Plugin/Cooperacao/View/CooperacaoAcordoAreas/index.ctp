<div class="cooperacaoAcordoAreas index">
	<h2><?php echo __('Cooperacao Acordo Areas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('cooperacao_acordo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cooperacao_area_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created_by'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cooperacaoAcordoAreas as $cooperacaoAcordoArea): ?>
	<tr>
		<td><?php echo h($cooperacaoAcordoArea['CooperacaoAcordoArea']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cooperacaoAcordoArea['CooperacaoAcordo']['name'], array('controller' => 'cooperacao_acordos', 'action' => 'view', $cooperacaoAcordoArea['CooperacaoAcordo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($cooperacaoAcordoArea['CooperacaoArea']['name'], array('controller' => 'cooperacao_areas', 'action' => 'view', $cooperacaoAcordoArea['CooperacaoArea']['id'])); ?>
		</td>
		<td><?php echo h($cooperacaoAcordoArea['CooperacaoAcordoArea']['created']); ?>&nbsp;</td>
		<td><?php echo h($cooperacaoAcordoArea['CooperacaoAcordoArea']['modified']); ?>&nbsp;</td>
		<td><?php echo h($cooperacaoAcordoArea['CooperacaoAcordoArea']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($cooperacaoAcordoArea['CooperacaoAcordoArea']['modified_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cooperacaoAcordoArea['CooperacaoAcordoArea']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cooperacaoAcordoArea['CooperacaoAcordoArea']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cooperacaoAcordoArea['CooperacaoAcordoArea']['id']), null, __('Are you sure you want to delete # %s?', $cooperacaoAcordoArea['CooperacaoAcordoArea']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Cooperacao Acordo Area'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Cooperacao Acordos'), array('controller' => 'cooperacao_acordos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cooperacao Acordo'), array('controller' => 'cooperacao_acordos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cooperacao Areas'), array('controller' => 'cooperacao_areas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cooperacao Area'), array('controller' => 'cooperacao_areas', 'action' => 'add')); ?> </li>
	</ul>
</div>
