<div class="cursoNews form">
    <?php echo $this->Form->create('CursoNews'); ?>
    <fieldset>
        <legend><?php echo __('Edit Curso News'); ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('name');
            echo $this->Form->input('grau_academico_id');
            echo $this->Form->input('tipo_curso_id');
            echo $this->Form->input('codigo');
            echo $this->Form->input('pagamento_exclusivo');
            echo $this->Form->input('unidade_organica_id');
            echo $this->Form->input('created_by');
            echo $this->Form->input('modified_by');
            echo $this->Form->input('codigo_admissao');
            echo $this->Form->input('estado_objecto_id');
            echo $this->Form->input('ano_criacao');
            echo $this->Form->input('duracao');
            echo $this->Form->input('user_responsavel_curso');
            echo $this->Form->input('curso_responsavel_id');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'), ['action' => 'delete', $this->Form->value('CursoNews.id')], [
                    'confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('CursoNews.id')),
            ]); ?></li>
        <li><?php echo $this->Html->link(__('List Curso News'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Grau Academicos'),
                    ['controller' => 'grau_academicos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Grau Academico'),
                    ['controller' => 'grau_academicos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Tipo Cursos'),
                    ['controller' => 'tipo_cursos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Tipo Curso'),
                    ['controller' => 'tipo_cursos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Unidade Organicas'),
                    ['controller' => 'unidade_organicas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Unidade Organica'),
                    ['controller' => 'unidade_organicas', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Estado Objectos'),
                    ['controller' => 'estado_objectos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Estado Objecto'),
                    ['controller' => 'estado_objectos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Curso Responsavels'),
                    ['controller' => 'curso_responsavels', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Curso Responsavel'),
                    ['controller' => 'curso_responsavels', 'action' => 'add']); ?> </li>
    </ul>
</div>
