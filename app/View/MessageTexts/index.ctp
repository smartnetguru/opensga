<div class="messageTexts index">
	<h2><?php echo __('Message Texts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('message_id'); ?></th>
			<th><?php echo $this->Paginator->sort('texto'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($messageTexts as $messageText): ?>
	<tr>
		<td><?php echo h($messageText['MessageText']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($messageText['Message']['id'], array('controller' => 'messages', 'action' => 'view', $messageText['Message']['id'])); ?>
		</td>
		<td><?php echo h($messageText['MessageText']['texto']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $messageText['MessageText']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $messageText['MessageText']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $messageText['MessageText']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $messageText['MessageText']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Message Text'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Messages'), array('controller' => 'messages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Message'), array('controller' => 'messages', 'action' => 'add')); ?> </li>
	</ul>
</div>
