<div class="sadeAvaliacaoAlunos form">
<?php echo $this->Form->create('SadeAvaliacaoAluno');?>
	<fieldset>
		<legend><?php echo __('Edit Sade Avaliacao Aluno'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('aluno_id');
		echo $this->Form->input('entidade_id');
		echo $this->Form->input('sade_parametro_id');
		echo $this->Form->input('resposta');
		echo $this->Form->input('pontos_obtidos');
		echo $this->Form->input('ano_lectivo_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SadeAvaliacaoAluno.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('SadeAvaliacaoAluno.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Sade Avaliacao Alunos'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Alunos'), array('controller' => 'alunos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aluno'), array('controller' => 'alunos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entidades'), array('controller' => 'entidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entidade'), array('controller' => 'entidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sade Parametros'), array('controller' => 'sade_parametros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sade Parametro'), array('controller' => 'sade_parametros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Anolectivos'), array('controller' => 'anolectivos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New AnoLectivo'), array('controller' => 'anolectivos', 'action' => 'add')); ?> </li>
	</ul>
</div>
