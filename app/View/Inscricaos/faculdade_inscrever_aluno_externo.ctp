<?php
    $this->BreadCumbs->addCrumb('Alunos', '/alunos');
    $this->BreadCumbs->addCrumb(h($aluno['Entidade']['name']), '/alunos/perfil_estudante/' . $aluno['Aluno']['id']);
    $this->BreadCumbs->addCrumb('Mudanca de Curso', '/alunos/index');

    echo $this->Html->css('/assets/plugins/select2/select2.css');
    echo $this->Html->css('/assets/plugins/datepicker/css/datepicker.css');
?>
<?php $this->extend('/Common/aluno_action'); ?>

<?php $this->start('aluno-form') ?>
<?php echo $this->Form->create('Inscricao',
        [
                'role'          => 'form',
                'enctype'       => 'multipart/form-data',
                'class'         => '',
                'inputDefaults' => [
                        'div'       => 'form-group',
                        'wrapInput' => false,
                        'class'     => 'form-control',
                ],
        ]); ?>
<?php echo $this->Form->input('curso_id', [
        'label'       => 'Seleccione o Curso',
        'placeholder' => 'Type something…',
        'after'       => '<span class="help-block">Seleccione o Curso a se inscrever.</span>',
        'id'          => 'cursoId',
        'required'    => true,
]); ?>
<?php echo $this->Form->input('plano_estudo_id', [
        'label'       => 'Seleccione o Plano de Estudos',
        'placeholder' => 'Type something…',
        'after'       => '<span class="help-block">Seleccione o plano de Estudos que o estudante vai frequentar.</span>',
        'id'          => 'planoEstudoId',
        'required'    => true,
]); ?>

<?php echo $this->Form->hidden('aluno_id', ['value' => $aluno['Aluno']['id']]); ?>
<?php echo $this->Form->hidden('HistoricoCurso.funcionario_id', ['value' => $funcionario['Funcionario']['id']]); ?>
    <div class="form-group">
        <div class="col-sm-4 col-sm-offset-8">
            <?php
                echo $this->Form->end(['label' => __('GRAVAR', true), 'class' => 'btn btn-blue btn-block']);
            ?>

        </div>


    </div>
<?php
    $this->end();
?>
<?php
    $this->Js->get('#cursoId')->event('change', $this->Js->request([
            'controller' => 'ajax',
            'action'     => 'get_plano_estudos_by_curso',
    ], [
            'update'         => '#planoEstudoId',
            'complete'       => '$("#planoEstudoId").trigger("liszt:updated")',
            'async'          => true,
            'method'         => 'post',
            'dataExpression' => true,
            'data'           => $this->Js->serializeForm([
                    'isForm' => true,
                    'inline' => true,
            ]),
    ])
    );