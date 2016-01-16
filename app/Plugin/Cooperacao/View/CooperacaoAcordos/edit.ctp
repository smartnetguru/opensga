<div class="cooperacaoAcordos form">
<?php echo $this->Form->create('CooperacaoAcordo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Cooperacao Acordo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('instituicao_id');
		echo $this->Form->input('data_assinatura');
		echo $this->Form->input('data_validade');
		echo $this->Form->input('prazo_validade');
		echo $this->Form->input('cooperacao_tipo_acordo_id');
		echo $this->Form->input('created_by');
		echo $this->Form->input('modified_by');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CooperacaoAcordo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CooperacaoAcordo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Cooperacao Acordos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Instituicaos'), array('controller' => 'instituicaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instituicao'), array('controller' => 'instituicaos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cooperacao Tipo Acordos'), array('controller' => 'cooperacao_tipo_acordos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cooperacao Tipo Acordo'), array('controller' => 'cooperacao_tipo_acordos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cooperacao Acordo Areas'), array('controller' => 'cooperacao_acordo_areas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cooperacao Acordo Area'), array('controller' => 'cooperacao_acordo_areas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cooperacao Acordo Observacaos'), array('controller' => 'cooperacao_acordo_observacaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cooperacao Acordo Observacao'), array('controller' => 'cooperacao_acordo_observacaos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cooperacao Acordo Unidade Organicas'), array('controller' => 'cooperacao_acordo_unidade_organicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cooperacao Acordo Unidade Organica'), array('controller' => 'cooperacao_acordo_unidade_organicas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cooperacao Objectivo Acordos'), array('controller' => 'cooperacao_objectivo_acordos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cooperacao Objectivo Acordo'), array('controller' => 'cooperacao_objectivo_acordos', 'action' => 'add')); ?> </li>
	</ul>
</div>
