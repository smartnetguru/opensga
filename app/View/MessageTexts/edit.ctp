<div class="messageTexts form">
    <?php echo $this->Form->create('MessageText'); ?>
    <fieldset>
        <legend><?php echo __('Edit Message Text'); ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('message_id');
            echo $this->Form->input('texto');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'), ['action' => 'delete', $this->Form->value('MessageText.id')],
                    [
                            'confirm' => __('Are you sure you want to delete # %s?',
                                    $this->Form->value('MessageText.id')),
                    ]); ?></li>
        <li><?php echo $this->Html->link(__('List Message Texts'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Messages'),
                    ['controller' => 'messages', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Message'), ['controller' => 'messages', 'action' => 'add']); ?> </li>
    </ul>
</div>
