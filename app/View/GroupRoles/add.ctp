<div class="groupRoles form">
    <?php echo $this->Form->create('GroupRole'); ?>
    <fieldset>
        <legend><?php echo __('Add Group Role'); ?></legend>
        <?php
            echo $this->Form->input('group_id');
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

        <li><?php echo $this->Html->link(__('List Group Roles'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Groups'), ['controller' => 'groups', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Group'), ['controller' => 'groups', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Roles'), ['controller' => 'roles', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Role'), ['controller' => 'roles', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Estado Objectos'),
                    ['controller' => 'estado_objectos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Estado Objecto'),
                    ['controller' => 'estado_objectos', 'action' => 'add']); ?> </li>
    </ul>
</div>
