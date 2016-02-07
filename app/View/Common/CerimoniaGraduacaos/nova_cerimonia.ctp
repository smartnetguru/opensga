<?php
    $this->Html->addCrumb($this->Session->read('Auth.User.unidade_organica'), '/');
    $this->Html->addCrumb('Disciplinas', '/faculdade/disciplinas');
    $this->Html->addCrumb('Adicionar Disciplina', '#');
?>
<?php $this->extend('/Common/form_basic_common'); ?>

<?php $this->assign('form-title', 'Cadastro de Cerimonia de Graduacao') ?>
<?php $this->start('form-elements') ?>
<?php echo $this->Form->create('CerimoniaGraduacao', ['role' => 'form', 'class' => '', 'inputDefaults' => []]); ?>
<?php
    echo $this->Form->input('name',
            [
                    'label' => [
                            'class' => 'control-label',
                            'text'  => 'Designacao',
                    ],
                    'div'   => 'form-group',
                    'class' => 'form-control',
                    'id'    => 'codigoID',
            ]
    );
    $before = '<div c' . 'lass="input-group">';
    $after = '<s' . 'pan class="input-group-addon"> <i class="fa fa-calendar"></i> </span></div>';
    echo $this->Form->input('data',
            [
                    'label'              => [
                            'class' => 'control-label',
                            'text'  => 'Data',
                    ],
                    'div'                => 'form-group',
                    'class'              => 'form-control',
                    'id'                 => 'datainicioID',
                    'type'               => 'text',
                    'data-date-viewmode' => 'years',
                    'data-date-format'   => 'yyyy-mm-dd',
                    'between'            => $before,
                    'after'              => $after,
            ]
    );
    echo $this->Form->input('local',
            [
                    'label' => [
                            'class' => 'control-label',
                            'text'  => 'Local',
                    ],
                    'div'   => 'form-group',
                    'class' => 'form-control',
                    'id'    => 'anoID',

            ]
    );

?>
<div class="form-group"></div>
<div class="form-group">
    <div class="col-sm-4">
        <?php echo $this->Html->link('Voltar', ['action' => 'index'], ['class' => 'btn btn-light-grey btn-block']) ?>


    </div>
    <div class="col-sm-4 col-sm-offset-4">
        <?php echo $this->Form->hidden('tipo_pesquisa', ['value' => 'estudante']) ?>
        <?php echo $this->Form->end(['label' => __('GRAVAR', true), 'class' => 'btn btn-blue btn-block']); ?>

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
