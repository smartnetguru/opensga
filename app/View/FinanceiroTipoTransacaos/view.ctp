<div class="financeiroTipoTransacaos view">
    <h2><?php echo __('Financeiro Tipo Transacao'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($financeiroTipoTransacao['FinanceiroTipoTransacao']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Name'); ?></dt>
        <dd>
            <?php echo h($financeiroTipoTransacao['FinanceiroTipoTransacao']['name']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Financeiro Tipo Transacao'),
                    ['action' => 'edit', $financeiroTipoTransacao['FinanceiroTipoTransacao']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Financeiro Tipo Transacao'),
                    ['action' => 'delete', $financeiroTipoTransacao['FinanceiroTipoTransacao']['id']], null,
                    __('Are you sure you want to delete # %s?',
                            $financeiroTipoTransacao['FinanceiroTipoTransacao']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Financeiro Tipo Transacaos'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Financeiro Tipo Transacao'), ['action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Financeiro Transacaos'),
                    ['controller' => 'financeiro_transacaos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Financeiro Transacao'),
                    ['controller' => 'financeiro_transacaos', 'action' => 'add']); ?> </li>
    </ul>
</div>
<div class="related">
    <h3><?php echo __('Related Financeiro Transacaos'); ?></h3>
    <?php if (!empty($financeiroTipoTransacao['FinanceiroTransacao'])): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Financeiro Tipo Transacao Id'); ?></th>
                <th><?php echo __('Valor'); ?></th>
                <th><?php echo __('Entidade Id'); ?></th>
                <th><?php echo __('Financeiro Conta Id'); ?></th>
                <th><?php echo __('Created By'); ?></th>
                <th><?php echo __('Modified By'); ?></th>
                <th><?php echo __('Created'); ?></th>
                <th><?php echo __('Modified'); ?></th>
                <th><?php echo __('Valor Relatorio'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php
                $i = 0;
                foreach ($financeiroTipoTransacao['FinanceiroTransacao'] as $financeiroTransacao): ?>
                    <tr>
                        <td><?php echo $financeiroTransacao['id']; ?></td>
                        <td><?php echo $financeiroTransacao['financeiro_tipo_transacao_id']; ?></td>
                        <td><?php echo $financeiroTransacao['valor']; ?></td>
                        <td><?php echo $financeiroTransacao['entidade_id']; ?></td>
                        <td><?php echo $financeiroTransacao['financeiro_conta_id']; ?></td>
                        <td><?php echo $financeiroTransacao['created_by']; ?></td>
                        <td><?php echo $financeiroTransacao['modified_by']; ?></td>
                        <td><?php echo $financeiroTransacao['created']; ?></td>
                        <td><?php echo $financeiroTransacao['modified']; ?></td>
                        <td><?php echo $financeiroTransacao['valor_relatorio']; ?></td>
                        <td class="actions">
                            <?php echo $this->Html->link(__('View'), [
                                    'controller' => 'financeiro_transacaos',
                                    'action'     => 'view',
                                    $financeiroTransacao['id'],
                            ]); ?>
                            <?php echo $this->Html->link(__('Edit'), [
                                    'controller' => 'financeiro_transacaos',
                                    'action'     => 'edit',
                                    $financeiroTransacao['id'],
                            ]); ?>
                            <?php echo $this->Form->postLink(__('Delete'), [
                                    'controller' => 'financeiro_transacaos',
                                    'action'     => 'delete',
                                    $financeiroTransacao['id'],
                            ], null, __('Are you sure you want to delete # %s?', $financeiroTransacao['id'])); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Financeiro Transacao'),
                        ['controller' => 'financeiro_transacaos', 'action' => 'add']); ?> </li>
        </ul>
    </div>
</div>
