<div class="alunoNivelMedios form">
    <?php echo $this->Form->create('AlunoNivelMedio'); ?>
    <fieldset>
        <legend><?php echo __('Edit Aluno Nivel Medio'); ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('aluno_id');
            echo $this->Form->input('escola_nivel_medio_id');
            echo $this->Form->input('ano_conclusao');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'),
                    ['action' => 'delete', $this->Form->value('AlunoNivelMedio.id')], null,
                    __('Are you sure you want to delete # %s?', $this->Form->value('AlunoNivelMedio.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Aluno Nivel Medios'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Alunos'), ['controller' => 'alunos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Aluno'), ['controller' => 'alunos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Escola Nivel Medios'),
                    ['controller' => 'escola_nivel_medios', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Escola Nivel Medio'),
                    ['controller' => 'escola_nivel_medios', 'action' => 'add']); ?> </li>
    </ul>
</div>
