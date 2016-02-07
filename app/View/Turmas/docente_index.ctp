<?php
    $this->extend('/Common/index_common');
    $grupo = $this->Session->read('Auth.User.group_id');
    $username = $this->Session->read('Auth.User.username');

    $this->Html->addCrumb('Disciplinas', '/disciplinas');
    $this->Html->addCrumb('Lista de Disciplinas', '/disciplinas/add');

    echo $this->Html->css('/assets/plugins/select2/select2.css');
    echo $this->Html->css('/assets/plugins/DataTables/media/css/DT_bootstrap.css');
?>

<?php $this->start('top-actions') ?>
<?php $this->end() ?>
<?php $this->assign('table-title', __('Minhas Turmas')) ?>
<?php $this->start('filter-form') ?>
<?php echo $this->Form->create('Turma', [
        'role'          => 'form',
        'enctype'       => 'multipart/form-data',
        'class'         => 'form-horizontal',
        'inputDefaults' => ['before' => '', 'after' => ''],
]); ?>
    <div class="row">
        <div class="form-group">
            <div class="col-md-3">
                <?php echo $this->Form->input('Turma.name', [
                        'label'       => false,
                        'div'         => false,
                        'required'    => false,
                        'class'       => 'form-control',
                        'placeholder' => 'Nome da Turma',
                ]); ?>
            </div>
            <div class="col-md-3">
                <?php echo $this->Form->input('AnoLectivo.ano', [
                        'label'       => false,
                        'div'         => false,
                        'class'       => 'form-control',
                        'placeholder' => 'Ou Ano Lectivo',
                ]); ?>
            </div>
            <div class="col-md-3">
                <?php echo $this->Form->input('Turma.codigo', [
                        'label'       => false,
                        'div'         => false,
                        'class'       => 'form-control',
                        'placeholder' => 'Ou Codigo da Turma',
                ]); ?>
            </div>
            <div class="col-md-3">
                <?php echo $this->Form->end([
                        'label' => __('Pesquisar', true),
                        'class' => 'btn btn-blue next-step btn-block',
                ]); ?>
            </div>
        </div>
    </div>

<?php $this->end() ?>
<?php $this->start('table-header') ?>
    <tr>
        <th><?php echo __('Disciplina'); ?></th>
        <th><?php echo __('Ano Lectivo') ?></th>
        <th><?php echo __('Semestre') ?></th>
    </tr>
<?php $this->end() ?>
<?php $this->start('table-body') ?>
<?php
    foreach ($turmas as $turma):
        ?>
        <tr>


            <td>
                <?php echo $this->Html->link($turma['Turma']['name'],
                        ['controller' => 'turmas', 'action' => 'ver_turma', $turma['Turma']['id']]); ?>
            </td>
            <td><?php echo $this->Html->link($turma['AnoLectivo']['ano'],
                        ['controller' => 'anolectivos', 'action' => 'view', $turma['AnoLectivo']['codigo']]); ?></td>
            <td><?php echo $this->Html->link($turma['Turma']['semestre_curricular'],
                        ['controller' => 'anolectivos', 'action' => 'view', $turma['AnoLectivo']['codigo']]); ?></td>

        </tr>
    <?php endforeach; ?>
<?php $this->end() ?>