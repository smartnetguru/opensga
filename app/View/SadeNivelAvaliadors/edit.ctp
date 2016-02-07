<div class="sadeNivelAvaliadors form">
    <?php echo $this->Form->create('SadeNivelAvaliador'); ?>
    <fieldset>
        <legend><?php echo __('Edit Sade Nivel Avaliador'); ?></legend>
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
                    ['action' => 'delete', $this->Form->value('SadeNivelAvaliador.id')], null,
                    __('Are you sure you want to delete # %s?', $this->Form->value('SadeNivelAvaliador.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Sade Nivel Avaliadors'), ['action' => 'index']); ?></li>
    </ul>
</div>
