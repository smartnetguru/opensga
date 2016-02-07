<div class="financeiroPagamentos form">
    <?php echo $this->Form->create('FinanceiroPagamento'); ?>
    <fieldset>
        <legend><?php echo __('Edit Financeiro Pagamento'); ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('aluno_id');
            echo $this->Form->input('financeiro_conta_id');
            echo $this->Form->input('valor');
            echo $this->Form->input('data_pagamento');
            echo $this->Form->input('financeiro_tipo_pagamento_id');
            echo $this->Form->input('data_limite');
            echo $this->Form->input('ano_lectivo_id');
            echo $this->Form->input('financeiro_estado_pagamento_id');
            echo $this->Form->input('codigo');
            echo $this->Form->input('created_by');
            echo $this->Form->input('modified_by');
            echo $this->Form->input('data_emissao');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'),
                    ['action' => 'delete', $this->Form->value('FinanceiroPagamento.id')], null,
                    __('Are you sure you want to delete # %s?', $this->Form->value('FinanceiroPagamento.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Financeiro Pagamentos'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Alunos'), ['controller' => 'alunos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Aluno'), ['controller' => 'alunos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Financeiro Contas'),
                    ['controller' => 'financeiro_contas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Financeiro Conta'),
                    ['controller' => 'financeiro_contas', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Financeiro Tipo Pagamentos'),
                    ['controller' => 'financeiro_tipo_pagamentos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Financeiro Tipo Pagamento'),
                    ['controller' => 'financeiro_tipo_pagamentos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Anolectivos'),
                    ['controller' => 'anolectivos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New AnoLectivo'),
                    ['controller' => 'anolectivos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Financeiro Estado Pagamentos'),
                    ['controller' => 'financeiro_estado_pagamentos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Financeiro Estado Pagamento'),
                    ['controller' => 'financeiro_estado_pagamentos', 'action' => 'add']); ?> </li>
    </ul>
</div>
