<?php
    echo $this->Html->css('/assets/plugins/select2/select2.css');
    echo $this->Html->css('/assets/plugins/datepicker/css/datepicker.css');
    echo $this->Html->css('/assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css');
    echo $this->Html->css('/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css');
    echo $this->Html->css('/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css');
    echo $this->Html->css('/assets/plugins/jQuery-Tags-Input/jquery.tagsinput.css');
    echo $this->Html->css('/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css');
    echo $this->Html->css('/assets/plugins/summernote/build/summernote.css');
    echo $this->Html->css('/assets/plugins/ckeditor/contents.css');
?>
<div class="row">
    <?php
        if (isset($formErrors)) {
            echo $this->element('form_errors', ['errors' => $formErrors]);
        }
    ?>
</div>
<div class="row">
    <div class="col-sm-5">
        <!-- start: SELECT BOX PANEL -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title pull-left">
                    <i class="fa fa-external-link-square"></i>
                    <?php echo $this->fetch('form-title') ?>
                </h3>
                <div class="clearfix"></div>


            </div>
            <div class="panel-body">
                <?php echo $this->fetch('form-elements'); ?>
            </div>
        </div>
        <!-- end: SELECT BOX PANEL -->
    </div>
    <div class="col-sm-7">
        <!-- start: SELECT BOX PANEL -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title pull-left">
                    <i class="fa fa-external-link-square"></i>
                    <?php echo $this->fetch('form-title-right') ?>
                </h3>

                <button class="btn btn-default pull-right">Voltar</button>
                <div class="clearfix"></div>


            </div>
            <div class="panel-body">
                <?php echo $this->fetch('right-panel') ?>
            </div>
        </div>
        <!-- end: SELECT BOX PANEL -->
    </div>

</div>


<?php echo $this->fetch('content'); ?>
<?php
    echo $this->Html->script('/assets/plugins/jquery-validation/dist/jquery.validate.min', ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/jQuery-Smart-Wizard/js/jquery.smartWizard', ['block' => 'scriptBottom']);


    echo $this->Html->script('/assets/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min',
            ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/autosize/jquery.autosize.min', ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/autosize/jquery.autosize.min', ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/select2/select2.min', ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/jquery.maskedinput/src/jquery.maskedinput', ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker',
            ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min',
            ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/bootstrap-daterangepicker/moment.min', ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/bootstrap-daterangepicker/daterangepicker', ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker',
            ['block' => 'scriptBottom']);
    //echo $this->Html->script('/assets/plugins/bootstrap-colorpicker/js/commits', array('block' => 'scriptBottom'));
    echo $this->Html->script('/assets/plugins/jQuery-Tags-Input/jquery.tagsinput', ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min',
            ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/summernote/build/summernote.min', ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/ckeditor/ckeditor', ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/ckeditor/adapters/jquery', ['block' => 'scriptBottom']);
    echo $this->Html->script(['/assets/plugins/jquery-ui/jquery.ui.widget'], ['block' => 'scriptBottom']);
    echo $this->Html->script(['/assets/plugins/jquery-ui/jquery.ui.position'], ['block' => 'scriptBottom']);
    echo $this->Html->script(['/assets/plugins/jquery-ui/jquery.ui.menu'], ['block' => 'scriptBottom']);
    echo $this->Html->script(['/assets/plugins/jquery-ui/jquery.ui.autocomplete'], ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/js/form-matricular-candidato-elements', ['block' => 'scriptBottom'],
            ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/js/form-matricular-candidato-wizard', ['block' => 'scriptBottom'],
            ['block' => 'scriptBottom']);
?>

