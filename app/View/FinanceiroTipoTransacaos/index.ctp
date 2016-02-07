<div class="financeiroTipoTransacaos index">
    <h2><?php echo __('Financeiro Tipo Transacaos'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('name'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php
            foreach ($financeiroTipoTransacaos as $financeiroTipoTransacao): ?>
                <tr>
                    <td><?php echo h($financeiroTipoTransacao['FinanceiroTipoTransacao']['id']); ?>&nbsp;</td>
                    <td><?php echo h($financeiroTipoTransacao['FinanceiroTipoTransacao']['name']); ?>&nbsp;</td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'),
                                ['action' => 'view', $financeiroTipoTransacao['FinanceiroTipoTransacao']['id']]); ?>
                        <?php echo $this->Html->link(__('Edit'),
                                ['action' => 'edit', $financeiroTipoTransacao['FinanceiroTipoTransacao']['id']]); ?>
                        <?php echo $this->Form->postLink(__('Delete'),
                                ['action' => 'delete', $financeiroTipoTransacao['FinanceiroTipoTransacao']['id']], null,
                                __('Are you sure you want to delete # %s?',
                                        $financeiroTipoTransacao['FinanceiroTipoTransacao']['id'])); ?>
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
        <li><?php echo $this->Html->link(__('New Financeiro Tipo Transacao'), ['action' => 'add']); ?></li>
        <li><?php echo $this->Html->link(__('List Financeiro Transacaos'),
                    ['controller' => 'financeiro_transacaos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Financeiro Transacao'),
                    ['controller' => 'financeiro_transacaos', 'action' => 'add']); ?> </li>
    </ul>
</div>
