<div class="cooperacaoTipoAcordos form">
<?php echo $this->Form->create('CooperacaoTipoAcordo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Cooperacao Tipo Acordo'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CooperacaoTipoAcordo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CooperacaoTipoAcordo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Cooperacao Tipo Acordos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Cooperacao Acordos'), array('controller' => 'cooperacao_acordos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cooperacao Acordo'), array('controller' => 'cooperacao_acordos', 'action' => 'add')); ?> </li>
	</ul>
</div>
