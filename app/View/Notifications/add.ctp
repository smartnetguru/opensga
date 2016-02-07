<div class="notifications form">
    <?php echo $this->Form->create('Notification'); ?>
    <fieldset>
        <legend><?php echo __('Add Notification'); ?></legend>
        <?php
            echo $this->Form->input('user_id');
            echo $this->Form->input('title');
            echo $this->Form->input('details');
            echo $this->Form->input('created_by');
            echo $this->Form->input('modified_by');
            echo $this->Form->input('estado_message_id');
            echo $this->Form->input('area_notification');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Notifications'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Users'), ['controller' => 'users', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New User'), ['controller' => 'users', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Estado Messages'),
                    ['controller' => 'estado_messages', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Estado Message'),
                    ['controller' => 'estado_messages', 'action' => 'add']); ?> </li>
    </ul>
</div>
