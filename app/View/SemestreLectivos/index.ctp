<div class="semestreLectivos index">
	<h2><?php echo __('Semestre Lectivos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('codigo'); ?></th>
			<th><?php echo $this->Paginator->sort('ano_lectivo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('semestre'); ?></th>
			<th><?php echo $this->Paginator->sort('data_inicio'); ?></th>
			<th><?php echo $this->Paginator->sort('data_fim'); ?></th>
			<th><?php echo $this->Paginator->sort('semestre_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($semestreLectivos as $semestreLectivo): ?>
	<tr>
		<td><?php echo h($semestreLectivo['SemestreLectivo']['id']); ?>&nbsp;</td>
		<td><?php echo h($semestreLectivo['SemestreLectivo']['codigo']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($semestreLectivo['AnoLectivo']['codigo'], array('controller' => 'ano_lectivos', 'action' => 'view', $semestreLectivo['AnoLectivo']['id'])); ?>
		</td>
		<td><?php echo h($semestreLectivo['SemestreLectivo']['semestre']); ?>&nbsp;</td>
		<td><?php echo h($semestreLectivo['SemestreLectivo']['data_inicio']); ?>&nbsp;</td>
		<td><?php echo h($semestreLectivo['SemestreLectivo']['data_fim']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($semestreLectivo['Semestre']['name'], array('controller' => 'semestres', 'action' => 'view', $semestreLectivo['Semestre']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $semestreLectivo['SemestreLectivo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $semestreLectivo['SemestreLectivo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $semestreLectivo['SemestreLectivo']['id']), array(), __('Are you sure you want to delete # %s?', $semestreLectivo['SemestreLectivo']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
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
		<li><?php echo $this->Html->link(__('New Semestre Lectivo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Ano Lectivos'), array('controller' => 'ano_lectivos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ano Lectivo'), array('controller' => 'ano_lectivos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Semestres'), array('controller' => 'semestres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Semestre'), array('controller' => 'semestres', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Financeiro Depositos'), array('controller' => 'financeiro_depositos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Financeiro Deposito'), array('controller' => 'financeiro_depositos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Financeiro Pagamentos'), array('controller' => 'financeiro_pagamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Financeiro Pagamento'), array('controller' => 'financeiro_pagamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Turmas'), array('controller' => 'turmas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Turma'), array('controller' => 'turmas', 'action' => 'add')); ?> </li>
	</ul>
</div>
