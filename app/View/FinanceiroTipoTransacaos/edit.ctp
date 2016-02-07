<div class="financeiroTipoTransacaos form">
    <?php echo $this->Form->create('FinanceiroTipoTransacao'); ?>
    <fieldset>
        <legend><?php echo __('Edit Financeiro Tipo Transacao'); ?></legend>
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
                    ['action' => 'delete', $this->Form->value('FinanceiroTipoTransacao.id')], null,
                    __('Are you sure you want to delete # %s?',
                            $this->Form->value('FinanceiroTipoTransacao.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Financeiro Tipo Transacaos'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Financeiro Transacaos'),
                    ['controller' => 'financeiro_transacaos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Financeiro Transacao'),
                    ['controller' => 'financeiro_transacaos', 'action' => 'add']); ?> </li>
    </ul>
</div>
