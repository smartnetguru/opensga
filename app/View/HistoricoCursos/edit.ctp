<div class="historicoCursos form">
    <?php echo $this->Form->create('HistoricoCurso'); ?>
    <fieldset>
        <legend><?php echo __('Edit Historico Curso'); ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('aluno_id');
            echo $this->Form->input('curso_id');
            echo $this->Form->input('ano_ingresso');
            echo $this->Form->input('ano_fim');
            echo $this->Form->input('ano_lectivo_ingresso');
            echo $this->Form->input('ano_lectivo_fim');
            echo $this->Form->input('data_conclusao');
            echo $this->Form->input('nota_final');
            echo $this->Form->input('created_by');
            echo $this->Form->input('modified_by');
            echo $this->Form->input('anexo_url');
            echo $this->Form->input('conclusao_confirmada');
            echo $this->Form->input('funcionario_confirmador');
            echo $this->Form->input('plano_estudo_id');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'),
                    ['action' => 'delete', $this->Form->value('HistoricoCurso.id')], null,
                    __('Are you sure you want to delete # %s?', $this->Form->value('HistoricoCurso.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Historico Cursos'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Alunos'), ['controller' => 'alunos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Aluno'), ['controller' => 'alunos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Cursos'), ['controller' => 'cursos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Curso'), ['controller' => 'cursos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Plano Estudos'),
                    ['controller' => 'plano_estudos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Plano Estudo'),
                    ['controller' => 'plano_estudos', 'action' => 'add']); ?> </li>
    </ul>
</div>
