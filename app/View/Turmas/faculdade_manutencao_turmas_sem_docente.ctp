<?php
$this->extend('/Common/index_no_pagination');
$this->BreadCumbs->addCrumb('Alunos', '/alunos');
$this->BreadCumbs->addCrumb('Lista de Alunos', '/alunos/index');
?>

<?php $this->start('top-actions') ?>
<div class="action-list">
    <div class="col-sm-2">
        <?php echo $this->Html->link('<i class="fa fa-chain-broken fa-2x"></i>Manutenção',
            array('controller' => 'turmas', 'action' => 'manutencao'), array('escape' => false,
                                                                     'class' => 'btn btn-icon btn-block')) ?>
    </div>
</div>
<?php $this->end() ?>
<?php $this->assign('table-title', __('Turmas Sem Docentes Associados')) ?>
<?php $this->start('table-header') ?>

<tr>
    <th><?php echo __('Curso') ?></th>
	<th><?php echo __('Disciplina') ?></th>
	<th><?php echo __('Ano Curricular') ?></th>
    <th><?php echo __('Semestre Curricular') ?></th>
    <th><?php echo __('Total de Estudantes') ?></th>
</tr>
<?php $this->end() ?>
<?php $this->start('table-body') ?>
<?php
foreach ($turmasSemDocente as $turma):
	?>
	<tr class="clickableRow" href="<?= $this->Html->url(array('controller'=>'turmas','action'=>'adicionar_docente',
        $turma['Turma']['id']))?>">
		<td><?php echo $turma['Curso']['name']; ?>&nbsp;</td>
		<td><?php echo $turma['Disciplina']['name']; ?>&nbsp;</td>
        <td><?php echo $turma['Turma']['ano_curricular']; ?>&nbsp;</td>
        <td><?php echo $turma['Turma']['semestre_curricular']; ?>&nbsp;</td>
        <td><?php echo $turma['Turma']['total_alunos']; ?>&nbsp;</td>


	</tr>
<?php endforeach; ?>
<?php $this->end() ?>