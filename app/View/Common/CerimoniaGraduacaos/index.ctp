<?php
    $this->extend('/Common/index_common');
    $this->BreadCumbs->addCrumb('Alunos', '/alunos');
    $this->BreadCumbs->addCrumb('Lista de Alunos', '/alunos/index');
?>


<?php $this->assign('table-title', __('Todas Cerimonias Cadastradas')) ?>
<?php $this->start('filter-form') ?>
<?php echo $this->Form->create('CerimoniaGraduacao', [
    'role'          => 'form',
    'enctype'       => 'multipart/form-data',
    'class'         => 'form-horizontal',
    'inputDefaults' => ['before' => '', 'after' => '']
]); ?>
<div class="row">
    <div class="form-group">
        <div class="col-md-3">
            <?php echo $this->Form->input('name', [
                'label'       => false,
                'div'         => false,
                'required'    => false,
                'class'       => 'form-control',
                'placeholder' => 'Nome da Cerimnonia',

            ]); ?>
        </div>
        <div class="col-md-3">
            <?php echo $this->Form->input('data', [
                'label'       => false,
                'div'         => false,
                'required'    => false,
                'type'=>'year',
                'class'       => 'form-control',
                'placeholder' => 'Ano de Realizacao'
            ]); ?>
        </div>
        <div class="col-md-3">
            <?php echo $this->Form->input('local', [
                'label'       => false,
                'div'         => false,
                'required'    => false,
                'class'       => 'form-control',
                'placeholder' => 'Local de Realizacao',
                'empty'       => ''
            ]); ?>
        </div>
        <div class="col-md-3">
            <?php echo $this->Form->end([
                'label' => __('Pesquisar', true),
                'class' => 'btn btn-blue next-step btn-block'
            ]); ?>
        </div>
    </div>
</div>


<?php $this->end() ?>
<?php $this->start('table-header') ?>

<tr>
    <th><?php echo __('Designacao') ?></th>
    <th><?php echo __('Data de Realizacao') ?></th>
    <th><?php echo __('Local de Realizacao') ?></th>
</tr>
<?php $this->end() ?>
<?php $this->start('table-body') ?>
<?php foreach ($cerimoniaGraduacaos as $cerimoniaGraduacao): ?>
    <tr>
        <td><?php echo $this->Html->link($cerimoniaGraduacao['CerimoniaGraduacao']['name'],
                ['action' => 'ver_detalhes', $cerimoniaGraduacao['CerimoniaGraduacao']['id']]); ?>
            &nbsp;</td>

        <td><?php echo h($cerimoniaGraduacao['CerimoniaGraduacao']['data']); ?>&nbsp;</td>
        <td><?php echo h($cerimoniaGraduacao['CerimoniaGraduacao']['local']); ?>&nbsp;</td>

        <td class="actions">
            <?php echo $this->Html->link(__('Ver'),
                ['action' => 'ver_detalhes', $cerimoniaGraduacao['CerimoniaGraduacao']['id']]); ?>

        </td>
    </tr>
<?php endforeach; ?>
<?php $this->end() ?>