<div class="notificationUsers view">
<h2><?php echo __('Notification User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($notificationUser['NotificationUser']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($notificationUser['User']['name'], array('controller' => 'users', 'action' => 'view', $notificationUser['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notification'); ?></dt>
		<dd>
			<?php echo $this->Html->link($notificationUser['Notification']['title'], array('controller' => 'notifications', 'action' => 'view', $notificationUser['Notification']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($notificationUser['NotificationUser']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($notificationUser['NotificationUser']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($notificationUser['NotificationUser']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($notificationUser['NotificationUser']['modified_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado Message'); ?></dt>
		<dd>
			<?php echo $this->Html->link($notificationUser['EstadoMessage']['name'], array('controller' => 'estado_messages', 'action' => 'view', $notificationUser['EstadoMessage']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Notification User'), array('action' => 'edit', $notificationUser['NotificationUser']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Notification User'), array('action' => 'delete', $notificationUser['NotificationUser']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $notificationUser['NotificationUser']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Notification Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Notification User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Notifications'), array('controller' => 'notifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Notification'), array('controller' => 'notifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estado Messages'), array('controller' => 'estado_messages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Message'), array('controller' => 'estado_messages', 'action' => 'add')); ?> </li>
	</ul>
</div>
