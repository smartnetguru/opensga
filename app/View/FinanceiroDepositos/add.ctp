<div class="financeiroDepositos form">
    <?php echo $this->Form->create('FinanceiroDeposito'); ?>
    <fieldset>
        <legend><?php echo __('Add Financeiro Deposito'); ?></legend>
        <?php
            echo $this->Form->input('entidade_id');
            echo $this->Form->input('financeiro_conta_id');
            echo $this->Form->input('data_deposito');
            echo $this->Form->input('data_reconciliacao');
            echo $this->Form->input('financeiro_estado_deposito_id');
            echo $this->Form->input('created_by');
            echo $this->Form->input('modified_by');
            echo $this->Form->input('numero_comprovativo');
            echo $this->Form->input('financeiro_forma_deposito_id');
            echo $this->Form->input('financeiro_banco_id');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Financeiro Depositos'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Entidades'),
                    ['controller' => 'entidades', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Entidade'), ['controller' => 'entidades', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Financeiro Contas'),
                    ['controller' => 'financeiro_contas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Financeiro Conta'),
                    ['controller' => 'financeiro_contas', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Financeiro Estado Depositos'),
                    ['controller' => 'financeiro_estado_depositos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Financeiro Estado Deposito'),
                    ['controller' => 'financeiro_estado_depositos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Financeiro Forma Depositos'),
                    ['controller' => 'financeiro_forma_depositos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Financeiro Forma Deposito'),
                    ['controller' => 'financeiro_forma_depositos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Financeiro Bancos'),
                    ['controller' => 'financeiro_bancos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Financeiro Banco'),
                    ['controller' => 'financeiro_bancos', 'action' => 'add']); ?> </li>
    </ul>
</div>
