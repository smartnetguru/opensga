<div class="entidadeNecessidades form">
<?php echo $this->Form->create('EntidadeNecessidade'); ?>
	<fieldset>
		<legend><?php echo __('Add Entidade Necessidade'); ?></legend>
	<?php
		echo $this->Form->input('entidade_id');
		echo $this->Form->input('necessidade_especial_id');
		echo $this->Form->input('created_by');
		echo $this->Form->input('modified_by');
		echo $this->Form->input('estado_objecto_id');
		echo $this->Form->input('detalhes');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Entidade Necessidades'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Entidades'), array('controller' => 'entidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entidade'), array('controller' => 'entidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Necessidade Especials'), array('controller' => 'necessidade_especials', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Necessidade Especial'), array('controller' => 'necessidade_especials', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estado Objectos'), array('controller' => 'estado_objectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Objecto'), array('controller' => 'estado_objectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
