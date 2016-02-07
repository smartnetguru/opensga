<div class="funcaoProfissionalRoles form">
    <?php echo $this->Form->create('FuncaoProfissionalRole'); ?>
    <fieldset>
        <legend><?php echo __('Add Funcao Profissional Role'); ?></legend>
        <?php
            echo $this->Form->input('funcao_profissional_id');
            echo $this->Form->input('role_id');
            echo $this->Form->input('created_by');
            echo $this->Form->input('modified_by');
            echo $this->Form->input('estado_objecto_id');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Funcao Profissional Roles'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Funcao Profissionals'),
                    ['controller' => 'funcao_profissionals', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Funcao Profissional'),
                    ['controller' => 'funcao_profissionals', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Roles'), ['controller' => 'roles', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Role'), ['controller' => 'roles', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Estado Objectos'),
                    ['controller' => 'estado_objectos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Estado Objecto'),
                    ['controller' => 'estado_objectos', 'action' => 'add']); ?> </li>
    </ul>
</div>
