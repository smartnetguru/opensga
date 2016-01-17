<div class="tipoUploads form">
<?php echo $this->Form->create('TipoUpload'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tipo Upload'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TipoUpload.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('TipoUpload.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tipo Uploads'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Uploads'), array('controller' => 'uploads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Upload'), array('controller' => 'uploads', 'action' => 'add')); ?> </li>
	</ul>
</div>