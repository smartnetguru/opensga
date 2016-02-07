<div class="groupRoles index">
    <h2><?php echo __('Group Roles'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('group_id'); ?></th>
            <th><?php echo $this->Paginator->sort('role_id'); ?></th>
            <th><?php echo $this->Paginator->sort('created'); ?></th>
            <th><?php echo $this->Paginator->sort('modified'); ?></th>
            <th><?php echo $this->Paginator->sort('created_by'); ?></th>
            <th><?php echo $this->Paginator->sort('modified_by'); ?></th>
            <th><?php echo $this->Paginator->sort('estado_objecto_id'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php foreach ($groupRoles as $groupRole): ?>
            <tr>
                <td><?php echo h($groupRole['GroupRole']['id']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($groupRole['Group']['name'],
                            ['controller' => 'groups', 'action' => 'view', $groupRole['Group']['id']]); ?>
                </td>
                <td>
                    <?php echo $this->Html->link($groupRole['Role']['name'],
                            ['controller' => 'roles', 'action' => 'view', $groupRole['Role']['id']]); ?>
                </td>
                <td><?php echo h($groupRole['GroupRole']['created']); ?>&nbsp;</td>
                <td><?php echo h($groupRole['GroupRole']['modified']); ?>&nbsp;</td>
                <td><?php echo h($groupRole['GroupRole']['created_by']); ?>&nbsp;</td>
                <td><?php echo h($groupRole['GroupRole']['modified_by']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($groupRole['EstadoObjecto']['name'], [
                            'controller' => 'estado_objectos',
                            'action'     => 'view',
                            $groupRole['EstadoObjecto']['id'],
                    ]); ?>
                </td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'), ['action' => 'view', $groupRole['GroupRole']['id']]); ?>
                    <?php echo $this->Html->link(__('Edit'), ['action' => 'edit', $groupRole['GroupRole']['id']]); ?>
                    <?php echo $this->Form->postLink(__('Delete'),
                            ['action' => 'delete', $groupRole['GroupRole']['id']], null,
                            __('Are you sure you want to delete # %s?', $groupRole['GroupRole']['id'])); ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <p>
        <?php
            echo $this->Paginator->counter([
                    'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'),
            ]);
        ?>    </p>
    <div class="paging">
        <?php
            echo $this->Paginator->prev('< ' . __('previous'), [], null, ['class' => 'prev disabled']);
            echo $this->Paginator->numbers(['separator' => '']);
            echo $this->Paginator->next(__('next') . ' >', [], null, ['class' => 'next disabled']);
        ?>
    </div>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('New Group Role'), ['action' => 'add']); ?></li>
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
