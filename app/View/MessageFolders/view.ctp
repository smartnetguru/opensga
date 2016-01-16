<div class="messageFolders view">
<h2><?php echo __('Message Folder'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($messageFolder['MessageFolder']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($messageFolder['MessageFolder']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Message Folder'), array('action' => 'edit', $messageFolder['MessageFolder']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Message Folder'), array('action' => 'delete', $messageFolder['MessageFolder']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $messageFolder['MessageFolder']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Message Folders'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Message Folder'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Message Users'), array('controller' => 'message_users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Message User'), array('controller' => 'message_users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Message Users'); ?></h3>
	<?php if (!empty($messageFolder['MessageUser'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Message Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Message Folder Id'); ?></th>
		<th><?php echo __('Estado Message Id'); ?></th>
		<th><?php echo __('Is Starred'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($messageFolder['MessageUser'] as $messageUser): ?>
		<tr>
			<td><?php echo $messageUser['id']; ?></td>
			<td><?php echo $messageUser['message_id']; ?></td>
			<td><?php echo $messageUser['user_id']; ?></td>
			<td><?php echo $messageUser['message_folder_id']; ?></td>
			<td><?php echo $messageUser['estado_message_id']; ?></td>
			<td><?php echo $messageUser['is_starred']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'message_users', 'action' => 'view', $messageUser['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'message_users', 'action' => 'edit', $messageUser['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'message_users', 'action' => 'delete', $messageUser['id']), array('confirm' => __('Are you sure you want to delete # %s?', $messageUser['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Message User'), array('controller' => 'message_users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
