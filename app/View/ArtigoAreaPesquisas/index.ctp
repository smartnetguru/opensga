<div class="artigoAreaPesquisas index">
    <h2><?php echo __('Artigo Area Pesquisas'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('artigo_id'); ?></th>
            <th><?php echo $this->Paginator->sort('area_pesquisa_id'); ?></th>
            <th><?php echo $this->Paginator->sort('created'); ?></th>
            <th><?php echo $this->Paginator->sort('modified'); ?></th>
            <th><?php echo $this->Paginator->sort('created_by'); ?></th>
            <th><?php echo $this->Paginator->sort('modified_by'); ?></th>
            <th><?php echo $this->Paginator->sort('estado_objecto_id'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($artigoAreaPesquisas as $artigoAreaPesquisa): ?>
            <tr>
                <td><?php echo h($artigoAreaPesquisa['ArtigoAreaPesquisa']['id']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($artigoAreaPesquisa['Artigo']['id'],
                            ['controller' => 'artigos', 'action' => 'view', $artigoAreaPesquisa['Artigo']['id']]); ?>
                </td>
                <td>
                    <?php echo $this->Html->link($artigoAreaPesquisa['AreaPesquisa']['name'], [
                            'controller' => 'area_pesquisas',
                            'action'     => 'view',
                            $artigoAreaPesquisa['AreaPesquisa']['id'],
                    ]); ?>
                </td>
                <td><?php echo h($artigoAreaPesquisa['ArtigoAreaPesquisa']['created']); ?>&nbsp;</td>
                <td><?php echo h($artigoAreaPesquisa['ArtigoAreaPesquisa']['modified']); ?>&nbsp;</td>
                <td><?php echo h($artigoAreaPesquisa['ArtigoAreaPesquisa']['created_by']); ?>&nbsp;</td>
                <td><?php echo h($artigoAreaPesquisa['ArtigoAreaPesquisa']['modified_by']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($artigoAreaPesquisa['EstadoObjecto']['name'], [
                            'controller' => 'estado_objectos',
                            'action'     => 'view',
                            $artigoAreaPesquisa['EstadoObjecto']['id'],
                    ]); ?>
                </td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'),
                            ['action' => 'view', $artigoAreaPesquisa['ArtigoAreaPesquisa']['id']]); ?>
                    <?php echo $this->Html->link(__('Edit'),
                            ['action' => 'edit', $artigoAreaPesquisa['ArtigoAreaPesquisa']['id']]); ?>
                    <?php echo $this->Form->postLink(__('Delete'),
                            ['action' => 'delete', $artigoAreaPesquisa['ArtigoAreaPesquisa']['id']], [
                                    'confirm' => __('Are you sure you want to delete # %s?',
                                            $artigoAreaPesquisa['ArtigoAreaPesquisa']['id']),
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
        <li><?php echo $this->Html->link(__('New Artigo Area Pesquisa'), ['action' => 'add']); ?></li>
        <li><?php echo $this->Html->link(__('List Artigos'), ['controller' => 'artigos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Artigo'), ['controller' => 'artigos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Area Pesquisas'),
                    ['controller' => 'area_pesquisas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Area Pesquisa'),
                    ['controller' => 'area_pesquisas', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Estado Objectos'),
                    ['controller' => 'estado_objectos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Estado Objecto'),
                    ['controller' => 'estado_objectos', 'action' => 'add']); ?> </li>
    </ul>
</div>
