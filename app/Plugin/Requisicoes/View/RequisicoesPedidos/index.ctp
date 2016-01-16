<?php
$this->extend('/Common/index_common');
$this->BreadCumbs->addCrumb('Alunos', '/alunos');
$this->BreadCumbs->addCrumb('Lista de Alunos', '/alunos/index');
?>

<?php $this->start('top-actions') ?>
<div class="action-list">
	<div class="col-sm-1">
		<?php echo $this->Html->link('<i class="fa fa-user fa-2x"></i>Nova Requisicao', array('controller' => 'requisicoes_pedidos', 'action' => 'nova_requisicao', 'plugin' => 'requisicoes'), array('escape' => false, 'class' => 'btn btn-icon btn-block')) ?>
	</div>
</div>
<?php $this->end() ?>
<?php $this->assign('table-title', __('Pedidos Pendentes')) ?>
<?php $this->start('filter-form') ?>
<?php echo $this->Form->create('Aluno', array('role' => 'form', 'enctype' => 'multipart/form-data', 'class' => 'form-horizontal', 'inputDefaults' => array('before' => '', 'after' => ''))); ?>
<div class="row">
	<div class="form-group">
		<div class="col-md-3">
			<?php echo $this->Form->input('Aluno.codigo', array('label' => false, 'div' => false, 'required' => FALSE, 'class' => 'form-control', 'placeholder' => 'Numero de Estudante')); ?>
		</div>
		<div class="col-md-3">
			<?php echo $this->Form->input('Entidade.apelido', array('label' => false, 'div' => false, 'class' => 'form-control', 'placeholder' => 'Ou Apelido')); ?>
		</div>
		<div class="col-md-3">
			<?php echo $this->Form->input('Entidade.nomes', array('label' => false, 'div' => false, 'class' => 'form-control', 'placeholder' => 'Ou nomes')); ?>
		</div>
		<div class="col-md-3">
			<?php echo $this->Form->end(array('label' => __('Pesquisar', true), 'class' => 'btn btn-blue next-step btn-block')); ?>
		</div>
	</div>
</div>


<?php $this->end() ?>
<?php $this->start('table-header') ?>

<tr>

	<th><?php echo $this->Paginator->sort('aluno_id'); ?></th>
	<th><?php echo $this->Paginator->sort('numero_pedido'); ?></th>
	<th><?php echo $this->Paginator->sort('data_pedido'); ?></th>
	<th><?php echo $this->Paginator->sort('entidade_id'); ?></th>
	<th><?php echo $this->Paginator->sort('nome_requerente'); ?></th>
	<th><?php echo $this->Paginator->sort('curso_id'); ?></th>
	<th><?php echo $this->Paginator->sort('requisicoes_tipo_pedido_id'); ?></th>
	<th><?php echo $this->Paginator->sort('requisicoes_estado_pedido_id'); ?></th>
	<th><?php echo $this->Paginator->sort('estudante_bolseiro'); ?></th>
</tr>
<?php $this->end() ?>
<?php $this->start('table-body') ?>
<?php foreach ($requisicoesPedidos as $requisicoesPedido): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($requisicoesPedido['Aluno']['codigo'], array('controller' => 'alunos', 'action' => 'perfil_estudante', $requisicoesPedido['Aluno']['id'])); ?>
		</td>
		<td>
            
            <?php echo $this->Html->link($requisicoesPedido['RequisicoesPedido']['numero_pedido'], array('controller' => 'requisicoes_pedidos', 'action' => 'actualizar_estado_requisicao', $requisicoesPedido['RequisicoesPedido']['id'])); ?>

		<td><?php echo h($requisicoesPedido['RequisicoesPedido']['data_pedido']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($requisicoesPedido['Entidade']['name'], array('controller' => 'entidades', 'action' => 'view', $requisicoesPedido['Entidade']['id'])); ?>
		</td>
		<td><?php echo h($requisicoesPedido['RequisicoesPedido']['nome_requerente']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($requisicoesPedido['Curso']['name'], array('controller' => 'cursos', 'action' => 'view', $requisicoesPedido['Curso']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($requisicoesPedido['RequisicoesTipoPedido']['name'], array('controller' => 'requisicoes_pedidos', 'action' => 'actualizar_estado_requisicao', $requisicoesPedido['RequisicoesPedido']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($requisicoesPedido['RequisicoesEstadoPedido']['name'], array('controller' => 'requisicoes_pedidos', 'action' => 'actualizar_estado_requisicao', $requisicoesPedido['RequisicoesPedido']['id'])); ?>
		</td>
		<td><?php echo h($requisicoesPedido['RequisicoesPedido']['estudante_bolseiro']); ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
<?php $this->end() ?>