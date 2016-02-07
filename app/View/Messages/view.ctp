<div class="messages view">
    <h2><?php echo __('Message'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($message['Message']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('User'); ?></dt>
        <dd>
            <?php echo $this->Html->link($message['User']['name'],
                    ['controller' => 'users', 'action' => 'view', $message['User']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Assunto'); ?></dt>
        <dd>
            <?php echo h($message['Message']['assunto']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Data Envio'); ?></dt>
        <dd>
            <?php echo h($message['Message']['data_envio']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Estado Objecto Id'); ?></dt>
        <dd>
            <?php echo h($message['Message']['estado_objecto_id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($message['Message']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($message['Message']['modified']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created By'); ?></dt>
        <dd>
            <?php echo h($message['Message']['created_by']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified By'); ?></dt>
        <dd>
            <?php echo h($message['Message']['modified_by']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Message'), ['action' => 'edit', $message['Message']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Message'), ['action' => 'delete', $message['Message']['id']],
                    ['confirm' => __('Are you sure you want to delete # %s?', $message['Message']['id'])]); ?> </li>
        <li><?php echo $this->Html->link(__('List Messages'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Message'), ['action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Users'), ['controller' => 'users', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New User'), ['controller' => 'users', 'action' => 'add']); ?> </li>
    </ul>
</div>
