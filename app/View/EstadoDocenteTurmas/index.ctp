<div class="estadoDocenteTurmas index">
    <h2><?php echo __('Estado Docente Turmas'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('name'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($estadoDocenteTurmas as $estadoDocenteTurma): ?>
            <tr>
                <td><?php echo h($estadoDocenteTurma['EstadoDocenteTurma']['id']); ?>&nbsp;</td>
                <td><?php echo h($estadoDocenteTurma['EstadoDocenteTurma']['name']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'),
                            ['action' => 'view', $estadoDocenteTurma['EstadoDocenteTurma']['id']]); ?>
                    <?php echo $this->Html->link(__('Edit'),
                            ['action' => 'edit', $estadoDocenteTurma['EstadoDocenteTurma']['id']]); ?>
                    <?php echo $this->Form->postLink(__('Delete'),
                            ['action' => 'delete', $estadoDocenteTurma['EstadoDocenteTurma']['id']], [],
                            __('Are you sure you want to delete # %s?',
                                    $estadoDocenteTurma['EstadoDocenteTurma']['id'])); ?>
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
        <li><?php echo $this->Html->link(__('New Estado Docente Turma'), ['action' => 'add']); ?></li>
        <li><?php echo $this->Html->link(__('List Docente Turmas'),
                    ['controller' => 'docente_turmas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Docente Turma'),
                    ['controller' => 'docente_turmas', 'action' => 'add']); ?> </li>
    </ul>
</div>
