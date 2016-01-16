
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

echo $this->Html->css('/assets/plugins/DataTables/media/css/DT_bootstrap.css');

?>

<div id="container12" class="container_12">

    <div class="col-sm-12">

        <div class="row">

            <div class="col-sm-3">
                <button class="btn btn-icon btn-block" onclick="location.href = '<?php echo $this->Html->url(array('controller' => 'cooperacaoAreas', 'action' => 'index',)) ?>'">
                    <?php echo $this->Html->image('icons/cooperacao/area_cooperacao.png', array('id' => 'imgEdit')) ?>
                    Áreas de Cooperação 

                    <span class="badge badge-danger"> <?php echo $cooperacaoAreas; ?></span>
                </button>

            </div>

            <div class="col-sm-3">
                <button class="btn btn-icon btn-block" onclick="location.href = '<?php echo $this->Html->url(array('controller' => 'cooperacaoAcordos', 'action' => 'index',)) ?>'" >
                    <?php echo $this->Html->image('icons/cooperacao/edit_cooperacao.png', array('id' => 'imgEdit')) ?>
                    Acordos de Cooperação 

                    <span class="badge badge-success"> <?php echo $acordos_cooperacao; ?> </span>
                </button>

            </div>
            <div class="col-sm-3">
                <button class="btn btn-icon btn-block"  onclick="location.href = '<?php echo $this->Html->url(array('controller' => 'CooperacaoTipoAcordos', 'action' => 'index',)) ?>'"   >
                    <?php echo $this->Html->image('icons/cooperacao/area_cooperacao.png', array('id' => 'imgEdit')) ?>
                    Tipos de Acordo de Cooperação 

                    <span class="badge badge-danger"> <?php echo $cooperacaoTipoAcordos ?> </span>
                </button>

            </div>
            <div class="col-sm-3">
                <button class="btn btn-icon btn-block"  onclick="location.href = '<?php echo $this->Html->url(array('controller' => 'CooperacaoAcordos', 'action' => 'lista_instituicaos',)) ?>'">
                    <?php echo $this->Html->image('icons/cooperacao/instituicao_org.png', array('id' => 'imgEdit')) ?>
                    Instituições de Cooperação

                    <span class="badge badge-success"> <?php echo $instituicao ?> </span>
                </button>

            </div>

        </div>
        <hr>

    </div>

    <!--======================-->

    <div class="col-sm-12">

        <div class="col-sm-8">
            <div class="page-title">
                <h4> Acordos de Cooperação em fase crítica</h4>
            </div>
            <div class="panel panel-default">

                <div class="panel-body">
                    <div class="">
                        <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
                            <thead>
                                <tr>

                                <tr>
                                    <th>Nome do Acordo</th>
                                    <th class="hidden-xs">Código</th>
                                    <th>Data de Assinatura</th>
                                    <th class="hidden-xs">Data de Validade</th>
                                    <th>Tipo de Acordo</th>
                                    <th class="hidden-xs">Áreas de Cooperação</th>
                                    <th>Status</th>
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
                                            <?php echo $cooperacaoAcordo['CooperacaoArea']['name'];  ?>
                                        </td>

                                        <td><span class="label label-sm label-warning">Expiring</span></td>
                                    </tr>
                                <?php endforeach; ?>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end: RESPONSIVE TABLE PANEL -->
        </div>

        <div class="col-sm-4">

        </div>
    </div>


</div>
<style>
    #imgEdit{
        width: 35px;
    }

    #imgEditN{
        width: 15px;     }
</style>
<script>


  

    jQuery(document).ready(function() {
//        Main.init();
         TableData.init();
    });


    // imprimir script

</script>

<?php 

echo $this->Html->script('/assets/plugins/jquery-mockjax/jquery.mockjax.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/select2/select2.min.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/DataTables/media/js/jquery.dataTables.min.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/DataTables/media/js/DT_bootstrap.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/bootbox/bootbox.min.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/js/table-data.js', array('block' => 'scriptBottom'));
?>
