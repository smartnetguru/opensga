<div class="bolsaResultados form">
<?php echo $this->Form->create('BolsaResultado'); ?>
	<fieldset>
		<legend><?php echo __('Add Bolsa Resultado'); ?></legend>
	<?php
		echo $this->Form->input('bolsa_candidatura_id');
		echo $this->Form->input('bolsa_tipo_bolsa_id');
		echo $this->Form->input('bolsa_motivo_indeferimento_id');
		echo $this->Form->input('data_resultado');
		echo $this->Form->input('created_by');
		echo $this->Form->input('modified_by');
		echo $this->Form->input('observacoes');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Bolsa Resultados'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Bolsa Candidaturas'), array('controller' => 'bolsa_candidaturas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bolsa Candidatura'), array('controller' => 'bolsa_candidaturas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bolsa Tipo Bolsas'), array('controller' => 'bolsa_tipo_bolsas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bolsa Tipo Bolsa'), array('controller' => 'bolsa_tipo_bolsas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bolsa Motivo Indeferimentos'), array('controller' => 'bolsa_motivo_indeferimentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bolsa Motivo Indeferimento'), array('controller' => 'bolsa_motivo_indeferimentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bolsa Bolsas'), array('controller' => 'bolsa_bolsas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bolsa Bolsa'), array('controller' => 'bolsa_bolsas', 'action' => 'add')); ?> </li>
	</ul>
</div>
