<div class="artigoAreaAcademicas form">
<?php echo $this->Form->create('ArtigoAreaAcademica'); ?>
	<fieldset>
		<legend><?php echo __('Add Artigo Area Academica'); ?></legend>
	<?php
		echo $this->Form->input('artigo_id');
		echo $this->Form->input('area_academica_id');
		echo $this->Form->input('created_by');
		echo $this->Form->input('modified_by');
		echo $this->Form->input('estado_objecto_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Artigo Area Academicas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Artigos'), array('controller' => 'artigos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artigo'), array('controller' => 'artigos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Area Academicas'), array('controller' => 'area_academicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area Academica'), array('controller' => 'area_academicas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estado Objectos'), array('controller' => 'estado_objectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Objecto'), array('controller' => 'estado_objectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
