<div class="bolsaBolsas form">
<?php echo $this->Form->create('BolsaBolsa'); ?>
	<fieldset>
		<legend><?php echo __('Edit Bolsa Bolsa'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('aluno_id');
		echo $this->Form->input('bolsa_candidatura_id');
		echo $this->Form->input('ano_lectivo_id');
		echo $this->Form->input('banco_id');
		echo $this->Form->input('nib');
		echo $this->Form->input('conta_bancaria');
		echo $this->Form->input('bolsa_fonte_bolsa_id');
		echo $this->Form->input('processo_bolsa');
		echo $this->Form->input('data_atribuicao');
		echo $this->Form->input('bolsa_criador_conta_id');
		echo $this->Form->input('bolsa_estado_bolsa_id');
		echo $this->Form->input('created_by');
		echo $this->Form->input('modified_by');
		echo $this->Form->input('codigo');
		echo $this->Form->input('bolsa_resultado_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('BolsaBolsa.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('BolsaBolsa.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Bolsa Bolsas'), array('action' => 'index')); ?></li>
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
