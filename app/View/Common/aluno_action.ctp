<div class="row">
    <?php
        foreach ($aluno['isRegular'] as $ir) {
            ?>
            <div class="<?php echo $aluno['classeEstado'] ?>"><strong><?php echo $ir['mensagem']; ?></strong></div>

            <?php
        }
    ?>
</div>
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
                        <td><?php echo h($aluno['Faculdade']['name']) ?></td>
                    </tr>
                    <tr>
                        <td><?php echo __('Ano de Ingresso') ?></td>
                        <td><?php echo h($aluno['Aluno']['ano_ingresso']) ?></td>
                    </tr>
                    </tbody>
                </table>
                <p>
                    <?php echo $this->Html->link('<i class="fa fa-plus"></i>Voltar para o Perfil',
                            ['controller' => 'alunos', 'action' => 'perfil_estudante', $aluno['Aluno']['id']],
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
                <?php echo $this->fetch('aluno-form'); ?>
            </div>
        </div>
        <!-- end: SELECT BOX PANEL -->
    </div>
</div>


<?php echo $this->fetch('content'); ?>

