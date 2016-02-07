<div class="messages form">
    <?php echo $this->Form->create('Message'); ?>
    <fieldset>
        <legend><?php echo __('Edit Message'); ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('user_id');
            echo $this->Form->input('assunto');
            echo $this->Form->input('data_envio');
            echo $this->Form->input('estado_objecto_id');
            echo $this->Form->input('created_by');
            echo $this->Form->input('modified_by');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'), ['action' => 'delete', $this->Form->value('Message.id')], [
                    'confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Message.id')),
            ]); ?></li>
        <li><?php echo $this->Html->link(__('List Messages'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Users'), ['controller' => 'users', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New User'), ['controller' => 'users', 'action' => 'add']); ?> </li>
    </ul>
</div>
