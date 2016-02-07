<div class="notificationUsers index">
    <h2><?php echo __('Notification Users'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('user_id'); ?></th>
            <th><?php echo $this->Paginator->sort('notification_id'); ?></th>
            <th><?php echo $this->Paginator->sort('created'); ?></th>
            <th><?php echo $this->Paginator->sort('modified'); ?></th>
            <th><?php echo $this->Paginator->sort('created_by'); ?></th>
            <th><?php echo $this->Paginator->sort('modified_by'); ?></th>
            <th><?php echo $this->Paginator->sort('estado_message_id'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($notificationUsers as $notificationUser): ?>
            <tr>
                <td><?php echo h($notificationUser['NotificationUser']['id']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($notificationUser['User']['name'],
                            ['controller' => 'users', 'action' => 'view', $notificationUser['User']['id']]); ?>
                </td>
                <td>
                    <?php echo $this->Html->link($notificationUser['Notification']['title'], [
                            'controller' => 'notifications',
                            'action'     => 'view',
                            $notificationUser['Notification']['id'],
                    ]); ?>
                </td>
                <td><?php echo h($notificationUser['NotificationUser']['created']); ?>&nbsp;</td>
                <td><?php echo h($notificationUser['NotificationUser']['modified']); ?>&nbsp;</td>
                <td><?php echo h($notificationUser['NotificationUser']['created_by']); ?>&nbsp;</td>
                <td><?php echo h($notificationUser['NotificationUser']['modified_by']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($notificationUser['EstadoMessage']['name'], [
                            'controller' => 'estado_messages',
                            'action'     => 'view',
                            $notificationUser['EstadoMessage']['id'],
                    ]); ?>
                </td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'),
                            ['action' => 'view', $notificationUser['NotificationUser']['id']]); ?>
                    <?php echo $this->Html->link(__('Edit'),
                            ['action' => 'edit', $notificationUser['NotificationUser']['id']]); ?>
                    <?php echo $this->Form->postLink(__('Delete'),
                            ['action' => 'delete', $notificationUser['NotificationUser']['id']], [
                                    'confirm' => __('Are you sure you want to delete # %s?',
                                            $notificationUser['NotificationUser']['id']),
                            ]); ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <p>
        <?php
            echo $this->Paginator->counter([
                    'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'),
            ]);
        ?>    </p>
    <div class="paging">
        <?php
            echo $this->Paginator->prev('< ' . __('previous'), [], null, ['class' => 'prev disabled']);
            echo $this->Paginator->numbers(['separator' => '']);
            echo $this->Paginator->next(__('next') . ' >', [], null, ['class' => 'next disabled']);
        ?>
    </div>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('New Notification User'), ['action' => 'add']); ?></li>
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
