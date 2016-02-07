<div class="sadeIndicadors index">
    <h2><?php echo __('Sade Indicadors'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('codigo'); ?></th>
            <th><?php echo $this->Paginator->sort('descricao'); ?></th>
            <th><?php echo $this->Paginator->sort('anexo'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php
            foreach ($sadeIndicadors as $sadeIndicador): ?>
                <tr>
                    <td><?php echo h($sadeIndicador['SadeIndicador']['id']); ?>&nbsp;</td>
                    <td><?php echo h($sadeIndicador['SadeIndicador']['codigo']); ?>&nbsp;</td>
                    <td><?php echo h($sadeIndicador['SadeIndicador']['descricao']); ?>&nbsp;</td>
                    <td><?php echo h($sadeIndicador['SadeIndicador']['anexo']); ?>&nbsp;</td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'),
                                ['action' => 'view', $sadeIndicador['SadeIndicador']['id']]); ?>
                        <?php echo $this->Html->link(__('Edit'),
                                ['action' => 'edit', $sadeIndicador['SadeIndicador']['id']]); ?>
                        <?php echo $this->Form->postLink(__('Delete'),
                                ['action' => 'delete', $sadeIndicador['SadeIndicador']['id']], null,
                                __('Are you sure you want to delete # %s?', $sadeIndicador['SadeIndicador']['id'])); ?>
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
        <li><?php echo $this->Html->link(__('New Sade Indicador'), ['action' => 'add']); ?></li>
        <li><?php echo $this->Html->link(__('List Sade Parametros'),
                    ['controller' => 'sade_parametros', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Sade Parametro'),
                    ['controller' => 'sade_parametros', 'action' => 'add']); ?> </li>
    </ul>
</div>
