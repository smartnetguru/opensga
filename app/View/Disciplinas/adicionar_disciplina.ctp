<?php
$this->Html->addCrumb($this->Session->read('Auth.User.unidade_organica'), '/');
$this->Html->addCrumb('Disciplinas', '/faculdade/disciplinas');
$this->Html->addCrumb('Adicionar Disciplina', '#');
?>
<?php $this->extend('/Common/form_basic_common'); ?>

<?php $this->start('form-elements') ?>
<?php echo $this->Form->create('Disciplina', array('role' => 'form', 'class' => '', 'inputDefaults' => array())); ?>
<div class="form-group">
	<label>
		<?php echo __('Nome da Disciplina') ?>
	</label>
	<div>
		<?php echo $this->Form->input('name', array('label' => false, 'div' => false, 'class' => 'form-control')); ?>
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