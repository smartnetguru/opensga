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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Upload.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Upload.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Uploads'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tipo Uploads'), array('controller' => 'tipo_uploads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Upload'), array('controller' => 'tipo_uploads', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estado Uploads'), array('controller' => 'estado_uploads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Upload'), array('controller' => 'estado_uploads', 'action' => 'add')); ?> </li>
	</ul>
</div>
