<div class="sadeAvaliacaos form">
<?php echo $this->Form->create('SadeAvaliacao');?>
	<fieldset>
		<legend><?php echo __('Add Sade Avaliacao'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('ano_lectivo_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sade Avaliacaos'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Anolectivos'), array('controller' => 'anolectivos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New AnoLectivo'), array('controller' => 'anolectivos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sade Auto Avaliacaos'), array('controller' => 'sade_auto_avaliacaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sade Auto Avaliacao'), array('controller' => 'sade_auto_avaliacaos', 'action' => 'add')); ?> </li>
	</ul>
</div>
