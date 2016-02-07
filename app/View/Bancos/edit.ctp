<div class="bancos form">
    <?php echo $this->Form->create('Banco'); ?>
    <fieldset>
        <legend><?php echo __('Edit Banco'); ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'), ['action' => 'delete', $this->Form->value('Banco.id')], null,
                    __('Are you sure you want to delete # %s?', $this->Form->value('Banco.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Bancos'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Bolsa Bolsas'),
                    ['controller' => 'bolsa_bolsas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Bolsa Bolsa'),
                    ['controller' => 'bolsa_bolsas', 'action' => 'add']); ?> </li>
    </ul>
</div>
