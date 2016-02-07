<div class="financeiroDepositos view">
    <h2><?php echo __('Financeiro Deposito'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($financeiroDeposito['FinanceiroDeposito']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Entidade'); ?></dt>
        <dd>
            <?php echo $this->Html->link($financeiroDeposito['Entidade']['name'],
                    ['controller' => 'entidades', 'action' => 'view', $financeiroDeposito['Entidade']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Financeiro Conta'); ?></dt>
        <dd>
            <?php echo $this->Html->link($financeiroDeposito['FinanceiroConta']['id'], [
                    'controller' => 'financeiro_contas',
                    'action'     => 'view',
                    $financeiroDeposito['FinanceiroConta']['id'],
            ]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Data Deposito'); ?></dt>
        <dd>
            <?php echo h($financeiroDeposito['FinanceiroDeposito']['data_deposito']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Data Reconciliacao'); ?></dt>
        <dd>
            <?php echo h($financeiroDeposito['FinanceiroDeposito']['data_reconciliacao']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Financeiro Estado Deposito'); ?></dt>
        <dd>
            <?php echo $this->Html->link($financeiroDeposito['FinanceiroEstadoDeposito']['name'], [
                    'controller' => 'financeiro_estado_depositos',
                    'action'     => 'view',
                    $financeiroDeposito['FinanceiroEstadoDeposito']['id'],
            ]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($financeiroDeposito['FinanceiroDeposito']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($financeiroDeposito['FinanceiroDeposito']['modified']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created By'); ?></dt>
        <dd>
            <?php echo h($financeiroDeposito['FinanceiroDeposito']['created_by']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified By'); ?></dt>
        <dd>
            <?php echo h($financeiroDeposito['FinanceiroDeposito']['modified_by']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Numero Comprovativo'); ?></dt>
        <dd>
            <?php echo h($financeiroDeposito['FinanceiroDeposito']['numero_comprovativo']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Financeiro Forma Deposito'); ?></dt>
        <dd>
            <?php echo $this->Html->link($financeiroDeposito['FinanceiroFormaDeposito']['name'], [
                    'controller' => 'financeiro_forma_depositos',
                    'action'     => 'view',
                    $financeiroDeposito['FinanceiroFormaDeposito']['id'],
            ]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Financeiro Banco'); ?></dt>
        <dd>
            <?php echo $this->Html->link($financeiroDeposito['FinanceiroBanco']['name'], [
                    'controller' => 'financeiro_bancos',
                    'action'     => 'view',
                    $financeiroDeposito['FinanceiroBanco']['id'],
            ]); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Financeiro Deposito'),
                    ['action' => 'edit', $financeiroDeposito['FinanceiroDeposito']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Financeiro Deposito'),
                    ['action' => 'delete', $financeiroDeposito['FinanceiroDeposito']['id']], null,
                    __('Are you sure you want to delete # %s?',
                            $financeiroDeposito['FinanceiroDeposito']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Financeiro Depositos'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Financeiro Deposito'), ['action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Entidades'),
                    ['controller' => 'entidades', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Entidade'), ['controller' => 'entidades', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Financeiro Contas'),
                    ['controller' => 'financeiro_contas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Financeiro Conta'),
                    ['controller' => 'financeiro_contas', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Financeiro Estado Depositos'),
                    ['controller' => 'financeiro_estado_depositos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Financeiro Estado Deposito'),
                    ['controller' => 'financeiro_estado_depositos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Financeiro Forma Depositos'),
                    ['controller' => 'financeiro_forma_depositos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Financeiro Forma Deposito'),
                    ['controller' => 'financeiro_forma_depositos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Financeiro Bancos'),
                    ['controller' => 'financeiro_bancos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Financeiro Banco'),
                    ['controller' => 'financeiro_bancos', 'action' => 'add']); ?> </li>
    </ul>
</div>
