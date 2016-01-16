<div class="bolsaCandidaturas index">
	<h2><?php echo __('Bolsa Candidaturas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('aluno_id'); ?></th>
			<th><?php echo $this->Paginator->sort('ano_lectivo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('bolsa_bolsa_id'); ?></th>
			<th><?php echo $this->Paginator->sort('estado_objecto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('bolsa_tipo_bolsa_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('data_candidatura'); ?></th>
			<th><?php echo $this->Paginator->sort('entidade_id'); ?></th>
			<th><?php echo $this->Paginator->sort('bolsa_tipo_candidatura_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nivel_estudante'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_bolsa_actual'); ?></th>
			<th><?php echo $this->Paginator->sort('observacoes'); ?></th>
			<th><?php echo $this->Paginator->sort('agregado_familiar'); ?></th>
			<th><?php echo $this->Paginator->sort('irmaos_estudantes'); ?></th>
			<th><?php echo $this->Paginator->sort('irmaos_trabalhadores'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($bolsaCandidaturas as $bolsaCandidatura): ?>
	<tr>
		<td><?php echo h($bolsaCandidatura['BolsaPedido']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($bolsaCandidatura['Aluno']['id'], array('controller' => 'alunos', 'action' => 'view', $bolsaCandidatura['Aluno']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($bolsaCandidatura['AnoLectivo']['codigo'], array('controller' => 'ano_lectivos', 'action' => 'view', $bolsaCandidatura['AnoLectivo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($bolsaCandidatura['BolsaBolsa']['id'], array('controller' => 'bolsa_bolsas', 'action' => 'view', $bolsaCandidatura['BolsaBolsa']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($bolsaCandidatura['EstadoObjecto']['name'], array('controller' => 'estado_objectos', 'action' => 'view', $bolsaCandidatura['EstadoObjecto']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($bolsaCandidatura['BolsaTipoBolsa']['name'], array('controller' => 'bolsa_tipo_bolsas', 'action' => 'view', $bolsaCandidatura['BolsaTipoBolsa']['id'])); ?>
		</td>
		<td><?php echo h($bolsaCandidatura['BolsaPedido']['created']); ?>&nbsp;</td>
		<td><?php echo h($bolsaCandidatura['BolsaPedido']['modified']); ?>&nbsp;</td>
		<td><?php echo h($bolsaCandidatura['BolsaPedido']['data_candidatura']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($bolsaCandidatura['Entidade']['name'], array('controller' => 'entidades', 'action' => 'view', $bolsaCandidatura['Entidade']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($bolsaCandidatura['BolsaTipoCandidatura']['name'], array('controller' => 'bolsa_tipo_candidaturas', 'action' => 'view', $bolsaCandidatura['BolsaTipoCandidatura']['id'])); ?>
		</td>
		<td><?php echo h($bolsaCandidatura['BolsaPedido']['nivel_estudante']); ?>&nbsp;</td>
		<td><?php echo h($bolsaCandidatura['BolsaPedido']['tipo_bolsa_actual']); ?>&nbsp;</td>
		<td><?php echo h($bolsaCandidatura['BolsaPedido']['observacoes']); ?>&nbsp;</td>
		<td><?php echo h($bolsaCandidatura['BolsaPedido']['agregado_familiar']); ?>&nbsp;</td>
		<td><?php echo h($bolsaCandidatura['BolsaPedido']['irmaos_estudantes']); ?>&nbsp;</td>
		<td><?php echo h($bolsaCandidatura['BolsaPedido']['irmaos_trabalhadores']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $bolsaCandidatura['BolsaPedido']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $bolsaCandidatura['BolsaPedido']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $bolsaCandidatura['BolsaPedido']['id']), null, __('Are you sure you want to delete # %s?', $bolsaCandidatura['BolsaPedido']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Bolsa Candidatura'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Alunos'), array('controller' => 'alunos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aluno'), array('controller' => 'alunos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ano Lectivos'), array('controller' => 'ano_lectivos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ano Lectivo'), array('controller' => 'ano_lectivos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bolsa Bolsas'), array('controller' => 'bolsa_bolsas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bolsa Bolsa'), array('controller' => 'bolsa_bolsas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estado Objectos'), array('controller' => 'estado_objectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Objecto'), array('controller' => 'estado_objectos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bolsa Tipo Bolsas'), array('controller' => 'bolsa_tipo_bolsas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bolsa Tipo Bolsa'), array('controller' => 'bolsa_tipo_bolsas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entidades'), array('controller' => 'entidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entidade'), array('controller' => 'entidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bolsa Tipo Candidaturas'), array('controller' => 'bolsa_tipo_candidaturas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bolsa Tipo Candidatura'), array('controller' => 'bolsa_tipo_candidaturas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bolsa Resultados'), array('controller' => 'bolsa_resultados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bolsa Resultado'), array('controller' => 'bolsa_resultados', 'action' => 'add')); ?> </li>
	</ul>
</div>
