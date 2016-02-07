<div class="cursoTipoPamentos view">
    <h2><?php echo __('Curso Tipo Pamento'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($cursoTipoPamento['CursoTipoPamento']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Curso'); ?></dt>
        <dd>
            <?php echo $this->Html->link($cursoTipoPamento['Curso']['name'],
                    ['controller' => 'cursos', 'action' => 'view', $cursoTipoPamento['Curso']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Tipopagamento'); ?></dt>
        <dd>
            <?php echo $this->Html->link($cursoTipoPamento['Tipopagamento']['name'], [
                    'controller' => 'tipopagamentos',
                    'action'     => 'view',
                    $cursoTipoPamento['Tipopagamento']['id'],
            ]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Valor'); ?></dt>
        <dd>
            <?php echo h($cursoTipoPamento['CursoTipoPamento']['valor']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Curso Tipo Pamento'),
                    ['action' => 'edit', $cursoTipoPamento['CursoTipoPamento']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Curso Tipo Pamento'),
                    ['action' => 'delete', $cursoTipoPamento['CursoTipoPamento']['id']], null,
                    __('Are you sure you want to delete # %s?', $cursoTipoPamento['CursoTipoPamento']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Curso Tipo Pamentos'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Curso Tipo Pamento'), ['action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Cursos'), ['controller' => 'cursos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Curso'), ['controller' => 'cursos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Tipopagamentos'),
                    ['controller' => 'tipopagamentos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Tipopagamento'),
                    ['controller' => 'tipopagamentos', 'action' => 'add']); ?> </li>
    </ul>
</div>
