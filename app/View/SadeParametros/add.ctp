<div class="sadeParametros form">
    <?php echo $this->Form->create('SadeParametro'); ?>
    <fieldset>
        <legend><?php echo __('Add Sade Parametro'); ?></legend>
        <?php
            echo $this->Form->input('codigo');
            echo $this->Form->input('descricao');
            echo $this->Form->input('sade_indicador_id');
            echo $this->Form->input('quantidade_padrao');
            echo $this->Form->input('pontos_padrao');
            echo $this->Form->input('pontos_bonificados');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Sade Parametros'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Sade Indicadors'),
                    ['controller' => 'sade_indicadors', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Sade Indicador'),
                    ['controller' => 'sade_indicadors', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Sade Auto Avaliacaos'),
                    ['controller' => 'sade_auto_avaliacaos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Sade Auto Avaliacao'),
                    ['controller' => 'sade_auto_avaliacaos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Sade Avaliacao Alunos'),
                    ['controller' => 'sade_avaliacao_alunos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Sade Avaliacao Aluno'),
                    ['controller' => 'sade_avaliacao_alunos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Sade Avaliacao Qualitativas'),
                    ['controller' => 'sade_avaliacao_qualitativas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Sade Avaliacao Qualitativa'),
                    ['controller' => 'sade_avaliacao_qualitativas', 'action' => 'add']); ?> </li>
    </ul>
</div>
