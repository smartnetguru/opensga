<div class="bolsaCandidaturas view">
<h2><?php  echo __('Bolsa Candidatura'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($bolsaCandidatura['BolsaPedido']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aluno'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bolsaCandidatura['Aluno']['id'], array('controller' => 'alunos', 'action' => 'view', $bolsaCandidatura['Aluno']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ano Lectivo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bolsaCandidatura['AnoLectivo']['codigo'], array('controller' => 'ano_lectivos', 'action' => 'view', $bolsaCandidatura['AnoLectivo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bolsa Bolsa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bolsaCandidatura['BolsaBolsa']['id'], array('controller' => 'bolsa_bolsas', 'action' => 'view', $bolsaCandidatura['BolsaBolsa']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado Objecto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bolsaCandidatura['EstadoObjecto']['name'], array('controller' => 'estado_objectos', 'action' => 'view', $bolsaCandidatura['EstadoObjecto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bolsa Tipo Bolsa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bolsaCandidatura['BolsaTipoBolsa']['name'], array('controller' => 'bolsa_tipo_bolsas', 'action' => 'view', $bolsaCandidatura['BolsaTipoBolsa']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($bolsaCandidatura['BolsaPedido']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($bolsaCandidatura['BolsaPedido']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Candidatura'); ?></dt>
		<dd>
			<?php echo h($bolsaCandidatura['BolsaPedido']['data_candidatura']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entidade'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bolsaCandidatura['Entidade']['name'], array('controller' => 'entidades', 'action' => 'view', $bolsaCandidatura['Entidade']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bolsa Tipo Candidatura'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bolsaCandidatura['BolsaTipoCandidatura']['name'], array('controller' => 'bolsa_tipo_candidaturas', 'action' => 'view', $bolsaCandidatura['BolsaTipoCandidatura']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nivel Estudante'); ?></dt>
		<dd>
			<?php echo h($bolsaCandidatura['BolsaPedido']['nivel_estudante']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Bolsa Actual'); ?></dt>
		<dd>
			<?php echo h($bolsaCandidatura['BolsaPedido']['tipo_bolsa_actual']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observacoes'); ?></dt>
		<dd>
			<?php echo h($bolsaCandidatura['BolsaPedido']['observacoes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Agregado Familiar'); ?></dt>
		<dd>
			<?php echo h($bolsaCandidatura['BolsaPedido']['agregado_familiar']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Irmaos Estudantes'); ?></dt>
		<dd>
			<?php echo h($bolsaCandidatura['BolsaPedido']['irmaos_estudantes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Irmaos Trabalhadores'); ?></dt>
		<dd>
			<?php echo h($bolsaCandidatura['BolsaPedido']['irmaos_trabalhadores']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bolsa Candidatura'), array('action' => 'edit', $bolsaCandidatura['BolsaPedido']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Bolsa Candidatura'), array('action' => 'delete', $bolsaCandidatura['BolsaPedido']['id']), null, __('Are you sure you want to delete # %s?', $bolsaCandidatura['BolsaPedido']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Bolsa Candidaturas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bolsa Candidatura'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Bolsa Bolsas'); ?></h3>
	<?php if (!empty($bolsaCandidatura['BolsaBolsa'])): ?>
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
		foreach ($bolsaCandidatura['BolsaBolsa'] as $bolsaBolsa): ?>
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
<div class="related">
	<h3><?php echo __('Related Bolsa Resultados'); ?></h3>
	<?php if (!empty($bolsaCandidatura['BolsaResultado'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Bolsa Candidatura Id'); ?></th>
		<th><?php echo __('Bolsa Tipo Bolsa Id'); ?></th>
		<th><?php echo __('Bolsa Motivo Indeferimento Id'); ?></th>
		<th><?php echo __('Data Resultado'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('Observacoes'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($bolsaCandidatura['BolsaResultado'] as $bolsaResultado): ?>
		<tr>
			<td><?php echo $bolsaResultado['id']; ?></td>
			<td><?php echo $bolsaResultado['bolsa_candidatura_id']; ?></td>
			<td><?php echo $bolsaResultado['bolsa_tipo_bolsa_id']; ?></td>
			<td><?php echo $bolsaResultado['bolsa_motivo_indeferimento_id']; ?></td>
			<td><?php echo $bolsaResultado['data_resultado']; ?></td>
			<td><?php echo $bolsaResultado['created']; ?></td>
			<td><?php echo $bolsaResultado['modified']; ?></td>
			<td><?php echo $bolsaResultado['created_by']; ?></td>
			<td><?php echo $bolsaResultado['modified_by']; ?></td>
			<td><?php echo $bolsaResultado['observacoes']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'bolsa_resultados', 'action' => 'view', $bolsaResultado['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'bolsa_resultados', 'action' => 'edit', $bolsaResultado['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'bolsa_resultados', 'action' => 'delete', $bolsaResultado['id']), null, __('Are you sure you want to delete # %s?', $bolsaResultado['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Bolsa Resultado'), array('controller' => 'bolsa_resultados', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
