<div class="requisicoesPedidos form">
<?php echo $this->Form->create('RequisicoesPedido'); ?>
	<fieldset>
		<legend><?php echo __('Edit Requisicoes Pedido'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('aluno_id');
		echo $this->Form->input('numero_pedido');
		echo $this->Form->input('data_pedido');
		echo $this->Form->input('entidade_id');
		echo $this->Form->input('nome_requerente');
		echo $this->Form->input('curso_id');
		echo $this->Form->input('requisicoes_tipo_pedido_id');
		echo $this->Form->input('requisicoes_estado_pedido_id');
		echo $this->Form->input('funcionario_id');
		echo $this->Form->input('estudante_bolseiro');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('RequisicoesPedido.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('RequisicoesPedido.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Requisicoes Pedidos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Alunos'), array('controller' => 'alunos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aluno'), array('controller' => 'alunos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entidades'), array('controller' => 'entidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entidade'), array('controller' => 'entidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Requisicoes Tipo Pedidos'), array('controller' => 'requisicoes_tipo_pedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requisicoes Tipo Pedido'), array('controller' => 'requisicoes_tipo_pedidos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Requisicoes Estado Pedidos'), array('controller' => 'requisicoes_estado_pedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requisicoes Estado Pedido'), array('controller' => 'requisicoes_estado_pedidos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Funcionarios'), array('controller' => 'funcionarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcionario'), array('controller' => 'funcionarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Requisicoes Pedido Logs'), array('controller' => 'requisicoes_pedido_logs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requisicoes Pedido Log'), array('controller' => 'requisicoes_pedido_logs', 'action' => 'add')); ?> </li>
	</ul>
</div>
