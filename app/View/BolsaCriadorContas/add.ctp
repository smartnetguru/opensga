<div class="bolsaCriadorContas form">
    <?php echo $this->Form->create('BolsaCriadorConta'); ?>
    <fieldset>
        <legend><?php echo __('Add Bolsa Criador Conta'); ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Bolsa Criador Contas'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Bolsa Bolsas'),
                    ['controller' => 'bolsa_bolsas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Bolsa Bolsa'),
                    ['controller' => 'bolsa_bolsas', 'action' => 'add']); ?> </li>
    </ul>
</div>
