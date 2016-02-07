<div class="tipoInscricaos form">
    <?php echo $this->Form->create('TipoInscricao'); ?>
    <fieldset>
        <legend><?php echo __('Edit Tipo Inscricao'); ?></legend>
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
                    ['action' => 'delete', $this->Form->value('TipoInscricao.id')], [],
                    __('Are you sure you want to delete # %s?', $this->Form->value('TipoInscricao.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Tipo Inscricaos'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Inscricaos'),
                    ['controller' => 'inscricaos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Inscricao'),
                    ['controller' => 'inscricaos', 'action' => 'add']); ?> </li>
    </ul>
</div>
