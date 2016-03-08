<?php
    $this->Html->addCrumb($this->Session->read('Auth.User.unidade_organica'), '/');
    $this->Html->addCrumb('Disciplinas', '/faculdade/disciplinas');
    $this->Html->addCrumb('Adicionar Disciplina', '#');
?>
<?php $this->extend('/Common/form_basic_common'); ?>

<?php $this->assign('form-title', 'Seleccione o Ano Lectivo Actual') ?>
<?php $this->start('form-elements') ?>
    

<?php $this->end(); ?>

<?php $this->start('right-panel'); ?>
    <div class="col-sm-6">
        <!-- start: SELECT BOX PANEL -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-external-link-square"></i>
                Actualizar Estado da Requisicao
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
                <?php echo $this->Form->create('RequisicoesPedido',
                        ['role' => 'form', 'enctype' => 'multipart/form-data', 'class' => '', 'inputDefaults' => []]); ?>
                <?php echo $this->Form->hidden('requisicao_id', ['value' => $requisicao['id']]); ?>

                <div class="form-group">
                    <label>
                        <?php echo __('Numero de Requisicao') ?>
                    </label>
                    <?php echo $this->Form->input('numero_pedido', [
                            'label'    => false,
                            'div'      => false,
                            'class'    => 'form-control',
                            'readonly' => 'readonly',
                            'value'    => $requisicao['numero_pedido'],
                    ]); ?>
                </div>
                <div class="form-group">
                    <label>
                        <?php echo __('Documento/Tipo de Requisicao') ?>
                    </label>
                    <?php echo $this->Form->input('requisicoes_tipo_pedido_id', [
                            'label'    => false,
                            'div'      => false,
                            'class'    => 'form-control',
                            'empty'    => '--Seleccione--',
                            'value'    => $requisicao['requisicoes_tipo_pedido_id'],
                            'readonly' => 'readonly',
                    ]); ?>

                </div>


                <div class="form-group">
                    <label>
                        <?php echo __('Data de Requisicao') ?>
                    </label>
                    <?php echo $this->Form->input('data_pedido', [
                            'label'              => false,
                            'div'                => false,
                            'class'              => 'form-control date-picker',
                            'type'               => 'text',
                            'data-date-viewmode' => 'years',
                            'data-date-format'   => 'yyyy-mm-dd',
                            'readonly'           => 'readonly',
                            'value'              => $requisicao['data_pedido'],
                    ]); ?>
                </div>

                <div class="form-group">
                    <label>
                        <?php echo __('Estado da Requisicao') ?>
                    </label>
                    <?php echo $this->Form->input('requisicoes_estado_pedido_id', [
                            'label' => false,
                            'div'   => false,
                            'class' => 'form-control',
                            'value' => $requisicao['requisicoes_estado_pedido_id'],
                    ]); ?>
                </div>


                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-8">

                        <?php


                            //Mostrar botao para salvar requisicao se a entidade tiver sido encontrada
                            if ($entidade) {

                                echo $this->Form->end(
                                        ['label' => __('GRAVAR', true), 'class' => 'btn btn-blue btn-block']);

                            } else {


                                echo $this->Form->end();

                            }


                        ?>

                        <?php ?>

                    </div>


                </div>
            </div>
        </div>
        <!-- end: SELECT BOX PANEL -->
    </div>

<?php
    $this->end();