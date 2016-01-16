<div class="sadeParametros index">
	<h2><?php echo __('Sade Parametros');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('codigo');?></th>
			<th><?php echo $this->Paginator->sort('descricao');?></th>
			<th><?php echo $this->Paginator->sort('sade_indicador_id');?></th>
			<th><?php echo $this->Paginator->sort('quantidade_padrao');?></th>
			<th><?php echo $this->Paginator->sort('pontos_padrao');?></th>
			<th><?php echo $this->Paginator->sort('pontos_bonificados');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($sadeParametros as $sadeParametro): ?>
	<tr>
		<td><?php echo h($sadeParametro['SadeParametro']['id']); ?>&nbsp;</td>
		<td><?php echo h($sadeParametro['SadeParametro']['codigo']); ?>&nbsp;</td>
		<td><?php echo h($sadeParametro['SadeParametro']['descricao']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($sadeParametro['SadeIndicador']['id'], array('controller' => 'sade_indicadors', 'action' => 'view', $sadeParametro['SadeIndicador']['id'])); ?>
		</td>
		<td><?php echo h($sadeParametro['SadeParametro']['quantidade_padrao']); ?>&nbsp;</td>
		<td><?php echo h($sadeParametro['SadeParametro']['pontos_padrao']); ?>&nbsp;</td>
		<td><?php echo h($sadeParametro['SadeParametro']['pontos_bonificados']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $sadeParametro['SadeParametro']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $sadeParametro['SadeParametro']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $sadeParametro['SadeParametro']['id']), null, __('Are you sure you want to delete # %s?', $sadeParametro['SadeParametro']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Sade Parametro'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sade Indicadors'), array('controller' => 'sade_indicadors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sade Indicador'), array('controller' => 'sade_indicadors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sade Auto Avaliacaos'), array('controller' => 'sade_auto_avaliacaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sade Auto Avaliacao'), array('controller' => 'sade_auto_avaliacaos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sade Avaliacao Alunos'), array('controller' => 'sade_avaliacao_alunos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sade Avaliacao Aluno'), array('controller' => 'sade_avaliacao_alunos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sade Avaliacao Qualitativas'), array('controller' => 'sade_avaliacao_qualitativas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sade Avaliacao Qualitativa'), array('controller' => 'sade_avaliacao_qualitativas', 'action' => 'add')); ?> </li>
	</ul>
</div>
