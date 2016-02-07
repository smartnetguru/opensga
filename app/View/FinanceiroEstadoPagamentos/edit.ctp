<div class="financeiroEstadoPagamentos form">
    <?php echo $this->Form->create('FinanceiroEstadoPagamento'); ?>
    <fieldset>
        <legend><?php echo __('Edit Financeiro Estado Pagamento'); ?></legend>
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

        <li><?php echo $this->Form->postLink(__('Delete'),
                    ['action' => 'delete', $this->Form->value('FinanceiroEstadoPagamento.id')], null,
                    __('Are you sure you want to delete # %s?',
                            $this->Form->value('FinanceiroEstadoPagamento.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Financeiro Estado Pagamentos'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Financeiro Pagamentos'),
                    ['controller' => 'financeiro_pagamentos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Financeiro Pagamento'),
                    ['controller' => 'financeiro_pagamentos', 'action' => 'add']); ?> </li>
    </ul>
</div>
