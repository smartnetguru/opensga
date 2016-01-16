<div class="sadeAvaliacaoAlunos index">
	<h2><?php echo __('Sade Avaliacao Alunos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('aluno_id');?></th>
			<th><?php echo $this->Paginator->sort('entidade_id');?></th>
			<th><?php echo $this->Paginator->sort('sade_parametro_id');?></th>
			<th><?php echo $this->Paginator->sort('resposta');?></th>
			<th><?php echo $this->Paginator->sort('pontos_obtidos');?></th>
			<th><?php echo $this->Paginator->sort('ano_lectivo_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($sadeAvaliacaoAlunos as $sadeAvaliacaoAluno): ?>
	<tr>
		<td><?php echo h($sadeAvaliacaoAluno['SadeAvaliacaoAluno']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($sadeAvaliacaoAluno['Aluno']['name'], array('controller' => 'alunos', 'action' => 'view', $sadeAvaliacaoAluno['Aluno']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($sadeAvaliacaoAluno['Entidade']['name'], array('controller' => 'entidades', 'action' => 'view', $sadeAvaliacaoAluno['Entidade']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($sadeAvaliacaoAluno['SadeParametro']['id'], array('controller' => 'sade_parametros', 'action' => 'view', $sadeAvaliacaoAluno['SadeParametro']['id'])); ?>
		</td>
		<td><?php echo h($sadeAvaliacaoAluno['SadeAvaliacaoAluno']['resposta']); ?>&nbsp;</td>
		<td><?php echo h($sadeAvaliacaoAluno['SadeAvaliacaoAluno']['pontos_obtidos']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($sadeAvaliacaoAluno['AnoLectivo']['codigo'], array('controller' => 'anolectivos', 'action' => 'view', $sadeAvaliacaoAluno['AnoLectivo']['id'])); ?>
		</td>
		<td><?php echo h($sadeAvaliacaoAluno['SadeAvaliacaoAluno']['created']); ?>&nbsp;</td>
		<td><?php echo h($sadeAvaliacaoAluno['SadeAvaliacaoAluno']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $sadeAvaliacaoAluno['SadeAvaliacaoAluno']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $sadeAvaliacaoAluno['SadeAvaliacaoAluno']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $sadeAvaliacaoAluno['SadeAvaliacaoAluno']['id']), null, __('Are you sure you want to delete # %s?', $sadeAvaliacaoAluno['SadeAvaliacaoAluno']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Sade Avaliacao Aluno'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Alunos'), array('controller' => 'alunos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aluno'), array('controller' => 'alunos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entidades'), array('controller' => 'entidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entidade'), array('controller' => 'entidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sade Parametros'), array('controller' => 'sade_parametros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sade Parametro'), array('controller' => 'sade_parametros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Anolectivos'), array('controller' => 'anolectivos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New AnoLectivo'), array('controller' => 'anolectivos', 'action' => 'add')); ?> </li>
	</ul>
</div>
