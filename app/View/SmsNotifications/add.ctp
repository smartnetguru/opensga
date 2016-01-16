<div class="smsNotifications form">
<?php echo $this->Form->create('SmsNotification'); ?>
	<fieldset>
		<legend><?php echo __('Add Sms Notification'); ?></legend>
	<?php
		echo $this->Form->input('phone_number');
		echo $this->Form->input('message');
		echo $this->Form->input('status');
		echo $this->Form->input('sms_notification_type_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sms Notifications'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sms Notification Types'), array('controller' => 'sms_notification_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sms Notification Type'), array('controller' => 'sms_notification_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
