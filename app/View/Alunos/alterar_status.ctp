<?php
$this->BreadCumbs->addCrumb('Alunos', '/alunos');
$this->BreadCumbs->addCrumb(h($aluno['Entidade']['name']), '/alunos/perfil_estudante/' . $aluno['Aluno']['id']);
$this->BreadCumbs->addCrumb('Alterar Status', '/alunos/index');

echo $this->Html->css('/assets/plugins/select2/select2.css');
echo $this->Html->css('/assets/plugins/datepicker/css/datepicker.css');
?>
<?php $this->extend('/Common/aluno_action'); ?>

<?php $this->start('aluno-form') ?>
<?php echo $this->Form->create('Aluno', array('role' => 'form', 'enctype' => 'multipart/form-data', 'class' => '', 'inputDefaults' => array())); ?>
<div class="form-group">
	<label>
		<?php echo __('Novo Staus') ?>
	</label>
	<?php echo $this->Form->input('estado_actual', array('label' => false, 'div' => false, 'class' => 'form-control search-select', 'options' => $estadoAlunos)); ?>
</div>
<div class="form-group">
	<label>
		<?php echo __('Motivo da Mudanca') ?>
	</label>
	<div>
		<?php echo $this->Form->input('motivo_estado_aluno_id', array('label' => false, 'div' => false, 'class' => 'form-control search-select')); ?>
	</div>
</div>
<div class="form-group">
	<label>
		<?php echo __('Data da Mudanca') ?>
	</label>
	<div>
		<?php echo $this->Form->input('data_mudanca', array('label' => false, 'div' => false, 'class' => 'form-control date-picker', 'type' => 'text', 'data-date-viewmode' => 'years', 'data-date-format' => 'yyyy-mm-dd')); ?>
	</div>
</div>
<div class="form-group">
	<label>
		<?php echo __('Anexo') ?>
	</label>
	<div>
		<?php echo $this->Form->input('anexo_url', array('label' => false, 'div' => false, 'class' => 'form-control', 'type' => 'file')); ?>
	</div>
</div>
<div class="form-group">
	<label>
		<?php echo __('Observacao') ?>
	</label>
	<div>
		<?php echo $this->Form->input('observacao', array('label' => false, 'div' => false, 'class' => 'form-control')); ?>
	</div>
</div>
<div class="form-group">
	<div class="col-sm-2 col-sm-offset-8">
		<?php echo $this->Form->hidden('aluno_id', array('value' => $aluno['Aluno']['id'])); ?>
		<?php echo $this->Form->hidden('estado_anterior', array('value' => $aluno['Aluno']['estado_aluno_id'])); ?>
		<?php echo $this->Form->end(array('label' => __('GRAVAR', true), 'class' => 'btn btn-blue btn-block')); ?>

	</div>


</div>
<?php
$this->end();

