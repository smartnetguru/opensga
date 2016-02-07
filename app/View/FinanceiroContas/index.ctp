<div class="financeiroContas index">
    <h2><?php echo __('Financeiro Contas'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('entidade_id'); ?></th>
            <th><?php echo $this->Paginator->sort('saldo_actual'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php
            foreach ($financeiroContas as $financeiroConta): ?>
                <tr>
                    <td><?php echo h($financeiroConta['FinanceiroConta']['id']); ?>&nbsp;</td>
                    <td>
                        <?php echo $this->Html->link($financeiroConta['Entidade']['name'], [
                                'controller' => 'entidades',
                                'action'     => 'view',
                                $financeiroConta['Entidade']['id'],
                        ]); ?>
                    </td>
                    <td><?php echo h($financeiroConta['FinanceiroConta']['saldo_actual']); ?>&nbsp;</td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'),
                                ['action' => 'view', $financeiroConta['FinanceiroConta']['id']]); ?>
                        <?php echo $this->Html->link(__('Edit'),
                                ['action' => 'edit', $financeiroConta['FinanceiroConta']['id']]); ?>
                        <?php echo $this->Form->postLink(__('Delete'),
                                ['action' => 'delete', $financeiroConta['FinanceiroConta']['id']], null,
                                __('Are you sure you want to delete # %s?',
                                        $financeiroConta['FinanceiroConta']['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
    </table>
    <p>
        <?php
            echo $this->Paginator->counter([
                    'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'),
            ]);
        ?>    </p>

    <div class="paging">
        <?php
            echo $this->Paginator->prev('< ' . __('previous'), [], null, ['class' => 'prev disabled']);
            echo $this->Paginator->numbers(['separator' => '']);
            echo $this->Paginator->next(__('next') . ' >', [], null, ['class' => 'next disabled']);
        ?>
    </div>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('New Financeiro Conta'), ['action' => 'add']); ?></li>
        <li><?php echo $this->Html->link(__('List Entidades'),
                    ['controller' => 'entidades', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Entidade'), ['controller' => 'entidades', 'action' => 'add']); ?> </li>
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
