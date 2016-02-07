<div class="row">
</div>
<div class="row">
    <div class="col-sm-6">
        <!-- start: TEXT AREA PANEL -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-external-link-square"></i>
                <?php echo __('Dados da nova Entidade') ?>
                <div class="panel-tools">
                    <a href="#" class="btn btn-xs btn-link panel-collapse collapses">
                    </a>
                    <a data-toggle="modal" href="#panel-config" class="btn btn-xs btn-link panel-config">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <a href="#" class="btn btn-xs btn-link panel-refresh">
                        <i class="fa fa-refresh"></i>
                    </a>
                    <a href="#" class="btn btn-xs btn-link panel-expand">
                        <i class="fa fa-resize-full"></i>
                    </a>
                    <a href="#" class="btn btn-xs btn-link panel-close">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>

            <!-- Form de registo de entidade -->
            <?php echo $this->Form->create('Entidade',
                    ['role' => 'form', 'enctype' => 'multipart/form-data', 'class' => '', 'inputDefaults' => []]); ?>

            <div class="panel-body">
                <table class="table table-condensed table-hover">
                    <tbody>

                    <?php

                        //Campo que indica registo de uma nova entidade
                        echo $this->Form->hidden('nova_entidade', ['value' => '1']);

                    ?>


                    <tr>
                        <!-- Nome da entidade -->
                        <td><?php echo __('Nome') ?></td>
                        <td><?php echo $this->Form->input('name', [
                                    'label' => false,
                                    'div'   => false,
                                    'class' => 'form-control',
                                    'empty' => '--Seleccione--',
                            ]); ?></td>

                    </tr>
                    <tr>
                        <!--Email da entidade-->
                        <td><?php echo __('Email') ?></td>
                        <td><?php echo $this->Form->input('email', [
                                    'label' => false,
                                    'div'   => false,
                                    'class' => 'form-control',
                                    'empty' => '--Seleccione--',
                            ]); ?></td>
                    </tr>
                    <tr>
                        <!--Telefone da Entidade-->
                        <td><?php echo __('Telefone') ?></td>
                        <td><?php echo $this->Form->input('telefone', [
                                    'label' => false,
                                    'div'   => false,
                                    'class' => 'form-control',
                                    'empty' => '--Seleccione--',
                            ]); ?></td>
                    </tr>

                    <tr>
                        <!--Caixa postal da entidade-->
                        <td><?php echo __('Caixa postal') ?></td>
                        <td><?php echo $this->Form->input('caixa_postal_morada', [
                                    'label' => false,
                                    'div'   => false,
                                    'class' => 'form-control',
                                    'empty' => '--Seleccione--',
                            ]); ?></td>

                    </tr>
                    </tbody>
                </table>

                <!--Gravar entidade-->
                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-8">
                        <?php echo $this->Form->end([
                                'label' => __('GRAVAR', true),
                                'class' => 'btn btn-blue btn-block',
                        ]); ?>

                    </div>
                </div>


            </div>
        </div>
        <!-- end: TEXT AREA PANEL -->
    </div>

    <div class="col-sm-6">
        <!-- start: SELECT BOX PANEL -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-external-link-square"></i>
                <?php echo $this->fetch('form-title') ?>
                <div class="panel-tools">
                    <a href="#" class="btn btn-xs btn-link panel-collapse collapses">
                    </a>
                    <a data-toggle="modal" href="#panel-config" class="btn btn-xs btn-link panel-config">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <a href="#" class="btn btn-xs btn-link panel-refresh">
                        <i class="fa fa-refresh"></i>
                    </a>
                    <a href="#" class="btn btn-xs btn-link panel-expand">
                        <i class="fa fa-resize-full"></i>
                    </a>
                    <a href="#" class="btn btn-xs btn-link panel-close">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="panel-body">
                <?php echo $this->fetch('entidade-form'); ?>
            </div>
        </div>
        <!-- end: SELECT BOX PANEL -->
    </div>

</div>


<?php echo $this->fetch('content'); ?>

