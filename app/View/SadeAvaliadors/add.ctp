<div class="sadeAvaliadors form">
    <?php echo $this->Form->create('SadeAvaliador'); ?>
    <fieldset>
        <legend><?php echo __('Add Sade Avaliador'); ?></legend>
        <?php
            echo $this->Form->input('entidade_id');
            echo $this->Form->input('docente_id');
            echo $this->Form->input('nivel_avaliador_id');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Sade Avaliadors'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Entidades'),
                    ['controller' => 'entidades', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Entidade'), ['controller' => 'entidades', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Docentes'),
                    ['controller' => 'docentes', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Docente'), ['controller' => 'docentes', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Nivel Avaliadors'),
                    ['controller' => 'nivel_avaliadors', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Nivel Avaliador'),
                    ['controller' => 'nivel_avaliadors', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Sade Avaliacao Qualitativas'),
                    ['controller' => 'sade_avaliacao_qualitativas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Sade Avaliacao Qualitativa'),
                    ['controller' => 'sade_avaliacao_qualitativas', 'action' => 'add']); ?> </li>
    </ul>
</div>
