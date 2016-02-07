<div class="tipoMatriculas index">
    <h2><?php echo __('Tipo Matriculas'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('name'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($tipoMatriculas as $tipoMatricula): ?>
            <tr>
                <td><?php echo h($tipoMatricula['TipoMatricula']['id']); ?>&nbsp;</td>
                <td><?php echo h($tipoMatricula['TipoMatricula']['name']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'),
                            ['action' => 'view', $tipoMatricula['TipoMatricula']['id']]); ?>
                    <?php echo $this->Html->link(__('Edit'),
                            ['action' => 'edit', $tipoMatricula['TipoMatricula']['id']]); ?>
                    <?php echo $this->Form->postLink(__('Delete'),
                            ['action' => 'delete', $tipoMatricula['TipoMatricula']['id']], [],
                            __('Are you sure you want to delete # %s?', $tipoMatricula['TipoMatricula']['id'])); ?>
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
        <li><?php echo $this->Html->link(__('New Tipo Matricula'), ['action' => 'add']); ?></li>
        <li><?php echo $this->Html->link(__('List Matriculas'),
                    ['controller' => 'matriculas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Matricula'),
                    ['controller' => 'matriculas', 'action' => 'add']); ?> </li>
    </ul>
</div>
