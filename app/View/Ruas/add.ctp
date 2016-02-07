<div class="ruas form">
    <?php echo $this->Form->create('Rua'); ?>
    <fieldset>
        <legend><?php echo __('Add Rua'); ?></legend>
        <?php
            echo $this->Form->input('cidade_id');
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Ruas'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Cidades'), ['controller' => 'cidades', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Cidade'), ['controller' => 'cidades', 'action' => 'add']); ?> </li>
    </ul>
</div>
