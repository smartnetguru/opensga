<div class="userLoginHistories index">
    <h2><?php echo __('User Login Histories'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('user_id'); ?></th>
            <th><?php echo $this->Paginator->sort('login_date'); ?></th>
            <th><?php echo $this->Paginator->sort('ip'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($userLoginHistories as $userLoginHistorie): ?>
            <tr>
                <td><?php echo h($userLoginHistorie['UserLoginHistorie']['id']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($userLoginHistorie['User']['id'],
                            ['controller' => 'users', 'action' => 'view', $userLoginHistorie['User']['id']]); ?>
                </td>
                <td><?php echo h($userLoginHistorie['UserLoginHistorie']['login_date']); ?>&nbsp;</td>
                <td><?php echo h($userLoginHistorie['UserLoginHistorie']['ip']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'),
                            ['action' => 'view', $userLoginHistorie['UserLoginHistorie']['id']]); ?>
                    <?php echo $this->Html->link(__('Edit'),
                            ['action' => 'edit', $userLoginHistorie['UserLoginHistorie']['id']]); ?>
                    <?php echo $this->Form->postLink(__('Delete'),
                            ['action' => 'delete', $userLoginHistorie['UserLoginHistorie']['id']], [
                                    'confirm' => __('Are you sure you want to delete # %s?',
                                            $userLoginHistorie['UserLoginHistorie']['id']),
                            ]); ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
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
        <li><?php echo $this->Html->link(__('New User Login Historie'), ['action' => 'add']); ?></li>
        <li><?php echo $this->Html->link(__('List Users'), ['controller' => 'users', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New User'), ['controller' => 'users', 'action' => 'add']); ?> </li>
    </ul>
</div>
