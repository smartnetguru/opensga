<?php
$grupo = $this->Session->read('Auth.User.group_id');
$username = $this->Session->read('Auth.User.username');



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

$this->Html->addCrumb('Unidades Orgânicas', '/unidade_organicas');
$this->Html->addCrumb('Lista de Unidades Orgânicas', '/unidade_organicas/index');
?>




<div id="container12" class="container_12">
    <div class="grid_12">
        <div class="block-border">
            <div class="block-content">
                <ul class="shortcut-list">
                    <li>
                        <a style="width: 180px;" href="<?php echo $this->Html->url(array('controller' => 'cooperacao_acordos', 'action' => 'nova_instituicao', 'plugin' => 'cooperacao')); ?>" data-toggle="modal" class="demo btn btn-default"> <?php echo $this->Html->image('icons/cooperacao/instituicao_org.png', array('id' => 'imgEdit')) ?><span class="label label-info"> Nova Instituição</span></a>

                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="grid_12">
        <div class="block-border">
            <div class="block-header">
                <h2 class="header_label"><?php echo __('Instituições de Cooperação') ?></h2><span></span>
            </div>


            <div class="block-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">

                            <div class="panel-body"> 
                                <table id="sample_1" class="table table-striped table-bordered table-hover table-full-width">
                                    <thead>
                                        <tr>
                                            <th><?php echo $this->Paginator->sort('name'); ?></th>
                                            <th class="hidden-xs"><?php echo $this->Paginator->sort('continente_origem'); ?></th>
                                            <th><?php echo $this->Paginator->sort('pais_origem'); ?></th>
                                            <th class="hidden-xs"><?php echo $this->Paginator->sort('provincia_origem'); ?></th>
                                            <th><?php echo $this->Paginator->sort('cidade_origem'); ?></th>
                                            <th class="hidden-xs"><?php echo $this->Paginator->sort('created'); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 0;
                                        foreach ($instituicaos as $instituicao):
                                            $class = "odd";
                                            if ($i % 2 == 0)
                                                $class = "even";
                                            $i++;
                                            ?>
                                            <tr>
                                                <td><?php echo $this->Html->link(h($instituicao['Instituicao']['name']), array('controller' => 'cooperacaoAcordos', 'action' => 'ver_instituicao', $instituicao['Instituicao']['id'])); ?>&nbsp;</td>
                                                <td class="hidden-xs">
                                                    <?php echo $this->Html->link($instituicao['Continente']['name'], array('controller' => 'cooperacaoAcordos', 'action' => 'ver_instituicao', $instituicao['Instituicao']['id'])); ?>
                                                </td>
                                                <td class="hidden-xs">
                                                    <?php echo $this->Html->link($instituicao['Pais']['name'], array('controller' => 'cooperacaoAcordos', 'action' => 'ver_instituicao', $instituicao['Instituicao']['id'])); ?>
                                                </td>
                                                <td>
                                                    <?php echo $this->Html->link($instituicao['Provincia']['name'], array('controller' => 'cooperacaoAcordos', 'action' => 'ver_instituicao', $instituicao['Instituicao']['id'])); ?>
                                                </td>
                                                <td class="hidden-xs">
                                                    <?php echo $this->Html->link($instituicao['Cidade']['name'], array('controller' => 'cooperacaoAcordos', 'action' => 'ver_instituicao', $instituicao['Instituicao']['id'])); ?>
                                                </td>
                                                <td><?php echo h($instituicao['Instituicao']['created']); ?>&nbsp;</td>
                                            </tr>
                                        <?php endforeach; ?>

                                    </tbody>
                                 
                                 
                                </table>
                                
                                   <?php // echo $this->element('table_footer') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="clear height-fix"></div>

</div> <!--! end of #main-content -->
<style>
    #imgEdit{
        width: 45px;
    }

    #imgEditN{
        width: 15px;     }
</style>
<script>
        jQuery(document).ready(function() {
    // Main.init();
        TableData.init();
    });
</script>
<?php
echo $this->Html->script('/assets/plugins/jquery-mockjax/jquery.mockjax.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/select2/select2.min.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/DataTables/media/js/jquery.dataTables.min.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/DataTables/media/js/DT_bootstrap.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/bootbox/bootbox.min.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/js/table-data.js', array('block' => 'scriptBottom'));
?>