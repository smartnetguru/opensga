<div class="sadeAvaliacaoQualitativas form">
    <?php echo $this->Form->create('SadeAvaliacaoQualitativa'); ?>
    <fieldset>
        <legend><?php echo __('Edit Sade Avaliacao Qualitativa'); ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('sade_avaliador_id');
            echo $this->Form->input('entidade_id');
            echo $this->Form->input('sade_parametro_id');
            echo $this->Form->input('resposta');
            echo $this->Form->input('pontos_obtidos');
            echo $this->Form->input('ano_lectivo_id');
            echo $this->Form->input('data');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'),
                    ['action' => 'delete', $this->Form->value('SadeAvaliacaoQualitativa.id')], null,
                    __('Are you sure you want to delete # %s?',
                            $this->Form->value('SadeAvaliacaoQualitativa.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Sade Avaliacao Qualitativas'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Sade Avaliadors'),
                    ['controller' => 'sade_avaliadors', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Sade Avaliador'),
                    ['controller' => 'sade_avaliadors', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Entidades'),
                    ['controller' => 'entidades', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Entidade'), ['controller' => 'entidades', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Sade Parametros'),
                    ['controller' => 'sade_parametros', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Sade Parametro'),
                    ['controller' => 'sade_parametros', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Anolectivos'),
                    ['controller' => 'anolectivos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New AnoLectivo'),
                    ['controller' => 'anolectivos', 'action' => 'add']); ?> </li>
    </ul>
</div>
