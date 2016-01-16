<div class="cooperacaoAcordoAreas form">
<?php echo $this->Form->create('CooperacaoAcordoArea'); ?>
	<fieldset>
		<legend><?php echo __('Add Cooperacao Acordo Area'); ?></legend>
	<?php
		echo $this->Form->input('cooperacao_acordo_id');
		echo $this->Form->input('cooperacao_area_id');
		echo $this->Form->input('created_by');
		echo $this->Form->input('modified_by');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cooperacao Acordo Areas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Cooperacao Acordos'), array('controller' => 'cooperacao_acordos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cooperacao Acordo'), array('controller' => 'cooperacao_acordos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cooperacao Areas'), array('controller' => 'cooperacao_areas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cooperacao Area'), array('controller' => 'cooperacao_areas', 'action' => 'add')); ?> </li>
	</ul>
</div>
