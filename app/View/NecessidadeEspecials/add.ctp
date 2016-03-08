<div class="necessidadeEspecials form">
    <?php echo $this->Form->create('NecessidadeEspecial'); ?>
    <fieldset>
        <legend><?php echo __('Add Necessidade Especial'); ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Necessidade Especials'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Entidade Necessidades'),
                    ['controller' => 'entidade_necessidades', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Entidade Necessidade'),
                    ['controller' => 'entidade_necessidades', 'action' => 'add']); ?> </li>
    </ul>
</div>
