<div class="estadoCandidaturas form">
<?php echo $this->Form->create('EstadoCandidatura'); ?>
	<fieldset>
		<legend><?php echo __('Edit Estado Candidatura'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EstadoCandidatura.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('EstadoCandidatura.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Estado Candidaturas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Candidato Graduacaos'), array('controller' => 'candidato_graduacaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidato Graduacao'), array('controller' => 'candidato_graduacaos', 'action' => 'add')); ?> </li>
	</ul>
</div>
