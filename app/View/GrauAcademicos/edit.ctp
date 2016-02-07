<div class="grauAcademicos form">
    <?php echo $this->Form->create('GrauAcademico'); ?>
    <fieldset>
        <legend><?php echo __('Edit Grau Academico'); ?></legend>
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
                    ['action' => 'delete', $this->Form->value('GrauAcademico.id')], [],
                    __('Are you sure you want to delete # %s?', $this->Form->value('GrauAcademico.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Grau Academicos'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Candidato Alumnis'),
                    ['controller' => 'candidato_alumnis', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Candidato Alumni'),
                    ['controller' => 'candidato_alumnis', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Cursos'), ['controller' => 'cursos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Curso'), ['controller' => 'cursos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Funcionarios'),
                    ['controller' => 'funcionarios', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Funcionario'),
                    ['controller' => 'funcionarios', 'action' => 'add']); ?> </li>
    </ul>
</div>
