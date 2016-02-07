<div class="userLoginHistories form">
    <?php echo $this->Form->create('UserLoginHistorie'); ?>
    <fieldset>
        <legend><?php echo __('Add User Login Historie'); ?></legend>
        <?php
            echo $this->Form->input('user_id');
            echo $this->Form->input('login_date');
            echo $this->Form->input('ip');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List User Login Histories'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Users'), ['controller' => 'users', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New User'), ['controller' => 'users', 'action' => 'add']); ?> </li>
    </ul>
</div>
