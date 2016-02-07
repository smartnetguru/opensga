<?php
    $this->BreadCumbs->addCrumb('Turmas', '/turmas');
    $this->BreadCumbs->addCrumb($turma['Turma']['name'], '/turmas/ver_turma/' . $turma['Turma']['id']);
    $this->BreadCumbs->addCrumb(__('Adicionar Docente'), '#');


?>


<div class="row">
    <div class="col-sm-6">
        <!-- start: TEXT AREA PANEL -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-external-link-square"></i>
                Informacoes da Turma
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
                        <td><?php echo __('Nome do Curso') ?></td>
                        <td><?php echo h($turma['Curso']['name']) ?></td>
                    </tr>
                    <tr>
                        <td><?php echo __('Nome da Disciplina') ?></td>
                        <td><?php echo h($turma['Disciplina']['name']) ?></td>
                    </tr>
                    <tr>
                        <td><?php echo __('Ano Curricular') ?></td>
                        <td><?php echo h($turma['Turma']['ano_curricular']) ?></td>
                    </tr>
                    <tr>
                        <td><?php echo __('Semestre Curricular') ?></td>
                        <td><?php echo h($turma['Turma']['semestre_curricular']) ?></td>
                    </tr>
                    <tr>
                        <td><?php echo __('Ano Lectivo') ?></td>
                        <td><?php echo h($turma['AnoLectivo']['ano']) ?></td>
                    </tr>
                    <tr>
                        <td><?php echo __('Semestre Lectivo') ?></td>
                        <td><?php echo h($turma['SemestreLectivo']['semestre']) ?></td>
                    </tr>
                    <tr>
                        <td><?php echo __('Total de Alunos') ?></td>
                        <td><?php echo h($turma['Turma']['total_alunos']) ?></td>
                    </tr>
                    </tbody>
                </table>
                <p>
                    <?php echo $this->Html->link('<i class="fa fa-plus"></i>Ver Turma',
                            ['controller' => 'turmas', 'action' => 'ver_turma', $turma['Turma']['id']],
                            ['class' => 'btn btn-green', 'escape' => false]) ?>
                </p>

            </div>
        </div>
        <!-- end: TEXT AREA PANEL -->
    </div>

    <div class="col-sm-6">
        <!-- start: TEXT AREA PANEL -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-external-link-square"></i>
                Informacoes do Docente
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
                <?php echo $this->fetch('turma-form'); ?>

            </div>
        </div>
        <!-- end: TEXT AREA PANEL -->
    </div>

</div>

