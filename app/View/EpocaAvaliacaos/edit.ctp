<div class="epocaAvaliacaos form">
<?php echo $this->Form->create('EpocaAvaliacao'); ?>
	<fieldset>
		<legend><?php echo __('Edit Epoca Avaliacao'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('codigo');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EpocaAvaliacao.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('EpocaAvaliacao.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Epoca Avaliacaos'), array('action' => 'index')); ?></li>
	</ul>
</div>
