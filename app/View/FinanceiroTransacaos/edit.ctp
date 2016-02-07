<div class="financeiroTransacaos form">
    <?php echo $this->Form->create('FinanceiroTransacao'); ?>
    <fieldset>
        <legend><?php echo __('Edit Financeiro Transacao'); ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('financeiro_tipo_transacao_id');
            echo $this->Form->input('valor');
            echo $this->Form->input('entidade_id');
            echo $this->Form->input('financeiro_conta_id');
            echo $this->Form->input('created_by');
            echo $this->Form->input('modified_by');
            echo $this->Form->input('valor_relatorio');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'),
                    ['action' => 'delete', $this->Form->value('FinanceiroTransacao.id')], null,
                    __('Are you sure you want to delete # %s?', $this->Form->value('FinanceiroTransacao.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Financeiro Transacaos'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Financeiro Tipo Transacaos'),
                    ['controller' => 'financeiro_tipo_transacaos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Financeiro Tipo Transacao'),
                    ['controller' => 'financeiro_tipo_transacaos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Entidades'),
                    ['controller' => 'entidades', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Entidade'), ['controller' => 'entidades', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Financeiro Contas'),
                    ['controller' => 'financeiro_contas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Financeiro Conta'),
                    ['controller' => 'financeiro_contas', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Financeiro Depositos'),
                    ['controller' => 'financeiro_depositos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Financeiro Deposito'),
                    ['controller' => 'financeiro_depositos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Financeiro Pagamentos'),
                    ['controller' => 'financeiro_pagamentos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Financeiro Pagamento'),
                    ['controller' => 'financeiro_pagamentos', 'action' => 'add']); ?> </li>
    </ul>
</div>
