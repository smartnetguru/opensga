<div class="row">
    <?php echo $this->fetch('top-actions'); ?>
    <div class="col-md-12">
        <!-- start: DYNAMIC TABLE PANEL -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title pull-left">
                    <i class="icon-external-link-sign"></i>
                    <?php echo $this->fetch('table-title'); ?>
                </h3>
                <?php echo $this->fetch('panel-top-actions'); ?>
                <div class="clearfix"></div>
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
