<div class="artigoAreaAcademicas view">
    <h2><?php echo __('Artigo Area Academica'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($artigoAreaAcademica['ArtigoAreaAcademica']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Artigo'); ?></dt>
        <dd>
            <?php echo $this->Html->link($artigoAreaAcademica['Artigo']['id'],
                    ['controller' => 'artigos', 'action' => 'view', $artigoAreaAcademica['Artigo']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Area Academica'); ?></dt>
        <dd>
            <?php echo $this->Html->link($artigoAreaAcademica['AreaAcademica']['name'], [
                    'controller' => 'area_academicas',
                    'action'     => 'view',
                    $artigoAreaAcademica['AreaAcademica']['id'],
            ]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($artigoAreaAcademica['ArtigoAreaAcademica']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($artigoAreaAcademica['ArtigoAreaAcademica']['modified']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created By'); ?></dt>
        <dd>
            <?php echo h($artigoAreaAcademica['ArtigoAreaAcademica']['created_by']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified By'); ?></dt>
        <dd>
            <?php echo h($artigoAreaAcademica['ArtigoAreaAcademica']['modified_by']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Estado Objecto'); ?></dt>
        <dd>
            <?php echo $this->Html->link($artigoAreaAcademica['EstadoObjecto']['name'], [
                    'controller' => 'estado_objectos',
                    'action'     => 'view',
                    $artigoAreaAcademica['EstadoObjecto']['id'],
            ]); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Artigo Area Academica'),
                    ['action' => 'edit', $artigoAreaAcademica['ArtigoAreaAcademica']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Artigo Area Academica'),
                    ['action' => 'delete', $artigoAreaAcademica['ArtigoAreaAcademica']['id']], [
                            'confirm' => __('Are you sure you want to delete # %s?',
                                    $artigoAreaAcademica['ArtigoAreaAcademica']['id']),
                    ]); ?> </li>
        <li><?php echo $this->Html->link(__('List Artigo Area Academicas'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Artigo Area Academica'), ['action' => 'add']); ?> </li>
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
