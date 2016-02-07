<div class="tipoprecedencias form">
    <?php echo $this->Form->create('Tipoprecedencia'); ?>
    <fieldset>
        <legend><?php echo __('Edit Tipoprecedencia'); ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit', true)); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('Delete', true),
                    ['action' => 'delete', $this->Form->value('Tipoprecedencia.id')], null,
                    sprintf(__('Are you sure you want to delete # %s?', true),
                            $this->Form->value('Tipoprecedencia.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Tipoprecedencias', true), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Grupodisciplinas', true),
                    ['controller' => 'grupodisciplinas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Grupodisciplina', true),
                    ['controller' => 'grupodisciplinas', 'action' => 'add']); ?> </li>
    </ul>
</div>