<div class="messageFolders form">
<?php echo $this->Form->create('MessageFolder'); ?>
	<fieldset>
		<legend><?php echo __('Edit Message Folder'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('MessageFolder.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('MessageFolder.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Message Folders'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Message Users'), array('controller' => 'message_users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Message User'), array('controller' => 'message_users', 'action' => 'add')); ?> </li>
	</ul>
</div>
