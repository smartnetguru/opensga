<div class="artigoAreaPesquisas view">
    <h2><?php echo __('Artigo Area Pesquisa'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($artigoAreaPesquisa['ArtigoAreaPesquisa']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Artigo'); ?></dt>
        <dd>
            <?php echo $this->Html->link($artigoAreaPesquisa['Artigo']['id'],
                    ['controller' => 'artigos', 'action' => 'view', $artigoAreaPesquisa['Artigo']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Area Pesquisa'); ?></dt>
        <dd>
            <?php echo $this->Html->link($artigoAreaPesquisa['AreaPesquisa']['name'], [
                    'controller' => 'area_pesquisas',
                    'action'     => 'view',
                    $artigoAreaPesquisa['AreaPesquisa']['id'],
            ]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($artigoAreaPesquisa['ArtigoAreaPesquisa']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($artigoAreaPesquisa['ArtigoAreaPesquisa']['modified']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created By'); ?></dt>
        <dd>
            <?php echo h($artigoAreaPesquisa['ArtigoAreaPesquisa']['created_by']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified By'); ?></dt>
        <dd>
            <?php echo h($artigoAreaPesquisa['ArtigoAreaPesquisa']['modified_by']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Estado Objecto'); ?></dt>
        <dd>
            <?php echo $this->Html->link($artigoAreaPesquisa['EstadoObjecto']['name'], [
                    'controller' => 'estado_objectos',
                    'action'     => 'view',
                    $artigoAreaPesquisa['EstadoObjecto']['id'],
            ]); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Artigo Area Pesquisa'),
                    ['action' => 'edit', $artigoAreaPesquisa['ArtigoAreaPesquisa']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Artigo Area Pesquisa'),
                    ['action' => 'delete', $artigoAreaPesquisa['ArtigoAreaPesquisa']['id']], [
                            'confirm' => __('Are you sure you want to delete # %s?',
                                    $artigoAreaPesquisa['ArtigoAreaPesquisa']['id']),
                    ]); ?> </li>
        <li><?php echo $this->Html->link(__('List Artigo Area Pesquisas'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Artigo Area Pesquisa'), ['action' => 'add']); ?> </li>
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
