<div class="cooperacaoAcordoObservacaos index">
	<h2><?php echo __('Cooperacao Acordo Observacaos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('cooperacao_acordo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created_by'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cooperacaoAcordoObservacaos as $cooperacaoAcordoObservacao): ?>
	<tr>
		<td><?php echo h($cooperacaoAcordoObservacao['CooperacaoAcordoObservacao']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cooperacaoAcordoObservacao['CooperacaoAcordo']['name'], array('controller' => 'cooperacao_acordos', 'action' => 'view', $cooperacaoAcordoObservacao['CooperacaoAcordo']['id'])); ?>
		</td>
		<td><?php echo h($cooperacaoAcordoObservacao['CooperacaoAcordoObservacao']['name']); ?>&nbsp;</td>
		<td><?php echo h($cooperacaoAcordoObservacao['CooperacaoAcordoObservacao']['created']); ?>&nbsp;</td>
		<td><?php echo h($cooperacaoAcordoObservacao['CooperacaoAcordoObservacao']['modified']); ?>&nbsp;</td>
		<td><?php echo h($cooperacaoAcordoObservacao['CooperacaoAcordoObservacao']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($cooperacaoAcordoObservacao['CooperacaoAcordoObservacao']['modified_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cooperacaoAcordoObservacao['CooperacaoAcordoObservacao']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cooperacaoAcordoObservacao['CooperacaoAcordoObservacao']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cooperacaoAcordoObservacao['CooperacaoAcordoObservacao']['id']), null, __('Are you sure you want to delete # %s?', $cooperacaoAcordoObservacao['CooperacaoAcordoObservacao']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Cooperacao Acordo Observacao'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Cooperacao Acordos'), array('controller' => 'cooperacao_acordos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cooperacao Acordo'), array('controller' => 'cooperacao_acordos', 'action' => 'add')); ?> </li>
	</ul>
</div>
