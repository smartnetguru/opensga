<?php
    $this->BreadCumbs->addCrumb('Alunos', '/alunos');
    $this->BreadCumbs->addCrumb('Lista de Alunos', '/alunos/index');

    echo $this->Html->css('/assets/plugins/DataTables/media/css/DT_bootstrap.css');
?>

<div class="row">
    <?php echo $this->fetch('top-actions'); ?>
    <div class="col-md-12">
        <!-- start: DYNAMIC TABLE PANEL -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="icon-external-link-sign"></i>
                <?php echo $this->fetch('table-title'); ?>
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


                <?php echo $this->fetch('filter-form') ?>


                <div role="grid" class="dataTables_wrapper form-inline" id="tabelaAjax2">

                    <table id="tabela-ajax"
                           class="table table-striped table-bordered table-hover table-full-width dataTable">
                        <thead>

                        <?php echo $this->fetch('table-header') ?>

                        </thead>
                        <tbody>
                        <?php echo $this->fetch('table-body') ?>
                        </tbody>
                    </table>
                    <?php
                        if (!isset($noPagination)) {
                            echo $this->element('table_footer', $paginationOptions);
                        }
                    ?>
                </div>
            </div>
        </div>
        <!-- end: DYNAMIC TABLE PANEL -->
    </div>
</div>


<?php echo $this->fetch('content'); ?>
