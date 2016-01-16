<div class="bolsaBolsas index">
	<h2><?php echo __('Bolsa Bolsas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('aluno_id'); ?></th>
			<th><?php echo $this->Paginator->sort('bolsa_candidatura_id'); ?></th>
			<th><?php echo $this->Paginator->sort('ano_lectivo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('banco_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nib'); ?></th>
			<th><?php echo $this->Paginator->sort('conta_bancaria'); ?></th>
			<th><?php echo $this->Paginator->sort('bolsa_fonte_bolsa_id'); ?></th>
			<th><?php echo $this->Paginator->sort('processo_bolsa'); ?></th>
			<th><?php echo $this->Paginator->sort('data_atribuicao'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('bolsa_criador_conta_id'); ?></th>
			<th><?php echo $this->Paginator->sort('bolsa_estado_bolsa_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created_by'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_by'); ?></th>
			<th><?php echo $this->Paginator->sort('codigo'); ?></th>
			<th><?php echo $this->Paginator->sort('bolsa_resultado_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($bolsaBolsas as $bolsaBolsa): ?>
	<tr>
		<td><?php echo h($bolsaBolsa['BolsaBolsa']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($bolsaBolsa['Aluno']['id'], array('controller' => 'alunos', 'action' => 'view', $bolsaBolsa['Aluno']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($bolsaBolsa['BolsaPedido']['id'], array('controller' => 'bolsa_candidaturas', 'action' => 'view', $bolsaBolsa['BolsaPedido']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($bolsaBolsa['AnoLectivo']['codigo'], array('controller' => 'anolectivos', 'action' => 'view', $bolsaBolsa['AnoLectivo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($bolsaBolsa['Banco']['name'], array('controller' => 'bancos', 'action' => 'view', $bolsaBolsa['Banco']['id'])); ?>
		</td>
		<td><?php echo h($bolsaBolsa['BolsaBolsa']['nib']); ?>&nbsp;</td>
		<td><?php echo h($bolsaBolsa['BolsaBolsa']['conta_bancaria']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($bolsaBolsa['BolsaFonteBolsa']['name'], array('controller' => 'bolsa_fonte_bolsas', 'action' => 'view', $bolsaBolsa['BolsaFonteBolsa']['id'])); ?>
		</td>
		<td><?php echo h($bolsaBolsa['BolsaBolsa']['processo_bolsa']); ?>&nbsp;</td>
		<td><?php echo h($bolsaBolsa['BolsaBolsa']['data_atribuicao']); ?>&nbsp;</td>
		<td><?php echo h($bolsaBolsa['BolsaBolsa']['created']); ?>&nbsp;</td>
		<td><?php echo h($bolsaBolsa['BolsaBolsa']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($bolsaBolsa['BolsaCriadorConta']['name'], array('controller' => 'bolsa_criador_contas', 'action' => 'view', $bolsaBolsa['BolsaCriadorConta']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($bolsaBolsa['BolsaEstadoBolsa']['name'], array('controller' => 'bolsa_estado_bolsas', 'action' => 'view', $bolsaBolsa['BolsaEstadoBolsa']['id'])); ?>
		</td>
		<td><?php echo h($bolsaBolsa['BolsaBolsa']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($bolsaBolsa['BolsaBolsa']['modified_by']); ?>&nbsp;</td>
		<td><?php echo h($bolsaBolsa['BolsaBolsa']['codigo']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($bolsaBolsa['BolsaResultado']['id'], array('controller' => 'bolsa_resultados', 'action' => 'view', $bolsaBolsa['BolsaResultado']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $bolsaBolsa['BolsaBolsa']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $bolsaBolsa['BolsaBolsa']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $bolsaBolsa['BolsaBolsa']['id']), null, __('Are you sure you want to delete # %s?', $bolsaBolsa['BolsaBolsa']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Bolsa Bolsa'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Alunos'), array('controller' => 'alunos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aluno'), array('controller' => 'alunos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bolsa Candidaturas'), array('controller' => 'bolsa_candidaturas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bolsa Candidatura'), array('controller' => 'bolsa_candidaturas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Anolectivos'), array('controller' => 'anolectivos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New AnoLectivo'), array('controller' => 'anolectivos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bancos'), array('controller' => 'bancos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Banco'), array('controller' => 'bancos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bolsa Fonte Bolsas'), array('controller' => 'bolsa_fonte_bolsas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bolsa Fonte Bolsa'), array('controller' => 'bolsa_fonte_bolsas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bolsa Criador Contas'), array('controller' => 'bolsa_criador_contas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bolsa Criador Conta'), array('controller' => 'bolsa_criador_contas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bolsa Estado Bolsas'), array('controller' => 'bolsa_estado_bolsas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bolsa Estado Bolsa'), array('controller' => 'bolsa_estado_bolsas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bolsa Resultados'), array('controller' => 'bolsa_resultados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bolsa Resultado'), array('controller' => 'bolsa_resultados', 'action' => 'add')); ?> </li>
	</ul>
</div>
