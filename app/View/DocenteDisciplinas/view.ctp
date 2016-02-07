<div class="docenteDisciplinas view">
    <h2><?php echo __('Docente Disciplina'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($docenteDisciplina['DocenteDisciplina']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Disciplina'); ?></dt>
        <dd>
            <?php echo $this->Html->link($docenteDisciplina['Disciplina']['name'],
                    ['controller' => 'disciplinas', 'action' => 'view', $docenteDisciplina['Disciplina']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Docente'); ?></dt>
        <dd>
            <?php echo $this->Html->link($docenteDisciplina['Docente']['id'],
                    ['controller' => 'docentes', 'action' => 'view', $docenteDisciplina['Docente']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Estado Objecto'); ?></dt>
        <dd>
            <?php echo $this->Html->link($docenteDisciplina['EstadoObjecto']['name'], [
                    'controller' => 'estado_objectos',
                    'action'     => 'view',
                    $docenteDisciplina['EstadoObjecto']['id'],
            ]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($docenteDisciplina['DocenteDisciplina']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($docenteDisciplina['DocenteDisciplina']['modified']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created By'); ?></dt>
        <dd>
            <?php echo h($docenteDisciplina['DocenteDisciplina']['created_by']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified By'); ?></dt>
        <dd>
            <?php echo h($docenteDisciplina['DocenteDisciplina']['modified_by']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Docente Disciplina'),
                    ['action' => 'edit', $docenteDisciplina['DocenteDisciplina']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Docente Disciplina'),
                    ['action' => 'delete', $docenteDisciplina['DocenteDisciplina']['id']], [
                            'confirm' => __('Are you sure you want to delete # %s?',
                                    $docenteDisciplina['DocenteDisciplina']['id']),
                    ]); ?> </li>
        <li><?php echo $this->Html->link(__('List Docente Disciplinas'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Docente Disciplina'), ['action' => 'add']); ?> </li>
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
