<div class="artigoAreaPesquisas form">
    <?php echo $this->Form->create('ArtigoAreaPesquisa'); ?>
    <fieldset>
        <legend><?php echo __('Edit Artigo Area Pesquisa'); ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('artigo_id');
            echo $this->Form->input('area_pesquisa_id');
            echo $this->Form->input('created_by');
            echo $this->Form->input('modified_by');
            echo $this->Form->input('estado_objecto_id');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'),
                    ['action' => 'delete', $this->Form->value('ArtigoAreaPesquisa.id')], [
                            'confirm' => __('Are you sure you want to delete # %s?',
                                    $this->Form->value('ArtigoAreaPesquisa.id')),
                    ]); ?></li>
        <li><?php echo $this->Html->link(__('List Artigo Area Pesquisas'), ['action' => 'index']); ?></li>
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
