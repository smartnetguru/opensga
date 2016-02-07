<div class="alumnis index">
    <h2><?php echo __('Alumnis'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('entidade_id'); ?></th>
            <th><?php echo $this->Paginator->sort('aluno_id'); ?></th>
            <th><?php echo $this->Paginator->sort('data_registo'); ?></th>
            <th><?php echo $this->Paginator->sort('candidato_alumni_id'); ?></th>
            <th><?php echo $this->Paginator->sort('created'); ?></th>
            <th><?php echo $this->Paginator->sort('modified'); ?></th>
            <th><?php echo $this->Paginator->sort('created_by'); ?></th>
            <th><?php echo $this->Paginator->sort('modified_by'); ?></th>
            <th><?php echo $this->Paginator->sort('user_id'); ?></th>
            <th><?php echo $this->Paginator->sort('data_aprovacao'); ?></th>
            <th><?php echo $this->Paginator->sort('user_aprovacao'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php foreach ($alumnis as $alumni): ?>
            <tr>
                <td><?php echo h($alumni['Alumni']['id']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($alumni['Entidade']['name'],
                            ['controller' => 'entidades', 'action' => 'view', $alumni['Entidade']['id']]); ?>
                </td>
                <td>
                    <?php echo $this->Html->link($alumni['Aluno']['id'],
                            ['controller' => 'alunos', 'action' => 'view', $alumni['Aluno']['id']]); ?>
                </td>
                <td><?php echo h($alumni['Alumni']['data_registo']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($alumni['AlumniCandidatoAlumni']['id'], [
                            'controller' => 'candidato_alumnis',
                            'action'     => 'view',
                            $alumni['AlumniCandidatoAlumni']['id'],
                    ]); ?>
                </td>
                <td><?php echo h($alumni['Alumni']['created']); ?>&nbsp;</td>
                <td><?php echo h($alumni['Alumni']['modified']); ?>&nbsp;</td>
                <td><?php echo h($alumni['Alumni']['created_by']); ?>&nbsp;</td>
                <td><?php echo h($alumni['Alumni']['modified_by']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($alumni['User']['id'],
                            ['controller' => 'users', 'action' => 'view', $alumni['User']['id']]); ?>
                </td>
                <td><?php echo h($alumni['Alumni']['data_aprovacao']); ?>&nbsp;</td>
                <td><?php echo h($alumni['Alumni']['user_aprovacao']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'), ['action' => 'view', $alumni['Alumni']['id']]); ?>
                    <?php echo $this->Html->link(__('Edit'), ['action' => 'edit', $alumni['Alumni']['id']]); ?>
                    <?php echo $this->Form->postLink(__('Delete'), ['action' => 'delete', $alumni['Alumni']['id']],
                            null, __('Are you sure you want to delete # %s?', $alumni['Alumni']['id'])); ?>
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
        <li><?php echo $this->Html->link(__('New Alumni'), ['action' => 'add']); ?></li>
        <li><?php echo $this->Html->link(__('List Entidades'),
                    ['controller' => 'entidades', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Entidade'), ['controller' => 'entidades', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Alunos'), ['controller' => 'alunos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Aluno'), ['controller' => 'alunos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Candidato Alumnis'),
                    ['controller' => 'candidato_alumnis', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Candidato Alumni'),
                    ['controller' => 'candidato_alumnis', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Users'), ['controller' => 'users', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New User'), ['controller' => 'users', 'action' => 'add']); ?> </li>
    </ul>
</div>
