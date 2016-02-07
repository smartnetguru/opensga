<div class="userRoles view">
    <h2><?php echo __('User Role'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($userRole['UserRole']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('User'); ?></dt>
        <dd>
            <?php echo $this->Html->link($userRole['User']['id'],
                    ['controller' => 'users', 'action' => 'view', $userRole['User']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Role'); ?></dt>
        <dd>
            <?php echo $this->Html->link($userRole['Role']['name'],
                    ['controller' => 'roles', 'action' => 'view', $userRole['Role']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($userRole['UserRole']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($userRole['UserRole']['modified']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created By'); ?></dt>
        <dd>
            <?php echo h($userRole['UserRole']['created_by']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified By'); ?></dt>
        <dd>
            <?php echo h($userRole['UserRole']['modified_by']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Estado Objecto'); ?></dt>
        <dd>
            <?php echo $this->Html->link($userRole['EstadoObjecto']['name'],
                    ['controller' => 'estado_objectos', 'action' => 'view', $userRole['EstadoObjecto']['id']]); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit User Role'),
                    ['action' => 'edit', $userRole['UserRole']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete User Role'),
                    ['action' => 'delete', $userRole['UserRole']['id']], null,
                    __('Are you sure you want to delete # %s?', $userRole['UserRole']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List User Roles'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New User Role'), ['action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Users'), ['controller' => 'users', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New User'), ['controller' => 'users', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Roles'), ['controller' => 'roles', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Role'), ['controller' => 'roles', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Estado Objectos'),
                    ['controller' => 'estado_objectos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Estado Objecto'),
                    ['controller' => 'estado_objectos', 'action' => 'add']); ?> </li>
    </ul>
</div>
