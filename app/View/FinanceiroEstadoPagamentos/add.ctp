<div class="financeiroEstadoPagamentos form">
    <?php echo $this->Form->create('FinanceiroEstadoPagamento'); ?>
    <fieldset>
        <legend><?php echo __('Add Financeiro Estado Pagamento'); ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Financeiro Estado Pagamentos'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Financeiro Pagamentos'),
                    ['controller' => 'financeiro_pagamentos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Financeiro Pagamento'),
                    ['controller' => 'financeiro_pagamentos', 'action' => 'add']); ?> </li>
    </ul>
</div>
