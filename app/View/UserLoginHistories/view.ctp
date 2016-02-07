<div class="userLoginHistories view">
    <h2><?php echo __('User Login Historie'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($userLoginHistorie['UserLoginHistorie']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('User'); ?></dt>
        <dd>
            <?php echo $this->Html->link($userLoginHistorie['User']['id'],
                    ['controller' => 'users', 'action' => 'view', $userLoginHistorie['User']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Login Date'); ?></dt>
        <dd>
            <?php echo h($userLoginHistorie['UserLoginHistorie']['login_date']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Ip'); ?></dt>
        <dd>
            <?php echo h($userLoginHistorie['UserLoginHistorie']['ip']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit User Login Historie'),
                    ['action' => 'edit', $userLoginHistorie['UserLoginHistorie']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete User Login Historie'),
                    ['action' => 'delete', $userLoginHistorie['UserLoginHistorie']['id']], [
                            'confirm' => __('Are you sure you want to delete # %s?',
                                    $userLoginHistorie['UserLoginHistorie']['id']),
                    ]); ?> </li>
        <li><?php echo $this->Html->link(__('List User Login Histories'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New User Login Historie'), ['action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Users'), ['controller' => 'users', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New User'), ['controller' => 'users', 'action' => 'add']); ?> </li>
    </ul>
</div>
