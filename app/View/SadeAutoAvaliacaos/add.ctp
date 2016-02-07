<div class="sadeAutoAvaliacaos form">
    <?php echo $this->Form->create('SadeAutoAvaliacao'); ?>
    <fieldset>
        <legend><?php echo __('Add Sade Auto Avaliacao'); ?></legend>
        <?php
            echo $this->Form->input('entidade_id');
            echo $this->Form->input('sade_parametro_id');
            echo $this->Form->input('resposta');
            echo $this->Form->input('pontos_obtidos');
            echo $this->Form->input('pontos_bonificados');
            echo $this->Form->input('detalhes');
            echo $this->Form->input('ano_lectivo_id');
            echo $this->Form->input('semestre_lectivo_id');
            echo $this->Form->input('data');
            echo $this->Form->input('sade_avaliacao_id');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Sade Auto Avaliacaos'), ['action' => 'index']); ?></li>
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
        <li><?php echo $this->Html->link(__('List Semestrelectivos'),
                    ['controller' => 'semestrelectivos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New SemestreLectivo'),
                    ['controller' => 'semestrelectivos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Sade Avaliacaos'),
                    ['controller' => 'sade_avaliacaos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Sade Avaliacao'),
                    ['controller' => 'sade_avaliacaos', 'action' => 'add']); ?> </li>
    </ul>
</div>
