<div class="faculdadeTipoPagamentos form">
    <?php echo $this->Form->create('FaculdadeTipoPagamento'); ?>
    <fieldset>
        <legend><?php echo __('Add Faculdade Tipo Pagamento'); ?></legend>
        <?php
            echo $this->Form->input('faculdade_id');
            echo $this->Form->input('tipopagamento_id');
            echo $this->Form->input('valor');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Faculdade Tipo Pagamentos'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Faculdades'),
                    ['controller' => 'faculdades', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Faculdade'),
                    ['controller' => 'faculdades', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Tipopagamentos'),
                    ['controller' => 'tipopagamentos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Tipopagamento'),
                    ['controller' => 'tipopagamentos', 'action' => 'add']); ?> </li>
    </ul>
</div>
