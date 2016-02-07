<div class="semestreLectivos form">
    <?php echo $this->Form->create('SemestreLectivo'); ?>
    <fieldset>
        <legend><?php echo __('Edit Semestre Lectivo'); ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('codigo');
            echo $this->Form->input('ano_lectivo_id');
            echo $this->Form->input('semestre');
            echo $this->Form->input('data_inicio');
            echo $this->Form->input('data_fim');
            echo $this->Form->input('semestre_id');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'),
                    ['action' => 'delete', $this->Form->value('SemestreLectivo.id')], [],
                    __('Are you sure you want to delete # %s?', $this->Form->value('SemestreLectivo.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Semestre Lectivos'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Ano Lectivos'),
                    ['controller' => 'ano_lectivos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Ano Lectivo'),
                    ['controller' => 'ano_lectivos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Semestres'),
                    ['controller' => 'semestres', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Semestre'), ['controller' => 'semestres', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Financeiro Depositos'),
                    ['controller' => 'financeiro_depositos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Financeiro Deposito'),
                    ['controller' => 'financeiro_depositos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Financeiro Pagamentos'),
                    ['controller' => 'financeiro_pagamentos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Financeiro Pagamento'),
                    ['controller' => 'financeiro_pagamentos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Turmas'), ['controller' => 'turmas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Turma'), ['controller' => 'turmas', 'action' => 'add']); ?> </li>
    </ul>
</div>
