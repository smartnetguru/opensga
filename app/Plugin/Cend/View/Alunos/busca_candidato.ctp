<?php
/**
 * Formulário de registro de dados do estudante
 *
 *
 * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 * @link          http://infomoz.net/opensga OpenSGA - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.estudantes.view
 * @version       OpenSGA v 0.5.0
 * @since         OpenSGA v 0.1.0
 *
 */
?>

<?php
$this->Html->addCrumb('Alunos', '/alunos');
$this->Html->addCrumb('Lista de Alunos', '/alunos/index');
?>

<div class="row">
	<div class="col-sm-12">
		<!-- start: TEXT FIELDS PANEL -->
		<div class="panel panel-default">
			<div class="panel-heading">
				<i class="fa fa-external-link-square"></i>
				Pesquisa de Candidato por matricular
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
				<?php echo $this->Form->create('Candidatura', array('role' => 'form', 'class' => 'form-horizontal')); ?>
				<div class="form-group">
					<label for="form-field-1" class="col-sm-2 control-label">
						Numero de Estudante
					</label>
					<div class="col-sm-9">
						<?php echo $this->Form->input('numero_estudante', array('label' => false, 'div' => false, 'class' => 'form-control', 'placeholder' => 'digite o numero de estudante aqui')); ?>
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