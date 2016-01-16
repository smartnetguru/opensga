<div class="sadeNivelAvaliadors form">
<?php echo $this->Form->create('SadeNivelAvaliador');?>
	<fieldset>
		<legend><?php echo __('Add Sade Nivel Avaliador'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sade Nivel Avaliadors'), array('action' => 'index'));?></li>
	</ul>
</div>
