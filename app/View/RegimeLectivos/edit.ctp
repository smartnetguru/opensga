<div class="regimeLectivos form">
<?php echo $this->Form->create('RegimeLectivo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Regime Lectivo'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('RegimeLectivo.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('RegimeLectivo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Regime Lectivos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Matriculas'), array('controller' => 'matriculas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Matricula'), array('controller' => 'matriculas', 'action' => 'add')); ?> </li>
	</ul>
</div>
