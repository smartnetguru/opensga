<div class="regimeTrabalhos form">
    <?php echo $this->Form->create('RegimeTrabalho'); ?>
    <fieldset>
        <legend><?php echo __('Add Regime Trabalho'); ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Regime Trabalhos'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Docentes'),
                    ['controller' => 'docentes', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Docente'), ['controller' => 'docentes', 'action' => 'add']); ?> </li>
    </ul>
</div>
