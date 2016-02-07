<?php
    $this->extend('/Common/index_no_pagination');
    $grupo = $this->Session->read('Auth.User.group_id');
    $username = $this->Session->read('Auth.User.username');

    $this->Html->addCrumb('Disciplinas', '/disciplinas');
    $this->Html->addCrumb('Lista de Disciplinas', '/disciplinas/add');

    echo $this->Html->css('/assets/plugins/select2/select2.css');
    echo $this->Html->css('/assets/plugins/DataTables/media/css/DT_bootstrap.css');
?>

<?php $this->assign('table-title', __('Estudantes Cadastrados')) ?>
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
                <?php echo $this->Form->input('Turma.codigo_aluno', [
                        'label'       => false,
                        'div'         => false,
                        'required'    => false,
                        'class'       => 'form-control',
                        'placeholder' => 'Codigo do Aluno',
                ]); ?>
            </div>
            <div class="col-md-3">
                <?php echo $this->Form->input('Turma.apelido_aluno', [
                        'label'       => false,
                        'div'         => false,
                        'class'       => 'form-control',
                        'placeholder' => 'Apelido do Aluno',
                ]); ?>
            </div>
            <div class="col-md-3">
                <?php echo $this->Form->input('Turma.nomes_aluno', [
                        'label'       => false,
                        'div'         => false,
                        'class'       => 'form-control',
                        'placeholder' => 'Nomes do Aluno',
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
<?php if (isset($alunos)): ?>
    <?php $this->start('table-header') ?>
    <tr>
        <th><?php echo __('Codigo'); ?></th>
        <th><?php echo __('Apelido') ?></th>
        <th><?php echo __('Outros Nomes') ?></th>
        <th><?php echo __('Curso') ?></th>
        <th><?php echo __('Plano de Estudos') ?></th>
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
                <?php echo $this->Html->image("/img/login-icon.gif", [
                        "alt"   => "Brownies",
                        "title" => "Visualizar",
                        'url'   => ['action' => 'view', $turma['Turma']['id']],
                ]); ?>
                <?php
                    if ($turma['Turma']['estado_turma_id'] == 1 || $turma['Turma']['estado_turma_id'] == 2 || $turma['Turma']['estado_turma_id'] == null) {
                        echo $this->Html->image("/img/edit-icon.gif", [
                                "alt"   => "Brownies",
                                "title" => "Editar",
                                'url'   => ['action' => 'edit', $turma['Turma']['id']],
                        ]);
                    }
                ?>
                <?php //echo $this->Html->image("/img/hr.gif", array("alt" => "Brownies","title"=>"Remover",'url' => array('action' => 'delete', $turma['Turma']['id']), null, sprintf(__('Tem a certeza que deseja eliminar # %s?', true), $turma['Turma']['id'])));
                ?>
            </td>

        </tr>
    <?php endforeach; ?>
    <?php $this->end() ?>
<?php endif; ?>