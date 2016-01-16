<div class="messageTexts view">
<h2><?php echo __('Message Text'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($messageText['MessageText']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Message'); ?></dt>
		<dd>
			<?php echo $this->Html->link($messageText['Message']['id'], array('controller' => 'messages', 'action' => 'view', $messageText['Message']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Texto'); ?></dt>
		<dd>
			<?php echo h($messageText['MessageText']['texto']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Message Text'), array('action' => 'edit', $messageText['MessageText']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Message Text'), array('action' => 'delete', $messageText['MessageText']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $messageText['MessageText']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Message Texts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Message Text'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Messages'), array('controller' => 'messages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Message'), array('controller' => 'messages', 'action' => 'add')); ?> </li>
	</ul>
</div>
