<div class="financeiroFormaDepositos form">
    <?php echo $this->Form->create('FinanceiroFormaDeposito'); ?>
    <fieldset>
        <legend><?php echo __('Edit Financeiro Forma Deposito'); ?></legend>
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
                    ['action' => 'delete', $this->Form->value('FinanceiroFormaDeposito.id')], null,
                    __('Are you sure you want to delete # %s?',
                            $this->Form->value('FinanceiroFormaDeposito.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Financeiro Forma Depositos'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Financeiro Depositos'),
                    ['controller' => 'financeiro_depositos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Financeiro Deposito'),
                    ['controller' => 'financeiro_depositos', 'action' => 'add']); ?> </li>
    </ul>
</div>
