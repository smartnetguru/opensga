<div class="docenteDisciplinas form">
    <?php echo $this->Form->create('DocenteDisciplina'); ?>
    <fieldset>
        <legend><?php echo __('Edit Docente Disciplina'); ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('disciplina_id');
            echo $this->Form->input('docente_id');
            echo $this->Form->input('estado_objecto_id');
            echo $this->Form->input('created_by');
            echo $this->Form->input('modified_by');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'),
                    ['action' => 'delete', $this->Form->value('DocenteDisciplina.id')], [
                            'confirm' => __('Are you sure you want to delete # %s?',
                                    $this->Form->value('DocenteDisciplina.id')),
                    ]); ?></li>
        <li><?php echo $this->Html->link(__('List Docente Disciplinas'), ['action' => 'index']); ?></li>
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
