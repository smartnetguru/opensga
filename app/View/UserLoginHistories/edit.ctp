<div class="userLoginHistories form">
<?php echo $this->Form->create('UserLoginHistorie'); ?>
	<fieldset>
		<legend><?php echo __('Edit User Login Historie'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('login_date');
		echo $this->Form->input('ip');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('UserLoginHistorie.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('UserLoginHistorie.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List User Login Histories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
