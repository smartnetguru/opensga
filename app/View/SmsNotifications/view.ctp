<div class="smsNotifications view">
    <h2><?php echo __('Sms Notification'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($smsNotification['SmsNotification']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Phone Number'); ?></dt>
        <dd>
            <?php echo h($smsNotification['SmsNotification']['phone_number']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Message'); ?></dt>
        <dd>
            <?php echo h($smsNotification['SmsNotification']['message']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Status'); ?></dt>
        <dd>
            <?php echo h($smsNotification['SmsNotification']['status']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Sms Notification Type'); ?></dt>
        <dd>
            <?php echo $this->Html->link($smsNotification['SmsNotificationType']['name'], [
                    'controller' => 'sms_notification_types',
                    'action'     => 'view',
                    $smsNotification['SmsNotificationType']['id'],
            ]); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Sms Notification'),
                    ['action' => 'edit', $smsNotification['SmsNotification']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Sms Notification'),
                    ['action' => 'delete', $smsNotification['SmsNotification']['id']], null,
                    __('Are you sure you want to delete # %s?', $smsNotification['SmsNotification']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Sms Notifications'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Sms Notification'), ['action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Sms Notification Types'),
                    ['controller' => 'sms_notification_types', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Sms Notification Type'),
                    ['controller' => 'sms_notification_types', 'action' => 'add']); ?> </li>
    </ul>
</div>
