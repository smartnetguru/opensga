<div class="userRoles index">
    <h2><?php echo __('User Roles'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('user_id'); ?></th>
            <th><?php echo $this->Paginator->sort('role_id'); ?></th>
            <th><?php echo $this->Paginator->sort('created'); ?></th>
            <th><?php echo $this->Paginator->sort('modified'); ?></th>
            <th><?php echo $this->Paginator->sort('created_by'); ?></th>
            <th><?php echo $this->Paginator->sort('modified_by'); ?></th>
            <th><?php echo $this->Paginator->sort('estado_objecto_id'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php foreach ($userRoles as $userRole): ?>
            <tr>
                <td><?php echo h($userRole['UserRole']['id']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($userRole['User']['id'],
                            ['controller' => 'users', 'action' => 'view', $userRole['User']['id']]); ?>
                </td>
                <td>
                    <?php echo $this->Html->link($userRole['Role']['name'],
                            ['controller' => 'roles', 'action' => 'view', $userRole['Role']['id']]); ?>
                </td>
                <td><?php echo h($userRole['UserRole']['created']); ?>&nbsp;</td>
                <td><?php echo h($userRole['UserRole']['modified']); ?>&nbsp;</td>
                <td><?php echo h($userRole['UserRole']['created_by']); ?>&nbsp;</td>
                <td><?php echo h($userRole['UserRole']['modified_by']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($userRole['EstadoObjecto']['name'], [
                            'controller' => 'estado_objectos',
                            'action'     => 'view',
                            $userRole['EstadoObjecto']['id'],
                    ]); ?>
                </td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'), ['action' => 'view', $userRole['UserRole']['id']]); ?>
                    <?php echo $this->Html->link(__('Edit'), ['action' => 'edit', $userRole['UserRole']['id']]); ?>
                    <?php echo $this->Form->postLink(__('Delete'), ['action' => 'delete', $userRole['UserRole']['id']],
                            null, __('Are you sure you want to delete # %s?', $userRole['UserRole']['id'])); ?>
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
        <li><?php echo $this->Html->link(__('New User Role'), ['action' => 'add']); ?></li>
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
