<div class="planoEstudoTipoPagamentos index">
    <h2><?php echo __('Plano Estudo Tipo Pagamentos'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('plano_estudo_id'); ?></th>
            <th><?php echo $this->Paginator->sort('tipopagamento_id'); ?></th>
            <th><?php echo $this->Paginator->sort('valor'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php
            foreach ($planoEstudoTipoPagamentos as $planoEstudoTipoPagamento): ?>
                <tr>
                    <td><?php echo h($planoEstudoTipoPagamento['PlanoEstudoTipoPagamento']['id']); ?>&nbsp;</td>
                    <td>
                        <?php echo $this->Html->link($planoEstudoTipoPagamento['PlanoEstudo']['name'], [
                                'controller' => 'planoestudos',
                                'action'     => 'view',
                                $planoEstudoTipoPagamento['PlanoEstudo']['id'],
                        ]); ?>
                    </td>
                    <td>
                        <?php echo $this->Html->link($planoEstudoTipoPagamento['Tipopagamento']['name'], [
                                'controller' => 'tipopagamentos',
                                'action'     => 'view',
                                $planoEstudoTipoPagamento['Tipopagamento']['id'],
                        ]); ?>
                    </td>
                    <td><?php echo h($planoEstudoTipoPagamento['PlanoEstudoTipoPagamento']['valor']); ?>&nbsp;</td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'),
                                ['action' => 'view', $planoEstudoTipoPagamento['PlanoEstudoTipoPagamento']['id']]); ?>
                        <?php echo $this->Html->link(__('Edit'),
                                ['action' => 'edit', $planoEstudoTipoPagamento['PlanoEstudoTipoPagamento']['id']]); ?>
                        <?php echo $this->Form->postLink(__('Delete'),
                                ['action' => 'delete', $planoEstudoTipoPagamento['PlanoEstudoTipoPagamento']['id']],
                                null, __('Are you sure you want to delete # %s?',
                                        $planoEstudoTipoPagamento['PlanoEstudoTipoPagamento']['id'])); ?>
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
        <li><?php echo $this->Html->link(__('New Plano Estudo Tipo Pagamento'), ['action' => 'add']); ?></li>
        <li><?php echo $this->Html->link(__('List Planoestudos'),
                    ['controller' => 'planoestudos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New PlanoEstudo'),
                    ['controller' => 'planoestudos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Tipopagamentos'),
                    ['controller' => 'tipopagamentos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Tipopagamento'),
                    ['controller' => 'tipopagamentos', 'action' => 'add']); ?> </li>
    </ul>
</div>
