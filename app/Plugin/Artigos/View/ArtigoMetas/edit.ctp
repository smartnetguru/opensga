<div class="artigoMetas form">
    <?php echo $this->Form->create('ArtigoMeta'); ?>
    <fieldset>
        <legend><?php echo __('Edit Artigo Meta'); ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('artigo_id');
            echo $this->Form->input('meta_key');
            echo $this->Form->input('meta_value');
            echo $this->Form->input('estado_objecto_id');
            echo $this->Form->input('created_by');
            echo $this->Form->input('modified_by');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'), ['action' => 'delete', $this->Form->value('ArtigoMeta.id')],
                    [
                            'confirm' => __('Are you sure you want to delete # %s?',
                                    $this->Form->value('ArtigoMeta.id')),
                    ]); ?></li>
        <li><?php echo $this->Html->link(__('List Artigo Metas'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Artigos'), ['controller' => 'artigos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Artigo'), ['controller' => 'artigos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Estado Objectos'),
                    ['controller' => 'estado_objectos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Estado Objecto'),
                    ['controller' => 'estado_objectos', 'action' => 'add']); ?> </li>
    </ul>
</div>
