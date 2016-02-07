<div class="artigoAreaAcademicas index">
    <h2><?php echo __('Artigo Area Academicas'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('artigo_id'); ?></th>
            <th><?php echo $this->Paginator->sort('area_academica_id'); ?></th>
            <th><?php echo $this->Paginator->sort('created'); ?></th>
            <th><?php echo $this->Paginator->sort('modified'); ?></th>
            <th><?php echo $this->Paginator->sort('created_by'); ?></th>
            <th><?php echo $this->Paginator->sort('modified_by'); ?></th>
            <th><?php echo $this->Paginator->sort('estado_objecto_id'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($artigoAreaAcademicas as $artigoAreaAcademica): ?>
            <tr>
                <td><?php echo h($artigoAreaAcademica['ArtigoAreaAcademica']['id']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($artigoAreaAcademica['Artigo']['id'],
                            ['controller' => 'artigos', 'action' => 'view', $artigoAreaAcademica['Artigo']['id']]); ?>
                </td>
                <td>
                    <?php echo $this->Html->link($artigoAreaAcademica['AreaAcademica']['name'], [
                            'controller' => 'area_academicas',
                            'action'     => 'view',
                            $artigoAreaAcademica['AreaAcademica']['id'],
                    ]); ?>
                </td>
                <td><?php echo h($artigoAreaAcademica['ArtigoAreaAcademica']['created']); ?>&nbsp;</td>
                <td><?php echo h($artigoAreaAcademica['ArtigoAreaAcademica']['modified']); ?>&nbsp;</td>
                <td><?php echo h($artigoAreaAcademica['ArtigoAreaAcademica']['created_by']); ?>&nbsp;</td>
                <td><?php echo h($artigoAreaAcademica['ArtigoAreaAcademica']['modified_by']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($artigoAreaAcademica['EstadoObjecto']['name'], [
                            'controller' => 'estado_objectos',
                            'action'     => 'view',
                            $artigoAreaAcademica['EstadoObjecto']['id'],
                    ]); ?>
                </td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'),
                            ['action' => 'view', $artigoAreaAcademica['ArtigoAreaAcademica']['id']]); ?>
                    <?php echo $this->Html->link(__('Edit'),
                            ['action' => 'edit', $artigoAreaAcademica['ArtigoAreaAcademica']['id']]); ?>
                    <?php echo $this->Form->postLink(__('Delete'),
                            ['action' => 'delete', $artigoAreaAcademica['ArtigoAreaAcademica']['id']], [
                                    'confirm' => __('Are you sure you want to delete # %s?',
                                            $artigoAreaAcademica['ArtigoAreaAcademica']['id']),
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
        <li><?php echo $this->Html->link(__('New Artigo Area Academica'), ['action' => 'add']); ?></li>
        <li><?php echo $this->Html->link(__('List Artigos'), ['controller' => 'artigos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Artigo'), ['controller' => 'artigos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Area Academicas'),
                    ['controller' => 'area_academicas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Area Academica'),
                    ['controller' => 'area_academicas', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Estado Objectos'),
                    ['controller' => 'estado_objectos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Estado Objecto'),
                    ['controller' => 'estado_objectos', 'action' => 'add']); ?> </li>
    </ul>
</div>
