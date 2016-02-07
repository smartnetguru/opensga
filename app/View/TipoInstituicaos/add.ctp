<div class="tipoInstituicaos form">
    <?php echo $this->Form->create('TipoInstituicao'); ?>
    <fieldset>
        <legend><?php echo __('Add Tipo Instituicao'); ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Tipo Instituicaos'), ['action' => 'index']); ?></li>
    </ul>
</div>
