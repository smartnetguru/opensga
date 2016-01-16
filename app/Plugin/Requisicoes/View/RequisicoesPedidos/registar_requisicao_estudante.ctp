<?php
$this->BreadCumbs->addCrumb('Alunos', '/alunos');
$this->BreadCumbs->addCrumb(h($aluno['Entidade']['name']), '/alunos/perfil_estudante/' . $aluno['Aluno']['id']);
$this->BreadCumbs->addCrumb('Mudanca de Curso', '/alunos/index');

echo $this->Html->css('/assets/plugins/select2/select2.css');
echo $this->Html->css('/assets/plugins/datepicker/css/datepicker.css');
?>
<?php $this->extend('/Common/aluno_action'); ?>

<?php $this->start('aluno-form') ?>
<?php echo $this->Form->create('RequisicoesPedido', array('role' => 'form', 'enctype' => 'multipart/form-data', 'class' => '', 'inputDefaults' => array())); ?>
<?php echo $this->Form->unlockField('estudante_bolseiro'); ?>
<?php echo $this->Form->hidden('aluno_id', array('value' => $aluno['Aluno']['id'])); ?>
<?php echo $this->Form->hidden('curso_id', array('value' => $aluno['Curso']['id'])); ?>
<div class="form-group">
	<label>
		<?php echo __('Numero de Requisicao') ?>
	</label>
	<?php echo $this->Form->input('numero_pedido', array('label' => false, 'div' => false, 'class' => 'form-control')); ?>
</div>
<div class="form-group col-sm-6">
	<label>
		<?php echo __('Documento/Tipo de Requisicao') ?>
	</label>
	<?php echo $this->Form->input('requisicoes_tipo_pedido_id', array('label' => false, 'div' => false, 'class' => 'form-control', 'empty' => '--Seleccione--')); ?>
</div>
<div class="form-group col-sm-6">
	<label>
		<?php echo __('Outros Tipos de Requisicao') ?>
	</label>
	<?php echo $this->Form->input('novo_tipo_requisicao', array('label' => false, 'div' => false, 'class' => 'form-control')); ?>
</div>
<div class="form-group">
	<label>
		<?php echo __('Estado da Requisicao') ?>
	</label>
	<?php echo $this->Form->input('requisicoes_estado_pedido_id', array('label' => false, 'div' => false, 'class' => 'form-control')); ?>
</div>
<div class="form-group">
	<label>
		<?php echo __('Data de Requisicao') ?>
	</label>
	<?php echo $this->Form->input('data_pedido', array('label' => false, 'div' => false, 'class' => 'form-control date-picker', 'type' => 'text', 'data-date-viewmode' => 'years', 'data-date-format' => 'yyyy-mm-dd')); ?>
</div>
<div class="form-group">
	<label>
		<?php echo __('Estudante Bolseiro?') ?>
	</label>
	<div>
		<?php echo $this->Form->input('estudante_bolseiro', array('label' => false, 'legend' => false, 'div' => '_100', 'type' => 'radio', 'style' => 'width:20px;margin-left:50px', 'default' => 0, 'options' => array('0' => 'Não', '1' => 'Sim'))); ?>
	</div>
</div>
<div class="form-group">
	<div class="col-sm-4 col-sm-offset-8">
		<?php echo $this->Form->end(array('label' => __('GRAVAR', true), 'class' => 'btn btn-blue btn-block')); ?>

	</div>


</div>
<?php
$this->end();
