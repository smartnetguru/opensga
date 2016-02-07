<div class="row">
</div>
<div class="row">
    <div class="col-sm-6">
        <!-- start: TEXT AREA PANEL -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-external-link-square"></i>
                <?php echo __('Dados da Entidade') ?>
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
                <table class="table table-condensed table-hover">
                    <tbody>
                    <tr>
                        <td><?php echo __('Numero de Entidade') ?></td>
                        <td><?php echo h($entidade['Entidade']['codigo']) ?></td>
                    </tr>
                    <tr>
                        <td><?php echo __('Nome') ?></td>
                        <td><?php echo h($entidade['Entidade']['name']) ?></td>
                    </tr>
                    <tr>
                        <td><?php echo __('Email') ?></td>
                        <td><?php echo h($entidade['Entidade']['email']) ?></td>
                    </tr>
                    <tr>
                        <td><?php echo __('Telefone') ?></td>
                        <td><?php echo h($entidade['Entidade']['telefone']) ?></td>
                    </tr>
                    <tr>
                        <td><?php echo __('Avenida - Rua') ?></td>
                        <td><?php echo h($entidade['Entidade']['avenida_rua']) ?></td>
                    </tr>
                    <tr>
                        <td><?php echo __('Caixa postal') ?></td>
                        <td><?php echo h($entidade['Entidade']['caixa_postal_morada']) ?></td>
                    </tr>
                    </tbody>
                </table>
                <p>
                    <?php echo $this->Html->link('<i class="fa fa-plus"></i>Mostrar Perfil',
                            ['action' => 'perfil_entidade', $entidade['Entidade']['id']],
                            ['class' => 'btn btn-green', 'escape' => false]) ?>
                </p>

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

