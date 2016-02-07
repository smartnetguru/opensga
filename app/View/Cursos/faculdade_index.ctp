<?php
    $this->extend('/Common/index_common');
    $this->Html->addCrumb($this->Session->read('Auth.User.unidade_organica'), '/');
    $this->Html->addCrumb('Cursos', '#');
    $this->Html->addCrumb('Lista de Cursos', '#');
?>


<?php $this->start('top-actions') ?>
    <div class="action-list">
        <div class="col-sm-1">

        </div>
    </div>
<?php $this->end() ?>
<?php $this->assign('table-title', __('Lista de Cursos')) ?>
<?php $this->start('filter') ?>
<?php echo $this->Form->create('Aluno', [
        'role'          => 'form',
        'enctype'       => 'multipart/form-data',
        'class'         => 'form-horizontal',
        'inputDefaults' => ['before' => '', 'after' => ''],
]); ?>
    <div class="row">
        <div class="form-group">
            <div class="col-md-3">
                <?php echo $this->Form->input('Aluno.codigo', [
                        'label'       => false,
                        'div'         => false,
                        'required'    => false,
                        'class'       => 'form-control',
                        'placeholder' => 'Numero de Estudante',
                ]); ?>
            </div>
            <div class="col-md-3">
                <?php echo $this->Form->input('Aluno.apelido', [
                        'label'       => false,
                        'div'         => false,
                        'class'       => 'form-control',
                        'placeholder' => 'Ou Apelido',
                ]); ?>
            </div>
            <div class="col-md-3">
                <?php echo $this->Form->input('Aluno.nomes',
                        ['label' => false, 'div' => false, 'class' => 'form-control', 'placeholder' => 'Ou nomes']); ?>
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


        <th><?php echo __('Código do Curso') ?></th>
        <th><?php echo __('Nome do Curso') ?></th>
        <th><?php echo __('Grau Academico') ?></th>
        <th><?php echo __('Tipo de Curso') ?></th>
        <th><?php echo __('Accoes') ?></th>
    </tr>
<?php $this->end() ?>
<?php $this->start('table-body') ?>
<?php
    $i = 0;
    foreach ($cursos as $curso):
        $class = "odd";
        if ($i % 2 == 0) {
            $class = "even";
        }
        $i++;
        ?>
        <tr class="<?php echo $class ?>">
            <td><?php echo $curso['Curso']['codigo']; ?>&nbsp;</td>
            <td><?php echo $curso['Curso']['name']; ?>&nbsp;</td>
            <td><?php echo $curso['GrauAcademico']['name']; ?>&nbsp;</td>
            <td><?php echo $curso['TipoCurso']['name']; ?>&nbsp;</td>
            <td class="center">
                <div class="visible-md visible-lg hidden-sm hidden-xs">

                    <?= $this->Html->link('<i class="fa fa-eye"></i>',
                            ['action' => 'ver_curso', $curso['Curso']['id']], [
                                    'class'               => 'btn btn-xs btn-green tooltips',
                                    'data-placement'      => 'top',
                                    'data-original-title' => 'Ver Detalhes',
                                    'escape'              => false,
                            ]); ?>
                </div>
                <div class="visible-xs visible-sm hidden-md hidden-lg">
                    <div class="btn-group">
                        <a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
                            <i class="fa fa-cog"></i> <span class="caret"></span>
                        </a>
                        <ul role="menu" class="dropdown-menu pull-right">
                            <li role="presentation">
                                <?= $this->Html->link('<i class="fa fa-eye">Ver Curso</i>',
                                        ['action' => 'ver_curso', $curso['Curso']['id']], [
                                                'role'     => 'menuitem',
                                                'tabindex' => '-1',
                                                'escape'   => false,
                                        ]); ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </td>

        </tr>
    <?php endforeach; ?>
<?php $this->end() ?>