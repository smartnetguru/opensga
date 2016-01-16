

<?php
/**
 * Pagina para adicionar unidades organicas
 *
 * @copyright     Copyright 2010-2012, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 * * @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.instituicoes
 * @since         OpenSGA v 0.1.0
 * @version        OpenSGA v 0.5.0
 *
 *
 */
$this->Html->addCrumb(__('Cooperação'), '/unidade_organicas');
$this->Html->addCrumb(__('Instituições de Cooperação'), '/unidade_organicas/nova_unidade');
$this->Html->addCrumb(__('Novo Acordo de Cooperação'), '/unidade_organicas/nova_unidade');



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
<div class="container_12">


    <div class="row">
        <div class="col-sm-12">
            <!-- start: TEXT FIELDS PANEL -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-external-link-square"></i>
                    <?php echo __('Nova Instituição de Cooperação') ?>
                    <div class="panel-tools">
                        <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                        </a>
                        <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <a class="btn btn-xs btn-link panel-refresh" href="#">
                            <i class="fa fa-refresh"></i>
                        </a>
                        <a class="btn btn-xs btn-link panel-expand" href="#">
                            <i class="fa fa-resize-full"></i>
                        </a>
                        <a class="btn btn-xs btn-link panel-close" href="#">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="panel-body">
                    <h2><i class="fa fa-pencil-square teal"></i> REGISTAR</h2>
                    <hr>

                    <?php echo $this->Form->create('Instituicao', array('class' => 'form-horizontal', 'role' => 'form', 'inputDefaults' => array('before' => '<p>', 'after' => '</p>'))); ?>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form-field-13">

                        </label>
                        <div class="col-sm-8">
                            <?php echo $this->Form->input('name', array('label' => false, 'div' => false, 'class' => 'form-control input-sm', 'id' => 'form-field-13', 'type' => 'text', 'placeholder' => 'Nome da Instituição de Cooperação', 'required')); ?>

                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form-field-13">
                        </label>
                        <div class="col-sm-4">
                            <?php echo $this->Form->label('continente_origem', 'Continente de origem', array('for' => 'form-field-13')); ?>
                            <?php echo $this->Form->input('continente_origem', array('label' => false, 'div' => false, 'class' => 'form-control search-select', 'options' => $continentes, )); ?>
                        </div>
                        <div class="col-sm-4">
                            <?php echo $this->Form->label('pais_origem', 'Pais de origem', array('for' => 'form-field-13')); ?>
                            <?php echo $this->Form->input('pais_origem', array('label' => false, 'div' => false, 'class' => 'form-control search-select', 'options' => $paises,)); ?>

                        </div>
                        <!--<?php echo $this->Form->input('name', array('label' => __('Código'), 'div' => '_100', 'class' => 'text',)); ?>-->
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form-field-13">
                        </label>
                        <div class="col-sm-4">
                            <?php echo $this->Form->label('provincia_origem', 'Província de origem', array('for' => 'form-field-13')); ?>
                            <?php echo $this->Form->input('provincia_origem', array('label' => false, 'div' => false, 'class' => 'form-control search-select', 'options' => $provincias)); ?>
                        </div>
                        <div class="col-sm-4">
                            <?php echo $this->Form->label('cidade_origem', 'Cidade/Distrito de origem', array('for' => 'form-field-13')); ?>
                            <?php echo $this->Form->input('cidade_origem', array('label' => false, 'div' => false, 'class' => 'form-control search-select', 'options' => $cidades)); ?>

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <label class="col-sm-6 control-label" for="form-field-13">
                            </label>
                            <?php echo $this->Form->end(array('label' => __('GRAVAR', true), 'class' => 'btn btn-info btn-squared btn-lg button')); ?> 

                        </div>
                    </div>

                    </form>
                </div>
            </div>
            <!-- end: TEXT FIELDS PANEL -->
        </div>
    </div>
    <div class="clear height-fix"></div>



</div> <!--! end of #main-content -->




<?php
$this->Js->get('#paisID')->event('change', $this->Js->request(array(
            'controller' => 'provincias',
            'action' => 'getByPais',
            'plugin' => false
                ), array(
            'update' => '#provinciaID',
            'complete' => '$("#provinciaID").trigger("liszt:updated")',
            'async' => true,
            'method' => 'post',
            'dataExpression' => true,
            'data' => $this->Js->serializeForm(array(
                'isForm' => true,
                'inline' => true
            ))
        ))
);




echo $this->Html->script('/assets/plugins/jquery-validation/dist/jquery.validate.min', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/jQuery-Smart-Wizard/js/jquery.smartWizard', array('block' => 'scriptBottom'));


echo $this->Html->script('/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js');
echo $this->Html->script('/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js');
echo $this->Html->script('/assets/plugins/bootstrap-daterangepicker/moment.min.js');
echo $this->Html->script('/assets/plugins/bootstrap-daterangepicker/daterangepicker.js');
echo $this->Html->script('/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js');
echo $this->Html->script('/assets/plugins/bootstrap-colorpicker/js/commits.js');
?>

