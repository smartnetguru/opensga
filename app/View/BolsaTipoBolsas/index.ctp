<div class="bolsaTipoBolsas index">
	<h2><?php echo __('Bolsa Tipo Bolsas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('valor_bolsa'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($bolsaTipoBolsas as $bolsaTipoBolsa): ?>
	<tr>
		<td><?php echo h($bolsaTipoBolsa['BolsaTipoBolsa']['id']); ?>&nbsp;</td>
		<td><?php echo h($bolsaTipoBolsa['BolsaTipoBolsa']['name']); ?>&nbsp;</td>
		<td><?php echo h($bolsaTipoBolsa['BolsaTipoBolsa']['valor_bolsa']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $bolsaTipoBolsa['BolsaTipoBolsa']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $bolsaTipoBolsa['BolsaTipoBolsa']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $bolsaTipoBolsa['BolsaTipoBolsa']['id']), null, __('Are you sure you want to delete # %s?', $bolsaTipoBolsa['BolsaTipoBolsa']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Bolsa Tipo Bolsa'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Bolsa Candidaturas'), array('controller' => 'bolsa_candidaturas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bolsa Candidatura'), array('controller' => 'bolsa_candidaturas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bolsa Resultados'), array('controller' => 'bolsa_resultados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bolsa Resultado'), array('controller' => 'bolsa_resultados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bolsa Valor Bolsas'), array('controller' => 'bolsa_valor_bolsas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bolsa Valor Bolsa'), array('controller' => 'bolsa_valor_bolsas', 'action' => 'add')); ?> </li>
	</ul>
</div>
