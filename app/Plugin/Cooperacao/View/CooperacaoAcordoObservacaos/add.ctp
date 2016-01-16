<div class="cooperacaoAcordoObservacaos form">
<?php echo $this->Form->create('CooperacaoAcordoObservacao'); ?>
	<fieldset>
		<legend><?php echo __('Add Cooperacao Acordo Observacao'); ?></legend>
	<?php
		echo $this->Form->input('cooperacao_acordo_id');
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

		<li><?php echo $this->Html->link(__('List Cooperacao Acordo Observacaos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Cooperacao Acordos'), array('controller' => 'cooperacao_acordos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cooperacao Acordo'), array('controller' => 'cooperacao_acordos', 'action' => 'add')); ?> </li>
	</ul>
</div>
