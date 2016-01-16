<div class="escolaNivelMedios form">
<?php echo $this->Form->create('EscolaNivelMedio');?>
	<fieldset>
		<legend><?php echo __('Add Escola Nivel Medio'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('distrito_id');
		echo $this->Form->input('provincia_id');
		echo $this->Form->input('pais_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Escola Nivel Medios'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Cidades'), array('controller' => 'cidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Distrito'), array('controller' => 'cidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Provincias'), array('controller' => 'provincias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Provincia'), array('controller' => 'provincias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Paises'), array('controller' => 'paises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pais'), array('controller' => 'paises', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aluno Nivel Medios'), array('controller' => 'aluno_nivel_medios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aluno Nivel Medio'), array('controller' => 'aluno_nivel_medios', 'action' => 'add')); ?> </li>
	</ul>
</div>
