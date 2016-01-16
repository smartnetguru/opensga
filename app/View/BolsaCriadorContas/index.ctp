<div class="bolsaCriadorContas index">
	<h2><?php echo __('Bolsa Criador Contas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($bolsaCriadorContas as $bolsaCriadorConta): ?>
	<tr>
		<td><?php echo h($bolsaCriadorConta['BolsaCriadorConta']['id']); ?>&nbsp;</td>
		<td><?php echo h($bolsaCriadorConta['BolsaCriadorConta']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $bolsaCriadorConta['BolsaCriadorConta']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $bolsaCriadorConta['BolsaCriadorConta']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $bolsaCriadorConta['BolsaCriadorConta']['id']), null, __('Are you sure you want to delete # %s?', $bolsaCriadorConta['BolsaCriadorConta']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Bolsa Criador Conta'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Bolsa Bolsas'), array('controller' => 'bolsa_bolsas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bolsa Bolsa'), array('controller' => 'bolsa_bolsas', 'action' => 'add')); ?> </li>
	</ul>
</div>
