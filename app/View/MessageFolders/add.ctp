<div class="messageFolders form">
    <?php echo $this->Form->create('MessageFolder'); ?>
    <fieldset>
        <legend><?php echo __('Add Message Folder'); ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Message Folders'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Message Users'),
                    ['controller' => 'message_users', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Message User'),
                    ['controller' => 'message_users', 'action' => 'add']); ?> </li>
    </ul>
</div>
