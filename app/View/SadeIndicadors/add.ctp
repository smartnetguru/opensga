<div class="sadeIndicadors form">
    <?php echo $this->Form->create('SadeIndicador'); ?>
    <fieldset>
        <legend><?php echo __('Add Sade Indicador'); ?></legend>
        <?php
            echo $this->Form->input('codigo');
            echo $this->Form->input('descricao');
            echo $this->Form->input('anexo');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Sade Indicadors'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Sade Parametros'),
                    ['controller' => 'sade_parametros', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Sade Parametro'),
                    ['controller' => 'sade_parametros', 'action' => 'add']); ?> </li>
    </ul>
</div>
