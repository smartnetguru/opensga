<div class="docenteUnidadeOrganicas form">
<?php echo $this->Form->create('DocenteUnidadeOrganica'); ?>
	<fieldset>
		<legend><?php echo __('Edit Docente Unidade Organica'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('docente_id');
		echo $this->Form->input('unidade_organica_id');
		echo $this->Form->input('estado_objecto_id');
		echo $this->Form->input('data_inicio');
		echo $this->Form->input('data_fim');
		echo $this->Form->input('create_by');
		echo $this->Form->input('modified_by');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DocenteUnidadeOrganica.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('DocenteUnidadeOrganica.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Docente Unidade Organicas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Docentes'), array('controller' => 'docentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docente'), array('controller' => 'docentes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Unidade Organicas'), array('controller' => 'unidade_organicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unidade Organica'), array('controller' => 'unidade_organicas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estado Objectos'), array('controller' => 'estado_objectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Objecto'), array('controller' => 'estado_objectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
