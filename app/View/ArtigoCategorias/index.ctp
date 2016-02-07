<div class="artigoCategorias index">
    <h2><?php echo __('Artigo Categorias'); ?></h2>
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
        <?php foreach ($artigoCategorias as $artigoCategoria): ?>
            <tr>
                <td><?php echo h($artigoCategoria['ArtigoCategoria']['id']); ?>&nbsp;</td>
                <td><?php echo h($artigoCategoria['ArtigoCategoria']['name']); ?>&nbsp;</td>
                <td><?php echo h($artigoCategoria['ArtigoCategoria']['created']); ?>&nbsp;</td>
                <td><?php echo h($artigoCategoria['ArtigoCategoria']['modified']); ?>&nbsp;</td>
                <td><?php echo h($artigoCategoria['ArtigoCategoria']['created_by']); ?>&nbsp;</td>
                <td><?php echo h($artigoCategoria['ArtigoCategoria']['modified_by']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($artigoCategoria['EstadoObjecto']['name'], [
                            'controller' => 'estado_objectos',
                            'action'     => 'view',
                            $artigoCategoria['EstadoObjecto']['id'],
                    ]); ?>
                </td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'),
                            ['action' => 'view', $artigoCategoria['ArtigoCategoria']['id']]); ?>
                    <?php echo $this->Html->link(__('Edit'),
                            ['action' => 'edit', $artigoCategoria['ArtigoCategoria']['id']]); ?>
                    <?php echo $this->Form->postLink(__('Delete'),
                            ['action' => 'delete', $artigoCategoria['ArtigoCategoria']['id']], [
                                    'confirm' => __('Are you sure you want to delete # %s?',
                                            $artigoCategoria['ArtigoCategoria']['id']),
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
        <li><?php echo $this->Html->link(__('New Artigo Categoria'), ['action' => 'add']); ?></li>
        <li><?php echo $this->Html->link(__('List Estado Objectos'),
                    ['controller' => 'estado_objectos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Estado Objecto'),
                    ['controller' => 'estado_objectos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Artigo Categoria Artigos'),
                    ['controller' => 'artigo_categoria_artigos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Artigo Categoria Artigo'),
                    ['controller' => 'artigo_categoria_artigos', 'action' => 'add']); ?> </li>
    </ul>
</div>
