<div class="artigoTags index">
    <h2><?php echo __('Artigo Tags'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('name'); ?></th>
            <th><?php echo $this->Paginator->sort('created'); ?></th>
            <th><?php echo $this->Paginator->sort('modified'); ?></th>
            <th><?php echo $this->Paginator->sort('created_by'); ?></th>
            <th><?php echo $this->Paginator->sort('modified_by'); ?></th>
            <th><?php echo $this->Paginator->sort('estado_objecto_id'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($artigoTags as $artigoTag): ?>
            <tr>
                <td><?php echo h($artigoTag['ArtigoTag']['id']); ?>&nbsp;</td>
                <td><?php echo h($artigoTag['ArtigoTag']['name']); ?>&nbsp;</td>
                <td><?php echo h($artigoTag['ArtigoTag']['created']); ?>&nbsp;</td>
                <td><?php echo h($artigoTag['ArtigoTag']['modified']); ?>&nbsp;</td>
                <td><?php echo h($artigoTag['ArtigoTag']['created_by']); ?>&nbsp;</td>
                <td><?php echo h($artigoTag['ArtigoTag']['modified_by']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($artigoTag['EstadoObjecto']['name'], [
                            'controller' => 'estado_objectos',
                            'action'     => 'view',
                            $artigoTag['EstadoObjecto']['id'],
                    ]); ?>
                </td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'), ['action' => 'view', $artigoTag['ArtigoTag']['id']]); ?>
                    <?php echo $this->Html->link(__('Edit'), ['action' => 'edit', $artigoTag['ArtigoTag']['id']]); ?>
                    <?php echo $this->Form->postLink(__('Delete'),
                            ['action' => 'delete', $artigoTag['ArtigoTag']['id']], [
                                    'confirm' => __('Are you sure you want to delete # %s?',
                                            $artigoTag['ArtigoTag']['id']),
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
        <li><?php echo $this->Html->link(__('New Artigo Tag'), ['action' => 'add']); ?></li>
        <li><?php echo $this->Html->link(__('List Estado Objectos'),
                    ['controller' => 'estado_objectos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Estado Objecto'),
                    ['controller' => 'estado_objectos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Artigo Tag Artigos'),
                    ['controller' => 'artigo_tag_artigos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Artigo Tag Artigo'),
                    ['controller' => 'artigo_tag_artigos', 'action' => 'add']); ?> </li>
    </ul>
</div>
