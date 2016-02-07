<div class="financeiroTransacaos index">
    <h2><?php echo __('Financeiro Transacaos'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('financeiro_tipo_transacao_id'); ?></th>
            <th><?php echo $this->Paginator->sort('valor'); ?></th>
            <th><?php echo $this->Paginator->sort('entidade_id'); ?></th>
            <th><?php echo $this->Paginator->sort('financeiro_conta_id'); ?></th>
            <th><?php echo $this->Paginator->sort('created_by'); ?></th>
            <th><?php echo $this->Paginator->sort('modified_by'); ?></th>
            <th><?php echo $this->Paginator->sort('created'); ?></th>
            <th><?php echo $this->Paginator->sort('modified'); ?></th>
            <th><?php echo $this->Paginator->sort('valor_relatorio'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php
            foreach ($financeiroTransacaos as $financeiroTransacao): ?>
                <tr>
                    <td><?php echo h($financeiroTransacao['FinanceiroTransacao']['id']); ?>&nbsp;</td>
                    <td>
                        <?php echo $this->Html->link($financeiroTransacao['FinanceiroTipoTransacao']['name'], [
                                'controller' => 'financeiro_tipo_transacaos',
                                'action'     => 'view',
                                $financeiroTransacao['FinanceiroTipoTransacao']['id'],
                        ]); ?>
                    </td>
                    <td><?php echo h($financeiroTransacao['FinanceiroTransacao']['valor']); ?>&nbsp;</td>
                    <td>
                        <?php echo $this->Html->link($financeiroTransacao['Entidade']['name'], [
                                'controller' => 'entidades',
                                'action'     => 'view',
                                $financeiroTransacao['Entidade']['id'],
                        ]); ?>
                    </td>
                    <td>
                        <?php echo $this->Html->link($financeiroTransacao['FinanceiroConta']['id'], [
                                'controller' => 'financeiro_contas',
                                'action'     => 'view',
                                $financeiroTransacao['FinanceiroConta']['id'],
                        ]); ?>
                    </td>
                    <td><?php echo h($financeiroTransacao['FinanceiroTransacao']['created_by']); ?>&nbsp;</td>
                    <td><?php echo h($financeiroTransacao['FinanceiroTransacao']['modified_by']); ?>&nbsp;</td>
                    <td><?php echo h($financeiroTransacao['FinanceiroTransacao']['created']); ?>&nbsp;</td>
                    <td><?php echo h($financeiroTransacao['FinanceiroTransacao']['modified']); ?>&nbsp;</td>
                    <td><?php echo h($financeiroTransacao['FinanceiroTransacao']['valor_relatorio']); ?>&nbsp;</td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'),
                                ['action' => 'view', $financeiroTransacao['FinanceiroTransacao']['id']]); ?>
                        <?php echo $this->Html->link(__('Edit'),
                                ['action' => 'edit', $financeiroTransacao['FinanceiroTransacao']['id']]); ?>
                        <?php echo $this->Form->postLink(__('Delete'),
                                ['action' => 'delete', $financeiroTransacao['FinanceiroTransacao']['id']], null,
                                __('Are you sure you want to delete # %s?',
                                        $financeiroTransacao['FinanceiroTransacao']['id'])); ?>
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
        <li><?php echo $this->Html->link(__('New Financeiro Transacao'), ['action' => 'add']); ?></li>
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
