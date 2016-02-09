<div class="artigos form">
    <?php echo $this->Form->create('Artigo'); ?>
    <fieldset>
        <legend><?php echo __('Add Artigo'); ?></legend>
        <?php
            echo $this->Form->input('user_id');
            echo $this->Form->input('entidade_id');
            echo $this->Form->input('data_publicacao');
            echo $this->Form->input('conteudo');
            echo $this->Form->input('titulo');
            echo $this->Form->input('resumo');
            echo $this->Form->input('estado_objecto_id');
            echo $this->Form->input('artigo_estado_artigo_id');
            echo $this->Form->input('slug');
            echo $this->Form->input('created_by');
            echo $this->Form->input('modified_by');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Artigos'), ['action' => 'index']); ?></li>
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
