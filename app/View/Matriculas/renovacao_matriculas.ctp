<?php
    $this->extend('/Common/index_common');
    $this->BreadCumbs->addCrumb('Matriculas', '/matriculas');
    $this->BreadCumbs->addCrumb('Todas Matriculas', '/matriculas/index');
?>

<?php $this->start('top-actions') ?>
    <div class="action-list">

        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-user fa-2x"></i>Importar Ficheiro',
                    ['controller' => 'matriculas', 'action' => 'carregar_ficheiro_renovacao'], [
                            'escape' => false,
                            'class'  => 'btn btn-icon btn-block',
                    ]) ?>
        </div>
        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-plus  fa-2x"></i>	Exportar Extracto em Excel',
                    ['controller' => 'matriculas', 'action' => 'exportar_extracto_renovacao'],
                    [
                            'escape' => false,
                            'class'  => 'btn btn-icon btn-block',
                    ]) ?>

        </div>
    </div>
<?php $this->end() ?>
<?php $this->assign('table-title', __('Renovações de Matricula') . __(' Ano %s', $anolectivo['AnoLectivo']['ano'])) ?>

<?php $this->start('table-header') ?>

    <tr>
        <th><?php echo __('Número de Estudante') ?></th>
        <th><?php echo __('Nome Completo') ?></th>
        <th><?php echo __('Curso') ?></th>
        <th><?php echo __('Ano Lectivo') ?></th>
        <th><?php echo __('Data de Renovação') ?></th>

    </tr>
<?php $this->end() ?>
<?php $this->start('table-body') ?>
<?php
    foreach ($matriculas as $matricula):
        ?>
        <tr>

            <td><?php echo $matricula['Aluno']['codigo']; ?>&nbsp;</td>
            <td><?php echo $matricula['Aluno']['Entidade']['name']; ?>&nbsp;</td>
            <td><?php echo $matricula['Curso']['name']; ?>&nbsp;</td>
            <td><?php echo $matricula['AnoLectivo']['ano']; ?>&nbsp;</td>
            <td><?php echo $matricula['Matricula']['data']; ?>&nbsp;</td>


        </tr>
    <?php endforeach; ?>
<?php $this->end() ?>
<?php $this->start('filter-form') ?>
<?php echo $this->Form->create('Matricula',
        ['role' => 'form', 'enctype' => 'multipart/form-data', 'class' => 'form-horizontal']); ?>
    <div class="row">
        <div class="form-group">
            <div class="col-md-2">
                <?php echo $this->Form->input('Aluno.codigo', [
                        'label'       => false,
                        'div'         => false,
                        'required'    => false,
                        'class'       => 'form-control',
                        'placeholder' => 'Numero de Estudante',
                ]); ?>
            </div>
            <div class="col-md-2">
                <?php echo $this->Form->input('tipo_matricula_id', [
                        'label'       => false,
                        'div'         => false,
                        'class'       => 'form-control',
                        'placeholder' => 'Seleccione',
                ]); ?>
            </div>
            <div class="col-md-2">
                <?php echo $this->Form->input('estado_matricula_id',
                        ['label' => false, 'div' => false, 'class' => 'form-control', 'placeholder' => 'Ou nomes']); ?>
            </div>
            <div class="col-md-2">
                <?php echo $this->Form->input('ano_lectivo_id', [
                        'label'       => false,
                        'div'         => false,
                        'class'       => 'form-control',
                        'placeholder' => 'Ano Lectivo',
                        'type'        => 'text',
                ]); ?>
            </div>
            <div class="col-md-2">
                <?php echo $this->Form->end([
                        'label' => __('Pesquisar', true),
                        'class' => 'btn btn-blue next-step btn-block',
                ]); ?>
            </div>
        </div>
    </div>

<?php $this->end() ?>