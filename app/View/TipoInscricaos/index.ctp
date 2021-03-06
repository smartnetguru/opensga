<div class="tipoInscricaos index">
    <h2><?php echo __('Tipo Inscricaos'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('name'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($tipoInscricaos as $tipoInscricao): ?>
            <tr>
                <td><?php echo h($tipoInscricao['TipoInscricao']['id']); ?>&nbsp;</td>
                <td><?php echo h($tipoInscricao['TipoInscricao']['name']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'),
                            ['action' => 'view', $tipoInscricao['TipoInscricao']['id']]); ?>
                    <?php echo $this->Html->link(__('Edit'),
                            ['action' => 'edit', $tipoInscricao['TipoInscricao']['id']]); ?>
                    <?php echo $this->Form->postLink(__('Delete'),
                            ['action' => 'delete', $tipoInscricao['TipoInscricao']['id']], [],
                            __('Are you sure you want to delete # %s?', $tipoInscricao['TipoInscricao']['id'])); ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
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
        <li><?php echo $this->Html->link(__('New Tipo Inscricao'), ['action' => 'add']); ?></li>
        <li><?php echo $this->Html->link(__('List Inscricaos'),
                    ['controller' => 'inscricaos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Inscricao'),
                    ['controller' => 'inscricaos', 'action' => 'add']); ?> </li>
    </ul>
</div>
