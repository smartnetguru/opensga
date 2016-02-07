<?php
    $this->Html->addCrumb($this->Session->read('Auth.User.unidade_organica'), '/');
    $this->Html->addCrumb('Disciplinas', '/faculdade/disciplinas');
    $this->Html->addCrumb('Adicionar Disciplina', '#');
?>
<?php $this->extend('/Common/form_basic_2_columns'); ?>

<?php $this->assign('form-title', 'Dados do Estudante na Base de Dados') ?>
<?php $this->start('form-elements') ?>
<?php echo $this->Form->create('AnoLectivo',
        ['role' => 'form', 'class' => 'form-horizontal', 'inputDefaults' => []]); ?>

<div class="form-group">
    <label class="control-label col-sm-4">Numero de Estudante</label>

    <p class="form-control-static"><?= $aluno['Aluno']['codigo'] ?></p>
</div>
<div class="form-group">
    <label class="control-label col-sm-4">Apelido</label>

    <p class="form-control-static"><?= $aluno['Entidade']['apelido'] ?></p>
</div>
<div class="form-group">
    <label class="control-label col-sm-4">Outros Nomes</label>

    <p class="form-control-static"><?= $aluno['Entidade']['nomes'] ?></p>
</div>
<div class="form-group">
    <label class="control-label col-sm-4">Sexo</label>

    <p class="form-control-static"><?= $aluno['Entidade']['Genero']['name'] ?></p>
</div>
<div class="form-group">
    <label class="control-label col-sm-4">Data de Nascimento</label>

    <p class="form-control-static"><?= $aluno['Entidade']['data_nascimento'] ?></p>
</div>
<div class="form-group">
    <label class="control-label col-sm-4">Faculdade</label>

    <p class="form-control-static"><?= $aluno['Curso']['UnidadeOrganica']['name'] ?></p>
</div>
<div class="form-group">
    <label class="control-label col-sm-4">Curso</label>

    <p class="form-control-static"><?= $aluno['Curso']['name'] ?></p>
</div>
<div class="form-group">
    <label class="control-label col-sm-4">Ano de Ingresso</label>

    <p class="form-control-static"><?= $aluno['Aluno']['ano_ingresso'] ?></p>
</div>
<div class="form-group">
    <label class="control-label col-sm-4">Naturalidade</label>

    <p class="form-control-static"><?= $aluno['Entidade']['naturalidade'] ?></p>
</div>
<?php if (isset($aluno['Entidade']['EstadoCivil'])): ?>
    <div class="form-group">
        <label class="control-label col-sm-4">Estado Civil</label>

        <p class="form-control-static"><?= $aluno['Entidade']['EstadoCivil']['name'] ?></p>
    </div>
<?php endif; ?>

<div class="form-group">
    <div class="col-sm-4 col-sm-offset-4">

        <?php echo $this->Form->end(); ?>

    </div>


</div>
<?php $this->end(); ?>
<?php $this->assign('form-title-right', 'Dados do Estudante na Candidatura') ?>
<?php $this->start('right-panel'); ?>
<?php
    $disabled = '';
    if (!in_array($candidatoGraduacao['CandidatoGraduacao']['estado_candidatura_id'], [3, 4])) {
        $disabled = 'disabled';
    }
    echo $this->Form->create('CandidatoGraduacao',
            ['role' => 'form', 'class' => '', 'inputDefaults' => ['disabled' => $disabled]]); ?>
<?php
    echo $this->Form->input('apelido',
            [
                    'label' => [
                            'class' => 'control-label',
                            'text'  => 'Apelido',
                    ],
                    'div'   => 'form-group col-sm-6',
                    'class' => 'form-control',
                    'id'    => 'codigoID',
                    'value' => $candidatoGraduacao['CandidatoGraduacao']['apelido'],
            ]
    );
    echo $this->Form->input('nomes',
            [
                    'label' => [
                            'class' => 'control-label',
                            'text'  => 'Outros Nomes',
                    ],
                    'div'   => 'form-group col-sm-6',
                    'class' => 'form-control',
                    'id'    => 'codigoID',
                    'value' => $candidatoGraduacao['CandidatoGraduacao']['nomes'],
            ]
    );
    echo $this->Form->input('ano_conclusao',
            [
                    'label' => [
                            'class' => 'control-label',
                            'text'  => 'Ano de Conlusao',
                    ],
                    'div'   => 'form-group col-sm-4',
                    'class' => 'form-control',
                    'id'    => 'codigoID',
                    'type'  => 'text',
                    'value' => $candidatoGraduacao['CandidatoGraduacao']['ano_conclusao'],
            ]
    );
    echo $this->Form->input('data_defesa',
            [
                    'label'              => [
                            'class' => 'control-label',
                            'text'  => 'Data de Defesa',
                    ],
                    'div'                => 'form-group col-sm-4',
                    'class'              => 'form-control date-picker',
                    'id'                 => 'codigoID',
                    'type'               => 'text',
                    'data-date-viewmode' => 'years',
                    'data-date-format'   => 'yyyy-mm-dd',
                    'value'              => $candidatoGraduacao['CandidatoGraduacao']['data_defesa'],
            ]
    );
    echo $this->Form->input('media_defesa',
            [
                    'label' => [
                            'class' => 'control-label',
                            'text'  => 'Media de Defesa',
                    ],
                    'div'   => 'form-group col-sm-4',
                    'class' => 'form-control',
                    'id'    => 'codigoID',
                    'value' => $candidatoGraduacao['CandidatoGraduacao']['media_defesa'],
            ]
    );

    echo $this->Form->input('telemovel',
            [
                    'label' => [
                            'class' => 'control-label',
                            'text'  => 'Telemovel',
                    ],
                    'div'   => 'form-group col-sm-6',
                    'class' => 'form-control',
                    'id'    => 'codigoID',
                    'type'  => 'hidden',
                    'value' => $candidatoGraduacao['CandidatoGraduacao']['telemovel'],
            ]
    );

    echo $this->Form->input('candidato_graduacao_id',
            [
                    'type'  => 'hidden',
                    'value' => $candidatoGraduacao['CandidatoGraduacao']['id'],
            ]
    );
    echo $this->Form->input('cerimonia_graduacao_id',
            [
                    'type'  => 'hidden',
                    'value' => $candidatoGraduacao['CandidatoGraduacao']['cerimonia_graduacao_id'],
            ]
    );


?>

<div class="form-group col-sm-12">
    <div class="col-sm-4">
        <?php echo $this->Html->link('Voltar', [
                'controller' => 'cerimonia_graduacaos',
                'action'     => 'ver_detalhes',
                $candidatoGraduacao['CandidatoGraduacao']['cerimonia_graduacao_id'],
        ], ['class' => 'btn btn-light-grey btn-block']) ?>


    </div>
    <div class="col-sm-8">
        <div class="col-sm-6">
            <?php

                if (in_array($candidatoGraduacao['CandidatoGraduacao']['estado_candidatura_id'], ['2', '4'])) {
                    echo $this->Html->link('Confirmar Pagamento',
                            ['action' => 'confirmar_pagamento', $candidatoGraduacao['CandidatoGraduacao']['id']],
                            ['class' => 'btn btn-light-grey btn-block col-sm-4']);
                }
            ?>
        </div>

        <?php
            if (in_array($candidatoGraduacao['CandidatoGraduacao']['estado_candidatura_id'], [3, 4])) {
                echo $this->Form->end([
                        'label' => __('Confirmar Dados', true),
                        'class' => 'btn btn-blue btn-block',
                        'div'   => 'col-sm-6',
                ]);
            }
        ?>

    </div>


</div>

<?php $this->end(); ?>

<?php $this->Html->scriptStart(['inline' => false, 'block' => 'scriptBottom']); ?>
$(function() {

$( "#datainicioID" ).datepicker({ dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange: "c-50:c+10" });
$( "#datafimID" ).datepicker({ dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange: "c-50:c+10" });
});
<?php $this->Html->scriptEnd(); ?>
