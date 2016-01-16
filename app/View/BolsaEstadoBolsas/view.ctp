<div class="bolsaEstadoBolsas view">
<h2><?php  echo __('Bolsa Estado Bolsa'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($bolsaEstadoBolsa['BolsaEstadoBolsa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($bolsaEstadoBolsa['BolsaEstadoBolsa']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bolsa Estado Bolsa'), array('action' => 'edit', $bolsaEstadoBolsa['BolsaEstadoBolsa']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Bolsa Estado Bolsa'), array('action' => 'delete', $bolsaEstadoBolsa['BolsaEstadoBolsa']['id']), null, __('Are you sure you want to delete # %s?', $bolsaEstadoBolsa['BolsaEstadoBolsa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Bolsa Estado Bolsas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bolsa Estado Bolsa'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bolsa Bolsas'), array('controller' => 'bolsa_bolsas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bolsa Bolsa'), array('controller' => 'bolsa_bolsas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Bolsa Bolsas'); ?></h3>
	<?php if (!empty($bolsaEstadoBolsa['BolsaBolsa'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Aluno Id'); ?></th>
		<th><?php echo __('Bolsa Candidatura Id'); ?></th>
		<th><?php echo __('AnoLectivo Id'); ?></th>
		<th><?php echo __('Banco Id'); ?></th>
		<th><?php echo __('Nib'); ?></th>
		<th><?php echo __('Conta Bancaria'); ?></th>
		<th><?php echo __('Bolsa Fonte Bolsa Id'); ?></th>
		<th><?php echo __('Processo Bolsa'); ?></th>
		<th><?php echo __('Data Atribuicao'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Bolsa Criador Conta Id'); ?></th>
		<th><?php echo __('Bolsa Estado Bolsa Id'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('Codigo'); ?></th>
		<th><?php echo __('Bolsa Resultado Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($bolsaEstadoBolsa['BolsaBolsa'] as $bolsaBolsa): ?>
		<tr>
			<td><?php echo $bolsaBolsa['id']; ?></td>
			<td><?php echo $bolsaBolsa['aluno_id']; ?></td>
			<td><?php echo $bolsaBolsa['bolsa_candidatura_id']; ?></td>
			<td><?php echo $bolsaBolsa['ano_lectivo_id']; ?></td>
			<td><?php echo $bolsaBolsa['banco_id']; ?></td>
			<td><?php echo $bolsaBolsa['nib']; ?></td>
			<td><?php echo $bolsaBolsa['conta_bancaria']; ?></td>
			<td><?php echo $bolsaBolsa['bolsa_fonte_bolsa_id']; ?></td>
			<td><?php echo $bolsaBolsa['processo_bolsa']; ?></td>
			<td><?php echo $bolsaBolsa['data_atribuicao']; ?></td>
			<td><?php echo $bolsaBolsa['created']; ?></td>
			<td><?php echo $bolsaBolsa['modified']; ?></td>
			<td><?php echo $bolsaBolsa['bolsa_criador_conta_id']; ?></td>
			<td><?php echo $bolsaBolsa['bolsa_estado_bolsa_id']; ?></td>
			<td><?php echo $bolsaBolsa['created_by']; ?></td>
			<td><?php echo $bolsaBolsa['modified_by']; ?></td>
			<td><?php echo $bolsaBolsa['codigo']; ?></td>
			<td><?php echo $bolsaBolsa['bolsa_resultado_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'bolsa_bolsas', 'action' => 'view', $bolsaBolsa['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'bolsa_bolsas', 'action' => 'edit', $bolsaBolsa['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'bolsa_bolsas', 'action' => 'delete', $bolsaBolsa['id']), null, __('Are you sure you want to delete # %s?', $bolsaBolsa['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Bolsa Bolsa'), array('controller' => 'bolsa_bolsas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
