<div class="instituicaos form">
    <?php echo $this->Form->create('Instituicao'); ?>
    <fieldset>
        <legend><?php echo __('Edit Instituicao'); ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('name');
            echo $this->Form->input('cidade_origem');
            echo $this->Form->input('provincia_origem');
            echo $this->Form->input('pais_origem');
            echo $this->Form->input('continente_origem');
            echo $this->Form->input('created_by');
            echo $this->Form->input('modified_by');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'), ['action' => 'delete', $this->Form->value('Instituicao.id')],
                    null, __('Are you sure you want to delete # %s?', $this->Form->value('Instituicao.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Instituicaos'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Cooperacao Acordos'),
                    ['controller' => 'cooperacao_acordos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Cooperacao Acordo'),
                    ['controller' => 'cooperacao_acordos', 'action' => 'add']); ?> </li>
    </ul>
</div>
