<div class="cursoResponsavels form">
    <?php echo $this->Form->create('CursoResponsavel'); ?>
    <fieldset>
        <legend><?php echo __('Edit Curso Responsavel'); ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('curso_id');
            echo $this->Form->input('funcionario_id');
            echo $this->Form->input('estado_objecto_id');
            echo $this->Form->input('data_inicio');
            echo $this->Form->input('data_fim');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'),
                    ['action' => 'delete', $this->Form->value('CursoResponsavel.id')], [],
                    __('Are you sure you want to delete # %s?', $this->Form->value('CursoResponsavel.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Curso Responsavels'), ['action' => 'index']); ?></li>
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
