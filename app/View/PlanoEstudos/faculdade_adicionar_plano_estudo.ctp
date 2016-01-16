<?php
$this->Html->addCrumb($this->Session->read('Auth.User.unidade_organica'), '/');
$this->Html->addCrumb('Plano de Estudos', '/faculdade/plano_estudos');
$this->Html->addCrumb('Adicionar Plano de Estudos', '#');
?>

<?php $this->extend('/Common/form_basic_common'); ?>

<?php $this->start('form-elements') ?>
<?php echo $this->Form->create('PlanoEstudo', array('role' => 'form', 'class' => '', 'inputDefaults' => array())); ?>
<div class="form-group">
	<label>
		<?php echo __('Curso') ?>
	</label>
	<div>
		<?php echo $this->Form->input('curso_id', array('label' => false, 'div' => false, 'class' => 'form-control')); ?>
	</div>
</div>
<div class="form-group">
	<label>
		<?php echo __('Duracao(Anos)') ?>
	</label>
	<div>
		<?php echo $this->Form->input('duracao', array('label' => false, 'div' => false, 'class' => 'form-control')); ?>
	</div>
</div>
<div class="form-group">
	<label>
		<?php echo __('Semestres por ano') ?>
	</label>
	<div>
		<?php echo $this->Form->input('semestres_ano', array('label' => false, 'div' => false, 'class' => 'form-control')); ?>
	</div>
</div>
<div class="form-group">
	<label>
		<?php echo __('Ano de Criacao') ?>
	</label>
	<div>
		<?php echo $this->Form->input('ano_criacao', array('label' => false, 'div' => false, 'class' => 'form-control', 'dateFormat' => 'Y', 'type' => 'date', 'minYear' => date('Y') - 20, 'maxYear' => date('Y'), 'empty' => true)); ?>
	</div>
</div>
<div class="form-group">
	<div class="col-sm-2">
		<?php echo $this->Html->link('Voltar', array('action' => 'index'), array('class' => 'btn btn-light-grey btn-block')) ?>


	</div>
	<div class="col-sm-2 col-sm-offset-8">
		<?php echo $this->Form->end(array('label' => __('GRAVAR', true), 'class' => 'btn btn-blue btn-block')); ?>

	</div>


</div>
<?php $this->end(); ?>