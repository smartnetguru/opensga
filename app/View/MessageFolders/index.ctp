<div class="messageFolders index">
    <h2><?php echo __('Message Folders'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('name'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($messageFolders as $messageFolder): ?>
            <tr>
                <td><?php echo h($messageFolder['MessageFolder']['id']); ?>&nbsp;</td>
                <td><?php echo h($messageFolder['MessageFolder']['name']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'),
                            ['action' => 'view', $messageFolder['MessageFolder']['id']]); ?>
                    <?php echo $this->Html->link(__('Edit'),
                            ['action' => 'edit', $messageFolder['MessageFolder']['id']]); ?>
                    <?php echo $this->Form->postLink(__('Delete'),
                            ['action' => 'delete', $messageFolder['MessageFolder']['id']], [
                                    'confirm' => __('Are you sure you want to delete # %s?',
                                            $messageFolder['MessageFolder']['id']),
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
        <li><?php echo $this->Html->link(__('New Message Folder'), ['action' => 'add']); ?></li>
        <li><?php echo $this->Html->link(__('List Message Users'),
                    ['controller' => 'message_users', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Message User'),
                    ['controller' => 'message_users', 'action' => 'add']); ?> </li>
    </ul>
</div>
