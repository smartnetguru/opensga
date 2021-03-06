<div class="topicoAulas index">
    <h2><?php echo __('Topico Aulas'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('aula_id'); ?></th>
            <th><?php echo $this->Paginator->sort('topico'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($topicoAulas as $topicoAula): ?>
            <tr>
                <td><?php echo h($topicoAula['TopicoAula']['id']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($topicoAula['Aula']['id'],
                            ['controller' => 'aulas', 'action' => 'view', $topicoAula['Aula']['id']]); ?>
                </td>
                <td><?php echo h($topicoAula['TopicoAula']['topico']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'), ['action' => 'view', $topicoAula['TopicoAula']['id']]); ?>
                    <?php echo $this->Html->link(__('Edit'), ['action' => 'edit', $topicoAula['TopicoAula']['id']]); ?>
                    <?php echo $this->Form->postLink(__('Delete'),
                            ['action' => 'delete', $topicoAula['TopicoAula']['id']], [
                                    'confirm' => __('Are you sure you want to delete # %s?',
                                            $topicoAula['TopicoAula']['id']),
                            ]); ?>
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
        <li><?php echo $this->Html->link(__('New Topico Aula'), ['action' => 'add']); ?></li>
        <li><?php echo $this->Html->link(__('List Aulas'), ['controller' => 'aulas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Aula'), ['controller' => 'aulas', 'action' => 'add']); ?> </li>
    </ul>
</div>
