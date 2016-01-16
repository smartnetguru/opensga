<div class="disciplinaUnidadeOrganicas form">
<?php echo $this->Form->create('DisciplinaUnidadeOrganica'); ?>
	<fieldset>
		<legend><?php echo __('Edit Disciplina Unidade Organica'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('disciplina_id');
		echo $this->Form->input('unidade_organica_id');
		echo $this->Form->input('estado_objecto_id');
		echo $this->Form->input('created_by');
		echo $this->Form->input('modified_by');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DisciplinaUnidadeOrganica.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('DisciplinaUnidadeOrganica.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Disciplina Unidade Organicas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Disciplinas'), array('controller' => 'disciplinas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disciplina'), array('controller' => 'disciplinas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Unidade Organicas'), array('controller' => 'unidade_organicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unidade Organica'), array('controller' => 'unidade_organicas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estado Objectos'), array('controller' => 'estado_objectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Objecto'), array('controller' => 'estado_objectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
