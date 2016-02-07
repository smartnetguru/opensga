<div class="bolsaTipoCandidaturas form">
    <?php echo $this->Form->create('BolsaTipoCandidatura'); ?>
    <fieldset>
        <legend><?php echo __('Edit Bolsa Tipo Candidatura'); ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'),
                    ['action' => 'delete', $this->Form->value('BolsaTipoCandidatura.id')], null,
                    __('Are you sure you want to delete # %s?', $this->Form->value('BolsaTipoCandidatura.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Bolsa Tipo Candidaturas'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Bolsa Candidaturas'),
                    ['controller' => 'bolsa_candidaturas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Bolsa Candidatura'),
                    ['controller' => 'bolsa_candidaturas', 'action' => 'add']); ?> </li>
    </ul>
</div>
