<div class="financeiroPagamentos view">
    <h2><?php echo __('Financeiro Pagamento'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($financeiroPagamento['FinanceiroPagamento']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Aluno'); ?></dt>
        <dd>
            <?php echo $this->Html->link($financeiroPagamento['Aluno']['id'],
                    ['controller' => 'alunos', 'action' => 'view', $financeiroPagamento['Aluno']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Financeiro Conta'); ?></dt>
        <dd>
            <?php echo $this->Html->link($financeiroPagamento['FinanceiroConta']['id'], [
                    'controller' => 'financeiro_contas',
                    'action'     => 'view',
                    $financeiroPagamento['FinanceiroConta']['id'],
            ]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Valor'); ?></dt>
        <dd>
            <?php echo h($financeiroPagamento['FinanceiroPagamento']['valor']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Data Pagamento'); ?></dt>
        <dd>
            <?php echo h($financeiroPagamento['FinanceiroPagamento']['data_pagamento']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($financeiroPagamento['FinanceiroPagamento']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($financeiroPagamento['FinanceiroPagamento']['modified']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Financeiro Tipo Pagamento'); ?></dt>
        <dd>
            <?php echo $this->Html->link($financeiroPagamento['FinanceiroTipoPagamento']['name'], [
                    'controller' => 'financeiro_tipo_pagamentos',
                    'action'     => 'view',
                    $financeiroPagamento['FinanceiroTipoPagamento']['id'],
            ]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Data Limite'); ?></dt>
        <dd>
            <?php echo h($financeiroPagamento['FinanceiroPagamento']['data_limite']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('AnoLectivo'); ?></dt>
        <dd>
            <?php echo $this->Html->link($financeiroPagamento['AnoLectivo']['codigo'],
                    ['controller' => 'anolectivos', 'action' => 'view', $financeiroPagamento['AnoLectivo']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Financeiro Estado Pagamento'); ?></dt>
        <dd>
            <?php echo $this->Html->link($financeiroPagamento['FinanceiroEstadoPagamento']['name'], [
                    'controller' => 'financeiro_estado_pagamentos',
                    'action'     => 'view',
                    $financeiroPagamento['FinanceiroEstadoPagamento']['id'],
            ]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Codigo'); ?></dt>
        <dd>
            <?php echo h($financeiroPagamento['FinanceiroPagamento']['codigo']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created By'); ?></dt>
        <dd>
            <?php echo h($financeiroPagamento['FinanceiroPagamento']['created_by']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified By'); ?></dt>
        <dd>
            <?php echo h($financeiroPagamento['FinanceiroPagamento']['modified_by']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Data Emissao'); ?></dt>
        <dd>
            <?php echo h($financeiroPagamento['FinanceiroPagamento']['data_emissao']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Financeiro Pagamento'),
                    ['action' => 'edit', $financeiroPagamento['FinanceiroPagamento']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Financeiro Pagamento'),
                    ['action' => 'delete', $financeiroPagamento['FinanceiroPagamento']['id']], null,
                    __('Are you sure you want to delete # %s?',
                            $financeiroPagamento['FinanceiroPagamento']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Financeiro Pagamentos'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Financeiro Pagamento'), ['action' => 'add']); ?> </li>
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
