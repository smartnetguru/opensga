<div class="escolaNivelMedios index">
	<h2><?php echo __('Escola Nivel Medios');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('distrito_id');?></th>
			<th><?php echo $this->Paginator->sort('provincia_id');?></th>
			<th><?php echo $this->Paginator->sort('pais_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($escolaNivelMedios as $escolaNivelMedio): ?>
	<tr>
		<td><?php echo h($escolaNivelMedio['EscolaNivelMedio']['id']); ?>&nbsp;</td>
		<td><?php echo h($escolaNivelMedio['EscolaNivelMedio']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($escolaNivelMedio['Distrito']['name'], array('controller' => 'cidades', 'action' => 'view', $escolaNivelMedio['Distrito']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($escolaNivelMedio['Provincia']['name'], array('controller' => 'provincias', 'action' => 'view', $escolaNivelMedio['Provincia']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($escolaNivelMedio['Pais']['name'], array('controller' => 'paises', 'action' => 'view', $escolaNivelMedio['Pais']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $escolaNivelMedio['EscolaNivelMedio']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $escolaNivelMedio['EscolaNivelMedio']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $escolaNivelMedio['EscolaNivelMedio']['id']), null, __('Are you sure you want to delete # %s?', $escolaNivelMedio['EscolaNivelMedio']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Escola Nivel Medio'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Cidades'), array('controller' => 'cidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Distrito'), array('controller' => 'cidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Provincias'), array('controller' => 'provincias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Provincia'), array('controller' => 'provincias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Paises'), array('controller' => 'paises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pais'), array('controller' => 'paises', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aluno Nivel Medios'), array('controller' => 'aluno_nivel_medios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aluno Nivel Medio'), array('controller' => 'aluno_nivel_medios', 'action' => 'add')); ?> </li>
	</ul>
</div>
