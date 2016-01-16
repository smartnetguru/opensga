<div class="funcaoProfissionals form">
<?php echo $this->Form->create('FuncaoProfissional'); ?>
	<fieldset>
		<legend><?php echo __('Edit Funcao Profissional'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('Funcionario');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('FuncaoProfissional.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('FuncaoProfissional.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Funcao Profissionals'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Funcionarios'), array('controller' => 'funcionarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcionario'), array('controller' => 'funcionarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
