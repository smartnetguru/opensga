<?php
    $this->Html->addCrumb($this->Session->read('Auth.User.unidade_organica'), '/');
    $this->Html->addCrumb('Disciplinas', '/faculdade/disciplinas');
    $this->Html->addCrumb('Adicionar Disciplina', '#');
?>
<?php $this->extend('/Common/aluno_action'); ?>

<?php $this->assign('form-title', 'Dados da Inscricao') ?>
<?php $this->start('aluno-form') ?>
<?php echo $this->Form->create('Inscricao',
        ['role' => 'form', 'class' => '', 'inputDefaults' => ['disabled' => 'disabled']]); ?>
<?php
    echo $this->Form->input('turma',
            [
                    'label' => [
                            'class' => 'control-label',
                            'text'  => 'Turma',
                    ],
                    'div'   => 'form-group',
                    'class' => 'form-control',
                    'id'    => 'codigoID',
                    'value' => $inscricao['Turma']['name'],

            ]
    );
    echo $this->Form->input('tipo_inscricao_id',
            [
                    'label' => [
                            'class' => 'control-label',
                            'text'  => 'Tipo de Frequencia',
                    ],
                    'div'   => 'form-group  col-sm-6',
                    'class' => 'form-control',
                    'id'    => 'tipoInscricaoId',
                    'empty' => '----Seleccione----',
            ]
    );

    echo $this->Form->input('nota_frequencia',
            [
                    'label'    => [
                            'class' => 'control-label',
                            'text'  => 'Nota de Frequencia',
                    ],
                    'div'      => 'form-group col-sm-12',
                    'class'    => 'form-control',
                    'id'       => 'notaFrequencia',
                    'required' => false,
            ]
    );
    echo $this->Form->input('nota_exame_normal',
            [
                    'label'    => [
                            'class' => 'control-label',
                            'text'  => 'Nota de Exame Normal',
                    ],
                    'div'      => 'form-group  col-sm-6',
                    'class'    => 'form-control',
                    'id'       => 'notaExameNormal',
                    'required' => false,
            ]
    );
    echo $this->Form->input('nota_exame_recorrencia',
            [
                    'label'    => [
                            'class' => 'control-label',
                            'text'  => 'Nota de Exame de Recorrencia',
                    ],
                    'div'      => 'form-group col-sm-6 ',
                    'class'    => 'form-control',
                    'id'       => 'notaExameRecorrencia',
                    'required' => false,
            ]
    );
    echo $this->Form->input('nota_final',
            [
                    'label'    => [
                            'class' => 'control-label',
                            'text'  => 'Nota Final',
                    ],
                    'div'      => 'form-group col-sm-12',
                    'class'    => 'form-control',
                    'id'       => 'notaFinal',
                    'required' => false,
            ]
    );
?>
    <div class="form-group"></div>
    <div class="form-group">
        <div class="col-sm-3">
            <?php echo $this->Html->link('Voltar', ['action' => 'index'],
                    ['class' => 'btn btn-light-grey btn-block']) ?>


        </div>

        <div class="col-sm-3 col-sm-offset-6">
            <?php
                echo $this->Form->input('aluno_id', ['type' => 'hidden', 'value' => $aluno['Aluno']['id']]);
                echo $this->Form->input('inscricao_id', ['type' => 'hidden', 'value' => $inscricao['Inscricao']['id']]);

            ?>
        </div>


    </div>
<?php $this->end(); ?>

<?php $this->start('right-panel'); ?>

<?php $this->end(); ?>

<?php $this->Html->scriptStart(['inline' => false, 'block' => 'scriptBottom']); ?>
    $(function() {

    $( "#datainicioID" ).datepicker({ dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange: "c-50:c+10" });
    $( "#datafimID" ).datepicker({ dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange: "c-50:c+10" });
    });
<?php $this->Html->scriptEnd(); ?>