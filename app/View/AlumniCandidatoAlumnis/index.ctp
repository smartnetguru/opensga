<?php
    $this->extend('/Common/index_common');
    $this->BreadCumbs->addCrumb('Alunos', '/alunos');
    $this->BreadCumbs->addCrumb('Lista de Alunos', '/alunos/index');
?>

<?php $this->start('top-actions') ?>
    <div class="action-list">
        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-print fa-2x"></i>Imprimir<span class="badge badge-danger"> Brevemente </span>',
                ['controller' => 'alumni_candidato_alumnis', 'action' => 'imprimir_lista_candidatos'],
                ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
        </div>
    </div>
<?php $this->end() ?>
<?php $this->assign('table-title', __('Candidatos a Alumni')) ?>
<?php $this->start('filter-form') ?>
<?php echo $this->Form->create('Aluno', [
    'role'          => 'form',
    'enctype'       => 'multipart/form-data',
    'class'         => 'form-horizontal',
    'inputDefaults' => ['before' => '', 'after' => '']
]); ?>
    <div class="row">
        <div class="form-group">
            <div class="col-md-3">
                <?php echo $this->Form->input('AlumniCandidatoAlumni.numero_estudante', [
                    'label'       => false,
                    'div'         => false,
                    'required'    => false,
                    'class'       => 'form-control',
                    'placeholder' => 'Numero de Estudante'
                ]); ?>
            </div>
            <div class="col-md-2">
                <?php echo $this->Form->input('AlumniCandidatoAlumni.apelido',
                    ['label' => false, 'div' => false, 'class' => 'form-control', 'placeholder' => 'Ou Apelido']); ?>
            </div>
            <div class="col-md-2">
                <?php echo $this->Form->input('AlumniCandidatoAlumni.nomes',
                    ['label' => false, 'div' => false, 'class' => 'form-control', 'placeholder' => 'Ou nomes']); ?>
            </div>
            <div class="col-md-3">
                <?php echo $this->Form->input('AlumniCandidatoAlumni.curso_id',
                    ['label' => false, 'div' => false, 'class' => 'form-control', 'placeholder' => 'Ou Curso']); ?>
            </div>
            <div class="col-md-2">
                <?php echo $this->Form->end([
                    'label' => __('Pesquisar', true),
                    'class' => 'btn btn-blue next-step btn-block'
                ]); ?>
            </div>
        </div>
    </div>


<?php $this->end() ?>
<?php $this->start('table-header') ?>

    <tr>
        <th><?php echo $this->Paginator->sort('numero_estudante'); ?></th>
        <th><?php echo $this->Paginator->sort('apelido'); ?></th>
        <th><?php echo $this->Paginator->sort('nomes'); ?></th>
        <th><?php echo $this->Paginator->sort('data_nascimento'); ?></th>
        <th><?php echo $this->Paginator->sort('ano_ingresso_uem'); ?></th>
        <th><?php echo $this->Paginator->sort('ano_conclusao'); ?></th>
        <th><?php echo $this->Paginator->sort('curso_id'); ?></th>

        <th><?php echo $this->Paginator->sort('Data de Registo'); ?></th>
        <th class="actions"><?php echo __('Accoes'); ?></th>
    </tr>
<?php $this->end() ?>
<?php $this->start('table-body') ?>
<?php foreach ($candidatoAlumnis as $candidatoAlumni): ?>
    <tr>
        <td><?php echo h($candidatoAlumni['AlumniCandidatoAlumni']['numero_estudante']); ?>&nbsp;</td>
        <td><?php echo h($candidatoAlumni['AlumniCandidatoAlumni']['apelido']); ?>&nbsp;</td>
        <td><?php echo h($candidatoAlumni['AlumniCandidatoAlumni']['nomes']); ?>&nbsp;</td>
        <td><?php echo h($candidatoAlumni['AlumniCandidatoAlumni']['data_nascimento']); ?>&nbsp;</td>
        <td><?php echo h($candidatoAlumni['AlumniCandidatoAlumni']['ano_ingresso_uem']); ?>&nbsp;</td>
        <td><?php echo h($candidatoAlumni['AlumniCandidatoAlumni']['ano_conclusao']); ?>&nbsp;</td>
        <td>
            <?php echo $this->Html->link($candidatoAlumni['Curso']['name'],
                ['controller' => 'cursos', 'action' => 'view', $candidatoAlumni['Curso']['id']]); ?>
        </td>
        <td><?php echo h($candidatoAlumni['AlumniCandidatoAlumni']['created']); ?>&nbsp;</td>
        <td class="actions" nowrap>
            <?php echo $this->Html->link('<i class="glyphicon glyphicon-ok-sign"></i>',
                ['action' => 'aprovar_candidatura_alumni', $candidatoAlumni['AlumniCandidatoAlumni']['id']], [
                    'class'               => 'btn btn-success tooltips',
                    'escape'              => false,
                    'data-original-title' => 'Aprovar Candidatura deste Alumni',
                    'data-placement'      => 'top'
                ]); ?>
            <?php echo $this->Html->link('<i class="fa fa-user fa fa-white"></i>',
                ['action' => 'perfil_candidato_alumni', $candidatoAlumni['AlumniCandidatoAlumni']['id']],
                ['class' => 'btn btn-primary tooltips','escape'              => false,
                 'data-original-title' => 'Ver Perfil Completo desta Candidatura',
                 'data-placement'      => 'top']); ?>
            <?php echo $this->Html->link('<i class="fa fa-edit fa fa-white"></i>',
                ['action' => 'editar_candidato_alumni', $candidatoAlumni['AlumniCandidatoAlumni']['id']],
                ['class' => 'btn btn-warning tooltips','escape'              => false,
                 'data-original-title' => 'Editar Esta Candidatura a Alumni',
                 'data-placement'      => 'top']); ?>
            <?php echo $this->Form->postLink('<i class="fa fa-times fa fa-white"></i>',
                ['action' => 'cancelar_candidatura_alumni', $candidatoAlumni['AlumniCandidatoAlumni']['id']], [
                    'class'               => 'btn btn-danger tooltips',
                    'confirm'             => 'Tem Certeza que Pretende Apagar esta Candidatura?',
                    'escape'              => false,
                    'data-original-title' => 'Cancelar esta Candidatura',
                    'data-placement'      => 'top'
                ]); ?>

        </td>
    </tr>
<?php endforeach; ?>
<?php $this->end() ?>