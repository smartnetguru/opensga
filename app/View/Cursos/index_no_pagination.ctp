<?php
$this->extend('/Common/index_no_pagination');
$this->BreadCumbs->addCrumb('Alunos', '/alunos');
$this->BreadCumbs->addCrumb('Lista de Alunos', '/alunos/index');
?>

<?php $this->start('top-actions') ?>
<div class="action-list">
	<div class="col-sm-2">
		<?php echo $this->Html->link('<i class="fa fa-user fa-2x"></i>Adicionar Curso', array('controller' => 'cursos', 'action' => 'adicionar_curso'), array('escape' => false, 'class' => 'btn btn-icon btn-block')) ?>
	</div>
    <div class="col-sm-2">
        <?php echo $this->Html->link('<i class="fa fa-chain-broken fa-2x"></i>Manutenção',
            array('controller' => 'cursos', 'action' => 'manutencao'), array('escape' => false,
                                                                     'class' => 'btn btn-icon btn-block')) ?>
    </div>
</div>
<?php $this->end() ?>
<?php $this->assign('table-title', __('Todos Cursos Cadastrados')) ?>
<?php $this->start('filter-form') ?>
<?php echo $this->Form->create('Curso', array('role' => 'form', 'enctype' => 'multipart/form-data', 'class' => 'form-horizontal', 'inputDefaults' => array('before' => '', 'after' => ''))); ?>
<div class="row">
	<div class="form-group">
		<div class="col-md-3">
			<?php echo $this->Form->input('Curso.codigo', array('label' => false, 'div' => false, 'required' => FALSE, 'class' => 'form-control', 'placeholder' => 'Codigo do Curso')); ?>
		</div>
		<div class="col-md-3">
			<?php echo $this->Form->input('Curso.name', array('label' => false, 'div' => false, 'class' => 'form-control', 'placeholder' => 'Ou Nome do Curso')); ?>
		</div>
		<div class="col-md-3">
			<?php echo $this->Form->input('Curso.unidade_organica_id', array('label' => false, 'div' => false, 'class' => 'form-control', 'placeholder' => 'Ou Unidade Organica','empty'=>'')); ?>
		</div>
		<div class="col-md-3">
			<?php echo $this->Form->end(array('label' => __('Pesquisar', true), 'class' => 'btn btn-blue next-step btn-block')); ?>
		</div>
	</div>
</div>


<?php $this->end() ?>
<?php $this->start('table-header') ?>

<tr>
	<th><?php echo __('Código do Curso') ?></th>
	<th><?php echo __('Nome do Curso') ?></th>
</tr>
<?php $this->end() ?>
<?php $this->start('table-body') ?>
<?php
foreach ($cursos as $curso):
	?>
	<tr class="clickableRow" href="<?= $this->Html->url(array('controller'=>'cursos','action'=>'ver_curso',
        $curso['Curso']['id']))?>">
		<td><?php echo $curso['Curso']['codigo']; ?>&nbsp;</td>
		<td><?php echo $this->Html->link($curso['Curso']['name'],array('action'=>'ver_curso',$curso['Curso']['id'])); ?>&nbsp;</td>


	</tr>
<?php endforeach; ?>
<?php $this->end() ?>