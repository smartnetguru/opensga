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

//<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->

echo $this->Html->css('/assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css');
echo $this->Html->css('/assets/plugins/x-editable/css/bootstrap-editable.css');
echo $this->Html->css('/assets/plugins/x-editable/inputs-ext/address/address.css');

//echo $this->Html->css('/assets/plugins/x-editable/css/bootstrap-editable.css');
echo $this->Html->css('/assets/plugins/typeaheadjs/lib/typeahead.js-bootstrap.css');
echo $this->Html->css('/assets/plugins/jquery-address/address.css');
echo $this->Html->css('/assets/plugins/wysihtml5/bootstrap-wysihtml5-0.0.2/bootstrap-wysihtml5-0.0.2.css');
echo $this->Html->css('/assets/plugins/wysihtml5/bootstrap-wysihtml5-0.0.2/wysiwyg-color.css');
//<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
?>

<div class="row">
    <div class="col-sm-12">
        <h1><?php echo __(h($instituicao['Instituicao']['name'])) ?></h1>
        <hr>

        <div style="float: right; margin-bottom: 10px">
            <button id="enable" class="btn btn-default">
                Habilitar edição / Desabilitar edição
            </button>
        </div>

        <table id="user" class=" table table-bordered table-striped" style="clear: both">
            <form class="user_form">
                <tbody>
                    <tr>

                        <td class="column-left">Nome</td>
                        <td class="column-right">
                            <a href="#" id="name" data-pk="<?php echo h($instituicao['Instituicao']['id']); ?>" data-name="name" data-url="<?php echo $this->Html->url(array('controller' => 'cooperacaoAcordos', 'action' => 'edit_instituicao',)) ?>" data-mode="inline" class="editavel">
                                <?php echo h($instituicao['Instituicao']['name']); ?>
                            </a>
                        </td>
                    </tr>
                    <tr>

                        <td>Cidade de Origem</td>
                        <td><p  id="cidade_origem"  name="cidade_origem" >
                                <?php echo h($instituicao['Cidade']['name']); ?>
                            </p></td>
                    </tr>

                    <tr>
                        <td>Província de Origem</td>
                        <td>
                            <p id="provincia_origem" name="provincia_origem" >
                                <?php echo h($instituicao['Provincia']['name']); ?>
                            </p></td>
                    </tr>

                    <tr>
                        <td>Pais de Origem</td>
                        <td>
                            <p id="provincia_origem" name="pais_origem" >
                                <?php echo h($instituicao['Pais']['name']); ?>
                            </p></td>
                    </tr>

                    <tr>
                        <td>Continente de Origem</td>
                        <td>
                            <p id="continente_origem" name="continente_origem" >
                                <?php echo h($instituicao['Continente']['name']); ?>
                            </p></td>
                    </tr>
                </tbody>
            </form>
        </table>
    </div>
</div>








<script>

    $(function() {

        $('#name').editable({
            type: 'text',
            url: '/post',
            pk:,
                    title: 'Enter username',
            ajaxOptions: {
                type: 'put'
            }
        });




    });

</script>




<?php
echo $this->Html->script('/assets/plugins/jquery-validation/dist/jquery.validate.min', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/jQuery-Smart-Wizard/js/jquery.smartWizard', array('block' => 'scriptBottom'));



//	 start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY 
echo $this->Html->script('/assets/plugins/jquery-mockjax/jquery.mockjax.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/moment/moment.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/select2/select2.min.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/x-editable/js/bootstrap-editable.min.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/typeaheadjs/typeaheadjs.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/typeaheadjs/lib/typeahead.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/jquery-address/address.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/wysihtml5/bootstrap-wysihtml5-0.0.2/wysihtml5-0.3.0.min.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/wysihtml5/bootstrap-wysihtml5-0.0.2/bootstrap-wysihtml5.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/wysihtml5/wysihtml5.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/x-editable/demo-mock.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/x-editable/demo.js', array('block' => 'scriptBottom'));
//                <!--JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY-->
//echo $this->Html->script('/assets/plugins/x-editable_2/js/bootstrap-editable.min.js', array('block' => 'scriptBottom'));
?>