<div class="messageUsers index">
	<h2><?php echo __('Message Users'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('message_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('message_folder_id'); ?></th>
			<th><?php echo $this->Paginator->sort('estado_message_id'); ?></th>
			<th><?php echo $this->Paginator->sort('is_starred'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($messageUsers as $messageUser): ?>
	<tr>
		<td><?php echo h($messageUser['MessageUser']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($messageUser['Message']['id'], array('controller' => 'messages', 'action' => 'view', $messageUser['Message']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($messageUser['User']['name'], array('controller' => 'users', 'action' => 'view', $messageUser['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($messageUser['MessageFolder']['name'], array('controller' => 'message_folders', 'action' => 'view', $messageUser['MessageFolder']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($messageUser['EstadoMessage']['name'], array('controller' => 'estado_messages', 'action' => 'view', $messageUser['EstadoMessage']['id'])); ?>
		</td>
		<td><?php echo h($messageUser['MessageUser']['is_starred']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $messageUser['MessageUser']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $messageUser['MessageUser']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $messageUser['MessageUser']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $messageUser['MessageUser']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
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
		<li><?php echo $this->Html->link(__('New Message User'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Messages'), array('controller' => 'messages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Message'), array('controller' => 'messages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Message Folders'), array('controller' => 'message_folders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Message Folder'), array('controller' => 'message_folders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estado Messages'), array('controller' => 'estado_messages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Message'), array('controller' => 'estado_messages', 'action' => 'add')); ?> </li>
	</ul>
</div>
