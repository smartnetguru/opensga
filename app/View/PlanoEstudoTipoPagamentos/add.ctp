<div class="planoEstudoTipoPagamentos form">
    <?php echo $this->Form->create('PlanoEstudoTipoPagamento'); ?>
    <fieldset>
        <legend><?php echo __('Add Plano Estudo Tipo Pagamento'); ?></legend>
        <?php
            echo $this->Form->input('plano_estudo_id');
            echo $this->Form->input('tipopagamento_id');
            echo $this->Form->input('valor');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Plano Estudo Tipo Pagamentos'), ['action' => 'index']); ?></li>
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
