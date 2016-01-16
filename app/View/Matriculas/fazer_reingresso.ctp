<?php
$this->BreadCumbs->addCrumb('Alunos', '/alunos');
$this->BreadCumbs->addCrumb(h($aluno['Entidade']['name']), '/alunos/perfil_estudante/' . $aluno['Aluno']['id']);
$this->BreadCumbs->addCrumb('Fazer Reingresso', '/alunos/index');

echo $this->Html->css('/assets/plugins/select2/select2.css');
echo $this->Html->css('/assets/plugins/datepicker/css/datepicker.css');
?>
<?php $this->extend('/Common/aluno_action'); ?>

<?php $this->start('aluno-form') ?>
<?php echo $this->Form->create('Matricula', array('role' => 'form', 'enctype' => 'multipart/form-data', 'class' => '', 'inputDefaults' => array())); ?>
<div class="form-group">
	<label>
		<?php echo __('Ano de Reingresso') ?>
	</label>
	<?php echo $this->Form->input('ano_lectivo_id', array('options' => $anoRenovacoes, 'label' => false, 'div' => false, 'class' => 'form-control')); ?>
</div>
<div class="form-group">
	<div class="col-sm-4 col-sm-offset-8">

		<?php
		echo $this->Form->input('aluno_id', array('type' => 'hidden', 'value' => $aluno['Aluno']['id'], 'label' => false, 'div' => '_50'));
		echo $this->Form->input('curso_id', array('type' => 'hidden', 'value' => $aluno['Aluno']['curso_id'], 'label' => false, 'div' => '_50'));
		echo $this->Form->input('plano_estudo_id', array('type' => 'hidden', 'value' => $aluno['PlanoEstudo']['id'], 'label' => false, 'div' => '_50'));
		echo $this->Form->input('data', array('type' => 'hidden', 'value' => date('Y-m-d'), 'label' => false, 'div' => '_50'));
		echo $this->Form->input('estado_matricula_id', array('type' => 'hidden', 'value' => 1, 'label' => false, 'div' => '_50'));
		echo $this->Form->input('user_id', array('type' => 'hidden', 'value' => $this->Session->read('Auth.User.id'), 'label' => false, 'div' => '_50'));
		echo $this->Form->input('turno_id', array('type' => 'hidden', 'value' => null, 'label' => false, 'div' => '_50'));
		echo $this->Form->input('tipo_matricula_id', array('type' => 'hidden', 'value' => 3, 'label' => false, 'div' => '_50'));
		echo $this->Form->input('RegimeLectivo_id', array('type' => 'hidden', 'value' => null, 'label' => false, 'div' => '_50'));
		echo $this->Form->end(array('label' => __('GRAVAR', true), 'class' => 'btn btn-blue btn-block'));
		?>

	</div>


</div>
<?php
$this->end();
