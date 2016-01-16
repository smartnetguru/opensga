<div class="cooperacaoAreas form">
<?php echo $this->Form->create('CooperacaoArea'); ?>
	<fieldset>
		<legend><?php echo __('Edit Cooperacao Area'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('created_by');
		echo $this->Form->input('modified_by');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CooperacaoArea.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CooperacaoArea.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Cooperacao Areas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Cooperacao Acordo Areas'), array('controller' => 'cooperacao_acordo_areas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cooperacao Acordo Area'), array('controller' => 'cooperacao_acordo_areas', 'action' => 'add')); ?> </li>
	</ul>
</div>
