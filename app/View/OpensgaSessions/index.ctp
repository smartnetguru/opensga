<div class="opensgaSessions index">
    <h2><?php echo __('Opensga Sessions'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('data'); ?></th>
            <th><?php echo $this->Paginator->sort('expires'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($opensgaSessions as $opensgaSessiom): ?>
            <tr>
                <td><?php echo h($opensgaSessiom['OpensgaSessiom']['id']); ?>&nbsp;</td>
                <td><?php echo h($opensgaSessiom['OpensgaSessiom']['data']); ?>&nbsp;</td>
                <td><?php echo h($opensgaSessiom['OpensgaSessiom']['expires']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'),
                            ['action' => 'view', $opensgaSessiom['OpensgaSessiom']['id']]); ?>
                    <?php echo $this->Html->link(__('Edit'),
                            ['action' => 'edit', $opensgaSessiom['OpensgaSessiom']['id']]); ?>
                    <?php echo $this->Form->postLink(__('Delete'),
                            ['action' => 'delete', $opensgaSessiom['OpensgaSessiom']['id']], [
                                    'confirm' => __('Are you sure you want to delete # %s?',
                                            $opensgaSessiom['OpensgaSessiom']['id']),
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
        <li><?php echo $this->Html->link(__('New Opensga Sessiom'), ['action' => 'add']); ?></li>
    </ul>
</div>
