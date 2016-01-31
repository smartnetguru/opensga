<div class="row">
    <div class="col-sm-6">
        <!-- start: SELECT BOX PANEL -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title pull-left">
                    <?php echo $this->fetch('form-title') ?>
                </h3>

                <button class="btn btn-default pull-right">Voltar</button>
                <div class="clearfix"></div>
            </div>
            <div class="panel-body">
                <?php echo $this->fetch('form-elements'); ?>
            </div>
        </div>
        <!-- end: SELECT BOX PANEL -->
    </div>
    <?php echo $this->fetch('right-panel') ?>
</div>


<?php echo $this->fetch('content'); ?>


