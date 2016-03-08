<?php $this->extend('/Common/form_basic_2_columns'); ?>

<?php $this->assign('form-title', 'Criar Nova Aula') ?>
<?php $this->start('form-elements') ?>
<?php echo $this->Form->create('Aula',
        ['role' => 'form', 'class' => 'form-horizontal', 'inputDefaults' => []]); ?>

<div class="form-group">
    <label class="control-label col-sm-4">Nome da Disciplina</label>

    <p class="form-control-static"><?= $turma['Disciplina']['name'] ?></p>
</div>
<div class="form-group">
    <label class="control-label col-sm-4">Nome do Curso</label>

    <p class="form-control-static"><?= $turma['Curso']['name'] ?></p>
</div>
<div class="form-group">
    <label class="control-label col-sm-4">Total de Estudantes</label>

    <p class="form-control-static"><?= $turma['Turma']['total_alunos'] ?></p>
</div>
<div class="form-group">
    <label class="control-label col-sm-4">Ano Curricular</label>

    <p class="form-control-static"><?= $turma['Turma']['ano_curricular'] ?></p>
</div>
<div class="form-group">
    <label class="control-label col-sm-4">Semestre Curricular</label>

    <p class="form-control-static"><?= $turma['Turma']['semestre_curricular'] ?></p>
</div>
<div class="form-group">
    <label class="control-label col-sm-4">Ano Lectivo</label>

    <p class="form-control-static"><?= $turma['AnoLectivo']['ano'] ?></p>
</div>
<div class="form-group">
    <div class="col-sm-4 col-sm-offset-4">

        <?php echo $this->Form->end(); ?>

    </div>
</div>
<?php $this->end(); ?>
<?php $this->assign('form-title-right', 'Dados do Estudante na Candidatura') ?>
<?php $this->start('right-panel'); ?>
<?php
    echo

    $this->Form->create('Aula',
            [
                    'inputDefaults' => [
                            'div'       => 'form-group',
                            'wrapInput' => false,
                            'class'     => 'form-control',
                    ],
                    'class'         => 'well',
            ]);
    echo $this->Form->input('tema_aula', ['label' => 'Tema da Aula']);
    echo $this->Form->input('inicio_aula', [
            'type'  => 'text',
            'class' => 'form-control date-time-picker',
            'label' => 'Data e Hora de Inicio',
    ]);
    echo $this->Form->input('fim_aula', [
            'type'  => 'text',
            'class' => 'form-control date-time-picker',
            'label' => 'Data e Hora de Fim',
    ]);
    echo $this->Form->input('conteudo', [
                    'type'  => 'textarea',
                    'class' => 'ckeditor form-control',
                    'label' => 'Detalhes Adicionais',
                    'rows'  => 3,
            ]
    );

?>
<div class="clearfix"></div>
<div class="form-group col-sm-12">
    <div class="col-sm-4">
        <?php echo $this->Html->link('Voltar', [
                'controller' => 'alunos',
                'action'     => 'pesquisar_candidato',
        ], ['class' => 'btn btn-light-grey btn-block']) ?>
    </div>
    <div class="col-sm-8">
        <div class="col-sm-6">

        </div>
        <?php ?>
        <?php  ?>
        <?php
            echo $this->Form->hidden('turma_id', ['value' => $turma['Turma']['id']]);
            echo $this->Form->hidden('docente_id',['value' => $docente['Docente']['id']]);
            echo $this->Form->hidden('estado_objecto_id',['value' => 1]);
            echo $this->Form->end([
                    'label' => __('GRAVAR', true),
                    'class' => 'btn btn-blue btn-block',
                    'div'   => 'col-sm-6',
            ]);

        ?>

    </div>


</div>

<?php $this->end(); ?>

