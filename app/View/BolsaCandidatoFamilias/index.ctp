<div class="bolsaCandidatoFamilias index">
	<h2><?php echo __('Bolsa Candidato Familias'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('parentesco'); ?></th>
			<th><?php echo $this->Paginator->sort('idade'); ?></th>
			<th><?php echo $this->Paginator->sort('profissao'); ?></th>
			<th><?php echo $this->Paginator->sort('curso_instituicao'); ?></th>
			<th><?php echo $this->Paginator->sort('rendimento_mensal'); ?></th>
			<th><?php echo $this->Paginator->sort('bolsa_candidatura_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($bolsaCandidatoFamilias as $bolsaCandidatoFamilia): ?>
	<tr>
		<td><?php echo h($bolsaCandidatoFamilia['BolsaCandidatoFamilia']['id']); ?>&nbsp;</td>
		<td><?php echo h($bolsaCandidatoFamilia['BolsaCandidatoFamilia']['name']); ?>&nbsp;</td>
		<td><?php echo h($bolsaCandidatoFamilia['BolsaCandidatoFamilia']['parentesco']); ?>&nbsp;</td>
		<td><?php echo h($bolsaCandidatoFamilia['BolsaCandidatoFamilia']['idade']); ?>&nbsp;</td>
		<td><?php echo h($bolsaCandidatoFamilia['BolsaCandidatoFamilia']['profissao']); ?>&nbsp;</td>
		<td><?php echo h($bolsaCandidatoFamilia['BolsaCandidatoFamilia']['curso_instituicao']); ?>&nbsp;</td>
		<td><?php echo h($bolsaCandidatoFamilia['BolsaCandidatoFamilia']['rendimento_mensal']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($bolsaCandidatoFamilia['BolsaPedido']['id'], array('controller' => 'bolsa_candidaturas', 'action' => 'view', $bolsaCandidatoFamilia['BolsaPedido']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $bolsaCandidatoFamilia['BolsaCandidatoFamilia']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $bolsaCandidatoFamilia['BolsaCandidatoFamilia']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $bolsaCandidatoFamilia['BolsaCandidatoFamilia']['id']), null, __('Are you sure you want to delete # %s?', $bolsaCandidatoFamilia['BolsaCandidatoFamilia']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Bolsa Candidato Familia'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Bolsa Candidaturas'), array('controller' => 'bolsa_candidaturas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bolsa Candidatura'), array('controller' => 'bolsa_candidaturas', 'action' => 'add')); ?> </li>
	</ul>
</div>
