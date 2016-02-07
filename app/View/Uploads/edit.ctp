<div class="uploads form">
    <?php echo $this->Form->create('Upload'); ?>
    <fieldset>
        <legend><?php echo __('Edit Upload'); ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('name');
            echo $this->Form->input('tipo_upload_id');
            echo $this->Form->input('data_upload');
            echo $this->Form->input('estado_upload_id');
            echo $this->Form->input('created_by');
            echo $this->Form->input('modified_by');
            echo $this->Form->input('file_url');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'), ['action' => 'delete', $this->Form->value('Upload.id')],
                    null, __('Are you sure you want to delete # %s?', $this->Form->value('Upload.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Uploads'), ['action' => 'index']); ?></li>
        <li><?php echo $this->Html->link(__('List Tipo Uploads'),
                    ['controller' => 'tipo_uploads', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Tipo Upload'),
                    ['controller' => 'tipo_uploads', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Estado Uploads'),
                    ['controller' => 'estado_uploads', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Estado Upload'),
                    ['controller' => 'estado_uploads', 'action' => 'add']); ?> </li>
    </ul>
</div>
