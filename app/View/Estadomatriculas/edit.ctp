<div class="estadoMatriculas form">
    <?php echo $this->Form->create('EstadoMatricula'); ?>
    <fieldset>
        <legend><?php echo __('Edit Estado Matricula'); ?></legend>
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
                    ['action' => 'delete', $this->Form->value('EstadoMatricula.id')], [],
                    __('Are you sure you want to delete # %s?', $this->Form->value('EstadoMatricula.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Estado Matriculas'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Candidaturas'),
                    ['controller' => 'candidaturas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Candidatura'),
                    ['controller' => 'candidaturas', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Matriculas'),
                    ['controller' => 'matriculas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Matricula'),
                    ['controller' => 'matriculas', 'action' => 'add']); ?> </li>
    </ul>
</div>
