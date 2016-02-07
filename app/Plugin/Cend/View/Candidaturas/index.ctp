<?php
    $this->extend('/Common/index_common');
    $this->BreadCumbs->addCrumb('Candidatos', '/candidaturas');
    $this->BreadCumbs->addCrumb('Candidatos não matriculados', '/candidaturas/index');
?>

<?php $this->start('top-actions') ?>
<div class="action-list">
    <div class="col-sm-2">
        <?php echo $this->Html->link('<i class="fa fa-user fa-2x"></i>Imprimir Lista de Candidatos',
                ['controller' => 'candidaturas', 'action' => 'print_lista_admitidos'], [
                        'escape' => false,
                        'class'  => 'btn btn-icon btn-block',
                ]) ?>
    </div>

    <div class="col-sm-2">
        <?php echo $this->Html->link('<i class="fa fa-user fa-2x"></i>Imprimir Boletins por Provincia',
                ['controller' => 'candidaturas', 'action' => 'print_boletim_provincia'], [
                        'escape' => false,
                        'class'  => 'btn btn-icon btn-block',
                ]) ?>
    </div>
</div>
<?php $this->end() ?>
<?php $this->assign('table-title', __('Candidatos não matriculados')) ?>
<?php $this->start('filter-form') ?>
<?php echo $this->Form->create('Candidatura', [
        'role'          => 'form',
        'enctype'       => 'multipart/form-data',
        'class'         => 'form-horizontal',
        'inputDefaults' => ['before' => '', 'after' => ''],
]); ?>
<div class="row">
    <div class="form-group">
        <div class="col-md-3">
            <?php echo $this->Form->input('Candidatura.numero_candidato', [
                    'label'       => false,
                    'div'         => false,
                    'required'    => false,
                    'class'       => 'form-control',
                    'placeholder' => 'Número de Candidato',
            ]); ?>
        </div>
        <div class="col-md-3">
            <?php echo $this->Form->input('Candidatura.numero_estudante', [
                    'label'       => false,
                    'div'         => false,
                    'class'       => 'form-control',
                    'placeholder' => 'Ou Número de Estudante',
            ]); ?>
        </div>
        <div class="col-md-3">
            <?php echo $this->Form->input('Candidatura.name', [
                    'label'       => false,
                    'div'         => false,
                    'class'       => 'form-control',
                    'placeholder' => 'Ou um dos nomes',
            ]); ?>
        </div>
        <div class="col-md-3">
            <?php echo $this->Form->end([
                    'label' => __('Pesquisar', true),
                    'class' => 'btn btn-blue next-step btn-block',
            ]); ?>
        </div>
    </div>
</div>


<?php $this->end() ?>
<?php $this->start('table-header') ?>

<tr>
    <th><?php echo $this->Paginator->sort('numero_candidato', __('Numero de Candidato')); ?></th>
    <th><?php echo $this->Paginator->sort('numero_estudante', __('Numero de Estudante')); ?></th>
    <th><?php echo $this->Paginator->sort('apelido', __('Apelido')); ?></th>
    <th><?php echo $this->Paginator->sort('nomes', __('Nome')); ?></th>
    <th><?php echo $this->Paginator->sort('aluno_via_admissao_id', __('Via de Admissao')); ?></th>
    <th><?php echo $this->Paginator->sort('curso_id', __('Curso de Ingresso')); ?></th>
    <th><?php echo $this->Paginator->sort('unidade_organica_id', __('Unidade Organica')); ?></th>
    <th><?php echo $this->Paginator->sort('ano_candidatura', __('Ano de Candidatura')); ?></th>
    <th>Opcoes</th>
</tr>
<?php $this->end() ?>
<?php $this->start('table-body') ?>
<?php foreach ($candidaturas as $candidatura): ?>
    <tr>
        <td><?php echo h($candidatura['Candidatura']['numero_candidato']); ?>&nbsp;</td>
        <td><?php echo h($candidatura['Candidatura']['numero_estudante']); ?>&nbsp;</td>
        <td><?php echo h($candidatura['Candidatura']['apelido']); ?>&nbsp;</td>
        <td><?php echo h($candidatura['Candidatura']['nomes']); ?>&nbsp;</td>
        <td>
            <?php echo $this->Html->link($candidatura['AlunoViaAdmissao']['name'], [
                    'controller' => 'aluno_via_admissaos',
                    'action'     => 'view',
                    $candidatura['AlunoViaAdmissao']['id'],
            ]); ?>
        </td>
        <td>
            <?php echo $this->Html->link($candidatura['Curso']['name'],
                    ['controller' => 'cursos', 'action' => 'view', $candidatura['Curso']['id']]); ?>
        </td>
        <td>
            <?php echo $this->Html->link($candidatura['UnidadeOrganica']['name'], [
                    'controller' => 'unidade_organicas',
                    'action'     => 'view',
                    $candidatura['UnidadeOrganica']['id'],
            ]); ?>
        </td>
        <td><?php echo h($candidatura['Candidatura']['ano_candidatura']); ?>&nbsp;</td>
        <td><?= $this->Html->link('Matricular',
                    ['controller' => 'alunos', 'action' => 'matricular_candidato', $candidatura['Candidatura']['id']]
            ) ?></td>
    </tr>
<?php endforeach; ?>
<?php $this->end() ?>
