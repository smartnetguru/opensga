<div class="uploads index">
    <h2><?php echo __('Uploads'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('name'); ?></th>
            <th><?php echo $this->Paginator->sort('tipo_upload_id'); ?></th>
            <th><?php echo $this->Paginator->sort('data_upload'); ?></th>
            <th><?php echo $this->Paginator->sort('estado_upload_id'); ?></th>
            <th><?php echo $this->Paginator->sort('created'); ?></th>
            <th><?php echo $this->Paginator->sort('modified'); ?></th>
            <th><?php echo $this->Paginator->sort('created_by'); ?></th>
            <th><?php echo $this->Paginator->sort('modified_by'); ?></th>
            <th><?php echo $this->Paginator->sort('file_url'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php foreach ($uploads as $upload): ?>
            <tr>
                <td><?php echo h($upload['Upload']['id']); ?>&nbsp;</td>
                <td><?php echo h($upload['Upload']['name']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($upload['TipoUpload']['name'],
                            ['controller' => 'tipo_uploads', 'action' => 'view', $upload['TipoUpload']['id']]); ?>
                </td>
                <td><?php echo h($upload['Upload']['data_upload']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($upload['EstadoUpload']['name'],
                            ['controller' => 'estado_uploads', 'action' => 'view', $upload['EstadoUpload']['id']]); ?>
                </td>
                <td><?php echo h($upload['Upload']['created']); ?>&nbsp;</td>
                <td><?php echo h($upload['Upload']['modified']); ?>&nbsp;</td>
                <td><?php echo h($upload['Upload']['created_by']); ?>&nbsp;</td>
                <td><?php echo h($upload['Upload']['modified_by']); ?>&nbsp;</td>
                <td><?php echo h($upload['Upload']['file_url']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'), ['action' => 'view', $upload['Upload']['id']]); ?>
                    <?php echo $this->Html->link(__('Edit'), ['action' => 'edit', $upload['Upload']['id']]); ?>
                    <?php echo $this->Form->postLink(__('Delete'), ['action' => 'delete', $upload['Upload']['id']],
                            null, __('Are you sure you want to delete # %s?', $upload['Upload']['id'])); ?>
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
        <li><?php echo $this->Html->link(__('New Upload'), ['action' => 'add']); ?></li>
        <li><?php echo $this->Html->link(__('List Tipo Uploads'),
                    ['controller' => 'tipo_uploads', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Tipo Upload'),
                    ['controller' => 'tipo_uploads', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Estado Uploads'),
                    ['controller' => 'estado_uploads', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Estado Upload'),
                    ['controller' => 'estado_uploads', 'action' => 'add']); ?> </li>
    </ul>
</div>
