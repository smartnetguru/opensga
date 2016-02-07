<div class="planoEstudoTipoPagamentos view">
    <h2><?php echo __('Plano Estudo Tipo Pagamento'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($planoEstudoTipoPagamento['PlanoEstudoTipoPagamento']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('PlanoEstudo'); ?></dt>
        <dd>
            <?php echo $this->Html->link($planoEstudoTipoPagamento['PlanoEstudo']['name'], [
                    'controller' => 'planoestudos',
                    'action'     => 'view',
                    $planoEstudoTipoPagamento['PlanoEstudo']['id'],
            ]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Tipopagamento'); ?></dt>
        <dd>
            <?php echo $this->Html->link($planoEstudoTipoPagamento['Tipopagamento']['name'], [
                    'controller' => 'tipopagamentos',
                    'action'     => 'view',
                    $planoEstudoTipoPagamento['Tipopagamento']['id'],
            ]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Valor'); ?></dt>
        <dd>
            <?php echo h($planoEstudoTipoPagamento['PlanoEstudoTipoPagamento']['valor']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Plano Estudo Tipo Pagamento'),
                    ['action' => 'edit', $planoEstudoTipoPagamento['PlanoEstudoTipoPagamento']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Plano Estudo Tipo Pagamento'),
                    ['action' => 'delete', $planoEstudoTipoPagamento['PlanoEstudoTipoPagamento']['id']], null,
                    __('Are you sure you want to delete # %s?',
                            $planoEstudoTipoPagamento['PlanoEstudoTipoPagamento']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Plano Estudo Tipo Pagamentos'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Plano Estudo Tipo Pagamento'), ['action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Planoestudos'),
                    ['controller' => 'planoestudos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New PlanoEstudo'),
                    ['controller' => 'planoestudos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Tipopagamentos'),
                    ['controller' => 'tipopagamentos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Tipopagamento'),
                    ['controller' => 'tipopagamentos', 'action' => 'add']); ?> </li>
    </ul>
</div>
