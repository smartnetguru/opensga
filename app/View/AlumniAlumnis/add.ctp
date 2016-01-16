<div class="alumnis form">
<?php echo $this->Form->create('Alumni'); ?>
	<fieldset>
		<legend><?php echo __('Add Alumni'); ?></legend>
	<?php
		echo $this->Form->input('entidade_id');
		echo $this->Form->input('aluno_id');
		echo $this->Form->input('data_registo');
		echo $this->Form->input('candidato_alumni_id');
		echo $this->Form->input('created_by');
		echo $this->Form->input('modified_by');
		echo $this->Form->input('user_id');
		echo $this->Form->input('data_aprovacao');
		echo $this->Form->input('user_aprovacao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Alumnis'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Entidades'), array('controller' => 'entidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entidade'), array('controller' => 'entidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alunos'), array('controller' => 'alunos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aluno'), array('controller' => 'alunos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Candidato Alumnis'), array('controller' => 'candidato_alumnis', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidato Alumni'), array('controller' => 'candidato_alumnis', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
