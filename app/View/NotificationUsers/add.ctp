<div class="notificationUsers form">
<?php echo $this->Form->create('NotificationUser'); ?>
	<fieldset>
		<legend><?php echo __('Add Notification User'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('notification_id');
		echo $this->Form->input('created_by');
		echo $this->Form->input('modified_by');
		echo $this->Form->input('estado_message_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Notification Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Notifications'), array('controller' => 'notifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Notification'), array('controller' => 'notifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estado Messages'), array('controller' => 'estado_messages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Message'), array('controller' => 'estado_messages', 'action' => 'add')); ?> </li>
	</ul>
</div>
