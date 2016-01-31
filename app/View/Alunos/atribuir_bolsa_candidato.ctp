<?php $this->extend('/Common/form_basic_2_columns'); ?>

<?php $this->assign('form-title', 'Atribuir Bolsa a Admitidos') ?>
<?php $this->start('form-elements') ?>
<?php echo $this->Form->create('AnoLectivo',
        ['role' => 'form', 'class' => 'form-horizontal', 'inputDefaults' => []]); ?>

<div class="form-group">
    <label class="control-label col-sm-4">Numero de Estudante</label>

    <p class="form-control-static"><?= $candidato['Candidatura']['numero_estudante'] ?></p>
</div>
<div class="form-group">
    <label class="control-label col-sm-4">Numero de Candidato</label>

    <p class="form-control-static"><?= $candidato['Candidatura']['numero_candidato'] ?></p>
</div>
<div class="form-group">
    <label class="control-label col-sm-4">Apelido</label>

    <p class="form-control-static"><?= $candidato['Candidatura']['apelido'] ?></p>
</div>
<div class="form-group">
    <label class="control-label col-sm-4">Nomes</label>

    <p class="form-control-static"><?= $candidato['Candidatura']['nomes'] ?></p>
</div>
<div class="form-group">
    <label class="control-label col-sm-4">Data de Nascimento</label>

    <p class="form-control-static"><?= $candidato['Candidatura']['data_nascimento'] ?></p>
</div>
<div class="form-group">
    <label class="control-label col-sm-4">Faculdade</label>

    <p class="form-control-static"><?= $candidato['Curso']['UnidadeOrganica']['name'] ?></p>
</div>
<div class="form-group">
    <label class="control-label col-sm-4">Curso</label>

    <p class="form-control-static"><?= $candidato['Curso']['name'] ?></p>
</div>
<div class="form-group">
    <label class="control-label col-sm-4">Ano de Ingresso</label>

    <p class="form-control-static"><?= $candidato['Candidatura']['ano_lectivo_admissao'] ?></p>
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
    echo $this->Form->create('BolsaTemporaria',
            ['role' => 'form', 'class' => '',]); ?>
<?php
    echo $this->Form->input('bolsa_tipo_bolsa_id',
            [
                    'label' => [
                            'class' => 'control-label',
                            'text'  => 'Tipo de Bolsa Atribuida',
                    ],
                    'div'   => 'form-group col-sm-6',
                    'class' => 'form-control',
                    'id'    => 'codigoID',
                    'options' => $tipo_bolsas,
            ]
    );
    echo $this->Form->input('alinea',
            [
                    'label' => [
                            'class' => 'control-label',
                            'text'  => 'Motivo de Indeferimento',
                    ],
                    'div'   => 'form-group col-sm-6',
                    'class' => 'form-control',
                    'id'    => 'codigoID',
            ]
    );


?>

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
        <?php echo $this->Form->hidden('numero_estudante',
                ['value' => $candidato['Candidatura']['numero_estudante']]); ?>
        <?php echo $this->Form->hidden('numero_candidato',
                ['value' => $candidato['Candidatura']['numero_candidato']]); ?>
        <?php echo $this->Form->hidden('candidatura_id', ['value' => $candidato['Candidatura']['id']]); ?>
        <?php echo $this->Form->hidden('curso_id', ['value' => $candidato['Candidatura']['curso_id']]); ?>
        <?php
                echo $this->Form->end([
                        'label' => __('GRAVAR', true),
                        'class' => 'btn btn-blue btn-block',
                        'div'   => 'col-sm-6',
                ]);

        ?>

    </div>


</div>

<?php $this->end(); ?>