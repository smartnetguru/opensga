<?php
    $this->BreadCumbs->addCrumb('Alunos', '/alunos');
    $this->BreadCumbs->addCrumb('Lista de Alunos', '/alunos/index');

?>

<div class="row">
    <?php echo $this->fetch('top-actions'); ?>
    <div class="col-md-12">
        <!-- start: DYNAMIC TABLE PANEL -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="icon-external-link-sign"></i>
                Matriculados por Curso
            </div>
            <div class="panel-body">
                <div role="grid" class="dataTables_wrapper form-inline" id="tabelaAjax2">

                    <table id="tabela-ajax"
                           class="table table-striped table-bordered table-hover table-full-width dataTable">
                        <thead>

                        <tr>
                            <th>#</th>
                            <th>Curso</th>
                            <th>Novos Ingressos</th>
                            <th>Renovacao de Matricula</th>
                            <th>Reingressos</th>
                        </tr>

                        </thead>
                        <tbody>
                        <?php $i=1;?>
                        <?php foreach ($matriculas as $matricula) { ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?php echo $matricula['curso_nome'] ?></td>
                                <td><?php echo $matricula['novos_ingressos'] ?></td>
                                <td><?php echo $matricula['renovacao'] ?></td>
                                <td><?php echo $matricula['reingressos'] ?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>

                </div>
                <div class="demo-container">
                    <div id="placeholder" class="demo-placeholder" width="800px" height="200px"
                         style="height: 300px"></div>
                </div>
            </div>
        </div>
        <!-- end: DYNAMIC TABLE PANEL -->
    </div>
</div>


