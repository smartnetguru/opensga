<div class="estadoUploads index">
    <h2><?php echo __('Estado Uploads'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('name'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php foreach ($estadoUploads as $estadoUpload): ?>
            <tr>
                <td><?php echo h($estadoUpload['EstadoUpload']['id']); ?>&nbsp;</td>
                <td><?php echo h($estadoUpload['EstadoUpload']['name']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'),
                            ['action' => 'view', $estadoUpload['EstadoUpload']['id']]); ?>
                    <?php echo $this->Html->link(__('Edit'),
                            ['action' => 'edit', $estadoUpload['EstadoUpload']['id']]); ?>
                    <?php echo $this->Form->postLink(__('Delete'),
                            ['action' => 'delete', $estadoUpload['EstadoUpload']['id']], null,
                            __('Are you sure you want to delete # %s?', $estadoUpload['EstadoUpload']['id'])); ?>
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
        <li><?php echo $this->Html->link(__('New Estado Upload'), ['action' => 'add']); ?></li>
        <li><?php echo $this->Html->link(__('List Uploads'), ['controller' => 'uploads', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Upload'), ['controller' => 'uploads', 'action' => 'add']); ?> </li>
    </ul>
</div>
