<div class="messageUsers form">
    <?php echo $this->Form->create('MessageUser'); ?>
    <fieldset>
        <legend><?php echo __('Edit Message User'); ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('message_id');
            echo $this->Form->input('user_id');
            echo $this->Form->input('message_folder_id');
            echo $this->Form->input('estado_message_id');
            echo $this->Form->input('is_starred');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'), ['action' => 'delete', $this->Form->value('MessageUser.id')],
                    [
                            'confirm' => __('Are you sure you want to delete # %s?',
                                    $this->Form->value('MessageUser.id')),
                    ]); ?></li>
        <li><?php echo $this->Html->link(__('List Message Users'), ['action' => 'index']); ?></li>
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
