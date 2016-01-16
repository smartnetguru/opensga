<div class="bolsaBolsas view">
<h2><?php  echo __('Bolsa Bolsa'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($bolsaBolsa['BolsaBolsa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aluno'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bolsaBolsa['Aluno']['id'], array('controller' => 'alunos', 'action' => 'view', $bolsaBolsa['Aluno']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bolsa Candidatura'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bolsaBolsa['BolsaPedido']['id'], array('controller' => 'bolsa_candidaturas', 'action' => 'view', $bolsaBolsa['BolsaPedido']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AnoLectivo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bolsaBolsa['AnoLectivo']['codigo'], array('controller' => 'anolectivos', 'action' => 'view', $bolsaBolsa['AnoLectivo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Banco'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bolsaBolsa['Banco']['name'], array('controller' => 'bancos', 'action' => 'view', $bolsaBolsa['Banco']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nib'); ?></dt>
		<dd>
			<?php echo h($bolsaBolsa['BolsaBolsa']['nib']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Conta Bancaria'); ?></dt>
		<dd>
			<?php echo h($bolsaBolsa['BolsaBolsa']['conta_bancaria']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bolsa Fonte Bolsa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bolsaBolsa['BolsaFonteBolsa']['name'], array('controller' => 'bolsa_fonte_bolsas', 'action' => 'view', $bolsaBolsa['BolsaFonteBolsa']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Processo Bolsa'); ?></dt>
		<dd>
			<?php echo h($bolsaBolsa['BolsaBolsa']['processo_bolsa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Atribuicao'); ?></dt>
		<dd>
			<?php echo h($bolsaBolsa['BolsaBolsa']['data_atribuicao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($bolsaBolsa['BolsaBolsa']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($bolsaBolsa['BolsaBolsa']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bolsa Criador Conta'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bolsaBolsa['BolsaCriadorConta']['name'], array('controller' => 'bolsa_criador_contas', 'action' => 'view', $bolsaBolsa['BolsaCriadorConta']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bolsa Estado Bolsa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bolsaBolsa['BolsaEstadoBolsa']['name'], array('controller' => 'bolsa_estado_bolsas', 'action' => 'view', $bolsaBolsa['BolsaEstadoBolsa']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($bolsaBolsa['BolsaBolsa']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($bolsaBolsa['BolsaBolsa']['modified_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo'); ?></dt>
		<dd>
			<?php echo h($bolsaBolsa['BolsaBolsa']['codigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bolsa Resultado'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bolsaBolsa['BolsaResultado']['id'], array('controller' => 'bolsa_resultados', 'action' => 'view', $bolsaBolsa['BolsaResultado']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bolsa Bolsa'), array('action' => 'edit', $bolsaBolsa['BolsaBolsa']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Bolsa Bolsa'), array('action' => 'delete', $bolsaBolsa['BolsaBolsa']['id']), null, __('Are you sure you want to delete # %s?', $bolsaBolsa['BolsaBolsa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Bolsa Bolsas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bolsa Bolsa'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Bolsa Candidaturas'); ?></h3>
	<?php if (!empty($bolsaBolsa['BolsaPedido'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Aluno Id'); ?></th>
		<th><?php echo __('Ano Lectivo Id'); ?></th>
		<th><?php echo __('Bolsa Bolsa Id'); ?></th>
		<th><?php echo __('Estado Objecto Id'); ?></th>
		<th><?php echo __('Bolsa Tipo Bolsa Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Data Candidatura'); ?></th>
		<th><?php echo __('Entidade Id'); ?></th>
		<th><?php echo __('Bolsa Tipo Candidatura Id'); ?></th>
		<th><?php echo __('Nivel Estudante'); ?></th>
		<th><?php echo __('Tipo Bolsa Actual'); ?></th>
		<th><?php echo __('Observacoes'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($bolsaBolsa['BolsaPedido'] as $bolsaCandidatura): ?>
		<tr>
			<td><?php echo $bolsaCandidatura['id']; ?></td>
			<td><?php echo $bolsaCandidatura['aluno_id']; ?></td>
			<td><?php echo $bolsaCandidatura['ano_lectivo_id']; ?></td>
			<td><?php echo $bolsaCandidatura['bolsa_bolsa_id']; ?></td>
			<td><?php echo $bolsaCandidatura['estado_objecto_id']; ?></td>
			<td><?php echo $bolsaCandidatura['bolsa_tipo_bolsa_id']; ?></td>
			<td><?php echo $bolsaCandidatura['created']; ?></td>
			<td><?php echo $bolsaCandidatura['modified']; ?></td>
			<td><?php echo $bolsaCandidatura['data_candidatura']; ?></td>
			<td><?php echo $bolsaCandidatura['entidade_id']; ?></td>
			<td><?php echo $bolsaCandidatura['bolsa_tipo_candidatura_id']; ?></td>
			<td><?php echo $bolsaCandidatura['nivel_estudante']; ?></td>
			<td><?php echo $bolsaCandidatura['tipo_bolsa_actual']; ?></td>
			<td><?php echo $bolsaCandidatura['observacoes']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'bolsa_candidaturas', 'action' => 'view', $bolsaCandidatura['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'bolsa_candidaturas', 'action' => 'edit', $bolsaCandidatura['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'bolsa_candidaturas', 'action' => 'delete', $bolsaCandidatura['id']), null, __('Are you sure you want to delete # %s?', $bolsaCandidatura['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Bolsa Candidatura'), array('controller' => 'bolsa_candidaturas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
