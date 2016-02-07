<div class="smsEnviadas form">
    <?php echo $this->Form->create('SmsEnviada'); ?>
    <fieldset>
        <legend><?php echo __('Edit Sms Enviada'); ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('destination');
            echo $this->Form->input('text');
            echo $this->Form->input('user_id');
            echo $this->Form->input('sms_tipo_id');
            echo $this->Form->input('created_by');
            echo $this->Form->input('modified_by');
            echo $this->Form->input('resultado');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'), ['action' => 'delete', $this->Form->value('SmsEnviada.id')],
                    null, __('Are you sure you want to delete # %s?', $this->Form->value('SmsEnviada.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Sms Enviadas'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Users'), ['controller' => 'users', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New User'), ['controller' => 'users', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Sms Tipos'),
                    ['controller' => 'sms_tipos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Sms Tipo'), ['controller' => 'sms_tipos', 'action' => 'add']); ?> </li>
    </ul>
</div>
