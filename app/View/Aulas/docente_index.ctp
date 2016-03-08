<?php
    $this->extend('/Common/index_common');
    $this->BreadCumbs->addCrumb('Alunos', '/alunos');
    $this->BreadCumbs->addCrumb('Lista de Alunos', '/alunos/index');
?>

<?php $this->start('top-actions') ?>
<div class="action-list">
    <div class="col-sm-2">
        <?php echo $this->Html->link('<i class="fa fa-plus fa-2x"></i>Criar Nova Aula',
                ['controller' => 'aulas', 'action' => 'criar_aula',$turmaId],
                ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
    </div>
</div>
<?php $this->end() ?>
<?php $this->assign('table-title', __('Aulas Agendadas e Leccionadas')) ?>
<?php $this->start('filter-form') ?>
<?php echo $this->Form->create('Aula', [
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
    <th><?php echo $this->Paginator->sort('tema_aula','Sumário'); ?></th>
    <th><?php echo $this->Paginator->sort('turma_id','Turma'); ?></th>
    <th><?php echo $this->Paginator->sort('inicio_aula','Data e Hora de Inicio'); ?></th>
    <th><?php echo $this->Paginator->sort('fim_aula','Data e Hora de Fim'); ?></th>
    <th class="actions"><?php echo __('Accoes'); ?></th>
</tr>
<?php $this->end() ?>
<?php $this->start('table-body') ?>
<?php foreach ($aulas as $aula): ?>
    <tr>
        <td><?php echo h($aula['Aula']['tema_aula']); ?>&nbsp;</td>
        <td><?php echo $aula['Turma']['name']; ?></td>

        <td><?php echo h($aula['Aula']['inicio_aula']); ?>&nbsp;</td>
        <td><?php echo h($aula['Aula']['fim_aula']); ?>&nbsp;</td>
        <td class="center">
            <div class="visible-md visible-lg hidden-sm hidden-xs">

                <?= $this->Html->link('<i class="fa fa-eye"></i>',
                        [
                                'controller' => 'aulas',
                                'action'     => 'ver_aula',
                                $aula['Aula']['id'],
                        ], [
                                'class'               => 'btn btn-xs btn-green tooltips',
                                'data-placement'      => 'top',
                                'data-original-title' => 'Ver Aula',
                                'escape'              => false,
                        ]);
                ?>
                <?= $this->Html->link('<i class="fa fa-edit"></i>',
                        [
                                'controller' => 'aulas',
                                'action'     => 'editar_aula',
                                $aula['Aula']['id'],
                        ], [
                                'class'               => 'btn btn-xs btn-green tooltips',
                                'data-placement'      => 'top',
                                'data-original-title' => 'Editar Aula',
                                'escape'              => false,
                        ]);
                ?>
                <?php
                    echo $this->Form->postLink('<i class="clip clip-file-remove fa fa-white"></i>',
                            [
                                    'action'    => 'cancelar_aula',
                                    $aula['Aula']['id'],
                            ], [
                                    'escape'              => false,
                                    'class'               => 'btn btn-xs btn-yellow tooltips',
                                    'data-placement'      => 'top',
                                    'data-original-title' => 'Anular Inscricao',
                            ],
                            __('Tem Certeza que pretende Cancelar esta Aula?'));

                ?>

            </div>
            <div class="visible-xs visible-sm hidden-md hidden-lg">
                <div class="btn-group">
                    <a class="btn btn-primary dropdown-toggle btn-sm"
                       data-toggle="dropdown" href="#">
                        <i class="fa fa-cog"></i> <span class="caret"></span>
                    </a>
                    <ul role="menu" class="dropdown-menu pull-right">
                        <li role="presentation">
                            <?= $this->Html->link('<i class="fa fa-eye">Ver Aula</i>',
                                    [
                                            'controller' => 'aulas',
                                            'action'     => 'ver_aula',
                                            $aula['Aula']['id'],
                                    ], [
                                            'role'     => 'menuitem',
                                            'tabindex' => '-1',
                                            'escape'   => false,
                                    ]); ?>
                        </li>


                    </ul>
                </div>
            </div>
        </td>

    </tr>
<?php endforeach; ?>
<?php $this->end() ?>