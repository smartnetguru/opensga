<div class="tipoUploads form">
    <?php echo $this->Form->create('TipoUpload'); ?>
    <fieldset>
        <legend><?php echo __('Add Tipo Upload'); ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Tipo Uploads'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Uploads'), ['controller' => 'uploads', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Upload'), ['controller' => 'uploads', 'action' => 'add']); ?> </li>
    </ul>
</div>
