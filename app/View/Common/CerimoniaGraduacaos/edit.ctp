<div class="cerimoniaGraduacaos form">
    <?php echo $this->Form->create('CerimoniaGraduacao'); ?>
    <fieldset>
        <legend><?php echo __('Edit Cerimonia Graduacao'); ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('data');
            echo $this->Form->input('local');
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'),
                    ['action' => 'delete', $this->Form->value('CerimoniaGraduacao.id')], null,
                    __('Are you sure you want to delete # %s?', $this->Form->value('CerimoniaGraduacao.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Cerimonia Graduacaos'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Candidato Graduacaos'),
                    ['controller' => 'candidato_graduacaos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Candidato Graduacao'),
                    ['controller' => 'candidato_graduacaos', 'action' => 'add']); ?> </li>
    </ul>
</div>
