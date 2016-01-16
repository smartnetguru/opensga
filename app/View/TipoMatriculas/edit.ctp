<div class="tipoMatriculas form">
<?php echo $this->Form->create('TipoMatricula'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tipo Matricula'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TipoMatricula.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('TipoMatricula.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tipo Matriculas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Matriculas'), array('controller' => 'matriculas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Matricula'), array('controller' => 'matriculas', 'action' => 'add')); ?> </li>
	</ul>
</div>
