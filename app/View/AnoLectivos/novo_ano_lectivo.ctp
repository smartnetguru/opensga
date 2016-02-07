<?php
    $this->Html->addCrumb($this->Session->read('Auth.User.unidade_organica'), '/');
    $this->Html->addCrumb('Disciplinas', '/faculdade/disciplinas');
    $this->Html->addCrumb('Adicionar Disciplina', '#');
?>
<?php $this->extend('/Common/form_basic_common'); ?>

<?php $this->assign('form-title', 'Para Estudantes da UEM') ?>
<?php $this->start('form-elements') ?>
<?php echo $this->Form->create('AnoLectivo', ['role' => 'form', 'class' => '', 'inputDefaults' => []]); ?>
<?php
    echo $this->Form->input('codigo',
            [
                    'label' => [
                            'class' => 'control-label',
                            'text'  => 'Codigo do Ano Lectivo',
                    ],
                    'div'   => 'form-group',
                    'class' => 'form-control',
                    'id'    => 'codigoID',
            ]
    );
    echo $this->Form->input('ano',
            [
                    'label' => [
                            'class' => 'control-label',
                            'text'  => 'Ano Lectivo',
                    ],
                    'div'   => 'form-group',
                    'class' => 'form-control',
                    'id'    => 'anoID',

            ]
    );
    $before = '<div c' . 'lass="input-group">';
    $after = '<s' . 'pan class="input-group-addon"> <i class="fa fa-calendar"></i> </span></div>';
    echo $this->Form->input('data_inicio',
            [
                    'label'              => [
                            'class' => 'control-label',
                            'text'  => 'Data de Início',
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
    echo $this->Form->input('data_fim',
            [
                    'label'              => [
                            'class' => 'control-label',
                            'text'  => 'Data de Fim',
                    ],
                    'div'                => 'form-group',
                    'class'              => 'form-control',
                    'id'                 => 'datafimID',
                    'type'               => 'text',
                    'data-date-viewmode' => 'years',
                    'data-date-format'   => 'yyyy-mm-dd',
                    'between'            => $before,
                    'after'              => $after,
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
        <?php echo $this->Form->end(['label' => __('PESQUISAR', true), 'class' => 'btn btn-blue btn-block']); ?>

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
