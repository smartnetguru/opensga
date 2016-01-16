<div class="smsEnviadas form">
<?php echo $this->Form->create('SmsEnviada'); ?>
	<fieldset>
		<legend><?php echo __('Add Sms Enviada'); ?></legend>
	<?php
		echo $this->Form->input('destination');
		echo $this->Form->input('text');
		echo $this->Form->input('user_id');
		echo $this->Form->input('sms_tipo_id');
		echo $this->Form->input('created_by');
		echo $this->Form->input('modified_by');
		echo $this->Form->input('resultado');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sms Enviadas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sms Tipos'), array('controller' => 'sms_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sms Tipo'), array('controller' => 'sms_tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
