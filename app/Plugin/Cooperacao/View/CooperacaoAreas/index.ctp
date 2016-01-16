


<?php
$this->Html->addCrumb('Cooperação', '/cooperacao/cooperacao_acordos');
$this->Html->addCrumb('Áreas de Cooperação de Cooperação', '/cooperacao/cooperacao_acordos');
$this->Html->addCrumb('Lista de Áreas de Cooperacao', '/cooperacao/cooperacao_acordos');


echo $this->Html->css('/assets/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css');
echo $this->Html->css('/assets/plugins/bootstrap-modal/css/bootstrap-modal.css');
echo $this->Html->css('/assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css');
echo $this->Html->css('/assets/plugins/x-editable/css/bootstrap-editable.css');
echo $this->Html->css('/assets/plugins/x-editable/inputs-ext/address/address.css');

echo $this->Html->css('/assets/plugins/typeaheadjs/lib/typeahead.js-bootstrap.css');
echo $this->Html->css('/assets/plugins/jquery-address/address.css');
echo $this->Html->css('/assets/plugins/wysihtml5/bootstrap-wysihtml5-0.0.2/bootstrap-wysihtml5-0.0.2.css');
echo $this->Html->css('/assets/plugins/wysihtml5/bootstrap-wysihtml5-0.0.2/wysiwyg-color.css');
echo $this->Html->css('/assets/plugins/gritter/css/jquery.gritter.css');
echo $this->Html->css('/assets/plugins/select2/select2.css');
echo $this->Html->css('/assets/plugins/datepicker/css/datepicker.css');
echo $this->Html->css('/assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css');
echo $this->Html->css('/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css');
echo $this->Html->css('/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css');
echo $this->Html->css('/assets/plugins/jQuery-Tags-Input/jquery.tagsinput.css');
echo $this->Html->css('/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css');
echo $this->Html->css('/assets/plugins/summernote/build/summernote.css');
echo $this->Html->css('/assets/plugins/ckeditor/contents.css');
echo $this->Html->css('/assets/plugins/x-editable/inputs-ext/address/address.css');
echo $this->Html->css('/assets/plugins/DataTables/media/css/DT_bootstrap.css');
?>







<div id="container12" class="container_12">
    <div class="grid_12">
        <div class="block-border">
            <div class="block-content">
                <ul class="shortcut-list">

                    <li>
                        <a style="width: 180px;" href="#cooperacaoArea" data-toggle="modal" class="demo btn btn-default"> <?php echo $this->Html->image('icons/cooperacao/area_cooperacao.png', array('id' => 'imgEdit')) ?><span class="label label-info">Nova Área de Cooperação</span></a>

                    </li>

                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="grid_12">
        <div class="block-border">

            <h2><?php echo __('Áreas de Cooperação') ?>  <small class="text-danger" style="font-size: 15px;"><i class="fa fa-info-circle"></i>    Clique na linha da Área de cooperação que deseja para poder editar.</small></h2>
        
            <div class="block-content">

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">

                            <div class="panel-body">

                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover table-full-width " id="sample_1">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th><?php echo $this->Paginator->sort('name', __('Nome')); ?></th>
                                                <th >Criado em:</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $count = 0;
                                            foreach ($cooperacaoAreas as $cooperacaoArea):

                                                $count++;
                                                ?>

                                                <tr  data-html="true" data-original-title=" Editar Área de Cooperação" data-content="
                                                     <form  method='post'  action='<?php echo $this->Html->url(array('controller' => 'CooperacaoAreas', 'action' => 'edit')); ?>'>
                                                     
                                                        <input type='text' class='form-control' id='name' name='name'  required='true' placeholder='<?php echo h($cooperacaoArea['CooperacaoArea']['name']); ?>'>
                                                        <input type='hidden' class='form-control' name='id' value='<?php echo h($cooperacaoArea['CooperacaoArea']['id']); ?>'>
                                                      <legend></legend>
                                                      <div class='pull-six'>
                                                        <button type='submit' style='margin-left: 56px;' class='btn btn-default btn-squared'>
							Alterar
							</button>
                                                        </div>
                                                    </form>
                                                     " data-container="body" data-placement="top"  data-trigger="click" class="popovers" >
                                                    <td  ><?php echo $count ?></td>
                                                    <td ><?php echo h($cooperacaoArea['CooperacaoArea']['name']); ?></td>
                                                    <td><?php echo h($cooperacaoArea['CooperacaoArea']['created']); ?></td>

                                                </tr>

                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> <!--! end of #main-content -->
</div>

<div class="clear height-fix"></div>


<!--=====================================================Formulario de area=======================================-->
<div id="cooperacaoArea" class="modal fade" tabindex="-1" data-width="500" style="display: none;">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
            &times;
        </button>
        <h4 class="modal-title">Adicionar Área de Cooperação</h4>
    </div>
    <?php echo $this->Form->create(null, array('url' => array('controller' => 'CooperacaoAreas', 'action' => 'nova_area'), 'class' => "form", 'id' => 'form_viaAjaxArea', 'enctype' => 'multipart/form-data')); ?>

    <div class="modal-body">
        <div class="row">
            <div class="col-md-12">

                <?php echo $this->Form->input('name', array('label' => false, 'div' => false, 'class' => 'form-control autosize ', 'placeholder' => 'Nome da Área de Cooperação ', 'required','type' => 'text')); ?>

            </div>

        </div>
    </div>
    <div class="modal-footer">
        <div class="col-sm-6 pull-right ">
            <div class="col-sm-4">
                <?php echo $this->Form->end(array('label' => __('Fechar', false), 'class' => 'btn btn-light-grey', 'type' => 'button', 'data-dismiss' => 'modal')); ?>
            </div>
            <div class="col-sm-2">
                <?php echo $this->Form->end(array('label' => __('Gravar', true), 'class' => 'btn btn-yellow')); ?>
            </div>
        </div>
    </div>
</div>

<style>
    #imgEdit{
        width: 45px;
    }

    #imgEditN{
        width: 15px;     }
</style>

<script>




    $(function() {
//         Main.init();
        TableData.init();
        UIElements.init();

//        $("#btnd").click(function(){
//            var conteudo = $("#div_pdf").html(),
//            tela_impressao = window.open();
//            tela_impressao.document.write(conteudo);
//            tela_impressao.print();
//            tela_impressao.close();
//        })
//



    });

  





    var TableData = function() {
        //function to initiate DataTable
        //DataTable is a highly flexible tool, based upon the foundations of progressive enhancement, 
        //which will add advanced interaction controls to any HTML table
        //For more information, please visit https://datatables.net/
        var runDataTable = function() {
            var oTable = $('#sample_1').dataTable({
                "aoColumnDefs": [{
                        "aTargets": [0]
                    }],
                "oLanguage": {
                    "sLengthMenu": "Mostrar _MENU_ Linhas",
                    "sSearch": "",
                    "oPaginate": {
                        "sPrevious": "",
                        "sNext": ""
                    }
                },
                "aaSorting": [
                    [1, 'asc']
                ],
                "aLengthMenu": [
                    [5, 10, 15, 20, -1],
                    [5, 10, 15, 20, "All"] // change per page values here
                ],
                // set the initial value
                "iDisplayLength": 10,
            });
            $('#sample_1_wrapper .dataTables_filter input').addClass("form-control input-sm").attr("placeholder", "Pesquisar");
            // modify table search input
            $('#sample_1_wrapper .dataTables_length select').addClass("m-wrap small");
            // modify table per page dropdown
            $('#sample_1_wrapper .dataTables_length select').select2();
            // initialzie select2 dropdown
            $('#sample_1_column_toggler input[type="checkbox"]').change(function() {
                /* Get the DataTables object again - this is not a recreation, just a get of the object */
                var iCol = parseInt($(this).attr("data-column"));
                var bVis = oTable.fnSettings().aoColumns[iCol].bVisible;
                oTable.fnSetColumnVis(iCol, (bVis ? false : true));
            });
        };





        return {
            //main function to initiate template pages
            init: function() {
                runDataTable();
                //runEditableTable();
            }
        };
    }();

</script>
<?php
//echo $this->Html->script('/assets/plugins/jQuery-lib/2.0.3/jquery.min.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/bootstrap-modal/js/bootstrap-modal.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/js/ui-modals.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/jquery-mockjax/jquery.mockjax.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/select2/select2.min.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/DataTables/media/js/jquery.dataTables.min.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/DataTables/media/js/DT_bootstrap.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/bootbox/bootbox.min.js', array('block' => 'scriptBottom'));
//echo $this->Html->script('/assets/js/table-data.js', array('block' => 'scriptBottom'));


echo $this->Html->script('/assets/plugins/bootstrap-paginator/src/bootstrap-paginator.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/jquery.pulsate/jquery.pulsate.min.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/gritter/js/jquery.gritter.min.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/js/ui-elements.js', array('block' => 'scriptBottom'));
?>
