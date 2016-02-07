<div class="tg0013EstadoEntidades form">
    <?php echo $this->Form->create('Tg0013EstadoEntidade'); ?>
    <fieldset>
        <legend><?php printf(__('Edit %s', true), __('Tg0013EstadoEntidade', true)); ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit', true)); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('Delete', true),
                    ['action' => 'delete', $this->Form->value('Tg0013EstadoEntidade.id')], null,
                    sprintf(__('Are you sure you want to delete # %s?', true),
                            $this->Form->value('Tg0013EstadoEntidade.id'))); ?></li>
        <li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Tg0013EstadoEntidades', true)),
                    ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(sprintf(__('List %s', true), __('funcionarios', true)),
                    ['controller' => 'funcionarios', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Funcionario', true)),
                    ['controller' => 'funcionarios', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Alunos', true)),
                    ['controller' => 'Alunos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Aluno', true)),
                    ['controller' => 'Alunos', 'action' => 'add']); ?> </li>
    </ul>
</div>