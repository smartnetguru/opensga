<div class="tipoFuncionarios form">
    <?php echo $this->Form->create('TipoFuncionario'); ?>
    <fieldset>
        <legend><?php echo __('Edit Tipo Funcionario'); ?></legend>
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
                    ['action' => 'delete', $this->Form->value('TipoFuncionario.id')], [],
                    __('Are you sure you want to delete # %s?', $this->Form->value('TipoFuncionario.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Tipo Funcionarios'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Funcionarios'),
                    ['controller' => 'funcionarios', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Funcionario'),
                    ['controller' => 'funcionarios', 'action' => 'add']); ?> </li>
    </ul>
</div>
