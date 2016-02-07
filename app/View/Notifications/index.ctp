<div class="notifications index">
    <h2><?php echo __('Notifications'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('user_id'); ?></th>
            <th><?php echo $this->Paginator->sort('title'); ?></th>
            <th><?php echo $this->Paginator->sort('details'); ?></th>
            <th><?php echo $this->Paginator->sort('created'); ?></th>
            <th><?php echo $this->Paginator->sort('modified'); ?></th>
            <th><?php echo $this->Paginator->sort('created_by'); ?></th>
            <th><?php echo $this->Paginator->sort('modified_by'); ?></th>
            <th><?php echo $this->Paginator->sort('estado_message_id'); ?></th>
            <th><?php echo $this->Paginator->sort('area_notification'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($notifications as $notification): ?>
            <tr>
                <td><?php echo h($notification['Notification']['id']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($notification['User']['id'],
                            ['controller' => 'users', 'action' => 'view', $notification['User']['id']]); ?>
                </td>
                <td><?php echo h($notification['Notification']['title']); ?>&nbsp;</td>
                <td><?php echo h($notification['Notification']['details']); ?>&nbsp;</td>
                <td><?php echo h($notification['Notification']['created']); ?>&nbsp;</td>
                <td><?php echo h($notification['Notification']['modified']); ?>&nbsp;</td>
                <td><?php echo h($notification['Notification']['created_by']); ?>&nbsp;</td>
                <td><?php echo h($notification['Notification']['modified_by']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($notification['EstadoMessage']['name'], [
                            'controller' => 'estado_messages',
                            'action'     => 'view',
                            $notification['EstadoMessage']['id'],
                    ]); ?>
                </td>
                <td><?php echo h($notification['Notification']['area_notification']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'),
                            ['action' => 'view', $notification['Notification']['id']]); ?>
                    <?php echo $this->Html->link(__('Edit'),
                            ['action' => 'edit', $notification['Notification']['id']]); ?>
                    <?php echo $this->Form->postLink(__('Delete'),
                            ['action' => 'delete', $notification['Notification']['id']], [],
                            __('Are you sure you want to delete # %s?', $notification['Notification']['id'])); ?>
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
        <li><?php echo $this->Html->link(__('New Notification'), ['action' => 'add']); ?></li>
        <li><?php echo $this->Html->link(__('List Users'), ['controller' => 'users', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New User'), ['controller' => 'users', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Estado Messages'),
                    ['controller' => 'estado_messages', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Estado Message'),
                    ['controller' => 'estado_messages', 'action' => 'add']); ?> </li>
    </ul>
</div>
