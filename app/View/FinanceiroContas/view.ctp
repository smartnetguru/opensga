<div class="financeiroContas view">
    <h2><?php echo __('Financeiro Conta'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($financeiroConta['FinanceiroConta']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Entidade'); ?></dt>
        <dd>
            <?php echo $this->Html->link($financeiroConta['Entidade']['name'],
                    ['controller' => 'entidades', 'action' => 'view', $financeiroConta['Entidade']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Saldo Actual'); ?></dt>
        <dd>
            <?php echo h($financeiroConta['FinanceiroConta']['saldo_actual']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Financeiro Conta'),
                    ['action' => 'edit', $financeiroConta['FinanceiroConta']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Financeiro Conta'),
                    ['action' => 'delete', $financeiroConta['FinanceiroConta']['id']], null,
                    __('Are you sure you want to delete # %s?', $financeiroConta['FinanceiroConta']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Financeiro Contas'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Financeiro Conta'), ['action' => 'add']); ?> </li>
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
<div class="related">
    <h3><?php echo __('Related Financeiro Depositos'); ?></h3>
    <?php if (!empty($financeiroConta['FinanceiroDeposito'])): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Entidade Id'); ?></th>
                <th><?php echo __('Financeiro Conta Id'); ?></th>
                <th><?php echo __('Data Deposito'); ?></th>
                <th><?php echo __('Data Reconciliacao'); ?></th>
                <th><?php echo __('Financeiro Estado Deposito Id'); ?></th>
                <th><?php echo __('Created'); ?></th>
                <th><?php echo __('Modified'); ?></th>
                <th><?php echo __('Created By'); ?></th>
                <th><?php echo __('Modified By'); ?></th>
                <th><?php echo __('Numero Comprovativo'); ?></th>
                <th><?php echo __('Financeiro Forma Deposito Id'); ?></th>
                <th><?php echo __('Financeiro Banco Id'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php
                $i = 0;
                foreach ($financeiroConta['FinanceiroDeposito'] as $financeiroDeposito): ?>
                    <tr>
                        <td><?php echo $financeiroDeposito['id']; ?></td>
                        <td><?php echo $financeiroDeposito['entidade_id']; ?></td>
                        <td><?php echo $financeiroDeposito['financeiro_conta_id']; ?></td>
                        <td><?php echo $financeiroDeposito['data_deposito']; ?></td>
                        <td><?php echo $financeiroDeposito['data_reconciliacao']; ?></td>
                        <td><?php echo $financeiroDeposito['financeiro_estado_deposito_id']; ?></td>
                        <td><?php echo $financeiroDeposito['created']; ?></td>
                        <td><?php echo $financeiroDeposito['modified']; ?></td>
                        <td><?php echo $financeiroDeposito['created_by']; ?></td>
                        <td><?php echo $financeiroDeposito['modified_by']; ?></td>
                        <td><?php echo $financeiroDeposito['numero_comprovativo']; ?></td>
                        <td><?php echo $financeiroDeposito['financeiro_forma_deposito_id']; ?></td>
                        <td><?php echo $financeiroDeposito['financeiro_banco_id']; ?></td>
                        <td class="actions">
                            <?php echo $this->Html->link(__('View'), [
                                    'controller' => 'financeiro_depositos',
                                    'action'     => 'view',
                                    $financeiroDeposito['id'],
                            ]); ?>
                            <?php echo $this->Html->link(__('Edit'), [
                                    'controller' => 'financeiro_depositos',
                                    'action'     => 'edit',
                                    $financeiroDeposito['id'],
                            ]); ?>
                            <?php echo $this->Form->postLink(__('Delete'), [
                                    'controller' => 'financeiro_depositos',
                                    'action'     => 'delete',
                                    $financeiroDeposito['id'],
                            ], null, __('Are you sure you want to delete # %s?', $financeiroDeposito['id'])); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Financeiro Deposito'),
                        ['controller' => 'financeiro_depositos', 'action' => 'add']); ?> </li>
        </ul>
    </div>
</div>
<div class="related">
    <h3><?php echo __('Related Financeiro Pagamentos'); ?></h3>
    <?php if (!empty($financeiroConta['FinanceiroPagamento'])): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Aluno Id'); ?></th>
                <th><?php echo __('Financeiro Conta Id'); ?></th>
                <th><?php echo __('Valor'); ?></th>
                <th><?php echo __('Data Pagamento'); ?></th>
                <th><?php echo __('Created'); ?></th>
                <th><?php echo __('Modified'); ?></th>
                <th><?php echo __('Financeiro Tipo Pagamento Id'); ?></th>
                <th><?php echo __('Data Limite'); ?></th>
                <th><?php echo __('AnoLectivo Id'); ?></th>
                <th><?php echo __('Financeiro Estado Pagamento Id'); ?></th>
                <th><?php echo __('Codigo'); ?></th>
                <th><?php echo __('Created By'); ?></th>
                <th><?php echo __('Modified By'); ?></th>
                <th><?php echo __('Data Emissao'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php
                $i = 0;
                foreach ($financeiroConta['FinanceiroPagamento'] as $financeiroPagamento): ?>
                    <tr>
                        <td><?php echo $financeiroPagamento['id']; ?></td>
                        <td><?php echo $financeiroPagamento['aluno_id']; ?></td>
                        <td><?php echo $financeiroPagamento['financeiro_conta_id']; ?></td>
                        <td><?php echo $financeiroPagamento['valor']; ?></td>
                        <td><?php echo $financeiroPagamento['data_pagamento']; ?></td>
                        <td><?php echo $financeiroPagamento['created']; ?></td>
                        <td><?php echo $financeiroPagamento['modified']; ?></td>
                        <td><?php echo $financeiroPagamento['financeiro_tipo_pagamento_id']; ?></td>
                        <td><?php echo $financeiroPagamento['data_limite']; ?></td>
                        <td><?php echo $financeiroPagamento['ano_lectivo_id']; ?></td>
                        <td><?php echo $financeiroPagamento['financeiro_estado_pagamento_id']; ?></td>
                        <td><?php echo $financeiroPagamento['codigo']; ?></td>
                        <td><?php echo $financeiroPagamento['created_by']; ?></td>
                        <td><?php echo $financeiroPagamento['modified_by']; ?></td>
                        <td><?php echo $financeiroPagamento['data_emissao']; ?></td>
                        <td class="actions">
                            <?php echo $this->Html->link(__('View'), [
                                    'controller' => 'financeiro_pagamentos',
                                    'action'     => 'view',
                                    $financeiroPagamento['id'],
                            ]); ?>
                            <?php echo $this->Html->link(__('Edit'), [
                                    'controller' => 'financeiro_pagamentos',
                                    'action'     => 'edit',
                                    $financeiroPagamento['id'],
                            ]); ?>
                            <?php echo $this->Form->postLink(__('Delete'), [
                                    'controller' => 'financeiro_pagamentos',
                                    'action'     => 'delete',
                                    $financeiroPagamento['id'],
                            ], null, __('Are you sure you want to delete # %s?', $financeiroPagamento['id'])); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Financeiro Pagamento'),
                        ['controller' => 'financeiro_pagamentos', 'action' => 'add']); ?> </li>
        </ul>
    </div>
</div>
