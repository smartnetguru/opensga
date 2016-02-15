<?php
    $this->extend('/Common/index_common');
    $this->BreadCumbs->addCrumb('Funcionarios', '/funcionarios');
    $this->BreadCumbs->addCrumb('Lista de Funcionarios', '/funcionarios/index');
?>

<?php $this->assign('table-title', __('Lista de Funcionarios')) ?>

<?php $this->start('table-header') ?>

    <tr>
        <th><?php echo $this->Paginator->sort('username', __('Nome de Utilizador')); ?></th>
        <th><?php echo $this->Paginator->sort('name', __('Nome Completo')); ?></th>
        <th><?php echo $this->Paginator->sort('unidade_organica_id', __('Unidade Organica')); ?></th>
        <th class="actions"><?php echo __('Acção'); ?></th>

    </tr>
<?php $this->end() ?>
<?php $this->start('table-body') ?>
<?php
    $i = 0;
    foreach ($funcionarios as $funcionario):
        $class = "first";
        if ($i++ % 2 == 0) {
            $class = ' class="even"';
        }
        ?>
        <tr<?php echo $class; ?>>

            <td><?php echo $this->Html->link($funcionario['Entidade']['User']['username'], [
                        'controller' => 'funcionarios',
                        'action'     => 'perfil_funcionario',
                        $funcionario['Funcionario']['id'],
                ]); ?>&nbsp;</td>
            <td><?php echo $this->Html->link($funcionario['Entidade']['name'], [
                        'controller' => 'funcionarios',
                        'action'     => 'perfil_funcionario',
                        $funcionario['Funcionario']['id'],
                ]); ?>&nbsp;</td>

            <td><?php echo $funcionario['UnidadeOrganica']['name']; ?>&nbsp;</td>

            <td class="accoes">


            </td>

        </tr>
        <?php
    endforeach;
?>
<?php $this->end() ?>
<?php $this->start('filter-form') ?>
<?php echo $this->Form->create('Funcionario',
        ['role' => 'form', 'enctype' => 'multipart/form-data', 'class' => 'form-horizontal']); ?>
    <div class="row">
        <div class="form-group">
            <div class="col-md-3">
                <?php echo $this->Form->input('Funcionario.apelido', [
                        'label'       => false,
                        'div'         => false,
                        'required'    => false,
                        'class'       => 'form-control',
                        'placeholder' => 'Apelido',
                        'required'    => false,
                ]); ?>
            </div>
            <div class="col-md-3">
                <?php echo $this->Form->input('Funcionario.nomes',
                        [
                                'label'       => false,
                                'div'         => false,
                                'class'       => 'form-control',
                                'placeholder' => 'Outros Nomes',
                                'required'    => false,
                        ]); ?>
            </div>
            <div class="col-md-3">
                <?php echo $this->Form->input('Funcionario.unidade_organica_id', [
                        'label'       => false,
                        'div'         => false,
                        'class'       => 'form-control',
                        'placeholder' => 'Unidade Organica',
                        'empty'       => '--Seleccione--',
                        'required'    => false,
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

<?php
    $this->end();
