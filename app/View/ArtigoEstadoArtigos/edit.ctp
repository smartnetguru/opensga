<div class="artigoEstadoArtigos form">
    <?php echo $this->Form->create('ArtigoEstadoArtigo'); ?>
    <fieldset>
        <legend><?php echo __('Edit Artigo Estado Artigo'); ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'),
                    ['action' => 'delete', $this->Form->value('ArtigoEstadoArtigo.id')], [
                            'confirm' => __('Are you sure you want to delete # %s?',
                                    $this->Form->value('ArtigoEstadoArtigo.id')),
                    ]); ?></li>
        <li><?php echo $this->Html->link(__('List Artigo Estado Artigos'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Artigos'), ['controller' => 'artigos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Artigo'), ['controller' => 'artigos', 'action' => 'add']); ?> </li>
    </ul>
</div>
