<?php
    $this->BreadCumbs->addCrumb('Cursos', '/cursos');

    echo $this->Html->css('/assets/plugins/select2/select2.css');
    echo $this->Html->css('/assets/plugins/datepicker/css/datepicker.css');
?>
<?php $this->extend('/Common/form_basic'); ?>

<?php $this->assign('form-title','Exportar Extracto de Renovação de Matricula')?>

<?php $this->start('form-elements') ?>
<?php echo $this->Form->create('Matricula', array('role' => 'form', 'enctype' => 'multipart/form-data',
                                                         'class' => '',
                                                         'inputDefaults' => array())); ?>
<div class="form-group">
    <label>
        <?php echo __('Data de Início') ?>
    </label>
    <div>
        <?php echo $this->Form->input('data_inicio', array('label' => false, 'div' => false,
                                                           'class' => 'form-control date-picker', 'type' => 'text', 'data-date-viewmode' => 'years', 'data-date-format' => 'yyyy-mm-dd')); ?>
    </div>
</div>
<div class="form-group">
    <label>
        <?php echo __('Data de Fim(Opcional)') ?>
    </label>
    <div>
        <?php echo $this->Form->input('data_fim',array('label' => false, 'div' => false,
                                                       'class' => 'form-control date-picker', 'type' => 'text', 'data-date-viewmode' => 'years', 'data-date-format' => 'yyyy-mm-dd')); ?>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-4 col-sm-offset-8">
        <?php

            echo $this->Form->end(array('label' => __('GRAVAR', true), 'class' => 'btn btn-blue btn-block'));

        ?>

    </div>


</div>
<?php
    $this->end();

?>

