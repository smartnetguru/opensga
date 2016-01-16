<div class="entidadeIdentificacaos index">
	<h2><?php echo __('Entidade Identificacaos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('entidade_id'); ?></th>
			<th><?php echo $this->Paginator->sort('documento_identificacao_id'); ?></th>
			<th><?php echo $this->Paginator->sort('data_emissao'); ?></th>
			<th><?php echo $this->Paginator->sort('data_validade'); ?></th>
			<th><?php echo $this->Paginator->sort('numero'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created_by'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_by'); ?></th>
			<th><?php echo $this->Paginator->sort('estado_objecto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('local_emissao'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($entidadeIdentificacaos as $entidadeIdentificacao): ?>
	<tr>
		<td><?php echo h($entidadeIdentificacao['EntidadeIdentificacao']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($entidadeIdentificacao['Entidade']['name'], array('controller' => 'entidades', 'action' => 'view', $entidadeIdentificacao['Entidade']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($entidadeIdentificacao['DocumentoIdentificacao']['name'], array('controller' => 'documento_identificacaos', 'action' => 'view', $entidadeIdentificacao['DocumentoIdentificacao']['id'])); ?>
		</td>
		<td><?php echo h($entidadeIdentificacao['EntidadeIdentificacao']['data_emissao']); ?>&nbsp;</td>
		<td><?php echo h($entidadeIdentificacao['EntidadeIdentificacao']['data_validade']); ?>&nbsp;</td>
		<td><?php echo h($entidadeIdentificacao['EntidadeIdentificacao']['numero']); ?>&nbsp;</td>
		<td><?php echo h($entidadeIdentificacao['EntidadeIdentificacao']['created']); ?>&nbsp;</td>
		<td><?php echo h($entidadeIdentificacao['EntidadeIdentificacao']['modified']); ?>&nbsp;</td>
		<td><?php echo h($entidadeIdentificacao['EntidadeIdentificacao']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($entidadeIdentificacao['EntidadeIdentificacao']['modified_by']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($entidadeIdentificacao['EstadoObjecto']['name'], array('controller' => 'estado_objectos', 'action' => 'view', $entidadeIdentificacao['EstadoObjecto']['id'])); ?>
		</td>
		<td><?php echo h($entidadeIdentificacao['EntidadeIdentificacao']['local_emissao']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $entidadeIdentificacao['EntidadeIdentificacao']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $entidadeIdentificacao['EntidadeIdentificacao']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $entidadeIdentificacao['EntidadeIdentificacao']['id']), null, __('Are you sure you want to delete # %s?', $entidadeIdentificacao['EntidadeIdentificacao']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Entidade Identificacao'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Entidades'), array('controller' => 'entidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entidade'), array('controller' => 'entidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Documento Identificacaos'), array('controller' => 'documento_identificacaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Documento Identificacao'), array('controller' => 'documento_identificacaos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estado Objectos'), array('controller' => 'estado_objectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Objecto'), array('controller' => 'estado_objectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
