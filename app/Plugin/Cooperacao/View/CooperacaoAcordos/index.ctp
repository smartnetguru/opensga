

<?php
$this->Html->addCrumb('Cooperação', '/cooperacao/cooperacao_acordos');
$this->Html->addCrumb('Acordos de Cooperação', '/cooperacao/cooperacao_acordos');
$this->Html->addCrumb('Lista de Acordos de Cooperação', '/cooperacao/cooperacao_acordos');

echo $this->Html->css('/assets/plugins/select2/select2.css');
echo $this->Html->css('/assets/plugins/datepicker/css/datepicker.css');
echo $this->Html->css('/assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css');
echo $this->Html->css('/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css');
echo $this->Html->css('/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css');
echo $this->Html->css('/assets/plugins/jQuery-Tags-Input/jquery.tagsinput.css');
echo $this->Html->css('/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css');
echo $this->Html->css('/assets/plugins/summernote/build/summernote.css');
echo $this->Html->css('/assets/plugins/ckeditor/contents.css');

echo $this->Html->css('/assets/plugins/DataTables/media/css/DT_bootstrap.css');
?>




<!-- end: PAGE HEADER -->
<!-- start: PAGE CONTENT -->
<div class="grid_12">
    <div class="block-border">
        <div class="block-content">
            <ul class="shortcut-list">
                <li style="width: 180px;">
                    <a style="width: 180px;" href="<?php echo $this->Html->url(array('controller' => 'cooperacao_acordos', 'action' => 'novo_acordo', 'plugin' => 'cooperacao')); ?>" data-toggle="modal" class="demo btn btn-default"> <?php echo $this->Html->image('icons/cooperacao/edit_cooperacao.png', array('id' => 'imgEdit')) ?><span class="label label-info"> Novo Acordo de Cooperação</span></a>

                </li>
                <li>

                </li>
            </ul>

            <div class="clear"></div>
        </div>
        <div class="btn-group pull-right" style=" margin-right: 52px; margin-top: 20px;">
            <button data-toggle="dropdown" class="btn btn-green dropdown-toggle">
                Imprimir <i class="fa fa-angle-down"></i>
            </button>
            <ul class="dropdown-menu dropdown-light pull-right">
                <li>
                    <a href="#" class="export-pdf" data-table="#sample-table-2" data-ignoreColumn =""> Guardar em PDF </a>
                </li>
                <li>
                    <a href="#" class="export-excel" data-table="#sample-table-2" data-ignoreColumn =""> Exportar para Excel </a>
                </li>
             

            </ul>
        </div>
    </div>
</div>
<div class="grid_12">
    <div class="block-border">
        <div class="block-header">
            <h2 class="title"><?php echo __('Acordos de Cooperação') ?></h2>    

        </div>

        <div class="block-content">
            <div class="row">
                <div class="col-md-12">
                    <!-- start: DYNAMIC TABLE PANEL -->
                    <div class="panel panel-default">

                        <div class="panel-body">
                           
                                <table class="table table-striped table-bordered table-hover table-full-width"id="sample-table-2">
                                    <thead>
                                        <tr>
                                            <th><?php echo $this->Paginator->sort('name', __('Nome do Acordo')); ?></th>
                                            <th class="hidden-xs"><?php echo $this->Paginator->sort('codigo', __('Código ')); ?></th>
                                            <th><?php echo $this->Paginator->sort('data_assinatura', __('Data de Assinatura')); ?></th>
                                            <th class="hidden-xs"><?php echo $this->Paginator->sort('data_validade', __('Data de Validade')); ?></th>
                                            <th><?php echo $this->Paginator->sort('cooperacao_tipo_acordo_id', __('Tipo de Acordo')); ?></th>
                                            <th class="hidden-xs"><?php echo $this->Paginator->sort('cooperacao_area_id', __('Áreas de Cooperação')); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        <?php
                                        $i = 0;
                                        foreach ($cooperacaoAcordos as $cooperacaoAcordo):
                                            $class = "odd";
                                            if ($i % 2 == 0)
                                                $class = "even";
                                            $i++;
                                            ?>
                                            <tr >

                                                <td ><?php echo $this->Html->link(h($cooperacaoAcordo['CooperacaoAcordo']['name']), array('action' => 'ver_acordo', $cooperacaoAcordo['CooperacaoAcordo']['id'])); ?>&nbsp;</td>
                                                <td  class="hidden-xs"><?php echo h($cooperacaoAcordo['CooperacaoAcordo']['codigo']); ?>&nbsp;</td>
                                                <td><?php echo h($cooperacaoAcordo['CooperacaoAcordo']['data_assinatura']); ?>&nbsp;</td>
                                                <td  class="hidden-xs"><?php echo h($cooperacaoAcordo['CooperacaoAcordo']['data_validade']); ?>&nbsp;</td>

                                                <td>
                                                    <?php echo $cooperacaoAcordo['CooperacaoTipoAcordo']['name']; ?>
                                                </td>
                                                <td  class="hidden-xs">
                                                    <?php  echo $cooperacaoAcordo['CooperacaoArea']['name']; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>


                                    </tbody>
                                </table>
                         
                        </div>
                    </div>
                    <!-- end: DYNAMIC TABLE PANEL -->
                </div>
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


  

    jQuery(document).ready(function() {
//        Main.init();
        TableExport.init();
    });


    // imprimir script

</script>
<?php
echo $this->Html->script('/assets/plugins/jquery-mockjax/jquery.mockjax.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/select2/select2.min.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/DataTables/media/js/jquery.dataTables.min.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/DataTables/media/js/DT_bootstrap.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/bootbox/bootbox.min.js', array('block' => 'scriptBottom'));
//echo $this->Html->script('/assets/js/table-data.js', array('block' => 'scriptBottom'));



echo $this->Html->script('/assets/plugins/tableExport/tableExport.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/tableExport/jquery.base64.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/tableExport/html2canvas.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/tableExport/jquery.base64.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/tableExport/jspdf/libs/sprintf.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/tableExport/jspdf/jspdf.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/tableExport/jspdf/libs/base64.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/js/table-imprimir_pdf_acordos.js', array('block' => 'scriptBottom'));
?>