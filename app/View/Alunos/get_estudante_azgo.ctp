<?php
    $this->Html->addCrumb('OpenSGA', '/');
    $this->Html->addCrumb('Página Inicial', '/');
    $group_id = $this->Session->read('Auth.User.group_id');
?>
<div class="row">
    <div class="col-sm-6">
        <!-- start: TEXT AREA PANEL -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-external-link-square"></i>
                <?php echo __('Dados do Estudante') ?>
                <div class="panel-tools">
                    <a href="#" class="btn btn-xs btn-link panel-collapse collapses">
                    </a>
                    <a data-toggle="modal" href="#panel-config" class="btn btn-xs btn-link panel-config">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <a href="#" class="btn btn-xs btn-link panel-refresh">
                        <i class="fa fa-refresh"></i>
                    </a>
                    <a href="#" class="btn btn-xs btn-link panel-expand">
                        <i class="fa fa-resize-full"></i>
                    </a>
                    <a href="#" class="btn btn-xs btn-link panel-close">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="panel-body">
                <table class="table table-condensed table-hover">
                    <tbody>
                    <tr>
                        <td><?php echo __('Numero de Estudante') ?></td>
                        <td><?php echo h($aluno['Aluno']['codigo']) ?></td>
                    </tr>
                    <tr>
                        <td><?php echo __('Nome Completo') ?></td>
                        <td><?php echo h($aluno['Entidade']['name']) ?></td>
                    </tr>
                    <tr>
                        <td><?php echo __('Data de Nascimento') ?></td>
                        <td><?php echo h($aluno['Entidade']['data_nascimento']) ?></td>
                    </tr>
                    <tr>
                        <td><?php echo __('Sexo') ?></td>
                        <td><?php echo h($aluno['Entidade']['Genero']['name']) ?></td>
                    </tr>
                    <tr>
                        <td><?php echo __('Curso') ?></td>
                        <td><?php echo h($aluno['Curso']['name']) ?></td>
                    </tr>
                    <tr>
                        <td><?php echo __('Faculdade') ?></td>
                        <td><?php echo h($aluno['Curso']['UnidadeOrganica']['name']) ?></td>
                    </tr>
                    <tr>
                        <td><?php echo __('Ano de Ingresso') ?></td>
                        <td><?php echo h($aluno['Aluno']['ano_ingresso']) ?></td>
                    </tr>
                    </tbody>
                </table>
                <p>
                    <?php echo $this->Html->link('<i class="fa fa-plus"></i>Confirmar Compra',
                            ['action' => 'perfil_estudante', $aluno['Aluno']['id']],
                            ['class' => 'btn btn-green', 'escape' => false]) ?>
                </p>

            </div>
        </div>
        <!-- end: TEXT AREA PANEL -->
    </div>
    <div class="col-sm-6">
        <!-- start: SELECT BOX PANEL -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-external-link-square"></i>
                <?php echo $this->fetch('form-title') ?>
                <div class="panel-tools">
                    <a href="#" class="btn btn-xs btn-link panel-collapse collapses">
                    </a>
                    <a data-toggle="modal" href="#panel-config" class="btn btn-xs btn-link panel-config">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <a href="#" class="btn btn-xs btn-link panel-refresh">
                        <i class="fa fa-refresh"></i>
                    </a>
                    <a href="#" class="btn btn-xs btn-link panel-expand">
                        <i class="fa fa-resize-full"></i>
                    </a>
                    <a href="#" class="btn btn-xs btn-link panel-close">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="panel-body">
                <?php echo $this->Form->create('Aluno', [
                        'role'          => 'form',
                        'enctype'       => 'multipart/form-data',
                        'class'         => '',
                        'inputDefaults' => [],
                ]); ?>
                <div class="form-group">
                    <label>
                        <?php echo __('Numero de Estudante)') ?>
                    </label>
                    <?php echo $this->Form->input('numero_estudante',
                            ['label' => false, 'div' => false, 'class' => 'form-control']); ?>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-8">
                        <?php

                            echo $this->Form->end([
                                    'label' => __('PESQUISAR', true),
                                    'class' => 'btn btn-blue btn-block',
                            ]);

                        ?>

                    </div>


                </div>
            </div>
        </div>
        <!-- end: SELECT BOX PANEL -->
    </div>
</div>

