<div class="cooperacaoAcordoUnidadeOrganicas form">
<?php echo $this->Form->create('CooperacaoAcordoUnidadeOrganica'); ?>
	<fieldset>
		<legend><?php echo __('Edit Cooperacao Acordo Unidade Organica'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('unidade_organica_id');
		echo $this->Form->input('cooperacao_acordo_id');
		echo $this->Form->input('created_by');
		echo $this->Form->input('modified_by');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CooperacaoAcordoUnidadeOrganica.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CooperacaoAcordoUnidadeOrganica.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Cooperacao Acordo Unidade Organicas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Unidade Organicas'), array('controller' => 'unidade_organicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unidade Organica'), array('controller' => 'unidade_organicas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cooperacao Acordos'), array('controller' => 'cooperacao_acordos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cooperacao Acordo'), array('controller' => 'cooperacao_acordos', 'action' => 'add')); ?> </li>
	</ul>
</div>
