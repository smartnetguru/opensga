<div class="smsNotificationTypes form">
    <?php echo $this->Form->create('SmsNotificationType'); ?>
    <fieldset>
        <legend><?php echo __('Edit Sms Notification Type'); ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('name');
            echo $this->Form->input('code');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'),
                    ['action' => 'delete', $this->Form->value('SmsNotificationType.id')], null,
                    __('Are you sure you want to delete # %s?', $this->Form->value('SmsNotificationType.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Sms Notification Types'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Sms Notifications'),
                    ['controller' => 'sms_notifications', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Sms Notification'),
                    ['controller' => 'sms_notifications', 'action' => 'add']); ?> </li>
    </ul>
</div>
