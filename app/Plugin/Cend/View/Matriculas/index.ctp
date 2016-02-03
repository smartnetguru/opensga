<?php
$this->extend('/Common/index_common');
$this->BreadCumbs->addCrumb('Matriculas', '/matriculas');
$this->BreadCumbs->addCrumb('Todas Matriculas', '/matriculas/index');
?>

<?php $this->start('top-actions') ?>
<div class="action-list">
	<div class="col-sm-2">
		<?php echo $this->Html->link('<i class="fa fa-user fa-2x"></i>Matricular Candidato', array('controller' => 'alunos', 'action' => 'busca_candidato'), array('escape' => false, 'class' => 'btn btn-icon btn-block')) ?>
	</div>
	<div class="col-sm-2">
		<?php echo $this->Html->link('<i class="fa fa-plus  fa-2x"></i>	Renovações de Matricula',
            array('controller' => 'matriculas', 'action' => 'renovacao_matriculas'), array('escape' => false, 'class' => 'btn btn-icon btn-block')) ?>

	</div>
	<div class="col-sm-2">
		<?php echo $this->Html->link('<i class="fa fa-bar-chart-o  fa-2x"></i>	Matriculados por Ano', array('controller' => 'matriculas', 'action' => 'report_matriculados_ano'), array('escape' => false, 'class' => 'btn btn-icon btn-block')) ?>
	</div>
	<div class="col-sm-2">
		<?php echo $this->Html->link('<i class="fa fa-bar-chart-o  fa-2x"></i>	Matriculados por Curso', array('controller' => 'matriculas', 'action' => 'report_matriculados_curso'), array('escape' => false, 'class' => 'btn btn-icon btn-block')) ?>
	</div>
</div>
<?php $this->end() ?>
<?php $this->assign('table-title', __('Todas as Matriculas')) ?>

<?php $this->start('table-header') ?>

<tr>
	<th ><?php echo __('Codigo'); ?></th>
	<th><?php echo __('Nome Completo'); ?></th>
	<th><?php echo __('Curso'); ?></th>
	<th><?php echo __('Ano Lectivo'); ?></th>
	<th><?php echo __('Data de Matricula'); ?></th>
	<th><?php echo __('Tipo de Matricula'); ?></th>
	<th><?php echo __('Estado da Matricula'); ?></th>
	<th></th>

</tr>
<?php $this->end() ?>
<?php $this->start('table-body') ?>
<?php
foreach ($matriculas as $matricula):
	?>
	<tr>
		<td>
			<?php
			echo $this->Html->link($matricula['Aluno']['codigo'], array(
				'controller' => 'alunos', 'action' => 'perfil_estudante', $matricula['Aluno']['id']
					)
			);
			?>
		</td>
		<td>
			<?php
			echo $this->Html->link($matricula['Aluno']['Entidade']['name'], array(
				'controller' => 'alunos', 'action' => 'perfil_estudante', $matricula['Aluno']['id']
					)
			);
			?>
		</td>
		<td>
			<?php
			echo $this->Html->link($matricula['Curso']['name'], array(
				'controller' => 'cursos', 'action' => 'ver_cursos', $matricula['Curso']['id']
					)
			);
			?>
		</td>
		<td>
			<?php
			echo $this->Html->link($matricula['AnoLectivo']['ano'], array(
				'controller' => 'ano_lectivos', 'action' => 'ver_ano_lectivo', $matricula['AnoLectivo']['id']
					)
			);
			?>
		</td>
		<td><?php echo h($matricula['Matricula']['data']); ?></td>
		<td><?php echo h($matricula['TipoMatricula']['name']); ?></td>
		<td><?php echo h($matricula['EstadoMatricula']['name']); ?></td>
		<td class="center">
			<div class="visible-md visible-lg hidden-sm hidden-xs">
				<a data-original-title="Anular Matricula" data-placement="top" class="btn btn-xs btn-bricky tooltips" href="#"><i class="fa fa-times fa fa-white"></i></a>
			</div>
		</td>
	</tr>
	<?php
endforeach;
?>
<?php $this->end() ?>
<?php $this->start('filter-form') ?>
<?php echo $this->Form->create('Matricula', array('role' => 'form', 'enctype' => 'multipart/form-data', 'class' => 'form-horizontal')); ?>
<div class="row">
	<div class="form-group">
		<div class="col-md-2">
			<?php echo $this->Form->input('Aluno.codigo', array('label' => false, 'div' => false, 'required' => FALSE, 'class' => 'form-control', 'placeholder' => 'Numero de Estudante')); ?>
		</div>
		<div class="col-md-2">
			<?php echo $this->Form->input('tipo_matricula_id', array('label' => false, 'div' => false, 'class' => 'form-control', 'placeholder' => 'Seleccione')); ?>
		</div>
		<div class="col-md-2">
			<?php echo $this->Form->input('estado_matricula_id', array('label' => false, 'div' => false, 'class' => 'form-control', 'placeholder' => 'Ou nomes')); ?>
		</div>
		<div class="col-md-2">
			<?php echo $this->Form->input('ano_lectivo_id', array('label' => false, 'div' => false, 'class' => 'form-control', 'placeholder' => 'Ano Lectivo', 'type' => 'text')); ?>
		</div>
		<div class="col-md-2">
			<?php echo $this->Form->end(array('label' => __('Pesquisar', true), 'class' => 'btn btn-blue next-step btn-block')); ?>
		</div>
	</div>
</div>

<?php $this->end() ?>