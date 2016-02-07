<?php
    $this->extend('/Common/index_common');
    $this->Html->addCrumb($this->Session->read('Auth.User.unidade_organica'), '/');
    $this->Html->addCrumb('Planos de Estudos', '/faculdade/planoEstudos');
    $this->Html->addCrumb('Lista de Planos de Estudos', '#');
?>

<?php $this->start('top-actions') ?>
    <div class="action-list">
        <div class="col-sm-2">
            <?php echo $this->Html->link('<br/><i class="fa fa-plus"></i>	Adicionar Plano de Estudos',
                    ['controller' => 'plano_estudos', 'action' => 'adicionar_plano_estudo'],
                    ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
        </div>
    </div>
<?php $this->end() ?>
<?php $this->assign('table-title', __('Lista de Planos de Estudos Activos')) ?>
<?php $this->start('filter-form') ?>
<?php echo $this->Form->create('PlanoEstudo', [
        'type'          => 'get',
        'role'          => 'form',
        'enctype'       => 'multipart/form-data',
        'class'         => 'form-horizontal',
        'inputDefaults' => ['before' => '', 'after' => ''],
]); ?>
    <div class="row">
        <div class="form-group">
            <div class="col-md-3">
                <?php echo $this->Form->input('unidade_organica_id', [
                        'label'    => false,
                        'div'      => false,
                        'required' => false,
                        'class'    => 'form-control',
                        'empty'    => 'Unidade Organica',
                ]); ?>
            </div>
            <div class="col-md-3">
                <?php echo $this->Form->input('curso_id',
                        [
                                'required' => false,
                                'label'    => false,
                                'div'      => false,
                                'class'    => 'form-control',
                                'empty'    => 'Curso',
                        ]); ?>
            </div>
            <div class="col-md-3">
                <?php echo $this->Form->input('ano_criacao',
                        [
                                'required'    => false,
                                'type'        => 'text',
                                'label'       => false,
                                'div'         => false,
                                'class'       => 'form-control',
                                'placeholder' => 'Ano de Criacao',
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
        <th><?php echo __('Nome do Plano'); ?></th>
        <th><?php echo __('Curso'); ?></th>
        <th><?php echo __('Duração'); ?></th>
        <th><?php echo __('Semestres por Ano'); ?></th>
        <th><?php echo __('Ano de Criacao'); ?></th>
        <th><?php echo __('Total de Creditos'); ?></th>

        <th class="tc last"><?php echo __('Acções'); ?></th>
    </tr>
<?php $this->end() ?>
<?php $this->start('table-body') ?>
<?php
    $i = 0;
    foreach ($planoEstudos as $planoEstudo):
        ?>
        <tr>
            <td><?php echo $this->Html->link($planoEstudo['PlanoEstudo']['name'], [
                        'controller' => 'plano_estudos',
                        'action'     => 'adicionar_disciplinas',
                        $planoEstudo['PlanoEstudo']['id'],
                ]); ?>&nbsp;</td>
            <td>
                <?php
                    if (isset($planoEstudo['Curso'])) {
                        echo $this->Html->link($planoEstudo['Curso']['name'],
                                ['controller' => 'cursos', 'action' => 'ver_curso', $planoEstudo['Curso']['id']]);

                    } ?>
            </td>
            <td><?php echo $planoEstudo['PlanoEstudo']['duracao']; ?>&nbsp;</td>
            <td><?php echo $planoEstudo['PlanoEstudo']['semestres_ano']; ?>&nbsp;</td>
            <td><?php echo $planoEstudo['PlanoEstudo']['ano_criacao']; ?>&nbsp;</td>
            <td><?php echo $planoEstudo['PlanoEstudo']['total_creditos']; ?>&nbsp;</td>
            <td class="accoes">
                <?php echo $this->Html->link(__('Adicionar Disciplinas'),
                        ['action' => 'adicionar_disciplinas', $planoEstudo['PlanoEstudo']['id']]) ?> |
                <?php echo $this->Html->link(__('Editar'),
                        ['action' => 'editar_plano_estudo', $planoEstudo['PlanoEstudo']['id']]) ?> |
                <?php echo $this->Form->postLink(__('Desactivar'),
                        ['action' => 'desactivar_plano_estudo', $planoEstudo['PlanoEstudo']['id']]) ?> |
                <?php echo $this->Form->postLink(__('Remover'),
                        ['action' => 'remover_plano_estudo', $planoEstudo['PlanoEstudo']['id']]) ?>

        </tr>
    <?php endforeach; ?>
<?php $this->end() ?>