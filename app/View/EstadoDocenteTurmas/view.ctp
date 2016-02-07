<div class="estadoDocenteTurmas view">
    <h2><?php echo __('Estado Docente Turma'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($estadoDocenteTurma['EstadoDocenteTurma']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Name'); ?></dt>
        <dd>
            <?php echo h($estadoDocenteTurma['EstadoDocenteTurma']['name']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Estado Docente Turma'),
                    ['action' => 'edit', $estadoDocenteTurma['EstadoDocenteTurma']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Estado Docente Turma'),
                    ['action' => 'delete', $estadoDocenteTurma['EstadoDocenteTurma']['id']], [],
                    __('Are you sure you want to delete # %s?',
                            $estadoDocenteTurma['EstadoDocenteTurma']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Estado Docente Turmas'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Estado Docente Turma'), ['action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Docente Turmas'),
                    ['controller' => 'docente_turmas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Docente Turma'),
                    ['controller' => 'docente_turmas', 'action' => 'add']); ?> </li>
    </ul>
</div>
<div class="related">
    <h3><?php echo __('Related Docente Turmas'); ?></h3>
    <?php if (!empty($estadoDocenteTurma['DocenteTurma'])): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Docente Id'); ?></th>
                <th><?php echo __('Turma Id'); ?></th>
                <th><?php echo __('Estado Docente Turma Id'); ?></th>
                <th><?php echo __('Tipo Docente Turma Id'); ?></th>
                <th><?php echo __('Created'); ?></th>
                <th><?php echo __('Modified'); ?></th>
                <th><?php echo __('Created By'); ?></th>
                <th><?php echo __('Modified By'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php foreach ($estadoDocenteTurma['DocenteTurma'] as $docenteTurma): ?>
                <tr>
                    <td><?php echo $docenteTurma['id']; ?></td>
                    <td><?php echo $docenteTurma['docente_id']; ?></td>
                    <td><?php echo $docenteTurma['turma_id']; ?></td>
                    <td><?php echo $docenteTurma['estado_docente_turma_id']; ?></td>
                    <td><?php echo $docenteTurma['tipo_docente_turma_id']; ?></td>
                    <td><?php echo $docenteTurma['created']; ?></td>
                    <td><?php echo $docenteTurma['modified']; ?></td>
                    <td><?php echo $docenteTurma['created_by']; ?></td>
                    <td><?php echo $docenteTurma['modified_by']; ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'),
                                ['controller' => 'docente_turmas', 'action' => 'view', $docenteTurma['id']]); ?>
                        <?php echo $this->Html->link(__('Edit'),
                                ['controller' => 'docente_turmas', 'action' => 'edit', $docenteTurma['id']]); ?>
                        <?php echo $this->Form->postLink(__('Delete'),
                                ['controller' => 'docente_turmas', 'action' => 'delete', $docenteTurma['id']], [],
                                __('Are you sure you want to delete # %s?', $docenteTurma['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Docente Turma'),
                        ['controller' => 'docente_turmas', 'action' => 'add']); ?> </li>
        </ul>
    </div>
</div>
