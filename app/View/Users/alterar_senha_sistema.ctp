<?php
$this->Html->addCrumb($this->Session->read('Auth.User.unidade_organica'), '/');
$this->Html->addCrumb('Disciplinas', '/faculdade/disciplinas');
$this->Html->addCrumb('Adicionar Disciplina', '#');
?>
<?php $this->extend('/Common/form_basic_common'); ?>

<?php $this->start('form-elements') ?>
<?php echo $this->Form->create('User', array('role' => 'form', 'class' => '', 'inputDefaults' => array())); ?>
<div class="form-group">
	<label class="checkbox-inline">
		<?php echo $this->Form->input('definir_nova_senha', array('type' => 'checkbox', 'label' => false, 'div' => false, 'class' => 'green', 'checked' => 'checked', 'id' => 'definir_senha_nova')); ?>
	</label>
	<label>
		<?php echo __('Nova Senha') ?>
	</label>
	<?php echo $this->Form->input('novasenha1', array('label' => false, 'div' => false, 'class' => 'form-control', 'type' => 'password')); ?>
</div>
<div class="form-group">
	<label>
		<?php echo __('Repetir Nova Senha') ?>
	</label>
	<div>
		<?php echo $this->Form->input('novasenha2', array('label' => false, 'div' => false, 'class' => 'form-control', 'type' => 'password')); ?>
	</div>
</div>
<div class="form-group">
	<label class="checkbox-inline">
		<?php echo $this->Form->input('usar_senha_aleatoria', array('type' => 'checkbox', 'label' => false, 'div' => false, 'class' => 'green', 'id' => 'definir_senha_aleatoria')); ?>
	</label>
	<label>
		<?php echo __('Usar Senha Aleatoria') ?>
	</label>
	<div>
		<?php echo $this->Form->input('senha_aleatoria', array('label' => false, 'div' => false, 'class' => 'form-control', 'value' => $randomPassword)); ?>
	</div>
</div>
<div class="form-group">
	<label class="checkbox-inline">
		<?php echo $this->Form->input('usar_senha_padrao', array('type' => 'checkbox', 'label' => false, 'div' => false, 'class' => 'green', 'id' => 'definir_senha_padrao')); ?>
	</label>
	<label>
		<?php echo __('Usar Senha Padrao') ?>
	</label>
	<div>
		<?php echo $this->Form->input('senha_padrao', array('label' => false, 'div' => false, 'class' => 'form-control', 'value' => $defaultPassword)); ?>
	</div>
</div>
<div class="form-group">
	<div class="col-sm-2">
		<?php echo $this->Html->link('Voltar', array('action' => 'index'), array('class' => 'btn btn-light-grey btn-block')) ?>


	</div>
	<div class="col-sm-2 col-sm-offset-8">
		<?php echo $this->Form->input('user_id', array('label' => false, 'div' => false, 'class' => 'form-control', 'value' => $userId, 'type' => 'hidden')); ?>
		<?php echo $this->Form->end(array('label' => __('GRAVAR', true), 'class' => 'btn btn-blue btn-block')); ?>

	</div>


</div>
<?php $this->end(); ?>
<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'scriptBottom')); ?>

$(document).ready(function() {

$('#definir_senha_nova').change(function() {
if($(this).is(":checked")) {
$('#definir_senha_aleatoria').attr('checked', false);
$('#definir_senha_padrao').attr('checked', false);
}
});

$('#definir_senha_aleatoria').change(function() {
alert('teste');
if($(this).is(":checked")) {
$('#definir_senha_nova').attr('checked', false);
$('#definir_senha_padrao').attr('checked', false);
}
});

$('#definir_senha_padrao').change(function() {
if($(this).is(":checked")) {
$('#definir_senha_aleatoria').attr('checked', false);
$('#definir_senha_nova').attr('checked', false);
}
});
});
<?php $this->Html->scriptEnd(); ?>