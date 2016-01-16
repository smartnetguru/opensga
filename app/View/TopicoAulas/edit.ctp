<div class="topicoAulas form">
<?php echo $this->Form->create('TopicoAula'); ?>
	<fieldset>
		<legend><?php echo __('Edit Topico Aula'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('aula_id');
		echo $this->Form->input('topico');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TopicoAula.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('TopicoAula.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Topico Aulas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Aulas'), array('controller' => 'aulas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aula'), array('controller' => 'aulas', 'action' => 'add')); ?> </li>
	</ul>
</div>
