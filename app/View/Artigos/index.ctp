<div class="artigos index">
    <h2><?php echo __('Artigos'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('user_id'); ?></th>
            <th><?php echo $this->Paginator->sort('entidade_id'); ?></th>
            <th><?php echo $this->Paginator->sort('data_publicacao'); ?></th>
            <th><?php echo $this->Paginator->sort('conteudo'); ?></th>
            <th><?php echo $this->Paginator->sort('titulo'); ?></th>
            <th><?php echo $this->Paginator->sort('resumo'); ?></th>
            <th><?php echo $this->Paginator->sort('estado_objecto_id'); ?></th>
            <th><?php echo $this->Paginator->sort('artigo_estado_artigo_id'); ?></th>
            <th><?php echo $this->Paginator->sort('slug'); ?></th>
            <th><?php echo $this->Paginator->sort('created'); ?></th>
            <th><?php echo $this->Paginator->sort('modified'); ?></th>
            <th><?php echo $this->Paginator->sort('created_by'); ?></th>
            <th><?php echo $this->Paginator->sort('modified_by'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($artigos as $artigo): ?>
            <tr>
                <td><?php echo h($artigo['Artigo']['id']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($artigo['User']['name'],
                            ['controller' => 'users', 'action' => 'view', $artigo['User']['id']]); ?>
                </td>
                <td>
                    <?php echo $this->Html->link($artigo['Entidade']['name'],
                            ['controller' => 'entidades', 'action' => 'view', $artigo['Entidade']['id']]); ?>
                </td>
                <td><?php echo h($artigo['Artigo']['data_publicacao']); ?>&nbsp;</td>
                <td><?php echo h($artigo['Artigo']['conteudo']); ?>&nbsp;</td>
                <td><?php echo h($artigo['Artigo']['titulo']); ?>&nbsp;</td>
                <td><?php echo h($artigo['Artigo']['resumo']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($artigo['EstadoObjecto']['name'],
                            ['controller' => 'estado_objectos', 'action' => 'view', $artigo['EstadoObjecto']['id']]); ?>
                </td>
                <td>
                    <?php echo $this->Html->link($artigo['ArtigoEstadoArtigo']['name'], [
                            'controller' => 'artigo_estado_artigos',
                            'action'     => 'view',
                            $artigo['ArtigoEstadoArtigo']['id'],
                    ]); ?>
                </td>
                <td><?php echo h($artigo['Artigo']['slug']); ?>&nbsp;</td>
                <td><?php echo h($artigo['Artigo']['created']); ?>&nbsp;</td>
                <td><?php echo h($artigo['Artigo']['modified']); ?>&nbsp;</td>
                <td><?php echo h($artigo['Artigo']['created_by']); ?>&nbsp;</td>
                <td><?php echo h($artigo['Artigo']['modified_by']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'), ['action' => 'view', $artigo['Artigo']['id']]); ?>
                    <?php echo $this->Html->link(__('Edit'), ['action' => 'edit', $artigo['Artigo']['id']]); ?>
                    <?php echo $this->Form->postLink(__('Delete'), ['action' => 'delete', $artigo['Artigo']['id']],
                            ['confirm' => __('Are you sure you want to delete # %s?', $artigo['Artigo']['id'])]); ?>
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
        <li><?php echo $this->Html->link(__('New Artigo'), ['action' => 'add']); ?></li>
        <li><?php echo $this->Html->link(__('List Users'), ['controller' => 'users', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New User'), ['controller' => 'users', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Entidades'),
                    ['controller' => 'entidades', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Entidade'), ['controller' => 'entidades', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Estado Objectos'),
                    ['controller' => 'estado_objectos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Estado Objecto'),
                    ['controller' => 'estado_objectos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Artigo Estado Artigos'),
                    ['controller' => 'artigo_estado_artigos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Artigo Estado Artigo'),
                    ['controller' => 'artigo_estado_artigos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Artigo Area Academicas'),
                    ['controller' => 'artigo_area_academicas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Artigo Area Academica'),
                    ['controller' => 'artigo_area_academicas', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Artigo Area Pesquisas'),
                    ['controller' => 'artigo_area_pesquisas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Artigo Area Pesquisa'),
                    ['controller' => 'artigo_area_pesquisas', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Artigo Metas'),
                    ['controller' => 'artigo_metas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Artigo Meta'),
                    ['controller' => 'artigo_metas', 'action' => 'add']); ?> </li>
    </ul>
</div>
