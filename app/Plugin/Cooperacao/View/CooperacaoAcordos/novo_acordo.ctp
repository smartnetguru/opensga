<?php
//$this->BreadCumbs->addCrumb('Alunos', '/alunos');
//$this->BreadCumbs->addCrumb('Lista de Alunos', '/alunos/index');




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
    <div class="col-sm-12">
        <!-- start: FORM WIZARD PANEL -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="icon-external-link-sign"></i>
                Novo Acordo de Cooperacao
                <div class="panel-tools">
                    <a href="#" class="btn btn-xs btn-link panel-collapse collapses">
                    </a>
                    <a data-toggle="modal" href="#panel-config" class="btn btn-xs btn-link panel-config">
                        <i class="icon-wrench"></i>
                    </a>
                    <a href="#" class="btn btn-xs btn-link panel-refresh">
                        <i class="icon-refresh"></i>
                    </a>
                    <a href="#" class="btn btn-xs btn-link panel-expand">
                        <i class="icon-resize-full"></i>
                    </a>
                    <a href="#" class="btn btn-xs btn-link panel-close">
                        <i class="icon-remove"></i>
                    </a>
                </div>
            </div>
            <div class="panel-body">
                <?php echo $this->Form->create('CooperacaoAcordo', array('role' => "form", 'novalidade' => 'novalidate', 'enctype' => 'multipart/form-data', 'class' => '', 'id' => 'form', 'inputDefaults' => array('empty' => 'Seleccione', 'placeholder' => 'Seleccione'))); ?>


                <div class="form-group ">
                    <fieldset>
                        <legend><?php echo __('Dados do Acordo') ?></legend>

                        <div class="row">
                            <div class="col-sm-4">
                                <?php echo $this->Form->label('codigo', 'Código do Acordo'); ?>
                                <?php echo $this->Form->input('codigo', array('label' => false, 'div' => false, 'class' => 'form-control ', 'id' => 'codigo','placeholder'=>'Código do Acordo', 'required')); ?>
                            </div>
                            <div class="col-sm-4">
                                <?php echo $this->Form->label('name', 'Nome do Acordo'); ?>
                                <?php echo $this->Form->input('name', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'codigo','placeholder'=>'Nome do Acordo', 'required')); ?>
                            </div>
                            <div class="col-sm-4">
                                <?php echo $this->Form->label('instituicao_id', 'Instituições Envolvidas'); ?>
                                <?php echo $this->Form->input('instituicao_id', array('label' => false, 'div' => false, 'class' => 'form-control search-select', 'id' => 'codigo', 'multiple' => true)); ?>
                            </div>
                        </div>

                        <div class="row" style="margin-top: 20px;">
                            <div class="col-sm-3">

                                <?php echo $this->Form->label('data_assinatura', 'Data de Assinatura'); ?>
                                <div class="input-group">
                                    <?php echo $this->Form->input('data_assinatura', array('label' => false, 'div' => false, 'class' => 'form-control date-picker', 'data-date-format' => 'yyyy-mm-dd', 'data-date-viewmode' => 'years', 'id' => 'codigo', 'type' => 'text', 'placeholder' => 'Data Da Assinatura', 'required')); ?>
                                    <span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
                                </div>
                            </div>
                            <div class="col-sm-3">

                                <?php echo $this->Form->label('data_validade', 'Data de Validade'); ?>
                                <div class="input-group">
                                    <?php echo $this->Form->input('data_validade', array('label' => false, 'div' => false, 'class' => 'form-control input-mask-dateN', 'data-date-format' => 'yyyy-mm-dd', 'data-date-viewmode' => 'years', 'id' => 'data_validade', 'type' => 'text', 'placeholder' => 'Data de Validade')); ?>
                                    <span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
                                </div>
                            </div>
                            <div class="col-sm-3 ">
                                <?php echo $this->Form->label('prazo_validade', 'Ou Prazo de Validade'); ?>
                                <?php echo $this->Form->input('prazo_validade', array('label' => false, 'div' => false, 'class' => 'form-control ', 'id' => 'form_our1', 'type' => 'text', 'placeholder' => 'Prazo de Validade')); ?>
                                
                            </div>
                            <div class="col-sm-3">
                                <?php echo $this->Form->label('tempo_validade', 'Tempo de Validade'); ?>
                                <?php echo $this->Form->input('tempo_validade', array('label' => false, 'div' => false, 'class' => 'form-control ','id' => 'form_our', 'options' => array(1 => 'Anos', 2 => 'Meses', 3 => 'Dias'))); ?>
                            </div>

                            <div class="col-sm-6 "  style="margin-top: 20px;">
                                <?php echo $this->Form->label('cooperacao_tipo_acordo_id', 'Tipo de Acordo'); ?>
                                <?php echo $this->Form->input('cooperacao_tipo_acordo_id', array('label' => false, 'div' => false, 'class' => 'form-control search-select', 'id' => 'codigo')); ?>
                            </div>
                            <div class="col-sm-6" style="margin-top: 20px;">
                                <?php echo $this->Form->label('cooperacao_area_id', 'Área de Cooperação'); ?>
                                <?php echo $this->Form->input('cooperacao_area_id', array('label' => false, 'div' => false, 'class' => 'form-control search-select', 'id' => 'codigo')); ?>
                            </div>
                            <div class="col-sm-6" style="margin-top: 20px;">
                                <?php echo $this->Form->label('objectivos', 'Objectivos'); ?>
                                <?php echo $this->Form->input('objectivos', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'codigo', 'type' => 'textarea','placeholder'=>'Objectivos', 'required')); ?>
                            </div>

                            <div class="col-sm-6" style="margin-top: 20px;">
                                <?php echo $this->Form->label('observacoes', 'Observações '); ?>
                                <?php echo $this->Form->input('observacoes', array('label' => false, 'div' => false, 'class' => 'form-control autosize ', 'id' => 'codigo','placeholder'=>'Observações', 'type' => 'textarea', 'required')); ?>
                            </div>
                    

                        </div>

                    </fieldset>
                </div>
                <div class="form-group col-sm-8">

                    <?php echo $this->Form->end(array('label' => __('GRAVAR', true), 'class' => 'btn btn-yellow btn-block', 'div' => 'col-sm-4 col-sm-offset-7')); ?>

                </div>
                </form>
            </div>
        </div>
        <!-- end: FORM WIZARD PANEL -->
    </div>
</div>
<!--script para habilitar os campos de prazo e tempo validade-->
<script>
    $(document).ready(function() {



        $.mask.definitions['~'] = '[+-]';
        $('.input-mask-dateN').mask('9999/99/99');

   

        $("#data_validade").keyup(function() {

            if ($("#data_validade").val() != '____/__/__' && $("#data_validade").val() != '') {

                $('#form_our').attr("readonly", true);
                $('#form_our1').attr("readonly", true);
                // cor de fundo para o campo
//                $('#form_our').css("background-color", "#cccccc");
//                $('#form_our1').css("background-color", "#cccccc");
            } else
            {
                // habilitando o campo
                $('#form_our').attr("readonly", false);
                $('#form_our1').attr("readonly", false);
                // retornando a cor padrao
//                $('#form_our1').css("background-color", "#FFF");
//                $('#form_our').css("background-color", "#FFF");
            }

        });


        $("#form_our1").keyup(function() {

            if ($("#form_our1").val() != '') {

                $('#data_validade').attr("disabled", true);

                // cor de fundo para o campo
                $('#data_validade').css("background-color", "#cccccc");

            } else
            {
                // habilitando o campo
                $('#data_validade').attr("disabled", false);

                // retornando a cor padrao
                $('#data_validade').css("background-color", "#FFF");

            }

        });

    });
</script>

<?php
echo $this->Html->script('/assets/plugins/jquery-validation/dist/jquery.validate.min', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/jQuery-Smart-Wizard/js/jquery.smartWizard', array('block' => 'scriptBottom'));




echo $this->Html->script('/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js');
echo $this->Html->script('/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js');
echo $this->Html->script('/assets/plugins/bootstrap-daterangepicker/moment.min.js');
echo $this->Html->script('/assets/plugins/bootstrap-daterangepicker/daterangepicker.js');
echo $this->Html->script('/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js');
echo $this->Html->script('/assets/plugins/bootstrap-colorpicker/js/commits.js');


echo $this->Html->script('/assets/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/autosize/jquery.autosize.min', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/autosize/jquery.autosize.min', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/select2/select2.min', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/jquery.maskedinput/src/jquery.maskedinput', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/bootstrap-daterangepicker/moment.min', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/bootstrap-daterangepicker/daterangepicker', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/bootstrap-colorpicker/js/commits', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/jQuery-Tags-Input/jquery.tagsinput', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/summernote/build/summernote.min', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/ckeditor/ckeditor', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/ckeditor/adapters/jquery', array('block' => 'scriptBottom'));
echo $this->Html->script(array('/assets/plugins/jquery-ui/jquery.ui.widget'), array('block' => 'scriptBottom'));
echo $this->Html->script(array('/assets/plugins/jquery-ui/jquery.ui.position'), array('block' => 'scriptBottom'));
echo $this->Html->script(array('/assets/plugins/jquery-ui/jquery.ui.menu'), array('block' => 'scriptBottom'));
echo $this->Html->script(array('/assets/plugins/jquery-ui/jquery.ui.autocomplete'), array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/js/form-matricular-candidato-elements', array('block' => 'scriptBottom'), array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/js/form-matricular-candidato-wizard', array('block' => 'scriptBottom'), array('block' => 'scriptBottom'));
?>



