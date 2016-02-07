<?php
    $this->extend('/Common/form_basic_common');
    echo $this->Html->css('/assets/plugins/bootstrap3-editable/css/bootstrap-editable.css');
    $this->Html->addCrumb($this->Session->read('Auth.User.unidade_organica'), '/');
    $this->Html->addCrumb('Disciplinas', '/faculdade/disciplinas');
    $this->Html->addCrumb('Adicionar Disciplina', '#');
?>

<?php $this->set('form-title', 'Dados do Aluno'); ?>
<?php $this->extend('/Common/form_basic_common'); ?>

<?php $this->start('form-elements') ?>
<div class="form-horizontal">
    <h4>Dados do Aluno</h4>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-4 control-label">
            <?php echo __('Codigo:') ?>
        </label>
        <p class="form-control-static"><?= $aluno['Aluno']['codigo'] ?></p>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-4 control-label">
            <?php echo __('Nome Completo:') ?>
        </label>
        <p class="form-control-static"><?= $aluno['Entidade']['name'] ?></p>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-4 control-label">
            <?php echo __('Curso:') ?>
        </label>
        <p class="form-control-static"><?= $aluno['Curso']['name'] ?></p>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-4 control-label">
            <?php echo __('Ano de Ingresso:') ?>
        </label>
        <p class="form-control-static"><?= $aluno['Aluno']['ano_ingresso'] ?></p>
    </div>
    <h4>Dados da Turma</h4>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-4 control-label">
            <?php echo __('Nome da Turma:') ?>
        </label>
        <p class="form-control-static"><?= $turma['Turma']['name'] ?></p>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-4 control-label">
            <?php echo __('Ano Lectivo:') ?>
        </label>
        <p class="form-control-static"><?= $turma['AnoLectivo']['ano'] ?></p>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-4 control-label">
            <?php echo __('Ano Curricular:') ?>
        </label>
        <p class="form-control-static"><?= $turma['Turma']['ano_curricular'] ?></p>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-4 control-label">
            <?php echo __('Semestre Curricular:') ?>
        </label>
        <p class="form-control-static"><?= $turma['Turma']['semestre_curricular'] ?></p>
    </div>

</div>

<?php $this->end(); ?>

<?php $this->start('right-panel') ?>
<div class="col-sm-6">
    <!-- start: SELECT BOX PANEL -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i>
            Introduza os dados da Inscricao
            <div class="panel-tools">
                <a href="#" class="btn btn-xs btn-link panel-collapse collapses">
                </a>
                <a data-toggle="modal" href="#panel-config" class="btn btn-xs btn-link panel-config">
                    <i class="fa fa-wrench"></i>
                </a>
                <a href="#" class="btn btn-xs btn-link panel-refresh">
                    <i class="fa fa-refresh"></i>
                </a>
                <a href="#" class="btn btn-xs btn-link panel-expand">
                    <i class="fa fa-resize-full"></i>
                </a>
                <a href="#" class="btn btn-xs btn-link panel-close">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>
        <div class="panel-body">
            <?php echo $this->Form->create('Inscricao', ['role' => 'form', 'class' => '', 'inputDefaults' => []]); ?>
            <?php

                echo $this->Form->input('tipo_inscricao_id',
                        [
                                'label' => [
                                        'class' => 'control-label',
                                        'text'  => 'Tipo de Frequencia',
                                ],
                                'div'   => 'form-group  col-sm-12',
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
                <div class="col-sm-4">
                    <?php echo $this->Html->link('Voltar', ['action' => 'index'],
                            ['class' => 'btn btn-light-grey btn-block']) ?>


                </div>
                <div class="col-sm-4 col-sm-offset-4">

                    <?php
                        echo $this->Form->input('turma_id', ['type' => 'hidden', 'value' => $turma['Turma']['id']]);
                        echo $this->Form->input('aluno_id', ['type' => 'hidden', 'value' => $aluno['Aluno']['id']]);
                        echo $this->Form->end(['label' => __('ACTUALIZAR', true), 'class' => 'btn btn-blue btn-block']);
                    ?>

                </div>


            </div>


        </div>
    </div>
    <!-- end: SELECT BOX PANEL -->
</div>
<?php $this->end(); ?>
