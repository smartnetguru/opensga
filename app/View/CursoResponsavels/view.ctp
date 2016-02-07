<div class="cursoResponsavels view">
    <h2><?php echo __('Curso Responsavel'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($cursoResponsavel['CursoResponsavel']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Curso'); ?></dt>
        <dd>
            <?php echo $this->Html->link($cursoResponsavel['Curso']['name'],
                    ['controller' => 'cursos', 'action' => 'view', $cursoResponsavel['Curso']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Funcionario'); ?></dt>
        <dd>
            <?php echo $this->Html->link($cursoResponsavel['Funcionario']['id'],
                    ['controller' => 'funcionarios', 'action' => 'view', $cursoResponsavel['Funcionario']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Estado Objecto'); ?></dt>
        <dd>
            <?php echo $this->Html->link($cursoResponsavel['EstadoObjecto']['name'], [
                    'controller' => 'estado_objectos',
                    'action'     => 'view',
                    $cursoResponsavel['EstadoObjecto']['id'],
            ]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Data Inicio'); ?></dt>
        <dd>
            <?php echo h($cursoResponsavel['CursoResponsavel']['data_inicio']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Data Fim'); ?></dt>
        <dd>
            <?php echo h($cursoResponsavel['CursoResponsavel']['data_fim']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Curso Responsavel'),
                    ['action' => 'edit', $cursoResponsavel['CursoResponsavel']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Curso Responsavel'),
                    ['action' => 'delete', $cursoResponsavel['CursoResponsavel']['id']], [],
                    __('Are you sure you want to delete # %s?', $cursoResponsavel['CursoResponsavel']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Curso Responsavels'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Curso Responsavel'), ['action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Cursos'), ['controller' => 'cursos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Curso'), ['controller' => 'cursos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Funcionarios'),
                    ['controller' => 'funcionarios', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Funcionario'),
                    ['controller' => 'funcionarios', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Estado Objectos'),
                    ['controller' => 'estado_objectos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Estado Objecto'),
                    ['controller' => 'estado_objectos', 'action' => 'add']); ?> </li>
    </ul>
</div>
