<?php
    $this->Html->addCrumb($this->Session->read('Auth.User.unidade_organica'), '/');
    $this->Html->addCrumb('Disciplinas', '/faculdade/disciplinas');
    $this->Html->addCrumb('Adicionar Disciplina', '#');
?>
<?php $this->extend('/Common/form_basic_common'); ?>

<?php $this->assign('form-title', 'Seleccione o Ano Lectivo Actual') ?>
<?php $this->start('form-elements') ?>
<?php echo $this->Form->create('AnoLectivo',
        ['role' => 'form', 'class' => '', 'inputDefaults' => ['disabled' => 'disabled']]); ?>
<?php
    echo $this->Form->input('ano_lectivo_id',
            [
                    'label'   => [
                            'class' => 'control-label',
                            'text'  => 'Ano Lectivo',
                    ],
                    'div'     => 'form-group',
                    'class'   => 'form-control',
                    'id'      => 'codigoID',
                    'options' => $anoLectivos,
            ]
    );
?>
<div class="form-group"></div>
<?php $this->end(); ?>

<?php $this->start('right-panel'); ?>
<div class="col-sm-6">
    <!-- start: SELECT BOX PANEL -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i>
            <?php echo $this->fetch('form-title') ?>
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
            <?php echo $this->Form->create('SemestreLectivo',
                    ['role' => 'form', 'class' => '', 'inputDefaults' => []]); ?>
            <?php
                echo $this->Form->input('semestre_lectivo_id',
                        [
                                'label'   => [
                                        'class' => 'control-label',
                                        'text'  => 'Ano Lectivo',
                                ],
                                'div'     => 'form-group',
                                'class'   => 'form-control',
                                'id'      => 'codigoID',
                                'options' => $semestreLectivos,
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

                    <?php echo $this->Form->end([
                            'label' => __('DEFINIR', true),
                            'class' => 'btn btn-blue btn-block',
                    ]); ?>

                </div>
            </div>
        </div>
        <!-- end: SELECT BOX PANEL -->
    </div>


    <?php $this->end(); ?>

    <?php $this->Html->scriptStart(['inline' => false, 'block' => 'scriptBottom']); ?>
    $(function() {

    $( "#datainicioID" ).datepicker({ dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange: "c-50:c+10"
    });
    $( "#datafimID" ).datepicker({ dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange: "c-50:c+10" });
    });
    <?php $this->Html->scriptEnd(); ?>
