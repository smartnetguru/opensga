<div class="ruas form">
<?php echo $this->Form->create('Rua'); ?>
	<fieldset>
		<legend><?php echo __('Edit Rua'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('cidade_id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Rua.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Rua.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Ruas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Cidades'), array('controller' => 'cidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cidade'), array('controller' => 'cidades', 'action' => 'add')); ?> </li>
	</ul>
</div>
