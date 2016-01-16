<div class="alunoNivelMedios form">
<?php echo $this->Form->create('AlunoNivelMedio');?>
	<fieldset>
		<legend><?php echo __('Add Aluno Nivel Medio'); ?></legend>
	<?php
		echo $this->Form->input('aluno_id');
		echo $this->Form->input('escola_nivel_medio_id');
		echo $this->Form->input('ano_conclusao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Aluno Nivel Medios'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Alunos'), array('controller' => 'alunos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aluno'), array('controller' => 'alunos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Escola Nivel Medios'), array('controller' => 'escola_nivel_medios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Escola Nivel Medio'), array('controller' => 'escola_nivel_medios', 'action' => 'add')); ?> </li>
	</ul>
</div>
