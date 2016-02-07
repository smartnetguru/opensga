<div class="bolsaMotivoIndeferimentos form">
    <?php echo $this->Form->create('BolsaMotivoIndeferimento'); ?>
    <fieldset>
        <legend><?php echo __('Add Bolsa Motivo Indeferimento'); ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('alinea');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Bolsa Motivo Indeferimentos'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Bolsa Resultados'),
                    ['controller' => 'bolsa_resultados', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Bolsa Resultado'),
                    ['controller' => 'bolsa_resultados', 'action' => 'add']); ?> </li>
    </ul>
</div>
