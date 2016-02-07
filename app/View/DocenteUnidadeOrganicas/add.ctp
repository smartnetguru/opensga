<div class="docenteUnidadeOrganicas form">
    <?php echo $this->Form->create('DocenteUnidadeOrganica'); ?>
    <fieldset>
        <legend><?php echo __('Add Docente Unidade Organica'); ?></legend>
        <?php
            echo $this->Form->input('docente_id');
            echo $this->Form->input('unidade_organica_id');
            echo $this->Form->input('estado_objecto_id');
            echo $this->Form->input('data_inicio');
            echo $this->Form->input('data_fim');
            echo $this->Form->input('create_by');
            echo $this->Form->input('modified_by');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Docente Unidade Organicas'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Docentes'),
                    ['controller' => 'docentes', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Docente'), ['controller' => 'docentes', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Unidade Organicas'),
                    ['controller' => 'unidade_organicas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Unidade Organica'),
                    ['controller' => 'unidade_organicas', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Estado Objectos'),
                    ['controller' => 'estado_objectos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Estado Objecto'),
                    ['controller' => 'estado_objectos', 'action' => 'add']); ?> </li>
    </ul>
</div>
