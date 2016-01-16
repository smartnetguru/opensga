<?php
    $this->extend('/Common/index_common');
    $this->BreadCumbs->addCrumb('Configurações', '/configs');
    $this->BreadCumbs->addCrumb('Anos Lectivos', '/ano_lectivos');
    $this->BreadCumbs->addCrumb('Lista de Anos Lectivos', '/ano_lectivos/novo_ano_lectivo');
?>

<?php $this->start('top-actions') ?>
    <div class="action-list">
        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-user fa-2x"></i>Novo Ano Lectivo',
                array('controller' => 'ano_lectivos', 'action' => 'novo_ano_lectivo'), array('escape' => false,
                                                                                  'class' => 'btn btn-icon btn-block')) ?>
        </div>
        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-user fa-2x"></i>Definir Ano Lectivo Actual',
                array('controller' => 'ano_lectivos', 'action' => 'definir_ano_lectivo_actual'), array('escape' => false,
                    'class' => 'btn btn-icon btn-block')) ?>
        </div>
        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-user fa-2x"></i>Definir o Semestre Actual',
                array('controller' => 'ano_lectivos', 'action' => 'definir_semestre_actual'), array('escape' => false,
                    'class' => 'btn btn-icon btn-block')) ?>
        </div>
    </div>
<?php $this->end() ?>
<?php $this->assign('table-title', __('Lista de Anos Lectivos')) ?>
<?php $this->start('filter-form') ?>
<?php echo $this->Form->create('Curso', array('role' => 'form', 'enctype' => 'multipart/form-data', 'class' => 'form-horizontal', 'inputDefaults' => array('before' => '', 'after' => ''))); ?>
    <div class="row">
        <div class="form-group">
            <div class="col-md-3">
                <?php echo $this->Form->input('AnoLectivo.codigo', array('label' => false, 'div' => false,
                                                                'required' => FALSE, 'class' => 'form-control', 'placeholder' => 'Codigo')); ?>
            </div>
            <div class="col-md-3">
                <?php echo $this->Form->input('AnoLectivo.ano', array('label' => false, 'div' => false,
                                                              'class' => 'form-control',
                                                              'placeholder' => 'Ou Ano')); ?>
            </div>
            <div class="col-md-3">
                <?php echo $this->Form->input('AnoLectivo.numero_semestres',
                    array('label' => false,
                                                                                      'div' => false,
                                                                                      'class' => 'form-control',
                                                                                      'placeholder' => 'Ou Semestre',
                                                                                      'empty'=>'')); ?>
            </div>
            <div class="col-md-3">
                <?php echo $this->Form->end(array('label' => __('Pesquisar', true), 'class' => 'btn btn-blue next-step btn-block')); ?>
            </div>
        </div>
    </div>


<?php $this->end() ?>
<?php $this->start('table-header') ?>

    <tr>
        <th><?php echo $this->Paginator->sort('codigo', __('Codigo')); ?></th>
        <th><?php echo $this->Paginator->sort('ano', __('Ano')); ?></th>
        <th><?php echo $this->Paginator->sort('ano', __('Data de Início')); ?></th>
        <th><?php echo $this->Paginator->sort('ano', __('Data de Fim')); ?></th>
    </tr>
<?php $this->end() ?>
<?php $this->start('table-body') ?>
<?php
foreach ($anolectivos as $anolectivo):
    ?>
    <tr>

        <td><?php echo $anolectivo['AnoLectivo']['codigo']; ?>&nbsp;</td>
        <td><?php echo $anolectivo['AnoLectivo']['ano']; ?>&nbsp;</td>
        <td><?php echo $anolectivo['AnoLectivo']['data_inicio']; ?>&nbsp;</td>
        <td><?php echo $anolectivo['AnoLectivo']['data_fim']; ?>&nbsp;</td>


    </tr>
<?php endforeach; ?>
<?php $this->end() ?>