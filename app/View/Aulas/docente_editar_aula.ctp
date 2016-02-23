<div class="aulas form">
<?php echo $this->Form->create('Aula'); ?>
	<fieldset>
		<legend><?php echo __('Edit Aula'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('turma_id');
		echo $this->Form->input('docente_id');
		echo $this->Form->input('tema_aula');
		echo $this->Form->input('inicio_aula');
		echo $this->Form->input('fim_aula');
		echo $this->Form->input('sala_aula_id');
		echo $this->Form->input('created_by');
		echo $this->Form->input('modified_by');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Aula.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Aula.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Aulas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Turmas'), array('controller' => 'turmas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Turma'), array('controller' => 'turmas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Docentes'), array('controller' => 'docentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docente'), array('controller' => 'docentes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sala Aulas'), array('controller' => 'sala_aulas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sala Aula'), array('controller' => 'sala_aulas', 'action' => 'add')); ?> </li>
	</ul>
</div>
