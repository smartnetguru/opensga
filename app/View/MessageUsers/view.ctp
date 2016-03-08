<div class="messageUsers view">
    <h2><?php echo __('Message User'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($messageUser['MessageUser']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Message'); ?></dt>
        <dd>
            <?php echo $this->Html->link($messageUser['Message']['id'],
                    ['controller' => 'messages', 'action' => 'view', $messageUser['Message']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('User'); ?></dt>
        <dd>
            <?php echo $this->Html->link($messageUser['User']['name'],
                    ['controller' => 'users', 'action' => 'view', $messageUser['User']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Message Folder'); ?></dt>
        <dd>
            <?php echo $this->Html->link($messageUser['MessageFolder']['name'],
                    ['controller' => 'message_folders', 'action' => 'view', $messageUser['MessageFolder']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Estado Message'); ?></dt>
        <dd>
            <?php echo $this->Html->link($messageUser['EstadoMessage']['name'],
                    ['controller' => 'estado_messages', 'action' => 'view', $messageUser['EstadoMessage']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Is Starred'); ?></dt>
        <dd>
            <?php echo h($messageUser['MessageUser']['is_starred']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Message User'),
                    ['action' => 'edit', $messageUser['MessageUser']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Message User'),
                    ['action' => 'delete', $messageUser['MessageUser']['id']], [
                            'confirm' => __('Are you sure you want to delete # %s?', $messageUser['MessageUser']['id']),
                    ]); ?> </li>
        <li><?php echo $this->Html->link(__('List Message Users'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Message User'), ['action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Messages'),
                    ['controller' => 'messages', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Message'), ['controller' => 'messages', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Users'), ['controller' => 'users', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New User'), ['controller' => 'users', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Message Folders'),
                    ['controller' => 'message_folders', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Message Folder'),
                    ['controller' => 'message_folders', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Estado Messages'),
                    ['controller' => 'estado_messages', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Estado Message'),
                    ['controller' => 'estado_messages', 'action' => 'add']); ?> </li>
    </ul>
</div>
