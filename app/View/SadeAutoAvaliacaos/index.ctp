<div class="sadeAutoAvaliacaos index">
	<h2><?php echo __('Sade Auto Avaliacaos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('entidade_id');?></th>
			<th><?php echo $this->Paginator->sort('sade_parametro_id');?></th>
			<th><?php echo $this->Paginator->sort('resposta');?></th>
			<th><?php echo $this->Paginator->sort('pontos_obtidos');?></th>
			<th><?php echo $this->Paginator->sort('pontos_bonificados');?></th>
			<th><?php echo $this->Paginator->sort('detalhes');?></th>
			<th><?php echo $this->Paginator->sort('ano_lectivo_id');?></th>
			<th><?php echo $this->Paginator->sort('semestre_lectivo_id');?></th>
			<th><?php echo $this->Paginator->sort('data');?></th>
			<th><?php echo $this->Paginator->sort('sade_avaliacao_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($sadeAutoAvaliacaos as $sadeAutoAvaliacao): ?>
	<tr>
		<td><?php echo h($sadeAutoAvaliacao['SadeAutoAvaliacao']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($sadeAutoAvaliacao['Entidade']['name'], array('controller' => 'entidades', 'action' => 'view', $sadeAutoAvaliacao['Entidade']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($sadeAutoAvaliacao['SadeParametro']['id'], array('controller' => 'sade_parametros', 'action' => 'view', $sadeAutoAvaliacao['SadeParametro']['id'])); ?>
		</td>
		<td><?php echo h($sadeAutoAvaliacao['SadeAutoAvaliacao']['resposta']); ?>&nbsp;</td>
		<td><?php echo h($sadeAutoAvaliacao['SadeAutoAvaliacao']['pontos_obtidos']); ?>&nbsp;</td>
		<td><?php echo h($sadeAutoAvaliacao['SadeAutoAvaliacao']['pontos_bonificados']); ?>&nbsp;</td>
		<td><?php echo h($sadeAutoAvaliacao['SadeAutoAvaliacao']['detalhes']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($sadeAutoAvaliacao['AnoLectivo']['codigo'], array('controller' => 'anolectivos', 'action' => 'view', $sadeAutoAvaliacao['AnoLectivo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($sadeAutoAvaliacao['SemestreLectivo']['codigo'], array('controller' => 'semestrelectivos', 'action' => 'view', $sadeAutoAvaliacao['SemestreLectivo']['id'])); ?>
		</td>
		<td><?php echo h($sadeAutoAvaliacao['SadeAutoAvaliacao']['data']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($sadeAutoAvaliacao['SadeAvaliacao']['name'], array('controller' => 'sade_avaliacaos', 'action' => 'view', $sadeAutoAvaliacao['SadeAvaliacao']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $sadeAutoAvaliacao['SadeAutoAvaliacao']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $sadeAutoAvaliacao['SadeAutoAvaliacao']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $sadeAutoAvaliacao['SadeAutoAvaliacao']['id']), null, __('Are you sure you want to delete # %s?', $sadeAutoAvaliacao['SadeAutoAvaliacao']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Sade Auto Avaliacao'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Entidades'), array('controller' => 'entidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entidade'), array('controller' => 'entidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sade Parametros'), array('controller' => 'sade_parametros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sade Parametro'), array('controller' => 'sade_parametros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Anolectivos'), array('controller' => 'anolectivos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New AnoLectivo'), array('controller' => 'anolectivos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Semestrelectivos'), array('controller' => 'semestrelectivos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New SemestreLectivo'), array('controller' => 'semestrelectivos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sade Avaliacaos'), array('controller' => 'sade_avaliacaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sade Avaliacao'), array('controller' => 'sade_avaliacaos', 'action' => 'add')); ?> </li>
	</ul>
</div>
