<div class="artigoCategoriaArtigos form">
    <?php echo $this->Form->create('ArtigoCategoriaArtigo'); ?>
    <fieldset>
        <legend><?php echo __('Add Artigo Categoria Artigo'); ?></legend>
        <?php
            echo $this->Form->input('artigo_id');
            echo $this->Form->input('artigo_categoria_id');
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

        <li><?php echo $this->Html->link(__('List Artigo Categoria Artigos'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Artigos'), ['controller' => 'artigos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Artigo'), ['controller' => 'artigos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Artigo Categorias'),
                    ['controller' => 'artigo_categorias', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Artigo Categoria'),
                    ['controller' => 'artigo_categorias', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Estado Objectos'),
                    ['controller' => 'estado_objectos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Estado Objecto'),
                    ['controller' => 'estado_objectos', 'action' => 'add']); ?> </li>
    </ul>
</div>
