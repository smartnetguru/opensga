<?php
    $this->extend('/Common/index_common');
    $this->BreadCumbs->addCrumb('Alunos', '/alunos');
    $this->BreadCumbs->addCrumb('Lista de Alunos', '/alunos/index');
?>

<?php $this->start('top-actions') ?>
    <div class="action-list">
        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-user fa-2x"></i>Matricular Candidato',
                    ['controller' => 'alunos', 'action' => 'busca_candidato'],
                    ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
        </div>
        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-user fa-2x"></i>Estudantes Matriculados Pela Faculdade',
                    ['controller' => 'alunos', 'action' => 'matriculados_pela_faculdade'],
                    ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
        </div>
        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-exchange fa-2x"></i>Mudanca de Curso',
                    ['controller' => 'alunos', 'action' => 'pesquisa_aluno_action', 'mudanca_curso'],
                    ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
        </div>
        <div class="col-sm-2">
            <?php echo $this->Html->link('<br/><i class="fa fa-plus"></i>	Adicionar Estudante <span class="badge badge-danger"> Brevemente </span>',
                    ['controller' => 'alunos', 'action' => 'adicionar_estudante'],
                    ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
        </div>
        <div class="col-sm-2">
            <?php echo $this->Html->link('<br/><i class="fa fa-bar-chart-o "></i>Exportar Alunos <span class="badge badge-danger"> Brevemente </span>',
                    ['controller' => 'alunos', 'action' => 'exportar_alunos'],
                    ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
        </div>
        <div class="col-sm-2">
            <?php echo $this->Html->link('<br/><i class="fa fa-bar-chart-o "></i>Alunos Sem Certificado <span
		class="badge badge-danger"> Brevemente </span>', [
                    'controller' => 'alunos',
                    'action'     => 'report_estudantes_sem_certificado',
            ],
                    ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
        </div>
        <div class="col-sm-2">
            <?php echo $this->Html->link('<br/><i class="fa fa-print"></i>Alunos Sem SMO <span class="badge
		badge-danger"> Brevemente </span>', ['controller' => 'alunos', 'action' => 'report_estudantes_sem_smo'],
                    ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
        </div>
    </div>
<?php $this->end() ?>
<?php $this->assign('table-title', __('Estudantes Cadastrados')) ?>
<?php $this->start('filter-form') ?>
<?php echo $this->Form->create('Aluno', [
        'role'          => 'form',
        'enctype'       => 'multipart/form-data',
        'class'         => 'form-horizontal',
        'inputDefaults' => ['before' => '', 'after' => ''],
]); ?>
    <div class="row">
        <div class="form-group">
            <div class="col-md-3">
                <?php echo $this->Form->input('Aluno.codigo', [
                        'label'       => false,
                        'div'         => false,
                        'required'    => false,
                        'class'       => 'form-control',
                        'placeholder' => 'Numero de Estudante',
                ]); ?>
            </div>
            <div class="col-md-3">
                <?php echo $this->Form->input('Aluno.apelido', [
                        'label'       => false,
                        'div'         => false,
                        'class'       => 'form-control',
                        'placeholder' => 'Ou Apelido',
                ]); ?>
            </div>
            <div class="col-md-3">
                <?php echo $this->Form->input('Aluno.nomes',
                        ['label' => false, 'div' => false, 'class' => 'form-control', 'placeholder' => 'Ou nomes']); ?>
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
        <th><?php echo __('Codigo'); ?></th>
        <th><?php echo __('Apelido'); ?></th>
        <th><?php echo __('Nome'); ?></th>
        <th><?php echo __('Curso'); ?></th>
        <th><?php echo __('Ano de Ingresso'); ?></th>
        <th><?php echo __('Accoes'); ?></th>
    </tr>
<?php $this->end() ?>
<?php $this->start('table-body') ?>
<?php
    foreach ($alunos as $aluno):
        ?>
        <tr>


            <td><?php echo $this->Html->link($aluno['Aluno']['codigo'],
                        ['controller' => 'alunos', 'action' => 'perfil_estudante', $aluno['Aluno']['id']]); ?>
                &nbsp;</td>
            <td><?php echo $aluno['Entidade']['apelido']; ?>&nbsp;</td>
            <td><?php echo $aluno['Entidade']['nomes']; ?>&nbsp;</td>
            <td><?php echo $aluno['Curso']['name']; ?>&nbsp;</td>
            <td><?php echo $aluno['Aluno']['ano_ingresso']; ?>&nbsp;</td>
            <td><?php echo $this->Form->postLink('Confirmar Matricula', [
                        'action'   => 'matriculados_pela_faculdade',
                        'mode'     => 'confirmar',
                        'aluno_id' => $aluno['Aluno']['id'],
                ], [
                        'confirm' => 'Deseja Confirmar a matricula de ' . $aluno['Entidade']['name'] . '?',
                        'class'   => 'btn btn-success',
                ]) ?></td>

        </tr>
        <?php
    endforeach;
?>
<?php $this->end() ?>