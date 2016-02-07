<div class="salaAulas form">
    <?php echo $this->Form->create('SalaAula'); ?>
    <fieldset>
        <legend><?php echo __('Edit Sala Aula'); ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('name');
            echo $this->Form->input('capacidade_maxima');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'), ['action' => 'delete', $this->Form->value('SalaAula.id')],
                    null, __('Are you sure you want to delete # %s?', $this->Form->value('SalaAula.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Sala Aulas'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Turmas'), ['controller' => 'turmas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Turma'), ['controller' => 'turmas', 'action' => 'add']); ?> </li>
    </ul>
</div>
