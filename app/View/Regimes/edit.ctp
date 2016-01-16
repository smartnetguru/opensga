<div class="regimes form">
<?php echo $this->Form->create('Regime'); ?>
	<fieldset>
		<legend><?php echo __('Edit Regime'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Regime.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Regime.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Regimes'), array('action' => 'index')); ?></li>
	</ul>
</div>
