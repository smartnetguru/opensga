<div class="bolsaValorBolsas form">
    <?php echo $this->Form->create('BolsaValorBolsa'); ?>
    <fieldset>
        <legend><?php echo __('Add Bolsa Valor Bolsa'); ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('valor');
            echo $this->Form->input('ano_lectivo_id');
            echo $this->Form->input('bolsa_tipo_bolsa_id');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Bolsa Valor Bolsas'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Anolectivos'),
                    ['controller' => 'anolectivos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New AnoLectivo'),
                    ['controller' => 'anolectivos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Bolsa Tipo Bolsas'),
                    ['controller' => 'bolsa_tipo_bolsas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Bolsa Tipo Bolsa'),
                    ['controller' => 'bolsa_tipo_bolsas', 'action' => 'add']); ?> </li>
    </ul>
</div>
