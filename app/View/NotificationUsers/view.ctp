<div class="notificationUsers view">
    <h2><?php echo __('Notification User'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($notificationUser['NotificationUser']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('User'); ?></dt>
        <dd>
            <?php echo $this->Html->link($notificationUser['User']['name'],
                    ['controller' => 'users', 'action' => 'view', $notificationUser['User']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Notification'); ?></dt>
        <dd>
            <?php echo $this->Html->link($notificationUser['Notification']['title'],
                    ['controller' => 'notifications', 'action' => 'view', $notificationUser['Notification']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($notificationUser['NotificationUser']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($notificationUser['NotificationUser']['modified']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created By'); ?></dt>
        <dd>
            <?php echo h($notificationUser['NotificationUser']['created_by']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified By'); ?></dt>
        <dd>
            <?php echo h($notificationUser['NotificationUser']['modified_by']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Estado Message'); ?></dt>
        <dd>
            <?php echo $this->Html->link($notificationUser['EstadoMessage']['name'], [
                    'controller' => 'estado_messages',
                    'action'     => 'view',
                    $notificationUser['EstadoMessage']['id'],
            ]); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Notification User'),
                    ['action' => 'edit', $notificationUser['NotificationUser']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Notification User'),
                    ['action' => 'delete', $notificationUser['NotificationUser']['id']], [
                            'confirm' => __('Are you sure you want to delete # %s?',
                                    $notificationUser['NotificationUser']['id']),
                    ]); ?> </li>
        <li><?php echo $this->Html->link(__('List Notification Users'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Notification User'), ['action' => 'add']); ?> </li>
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
