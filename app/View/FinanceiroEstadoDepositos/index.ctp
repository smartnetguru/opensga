<div class="financeiroEstadoDepositos index">
    <h2><?php echo __('Financeiro Estado Depositos'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('name'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php
            foreach ($financeiroEstadoDepositos as $financeiroEstadoDeposito): ?>
                <tr>
                    <td><?php echo h($financeiroEstadoDeposito['FinanceiroEstadoDeposito']['id']); ?>&nbsp;</td>
                    <td><?php echo h($financeiroEstadoDeposito['FinanceiroEstadoDeposito']['name']); ?>&nbsp;</td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'),
                                ['action' => 'view', $financeiroEstadoDeposito['FinanceiroEstadoDeposito']['id']]); ?>
                        <?php echo $this->Html->link(__('Edit'),
                                ['action' => 'edit', $financeiroEstadoDeposito['FinanceiroEstadoDeposito']['id']]); ?>
                        <?php echo $this->Form->postLink(__('Delete'),
                                ['action' => 'delete', $financeiroEstadoDeposito['FinanceiroEstadoDeposito']['id']],
                                null, __('Are you sure you want to delete # %s?',
                                        $financeiroEstadoDeposito['FinanceiroEstadoDeposito']['id'])); ?>
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
        <li><?php echo $this->Html->link(__('New Financeiro Estado Deposito'), ['action' => 'add']); ?></li>
        <li><?php echo $this->Html->link(__('List Financeiro Depositos'),
                    ['controller' => 'financeiro_depositos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Financeiro Deposito'),
                    ['controller' => 'financeiro_depositos', 'action' => 'add']); ?> </li>
    </ul>
</div>
