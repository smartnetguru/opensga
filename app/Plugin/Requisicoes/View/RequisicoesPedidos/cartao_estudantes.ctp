<?php
$this->extend('/Common/index_common');
$this->BreadCumbs->addCrumb('Alunos', '/alunos');
$this->BreadCumbs->addCrumb('Lista de Alunos', '/alunos/index');
?>

<?php $this->start('top-actions') ?>
<div class="action-list">
	<div class="col-sm-1">
		<?php echo $this->Html->link('<i class="fa fa-group fa-2x"></i>	Novo Pedido de Cartao', array('controller' => 'alunos', 'action' => 'index'), array('escape' => false, 'class' => 'btn btn-icon btn-block')) ?>
	</div>
	<div class="col-sm-1">
		<?php echo $this->Html->link('<i class="fa fa-pencil fa-2x"></i>Exportar Pedidos Pendentes', array('controller' => 'requisicoes_pedidos', 'action' => 'print_cartoes_enviados', 'plugin' => 'requisicoes'), array('escape' => false, 'class' => 'btn btn-icon btn-block')) ?>
	</div>
	<div class="col-sm-1">
		<?php echo $this->Html->link('<i class="fa fa-gift  fa-2x"></i>Exportar Cartoes Enviados', array('controller' => 'requisicoes_pedidos', 'action' => 'print_pedido_cartoes_pendentes', 'plugin' => 'requisicoes'), array('escape' => false, 'class' => 'btn btn-icon btn-block')) ?>
	</div>
</div>
<?php $this->end() ?>
<?php $this->assign('table-title', __('Pedidos de Cartao')) ?>
<?php $this->start('table-header') ?>

<tr>
	<th><?php echo __('Numero do Pedido'); ?></th>
	<th ><?php echo __('Numero de Estudante'); ?></th>
	<th><?php echo __('Nome Completo'); ?></th>
	<th><?php echo __('Curso'); ?></th>
	<th><?php echo __('Data do Pedido'); ?></th>
	<th><?php echo __('Estado'); ?></th>
	<th></th>
</tr>
<?php $this->end() ?>
<?php $this->start('table-body') ?>
<?php
foreach ($pedidoCartoes as $pedido):
	?>
	<tr>



		<td><?php echo $this->Html->link($pedido['RequisicoesPedido']['numero_pedido'], array('controller' => 'requisicoes_pedido', 'action' => 'ver_detalhes_pedido', $pedido['RequisicoesPedido']['id'])); ?>&nbsp;</td>
		<td><?php echo $pedido['Aluno']['codigo']; ?>&nbsp;</td>
		<td><?php echo $pedido['Aluno']['Entidade']['name']; ?>&nbsp;</td>
		<td><?php echo $pedido['Aluno']['Curso']['name']; ?>&nbsp;</td>
		<td><?php echo $pedido['RequisicoesPedido']['data_pedido']; ?>&nbsp;</td>
		<td><?php echo $pedido['RequisicoesEstadoPedido']['name']; ?>&nbsp;</td>
		<td></td>

	</tr>
	<?php
endforeach;
?>
<?php
$this->end();
