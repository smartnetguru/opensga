<div class="groupsUsers view">
    <h2><?php echo __('Groups User'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($groupsUser['GroupsUser']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('User'); ?></dt>
        <dd>
            <?php echo $this->Html->link($groupsUser['User']['id'],
                    ['controller' => 'users', 'action' => 'view', $groupsUser['User']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Group'); ?></dt>
        <dd>
            <?php echo $this->Html->link($groupsUser['Group']['name'],
                    ['controller' => 'groups', 'action' => 'view', $groupsUser['Group']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($groupsUser['GroupsUser']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($groupsUser['GroupsUser']['modified']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created By'); ?></dt>
        <dd>
            <?php echo h($groupsUser['GroupsUser']['created_by']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified By'); ?></dt>
        <dd>
            <?php echo h($groupsUser['GroupsUser']['modified_by']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Estado Objecto'); ?></dt>
        <dd>
            <?php echo $this->Html->link($groupsUser['EstadoObjecto']['name'],
                    ['controller' => 'estado_objectos', 'action' => 'view', $groupsUser['EstadoObjecto']['id']]); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Groups User'),
                    ['action' => 'edit', $groupsUser['GroupsUser']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Groups User'),
                    ['action' => 'delete', $groupsUser['GroupsUser']['id']], null,
                    __('Are you sure you want to delete # %s?', $groupsUser['GroupsUser']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Groups Users'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Groups User'), ['action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Users'), ['controller' => 'users', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New User'), ['controller' => 'users', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Groups'), ['controller' => 'groups', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Group'), ['controller' => 'groups', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Estado Objectos'),
                    ['controller' => 'estado_objectos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Estado Objecto'),
                    ['controller' => 'estado_objectos', 'action' => 'add']); ?> </li>
    </ul>
</div>
