<div class="months form">
    <?php echo $this->Form->create('Month'); ?>
    <fieldset>
        <legend><?php echo __('Add Month'); ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Months'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Escolas Tipopagamentos'),
                    ['controller' => 'escolas_tipopagamentos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Escolas Tipopagamento'),
                    ['controller' => 'escolas_tipopagamentos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Feriados'),
                    ['controller' => 'feriados', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Feriado'), ['controller' => 'feriados', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Mensalidades'),
                    ['controller' => 'mensalidades', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Mensalidade'),
                    ['controller' => 'mensalidades', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Tipopagamentos'),
                    ['controller' => 'tipopagamentos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Tipopagamento'),
                    ['controller' => 'tipopagamentos', 'action' => 'add']); ?> </li>
    </ul>
</div>
