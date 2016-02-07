<div class="financeiroBancos form">
    <?php echo $this->Form->create('FinanceiroBanco'); ?>
    <fieldset>
        <legend><?php echo __('Edit Financeiro Banco'); ?></legend>
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
                    ['action' => 'delete', $this->Form->value('FinanceiroBanco.id')], null,
                    __('Are you sure you want to delete # %s?', $this->Form->value('FinanceiroBanco.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Financeiro Bancos'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Financeiro Depositos'),
                    ['controller' => 'financeiro_depositos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Financeiro Deposito'),
                    ['controller' => 'financeiro_depositos', 'action' => 'add']); ?> </li>
    </ul>
</div>
