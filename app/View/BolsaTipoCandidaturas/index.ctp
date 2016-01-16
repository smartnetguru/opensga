<div class="bolsaTipoCandidaturas index">
	<h2><?php echo __('Bolsa Tipo Candidaturas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($bolsaTipoCandidaturas as $bolsaTipoCandidatura): ?>
	<tr>
		<td><?php echo h($bolsaTipoCandidatura['BolsaTipoCandidatura']['id']); ?>&nbsp;</td>
		<td><?php echo h($bolsaTipoCandidatura['BolsaTipoCandidatura']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $bolsaTipoCandidatura['BolsaTipoCandidatura']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $bolsaTipoCandidatura['BolsaTipoCandidatura']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $bolsaTipoCandidatura['BolsaTipoCandidatura']['id']), null, __('Are you sure you want to delete # %s?', $bolsaTipoCandidatura['BolsaTipoCandidatura']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Bolsa Tipo Candidatura'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Bolsa Candidaturas'), array('controller' => 'bolsa_candidaturas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bolsa Candidatura'), array('controller' => 'bolsa_candidaturas', 'action' => 'add')); ?> </li>
	</ul>
</div>
