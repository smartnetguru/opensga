<div class="messageUsers form">
<?php echo $this->Form->create('MessageUser'); ?>
	<fieldset>
		<legend><?php echo __('Add Message User'); ?></legend>
	<?php
		echo $this->Form->input('message_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('message_folder_id');
		echo $this->Form->input('estado_message_id');
		echo $this->Form->input('is_starred');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Message Users'), array('action' => 'index')); ?></li>
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
