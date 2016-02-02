<?php
$this->BreadCumbs->addCrumb('Alunos', '/alunos');
$this->BreadCumbs->addCrumb('Lista de Alunos', '/alunos/index');
?>

<div class="row">
	<div class="col-sm-12">
		<!-- start: TEXT FIELDS PANEL -->
		<div class="panel panel-default">
			<div class="panel-heading">
				<i class="fa fa-external-link-square"></i>
				<?php echo __('Pesquisa de Alunos') ?>
				<div class="panel-tools">
					<a href="#" class="btn btn-xs btn-link panel-collapse collapses">
					</a>
					<a data-toggle="modal" href="#panel-config" class="btn btn-xs btn-link panel-config">
						<i class="fa fa-wrench"></i>
					</a>
					<a href="#" class="btn btn-xs btn-link panel-refresh">
						<i class="fa fa-refresh"></i>
					</a>
					<a href="#" class="btn btn-xs btn-link panel-expand">
						<i class="fa fa-resize-full"></i>
					</a>
					<a href="#" class="btn btn-xs btn-link panel-close">
						<i class="fa fa-times"></i>
					</a>
				</div>
			</div>
			<div class="panel-body">
				<?php echo $this->Form->create('Aluno', array('role' => 'form', 'class' => 'form-horizontal')); ?>
				<div class="form-group">
					<label for="form-field-1" class="col-sm-2 control-label">
						<?php echo __('Numero de Estudante') ?>
					</label>
					<div class="col-sm-9">
						<?php echo $this->Form->input('codigo', array('label' => false, 'div' => false, 'class' => 'form-control', 'placeholder' => 'digite o numero de estudante aqui')); ?>
						<?php echo $this->Form->input('actionSeguinte', array('type' => 'hidden', 'value' => $actionSeguinte, 'label' => 'Numero de Estudante', 'div' => '_25')); ?>
					</div>


				</div>
				<div class="form-group">
					<div class="col-sm-2 col-sm-offset-8">
						<?php echo $this->Form->end(array('label' => __('PESQUISAR', true), 'class' => 'btn btn-blue next-step btn-block')); ?>

					</div>
				</div>
				</form>
			</div>
		</div>
		<!-- end: TEXT FIELDS PANEL -->
	</div>
</div>

<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'scriptBottom')); ?>
$( "#CodigoAlunoID" ).autocomplete({
source: "/opensga/alunos/autocomplete",
minLength: 2,
delay: 2
});
<?php
$this->Html->scriptEnd();
