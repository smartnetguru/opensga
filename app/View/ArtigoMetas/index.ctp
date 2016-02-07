<div class="artigoMetas index">
    <h2><?php echo __('Artigo Metas'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('artigo_id'); ?></th>
            <th><?php echo $this->Paginator->sort('meta_key'); ?></th>
            <th><?php echo $this->Paginator->sort('meta_value'); ?></th>
            <th><?php echo $this->Paginator->sort('estado_objecto_id'); ?></th>
            <th><?php echo $this->Paginator->sort('created'); ?></th>
            <th><?php echo $this->Paginator->sort('modified'); ?></th>
            <th><?php echo $this->Paginator->sort('created_by'); ?></th>
            <th><?php echo $this->Paginator->sort('modified_by'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($artigoMetas as $artigoMeta): ?>
            <tr>
                <td><?php echo h($artigoMeta['ArtigoMeta']['id']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($artigoMeta['Artigo']['id'],
                            ['controller' => 'artigos', 'action' => 'view', $artigoMeta['Artigo']['id']]); ?>
                </td>
                <td><?php echo h($artigoMeta['ArtigoMeta']['meta_key']); ?>&nbsp;</td>
                <td><?php echo h($artigoMeta['ArtigoMeta']['meta_value']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($artigoMeta['EstadoObjecto']['name'], [
                            'controller' => 'estado_objectos',
                            'action'     => 'view',
                            $artigoMeta['EstadoObjecto']['id'],
                    ]); ?>
                </td>
                <td><?php echo h($artigoMeta['ArtigoMeta']['created']); ?>&nbsp;</td>
                <td><?php echo h($artigoMeta['ArtigoMeta']['modified']); ?>&nbsp;</td>
                <td><?php echo h($artigoMeta['ArtigoMeta']['created_by']); ?>&nbsp;</td>
                <td><?php echo h($artigoMeta['ArtigoMeta']['modified_by']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'), ['action' => 'view', $artigoMeta['ArtigoMeta']['id']]); ?>
                    <?php echo $this->Html->link(__('Edit'), ['action' => 'edit', $artigoMeta['ArtigoMeta']['id']]); ?>
                    <?php echo $this->Form->postLink(__('Delete'),
                            ['action' => 'delete', $artigoMeta['ArtigoMeta']['id']], [
                                    'confirm' => __('Are you sure you want to delete # %s?',
                                            $artigoMeta['ArtigoMeta']['id']),
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
        <li><?php echo $this->Html->link(__('New Artigo Meta'), ['action' => 'add']); ?></li>
        <li><?php echo $this->Html->link(__('List Artigos'), ['controller' => 'artigos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Artigo'), ['controller' => 'artigos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Estado Objectos'),
                    ['controller' => 'estado_objectos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Estado Objecto'),
                    ['controller' => 'estado_objectos', 'action' => 'add']); ?> </li>
    </ul>
</div>
