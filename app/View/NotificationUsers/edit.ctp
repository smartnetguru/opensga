<div class="notificationUsers form">
<?php echo $this->Form->create('NotificationUser'); ?>
	<fieldset>
		<legend><?php echo __('Edit Notification User'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('NotificationUser.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('NotificationUser.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Notification Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Notifications'), array('controller' => 'notifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Notification'), array('controller' => 'notifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estado Messages'), array('controller' => 'estado_messages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Message'), array('controller' => 'estado_messages', 'action' => 'add')); ?> </li>
	</ul>
</div>
