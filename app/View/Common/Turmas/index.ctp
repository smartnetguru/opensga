<?php
    $this->extend('/Common/index_common');
    $grupo = $this->Session->read('Auth.User.group_id');
    $username = $this->Session->read('Auth.User.username');

    $this->Html->addCrumb('Disciplinas', '/disciplinas');
    $this->Html->addCrumb('Lista de Disciplinas', '/disciplinas/add');

    echo $this->Html->css('/assets/plugins/select2/select2.css');
    echo $this->Html->css('/assets/plugins/DataTables/media/css/DT_bootstrap.css');
?>

<?php echo $this->fetch('top-actions'); ?>
<?php $this->assign('table-title', __('Turmas ' . $estadoTurma['EstadoTurma']['name'])) ?>
<?php $this->start('filter-form') ?>
<?php echo $this->Form->create('Turma', [
        'role'          => 'form',
        'enctype'       => 'multipart/form-data',
        'class'         => 'form-horizontal',
        'inputDefaults' => ['before' => '', 'after' => ''],
    'type'=>'get'
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
                <?php echo $this->Form->input('Turma.curso_id', [
                        'label'       => false,
                        'div'         => false,
                        'class'       => 'form-control search-select',
                        'placeholder' => 'Ou Curso',
                        'required'    => false,
                    'empty'=>'---Seleccione---'
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
        <th><?php echo __('Total de Alunos') ?></th>
        <th><?php echo __('Regente') ?></th>
        <td class="tc last"><?php echo __('Acção'); ?></td>
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
            <td><?php echo $this->Html->link($turma['Turma']['total_alunos'],
                        ['controller' => 'anolectivos', 'action' => 'view', $turma['AnoLectivo']['codigo']]); ?></td>
            <td>

                <?php
                    if (!isset($turma['Docente']['Entidade']['name'])) {
                        $turma['Docente']['Entidade']['name'] = '';
                    }

                    echo $this->Html->link($turma['Docente']['Entidade']['name'],
                            ['controller' => 'turmas', 'action' => 'view']);
                ?>
            </td>
            <td class="accoes">
                <?php echo $this->Html->link('<span class="glyphicon glyphicon-eye-open"></span>',
                        ['action' => 'ver_turma', $turma['Turma']['id']],
                        ['escape' => false, 'class' => 'tooltips', 'title' => 'Visualizar Turma']);

                ?>

            </td>

        </tr>
    <?php endforeach; ?>
<?php $this->end() ?>