<?php
$this->BreadCumbs->addCrumb('Alunos', '/alunos');
$this->BreadCumbs->addCrumb(h($aluno['Entidade']['name']), '/alunos/perfil_estudante/' . $aluno['Aluno']['id']);
$this->BreadCumbs->addCrumb('Mudanca de Curso', '/alunos/index');

echo $this->Html->css('/assets/plugins/select2/select2.css');
echo $this->Html->css('/assets/plugins/datepicker/css/datepicker.css');
?>
<?php $this->extend('/Common/aluno_action'); ?>

<?php $this->start('aluno-form') ?>
<?php echo $this->Form->create('Aluno', array('role' => 'form', 'enctype' => 'multipart/form-data', 'class' => '', 'inputDefaults' => array())); ?>
<div class="form-group">
	<label>
		<?php echo __('Numero de Estudante atribuido (Mudanca via exame)') ?>
	</label>
	<?php echo $this->Form->input('numero_estudante_atribuido', array('label' => false, 'div' => false, 'class' => 'form-control')); ?>
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
		<?php echo __('Novo Curso') ?>
	</label>
	<div>
		<?php echo $this->Form->input('curso_id', array('label' => false, 'div' => false, 'class' => 'form-control search-select')); ?>
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
	<div class="col-sm-4 col-sm-offset-8">
		<?php echo $this->Form->hidden('aluno_id', array('value' => $aluno['Aluno']['id'])); ?>
		<?php echo $this->Form->hidden('curso_antigo', array('value' => $aluno['Aluno']['curso_id'])); ?>
		<?php
		if ($mudancaSucesso) {
			echo $this->Html->link(__('Imprimir Comprovativo'), array('controller' => 'alunos', 'action' => 'print_comprovativo_mudanca_curso', $mudancaCursoId), array('class' => 'btn btn-red btn-block'));
		} else {
			echo $this->Form->end(array('label' => __('GRAVAR', true), 'class' => 'btn btn-blue btn-block'));
		}
		?>

	</div>


</div>
<?php
$this->end();
