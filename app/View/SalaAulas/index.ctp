<div class="salaAulas index">
    <h2><?php echo __('Sala Aulas'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('name'); ?></th>
            <th><?php echo $this->Paginator->sort('capacidade_maxima'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php
            foreach ($salaAulas as $salaAula): ?>
                <tr>
                    <td><?php echo h($salaAula['SalaAula']['id']); ?>&nbsp;</td>
                    <td><?php echo h($salaAula['SalaAula']['name']); ?>&nbsp;</td>
                    <td><?php echo h($salaAula['SalaAula']['capacidade_maxima']); ?>&nbsp;</td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), ['action' => 'view', $salaAula['SalaAula']['id']]); ?>
                        <?php echo $this->Html->link(__('Edit'), ['action' => 'edit', $salaAula['SalaAula']['id']]); ?>
                        <?php echo $this->Form->postLink(__('Delete'),
                                ['action' => 'delete', $salaAula['SalaAula']['id']], null,
                                __('Are you sure you want to delete # %s?', $salaAula['SalaAula']['id'])); ?>
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
        <li><?php echo $this->Html->link(__('New Sala Aula'), ['action' => 'add']); ?></li>
        <li><?php echo $this->Html->link(__('List Turmas'), ['controller' => 'turmas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Turma'), ['controller' => 'turmas', 'action' => 'add']); ?> </li>
    </ul>
</div>
