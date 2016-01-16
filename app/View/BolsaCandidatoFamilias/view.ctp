<div class="bolsaCandidatoFamilias view">
<h2><?php  echo __('Bolsa Candidato Familia'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($bolsaCandidatoFamilia['BolsaCandidatoFamilia']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($bolsaCandidatoFamilia['BolsaCandidatoFamilia']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parentesco'); ?></dt>
		<dd>
			<?php echo h($bolsaCandidatoFamilia['BolsaCandidatoFamilia']['parentesco']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Idade'); ?></dt>
		<dd>
			<?php echo h($bolsaCandidatoFamilia['BolsaCandidatoFamilia']['idade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profissao'); ?></dt>
		<dd>
			<?php echo h($bolsaCandidatoFamilia['BolsaCandidatoFamilia']['profissao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Curso Instituicao'); ?></dt>
		<dd>
			<?php echo h($bolsaCandidatoFamilia['BolsaCandidatoFamilia']['curso_instituicao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rendimento Mensal'); ?></dt>
		<dd>
			<?php echo h($bolsaCandidatoFamilia['BolsaCandidatoFamilia']['rendimento_mensal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bolsa Candidatura'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bolsaCandidatoFamilia['BolsaPedido']['id'], array('controller' => 'bolsa_candidaturas', 'action' => 'view', $bolsaCandidatoFamilia['BolsaPedido']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bolsa Candidato Familia'), array('action' => 'edit', $bolsaCandidatoFamilia['BolsaCandidatoFamilia']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Bolsa Candidato Familia'), array('action' => 'delete', $bolsaCandidatoFamilia['BolsaCandidatoFamilia']['id']), null, __('Are you sure you want to delete # %s?', $bolsaCandidatoFamilia['BolsaCandidatoFamilia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Bolsa Candidato Familias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bolsa Candidato Familia'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bolsa Candidaturas'), array('controller' => 'bolsa_candidaturas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bolsa Candidatura'), array('controller' => 'bolsa_candidaturas', 'action' => 'add')); ?> </li>
	</ul>
</div>
