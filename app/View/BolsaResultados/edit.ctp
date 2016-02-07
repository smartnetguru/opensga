<div class="bolsaResultados form">
    <?php echo $this->Form->create('BolsaResultado'); ?>
    <fieldset>
        <legend><?php echo __('Edit Bolsa Resultado'); ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('bolsa_candidatura_id');
            echo $this->Form->input('bolsa_tipo_bolsa_id');
            echo $this->Form->input('bolsa_motivo_indeferimento_id');
            echo $this->Form->input('data_resultado');
            echo $this->Form->input('created_by');
            echo $this->Form->input('modified_by');
            echo $this->Form->input('observacoes');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'),
                    ['action' => 'delete', $this->Form->value('BolsaResultado.id')], null,
                    __('Are you sure you want to delete # %s?', $this->Form->value('BolsaResultado.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Bolsa Resultados'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Bolsa Candidaturas'),
                    ['controller' => 'bolsa_candidaturas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Bolsa Candidatura'),
                    ['controller' => 'bolsa_candidaturas', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Bolsa Tipo Bolsas'),
                    ['controller' => 'bolsa_tipo_bolsas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Bolsa Tipo Bolsa'),
                    ['controller' => 'bolsa_tipo_bolsas', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Bolsa Motivo Indeferimentos'),
                    ['controller' => 'bolsa_motivo_indeferimentos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Bolsa Motivo Indeferimento'),
                    ['controller' => 'bolsa_motivo_indeferimentos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Bolsa Bolsas'),
                    ['controller' => 'bolsa_bolsas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Bolsa Bolsa'),
                    ['controller' => 'bolsa_bolsas', 'action' => 'add']); ?> </li>
    </ul>
</div>
