<div class="notificationUsers form">
    <?php echo $this->Form->create('NotificationUser'); ?>
    <fieldset>
        <legend><?php echo __('Add Notification User'); ?></legend>
        <?php
            echo $this->Form->input('user_id');
            echo $this->Form->input('notification_id');
            echo $this->Form->input('created_by');
            echo $this->Form->input('modified_by');
            echo $this->Form->input('estado_message_id');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Notification Users'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Users'), ['controller' => 'users', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New User'), ['controller' => 'users', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Notifications'),
                    ['controller' => 'notifications', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Notification'),
                    ['controller' => 'notifications', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Estado Messages'),
                    ['controller' => 'estado_messages', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Estado Message'),
                    ['controller' => 'estado_messages', 'action' => 'add']); ?> </li>
    </ul>
</div>
