<div class="grauAcademicos form">
<?php echo $this->Form->create('GrauAcademico'); ?>
	<fieldset>
		<legend><?php echo __('Add Grau Academico'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Grau Academicos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Candidato Alumnis'), array('controller' => 'candidato_alumnis', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidato Alumni'), array('controller' => 'candidato_alumnis', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Funcionarios'), array('controller' => 'funcionarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcionario'), array('controller' => 'funcionarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
