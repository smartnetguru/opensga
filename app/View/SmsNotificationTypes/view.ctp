<div class="smsNotificationTypes view">
<h2><?php  echo __('Sms Notification Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($smsNotificationType['SmsNotificationType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($smsNotificationType['SmsNotificationType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($smsNotificationType['SmsNotificationType']['code']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sms Notification Type'), array('action' => 'edit', $smsNotificationType['SmsNotificationType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sms Notification Type'), array('action' => 'delete', $smsNotificationType['SmsNotificationType']['id']), null, __('Are you sure you want to delete # %s?', $smsNotificationType['SmsNotificationType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sms Notification Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sms Notification Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sms Notifications'), array('controller' => 'sms_notifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sms Notification'), array('controller' => 'sms_notifications', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Sms Notifications'); ?></h3>
	<?php if (!empty($smsNotificationType['SmsNotification'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Phone Number'); ?></th>
		<th><?php echo __('Message'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Sms Notification Type Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($smsNotificationType['SmsNotification'] as $smsNotification): ?>
		<tr>
			<td><?php echo $smsNotification['id']; ?></td>
			<td><?php echo $smsNotification['phone_number']; ?></td>
			<td><?php echo $smsNotification['message']; ?></td>
			<td><?php echo $smsNotification['status']; ?></td>
			<td><?php echo $smsNotification['sms_notification_type_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sms_notifications', 'action' => 'view', $smsNotification['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sms_notifications', 'action' => 'edit', $smsNotification['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sms_notifications', 'action' => 'delete', $smsNotification['id']), null, __('Are you sure you want to delete # %s?', $smsNotification['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sms Notification'), array('controller' => 'sms_notifications', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
