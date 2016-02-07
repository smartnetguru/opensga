<div class="notifications view">
    <h2><?php echo __('Notification'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($notification['Notification']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('User'); ?></dt>
        <dd>
            <?php echo $this->Html->link($notification['User']['id'],
                    ['controller' => 'users', 'action' => 'view', $notification['User']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Title'); ?></dt>
        <dd>
            <?php echo h($notification['Notification']['title']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Details'); ?></dt>
        <dd>
            <?php echo h($notification['Notification']['details']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($notification['Notification']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($notification['Notification']['modified']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created By'); ?></dt>
        <dd>
            <?php echo h($notification['Notification']['created_by']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified By'); ?></dt>
        <dd>
            <?php echo h($notification['Notification']['modified_by']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Estado Message'); ?></dt>
        <dd>
            <?php echo $this->Html->link($notification['EstadoMessage']['name'],
                    ['controller' => 'estado_messages', 'action' => 'view', $notification['EstadoMessage']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Area Notification'); ?></dt>
        <dd>
            <?php echo h($notification['Notification']['area_notification']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Notification'),
                    ['action' => 'edit', $notification['Notification']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Notification'),
                    ['action' => 'delete', $notification['Notification']['id']], [],
                    __('Are you sure you want to delete # %s?', $notification['Notification']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Notifications'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Notification'), ['action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Users'), ['controller' => 'users', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New User'), ['controller' => 'users', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Estado Messages'),
                    ['controller' => 'estado_messages', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Estado Message'),
                    ['controller' => 'estado_messages', 'action' => 'add']); ?> </li>
    </ul>
</div>
