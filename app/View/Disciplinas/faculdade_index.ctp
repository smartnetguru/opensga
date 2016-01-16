<?php
    $this->extend('/Common/index_common');
    $this->Html->addCrumb($this->Session->read('Auth.User.unidade_organica'), '/');
    $this->Html->addCrumb('Disciplinas', '#');
    $this->Html->addCrumb('Lista de Disciplinas', '#');
?>


<?php $this->start('top-actions') ?>
<div class="action-list">
    <div class="col-sm-2">
        <?php echo $this->Html->link('<br/><i class="fa fa-plus fa-2x"></i>' . __('Adicionar Disciplina'),
            ['controller' => 'disciplinas', 'action' => 'adicionar_disciplina'],
            ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>

    </div>
</div>
<?php $this->end() ?>
<?php $this->assign('table-title', __('Lista de Disciplinas Cadastradas')) ?>
<?php $this->start('table-header') ?>

<tr>
    <th><?php echo $this->Paginator->sort('codigo', __('Codigo Da Disciplina')); ?></th>
    <th><?php echo $this->Paginator->sort('name', __('Nome da Disciplina')); ?></th>
    <th><?php echo $this->Paginator->sort('created', __('Data de Cadastro')); ?></th>
    <th><?php echo __('Accoes'); ?></th>
</tr>
<?php $this->end() ?>
<?php $this->start('table-body') ?>
<?php
    $i = 0;
    foreach ($disciplinas as $disciplina):
        $class = "odd";
        if ($i % 2 == 0) {
            $class = "even";
        }
        $i++;
        ?>
        <tr class="<?php echo $class ?>">
            <td><?php echo $disciplina['Disciplina']['codigo']; ?>&nbsp;</td>
            <td><?php echo $disciplina['Disciplina']['name']; ?>&nbsp;</td>
            <td><?php echo date('d/m/Y', $disciplina['Disciplina']['modified']); ?>&nbsp;</td>
            <td class="center">
                <div class="visible-md visible-lg hidden-sm hidden-xs">

                    <?= $this->Html->link('<i class="fa fa-eye"></i>',
                        ['action' => 'ver_disciplina', $disciplina['Disciplina']['id']], [
                            'class'               => 'btn btn-xs btn-green tooltips',
                            'data-placement'      => 'top',
                            'data-original-title' => 'Ver Detalhes',
                            'escape'=>false
                        ]); ?>
                    <?= $this->Html->link('<i class="fa fa-edit"></i>',
                        ['action' => 'editar_disciplina', $disciplina['Disciplina']['id']], [
                            'class'               => 'btn btn-xs btn-teal tooltips',
                            'data-placement'      => 'top',
                            'data-original-title' => 'Editar Disciplina',
                            'escape'=>false
                        ]); ?>
                    <?= $this->Html->link('<i class="fa fa-times fa fa-white"></i>',
                        ['action' => 'remover_disciplina', $disciplina['Disciplina']['id']], [
                            'class'               => 'btn btn-xs btn-bricky tooltips',
                            'data-placement'      => 'top',
                            'data-original-title' => 'Remover Disciplina',
                            'escape'=>false
                        ]); ?>
                </div>
                <div class="visible-xs visible-sm hidden-md hidden-lg">
                    <div class="btn-group">
                        <a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
                            <i class="fa fa-cog"></i> <span class="caret"></span>
                        </a>
                        <ul role="menu" class="dropdown-menu pull-right">
                            <li role="presentation">
                                <?= $this->Html->link('<i class="fa fa-eye">Ver Disciplina</i>',
                                    ['action' => 'ver_disciplina', $disciplina['Disciplina']['id']], [
                                        'role'               => 'menuitem',
                                        'tabindex'      => '-1',
                                        'escape'=>false
                                    ]); ?>
                            </li>
                            <li role="presentation">
                                <?= $this->Html->link('<i class="fa fa-edit">Editar Disciplina</i>',
                                    ['action' => 'editar_disciplina', $disciplina['Disciplina']['id']], [
                                        'role'               => 'menuitem',
                                        'tabindex'      => '-1',
                                        'escape'=>false
                                    ]); ?>
                            </li>
                            <li role="presentation">
                                <?= $this->Html->link('<i class="fa fa-times fa fa-white">Remover Disciplina</i>',
                                    ['action' => 'remover_disciplina', $disciplina['Disciplina']['id']], [
                                        'role'               => 'menuitem',
                                        'tabindex'      => '-1',
                                        'escape'=>false
                                    ]); ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </td>
        </tr>
    <?php endforeach; ?>
<?php $this->end() ?>
