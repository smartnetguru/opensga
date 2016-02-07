<?php
    $this->extend('/Common/index_common');
    $this->BreadCumbs->addCrumb('Contabilidade', '/financeiro_pagamentos');
    $this->BreadCumbs->addCrumb('Tipos de Pagamentos', '/financeiro_tipo_pagamentos/index');
?>

<?php $this->start('top-actions') ?>

<?php $this->end() ?>
<?php $this->assign('table-title', __('Tipos de Pagamentos Activos')) ?>
<?php $this->start('filter-form') ?>

<?php $this->end() ?>
<?php $this->start('table-header') ?>

<tr>
    <th><?php echo $this->Paginator->sort('id'); ?></th>
    <th><?php echo $this->Paginator->sort('name'); ?></th>
    <th><?php echo $this->Paginator->sort('valor'); ?></th>
    <th><?php echo $this->Paginator->sort('codigo'); ?></th>
    <th><?php echo $this->Paginator->sort('month_id'); ?></th>
    <th><?php echo $this->Paginator->sort('data_limite'); ?></th>
    <th><?php echo $this->Paginator->sort('mes_limite'); ?></th>
    <th><?php echo $this->Paginator->sort('dia_limite'); ?></th>
    <th class="actions"><?php echo __('Actions'); ?></th>
</tr>
<?php $this->end() ?>
<?php $this->start('table-body') ?>
<?php
    foreach ($financeiroTipoPagamentos as $financeiroTipoPagamento): ?>
        <tr>
            <td><?php echo h($financeiroTipoPagamento['FinanceiroTipoPagamento']['id']); ?>&nbsp;</td>
            <td><?php echo h($financeiroTipoPagamento['FinanceiroTipoPagamento']['name']); ?>&nbsp;</td>
            <td><?php echo h($financeiroTipoPagamento['FinanceiroTipoPagamento']['valor']); ?>&nbsp;</td>
            <td><?php echo h($financeiroTipoPagamento['FinanceiroTipoPagamento']['codigo']); ?>&nbsp;</td>
            <td>
                <?php echo $this->Html->link($financeiroTipoPagamento['Month']['name'],
                        ['controller' => 'months', 'action' => 'view', $financeiroTipoPagamento['Month']['id']]); ?>
            </td>
            <td><?php echo h($financeiroTipoPagamento['FinanceiroTipoPagamento']['data_limite']); ?>&nbsp;</td>
            <td><?php echo h($financeiroTipoPagamento['FinanceiroTipoPagamento']['mes_limite']); ?>&nbsp;</td>
            <td><?php echo h($financeiroTipoPagamento['FinanceiroTipoPagamento']['dia_limite']); ?>&nbsp;</td>
            <td class="actions">
                <?php echo $this->Html->link(__('View'),
                        ['action' => 'view', $financeiroTipoPagamento['FinanceiroTipoPagamento']['id']]); ?>
                <?php echo $this->Html->link(__('Edit'),
                        ['action' => 'edit', $financeiroTipoPagamento['FinanceiroTipoPagamento']['id']]); ?>
                <?php echo $this->Form->postLink(__('Delete'),
                        ['action' => 'delete', $financeiroTipoPagamento['FinanceiroTipoPagamento']['id']], null,
                        __('Are you sure you want to delete # %s?',
                                $financeiroTipoPagamento['FinanceiroTipoPagamento']['id'])); ?>
            </td>
        </tr>
    <?php endforeach; ?>
<?php $this->end() ?>

