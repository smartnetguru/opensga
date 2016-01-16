<?php
    $this->Html->addCrumb($this->Session->read('Auth.User.unidade_organica'), '/');
    $this->Html->addCrumb('Disciplinas', '/faculdade/disciplinas');
    $this->Html->addCrumb('Adicionar Disciplina', '#');
?>
<?php $this->extend('/Common/form_basic_common'); ?>

<?php $this->assign('form-title', 'Seleccione o Ano Lectivo Actual') ?>
<?php $this->start('form-elements') ?>
<?php echo $this->Form->create('AnoLectivo', array('role' => 'form', 'class' => '', 'inputDefaults' => array())); ?>
<?php
    echo $this->Form->input('ano_lectivo_id',
        array('label' => array(
            'class'=>'control-label','text'=>'Ano Lectivo'
        ),
              'div' => 'form-group',
              'class' => 'form-control',
              'id' => 'codigoID',
            'options'=>$anoLectivos
        )
    );
   ?>
<div class="form-group"></div>
<div class="form-group">
    <div class="col-sm-4">
        <?php echo $this->Html->link('Voltar', array('action' => 'index'), array('class' => 'btn btn-light-grey btn-block')) ?>


    </div>
    <div class="col-sm-4 col-sm-offset-4">

        <?php echo $this->Form->end(array('label' => __('DEFINIR', true), 'class' => 'btn btn-blue btn-block')); ?>

    </div>


</div>
<?php $this->end(); ?>

<?php $this->start('right-panel'); ?>

<?php $this->end(); ?>

<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'scriptBottom')); ?>
$(function() {

$( "#datainicioID" ).datepicker({ dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange: "c-50:c+10" });
$( "#datafimID" ).datepicker({ dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange: "c-50:c+10" });
});
<?php $this->Html->scriptEnd(); ?>
