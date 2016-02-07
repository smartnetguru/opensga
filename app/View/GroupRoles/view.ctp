<div class="groupRoles view">
    <h2><?php echo __('Group Role'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($groupRole['GroupRole']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Group'); ?></dt>
        <dd>
            <?php echo $this->Html->link($groupRole['Group']['name'],
                    ['controller' => 'groups', 'action' => 'view', $groupRole['Group']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Role'); ?></dt>
        <dd>
            <?php echo $this->Html->link($groupRole['Role']['name'],
                    ['controller' => 'roles', 'action' => 'view', $groupRole['Role']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($groupRole['GroupRole']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($groupRole['GroupRole']['modified']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created By'); ?></dt>
        <dd>
            <?php echo h($groupRole['GroupRole']['created_by']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified By'); ?></dt>
        <dd>
            <?php echo h($groupRole['GroupRole']['modified_by']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Estado Objecto'); ?></dt>
        <dd>
            <?php echo $this->Html->link($groupRole['EstadoObjecto']['name'],
                    ['controller' => 'estado_objectos', 'action' => 'view', $groupRole['EstadoObjecto']['id']]); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Group Role'),
                    ['action' => 'edit', $groupRole['GroupRole']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Group Role'),
                    ['action' => 'delete', $groupRole['GroupRole']['id']], null,
                    __('Are you sure you want to delete # %s?', $groupRole['GroupRole']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Group Roles'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Group Role'), ['action' => 'add']); ?> </li>
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
