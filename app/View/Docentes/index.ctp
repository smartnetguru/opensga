<?php
    $this->extend('/Common/index_common');
    $this->BreadCumbs->addCrumb('Alunos', '/alunos');
    $this->BreadCumbs->addCrumb('Lista de Alunos', '/alunos/index');
?>

<?php $this->start('top-actions') ?>
    <div class="action-list">
        <div class="col-sm-1">
            <?php echo $this->Html->link('<i class="fa fa-user fa-2x"></i>Novo Docente',
                ['controller' => 'docentes', 'action' => 'adicionar_docente'],
                ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
        </div>
    </div>
<?php $this->end() ?>
<?php $this->assign('table-title', __('Docentes Cadastrados')) ?>
<?php $this->start('filter-form') ?>
<?php echo $this->Form->create('Docente', [
    'role'          => 'form',
    'enctype'       => 'multipart/form-data',
    'class'         => 'form-horizontal',
    'inputDefaults' => ['before' => '', 'after' => '']
]); ?>
    <div class="row">
        <div class="form-group">
            <div class="col-md-3">
                <?php echo $this->Form->input('Docente.unidade_organica_id', [
                    'label'       => false,
                    'div'         => false,
                    'required'    => false,
                    'class'       => 'form-control',
                    'placeholder' => 'Unidade Organica'
                ]); ?>
            </div>
            <div class="col-md-3">
                <?php echo $this->Form->input('Docente.apelido',
                    ['label' => false, 'div' => false, 'class' => 'form-control', 'placeholder' => 'Ou Apelido']); ?>
            </div>
            <div class="col-md-3">
                <?php echo $this->Form->input('Docente.nomes',
                    ['label' => false, 'div' => false, 'class' => 'form-control', 'placeholder' => 'Ou nomes']); ?>
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
        <th><?php echo $this->Paginator->sort('username', 'Nome de Utilizador'); ?></th>
        <th><?php echo $this->Paginator->sort('name', 'Nome Completo'); ?></th>
        <th><?php echo $this->Paginator->sort('unidade_organica_id', 'Unidade Organica'); ?></th>
        <th><?php echo $this->Paginator->sort('docente_categoria_id', 'Categoria'); ?></th>
        <th class="actions"><?php echo __('Acção'); ?></th>
    </tr>
<?php $this->end() ?>
<?php $this->start('table-body') ?>
<?php
    $i = 0;
    foreach ($docentes as $docente):
        $class = null;
        if ($i++ % 2 == 0) {
            $class = ' class="altrow"';
        }
        ?>
        <tr<?php echo $class; ?>>

            <td><?php

                    if (isset($docente['Entidade']['User'])) {
                        echo $docente['Entidade']['User']['username'];
                    } ?>&nbsp;</td>
            <td>
                <?php echo $this->Html->link($docente['Entidade']['name'],
                    ['controller' => 'docentes', 'action' => 'perfil_docente', $docente['Docente']['id']]); ?>
            </td>
            <td>
                <?php echo $this->Html->link($docente['UnidadeOrganica']['name'],
                    ['controller' => 'unidade_organicas', 'action' => 'view', $docente['UnidadeOrganica']['id']]); ?>
            </td>
            <td>
                <?php echo $this->Html->link($docente['DocenteCategoria']['name'],
                    ['controller' => 'docente_categorias', 'action' => 'view', $docente['DocenteCategoria']['id']]); ?>
            </td>
            <td class="actions">
                <?php echo $this->Html->link(__('Ver', true),
                    ['action' => 'perfil_docente', $docente['Docente']['id']]); ?>
                <?php echo $this->Html->link(__('Editar', true),
                    ['action' => 'editar_docente', $docente['Docente']['id']]); ?>
                <?php echo $this->Html->link(__('Delete', true), ['action' => 'delete', $docente['Docente']['id']],
                    null, sprintf(__('Are you sure you want to delete # %s?', true), $docente['Docente']['id'])); ?>
            </td>
        </tr>
    <?php endforeach; ?>
<?php $this->end() ?>