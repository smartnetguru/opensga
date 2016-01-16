<div class="cooperacaoAcordoUnidadeOrganicas index">
	<h2><?php echo __('Cooperacao Acordo Unidade Organicas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('unidade_organica_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cooperacao_acordo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created_by'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cooperacaoAcordoUnidadeOrganicas as $cooperacaoAcordoUnidadeOrganica): ?>
	<tr>
		<td><?php echo h($cooperacaoAcordoUnidadeOrganica['CooperacaoAcordoUnidadeOrganica']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cooperacaoAcordoUnidadeOrganica['UnidadeOrganica']['name'], array('controller' => 'unidade_organicas', 'action' => 'view', $cooperacaoAcordoUnidadeOrganica['UnidadeOrganica']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($cooperacaoAcordoUnidadeOrganica['CooperacaoAcordo']['name'], array('controller' => 'cooperacao_acordos', 'action' => 'view', $cooperacaoAcordoUnidadeOrganica['CooperacaoAcordo']['id'])); ?>
		</td>
		<td><?php echo h($cooperacaoAcordoUnidadeOrganica['CooperacaoAcordoUnidadeOrganica']['created']); ?>&nbsp;</td>
		<td><?php echo h($cooperacaoAcordoUnidadeOrganica['CooperacaoAcordoUnidadeOrganica']['modified']); ?>&nbsp;</td>
		<td><?php echo h($cooperacaoAcordoUnidadeOrganica['CooperacaoAcordoUnidadeOrganica']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($cooperacaoAcordoUnidadeOrganica['CooperacaoAcordoUnidadeOrganica']['modified_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cooperacaoAcordoUnidadeOrganica['CooperacaoAcordoUnidadeOrganica']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cooperacaoAcordoUnidadeOrganica['CooperacaoAcordoUnidadeOrganica']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cooperacaoAcordoUnidadeOrganica['CooperacaoAcordoUnidadeOrganica']['id']), null, __('Are you sure you want to delete # %s?', $cooperacaoAcordoUnidadeOrganica['CooperacaoAcordoUnidadeOrganica']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Cooperacao Acordo Unidade Organica'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Unidade Organicas'), array('controller' => 'unidade_organicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unidade Organica'), array('controller' => 'unidade_organicas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cooperacao Acordos'), array('controller' => 'cooperacao_acordos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cooperacao Acordo'), array('controller' => 'cooperacao_acordos', 'action' => 'add')); ?> </li>
	</ul>
</div>
