<div class="salaAulas form">
<?php echo $this->Form->create('SalaAula'); ?>
	<fieldset>
		<legend><?php echo __('Add Sala Aula'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('capacidade_maxima');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sala Aulas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Turmas'), array('controller' => 'turmas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Turma'), array('controller' => 'turmas', 'action' => 'add')); ?> </li>
	</ul>
</div>
