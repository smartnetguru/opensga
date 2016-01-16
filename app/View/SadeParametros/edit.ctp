<div class="sadeParametros form">
<?php echo $this->Form->create('SadeParametro');?>
	<fieldset>
		<legend><?php echo __('Edit Sade Parametro'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('codigo');
		echo $this->Form->input('descricao');
		echo $this->Form->input('sade_indicador_id');
		echo $this->Form->input('quantidade_padrao');
		echo $this->Form->input('pontos_padrao');
		echo $this->Form->input('pontos_bonificados');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SadeParametro.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('SadeParametro.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Sade Parametros'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Sade Indicadors'), array('controller' => 'sade_indicadors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sade Indicador'), array('controller' => 'sade_indicadors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sade Auto Avaliacaos'), array('controller' => 'sade_auto_avaliacaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sade Auto Avaliacao'), array('controller' => 'sade_auto_avaliacaos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sade Avaliacao Alunos'), array('controller' => 'sade_avaliacao_alunos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sade Avaliacao Aluno'), array('controller' => 'sade_avaliacao_alunos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sade Avaliacao Qualitativas'), array('controller' => 'sade_avaliacao_qualitativas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sade Avaliacao Qualitativa'), array('controller' => 'sade_avaliacao_qualitativas', 'action' => 'add')); ?> </li>
	</ul>
</div>
