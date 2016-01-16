<div class="bolsaFonteBolsas form">
<?php echo $this->Form->create('BolsaFonteBolsa'); ?>
	<fieldset>
		<legend><?php echo __('Edit Bolsa Fonte Bolsa'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('BolsaFonteBolsa.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('BolsaFonteBolsa.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Bolsa Fonte Bolsas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Bolsa Bolsas'), array('controller' => 'bolsa_bolsas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bolsa Bolsa'), array('controller' => 'bolsa_bolsas', 'action' => 'add')); ?> </li>
	</ul>
</div>
