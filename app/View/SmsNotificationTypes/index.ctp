<div class="smsNotificationTypes index">
	<h2><?php echo __('Sms Notification Types'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('code'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($smsNotificationTypes as $smsNotificationType): ?>
	<tr>
		<td><?php echo h($smsNotificationType['SmsNotificationType']['id']); ?>&nbsp;</td>
		<td><?php echo h($smsNotificationType['SmsNotificationType']['name']); ?>&nbsp;</td>
		<td><?php echo h($smsNotificationType['SmsNotificationType']['code']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $smsNotificationType['SmsNotificationType']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $smsNotificationType['SmsNotificationType']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $smsNotificationType['SmsNotificationType']['id']), null, __('Are you sure you want to delete # %s?', $smsNotificationType['SmsNotificationType']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Sms Notification Type'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sms Notifications'), array('controller' => 'sms_notifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sms Notification'), array('controller' => 'sms_notifications', 'action' => 'add')); ?> </li>
	</ul>
</div>
