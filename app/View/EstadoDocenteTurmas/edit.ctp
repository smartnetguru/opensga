<div class="estadoDocenteTurmas form">
    <?php echo $this->Form->create('EstadoDocenteTurma'); ?>
    <fieldset>
        <legend><?php echo __('Edit Estado Docente Turma'); ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'),
                    ['action' => 'delete', $this->Form->value('EstadoDocenteTurma.id')], [],
                    __('Are you sure you want to delete # %s?', $this->Form->value('EstadoDocenteTurma.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Estado Docente Turmas'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Docente Turmas'),
                    ['controller' => 'docente_turmas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Docente Turma'),
                    ['controller' => 'docente_turmas', 'action' => 'add']); ?> </li>
    </ul>
</div>
