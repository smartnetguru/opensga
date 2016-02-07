<div class="cursoTipoPamentos form">
    <?php echo $this->Form->create('CursoTipoPamento'); ?>
    <fieldset>
        <legend><?php echo __('Edit Curso Tipo Pamento'); ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('curso_id');
            echo $this->Form->input('tipopagamento_id');
            echo $this->Form->input('valor');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'),
                    ['action' => 'delete', $this->Form->value('CursoTipoPamento.id')], null,
                    __('Are you sure you want to delete # %s?', $this->Form->value('CursoTipoPamento.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Curso Tipo Pamentos'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Cursos'), ['controller' => 'cursos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Curso'), ['controller' => 'cursos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Tipopagamentos'),
                    ['controller' => 'tipopagamentos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Tipopagamento'),
                    ['controller' => 'tipopagamentos', 'action' => 'add']); ?> </li>
    </ul>
</div>
