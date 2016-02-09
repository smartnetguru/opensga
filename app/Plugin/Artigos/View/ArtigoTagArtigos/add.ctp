<div class="artigoTagArtigos form">
    <?php echo $this->Form->create('ArtigoTagArtigo'); ?>
    <fieldset>
        <legend><?php echo __('Add Artigo Tag Artigo'); ?></legend>
        <?php
            echo $this->Form->input('artigo_id');
            echo $this->Form->input('artigo_tag_id');
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

        <li><?php echo $this->Html->link(__('List Artigo Tag Artigos'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Artigos'), ['controller' => 'artigos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Artigo'), ['controller' => 'artigos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Artigo Tags'),
                    ['controller' => 'artigo_tags', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Artigo Tag'),
                    ['controller' => 'artigo_tags', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Estado Objectos'),
                    ['controller' => 'estado_objectos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Estado Objecto'),
                    ['controller' => 'estado_objectos', 'action' => 'add']); ?> </li>
    </ul>
</div>
