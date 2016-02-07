<div class="docenteDisciplinas index">
    <h2><?php echo __('Docente Disciplinas'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('disciplina_id'); ?></th>
            <th><?php echo $this->Paginator->sort('docente_id'); ?></th>
            <th><?php echo $this->Paginator->sort('estado_objecto_id'); ?></th>
            <th><?php echo $this->Paginator->sort('created'); ?></th>
            <th><?php echo $this->Paginator->sort('modified'); ?></th>
            <th><?php echo $this->Paginator->sort('created_by'); ?></th>
            <th><?php echo $this->Paginator->sort('modified_by'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($docenteDisciplinas as $docenteDisciplina): ?>
            <tr>
                <td><?php echo h($docenteDisciplina['DocenteDisciplina']['id']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($docenteDisciplina['Disciplina']['name'], [
                            'controller' => 'disciplinas',
                            'action'     => 'view',
                            $docenteDisciplina['Disciplina']['id'],
                    ]); ?>
                </td>
                <td>
                    <?php echo $this->Html->link($docenteDisciplina['Docente']['id'],
                            ['controller' => 'docentes', 'action' => 'view', $docenteDisciplina['Docente']['id']]); ?>
                </td>
                <td>
                    <?php echo $this->Html->link($docenteDisciplina['EstadoObjecto']['name'], [
                            'controller' => 'estado_objectos',
                            'action'     => 'view',
                            $docenteDisciplina['EstadoObjecto']['id'],
                    ]); ?>
                </td>
                <td><?php echo h($docenteDisciplina['DocenteDisciplina']['created']); ?>&nbsp;</td>
                <td><?php echo h($docenteDisciplina['DocenteDisciplina']['modified']); ?>&nbsp;</td>
                <td><?php echo h($docenteDisciplina['DocenteDisciplina']['created_by']); ?>&nbsp;</td>
                <td><?php echo h($docenteDisciplina['DocenteDisciplina']['modified_by']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'),
                            ['action' => 'view', $docenteDisciplina['DocenteDisciplina']['id']]); ?>
                    <?php echo $this->Html->link(__('Edit'),
                            ['action' => 'edit', $docenteDisciplina['DocenteDisciplina']['id']]); ?>
                    <?php echo $this->Form->postLink(__('Delete'),
                            ['action' => 'delete', $docenteDisciplina['DocenteDisciplina']['id']], [
                                    'confirm' => __('Are you sure you want to delete # %s?',
                                            $docenteDisciplina['DocenteDisciplina']['id']),
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
        <li><?php echo $this->Html->link(__('New Docente Disciplina'), ['action' => 'add']); ?></li>
        <li><?php echo $this->Html->link(__('List Disciplinas'),
                    ['controller' => 'disciplinas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Disciplina'),
                    ['controller' => 'disciplinas', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Docentes'),
                    ['controller' => 'docentes', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Docente'), ['controller' => 'docentes', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Estado Objectos'),
                    ['controller' => 'estado_objectos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Estado Objecto'),
                    ['controller' => 'estado_objectos', 'action' => 'add']); ?> </li>
    </ul>
</div>
