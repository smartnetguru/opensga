
<div class="row">
<div class="col-sm-12">
<div class="tabbable">
<ul id="myTab4" class="nav nav-tabs tab-padding tab-space-3 tab-blue">
    <li class="active">
        <a href="#panel_overview" data-toggle="tab">
            Visao Geral
        </a>
    </li>
    <li>
        <a href="#panel_mensagens" data-toggle="tab">
            Relatórios<br /><span class="badge badge-danger"> Brevemente </span>
        </a>
    </li>

</ul>
<div class="tab-content">
<div class="tab-pane in active" id="panel_overview">
    <div class="row">
        <div class="col-sm-5 col-md-4">
            <div class="user-left">
                <div class="center">
                    <h4><?php echo h($curso['Curso']['name']); ?></h4>
                    <hr>
                    <h4>Código: <?php echo h($curso['Curso']['codigo']); ?></h4>
                    <hr>
                </div>
                <table class="table table-condensed table-hover">
                    <thead>
                    <tr>
                        <th colspan="3">Informações Básicas</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Unidade Orgânica:</td>
                        <td><?php echo h($curso['UnidadeOrganica']['name']) ?></td>
                    </tr>
                    <tr>
                        <td>Grau Académico:</td>
                        <td><?php echo h($curso['GrauAcademico']['name']); ?></td>
                    </tr>
                    <tr>
                        <td>Tipo de Curso</td>
                        <td><?php echo h($curso['TipoCurso']['name']) ?></td>
                    </tr>
                    <tr>
                        <td>Ano de Criação</td>
                        <td><?php echo h($curso['Curso']['ano_criacao']) ?></td>
                    </tr>
                    <tr>
                        <td>Duração</td>
                        <td><span class="label label-sm label-info"><?php echo h
                                ($curso['Curso']['duracao']); ?></span></td>
                    </tr>
                    <tr>
                        <td>Responsável do Curso</td>
                        <td>
                            <?php echo h($curso['CursoResponsavel']['User']['Entidade']['name']); ?>
                            </td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-7 col-md-8">
            <div class="row">
                <div class="action-list">
                    <?php echo $this->fetch('main-actions') ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h3>Informações Adicionais</h3>
                    <hr>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="label label-info control-label">
                            Total de Estudantes no Sistema
                        </label>
                        <h4> <?php echo h($aluno['Curso']['name']) ?> </h4>

                    </div>
                    <div class="form-group">
                        <label class="label label-info control-label">
                            Total de Estudantes Activos
                        </label>
                        <p> <?php echo h($aluno['Curso']['UnidadeOrganica']['name']) ?> </p>

                    </div>
                    <div class="form-group">
                        <label class="label label-info control-label">
                            Total de Estudantes Graduados
                        </label>
                        <p> <?php echo h($aluno['Aluno']['ano_ingresso']) ?> </p>
                    </div>
                    <div class="form-group">
                        <label class="label label-info control-label">
                            Novos Ingressos
                        </label>
                        <p> <?php echo h($aluno['Aluno']['PlanoEstudo']['name']) ?> </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="label label-info control-label">
                            Recém-Graduados
                        </label>
                        <p> <?php echo h($aluno['Entidade']['Bairro']['name']) ?> </p>

                    </div>
                    <div class="form-group">
                        <label class="label label-info control-label">
                            Total de Candidatos(Opção 1)
                        </label>
                        <p> <?php echo h($aluno['Entidade']['telemovel']) ?> </p>
                    </div>
                    <div class="form-group">
                        <label class="label label-info control-label">
                            Total de Candidatos(Opção 2)
                        </label>
                        <p> <?php echo h($aluno['Entidade']['User']['username']) ?> </p>

                    </div>
                    <div class="form-group">
                        <label class="label label-info control-label">
                            Total de Requisições Pendentes
                        </label>
                        <p> <?php echo h($aluno['Entidade']['email']) ?> </p>


                    </div>
                </div>

            </div>

            <div class="panel panel-white">
                <div class="panel-heading">
                    <i class="clip-menu"></i>
                    Actividades Recentes
                    <div class="panel-tools">
                        <a href="#" class="btn btn-xs btn-link panel-collapse collapses">
                        </a>
                        <a data-toggle="modal" href="#panel-config" class="btn btn-xs btn-link panel-config">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <a href="#" class="btn btn-xs btn-link panel-refresh">
                            <i class="fa fa-refresh"></i>
                        </a>
                        <a href="#" class="btn btn-xs btn-link panel-close">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div style="height:300px" class="panel-body panel-scroll ps-container">
                    <?php echo $this->fetch('actividades-recentes') ?>
                    <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px; width: 1051px; display: none;"><div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px; height: 300px; display: inherit;"><div class="ps-scrollbar-y" style="top: 0px; height: 206px;"></div></div></div>
            </div>
        </div>
    </div>
</div>
<div class="tab-pane" id="panel_detalhes">

</div>
<div class="tab-pane" id="panel_matriculas">
    <table id="projects" class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th>Ano Lectivo</th>
            <th>Curso</th>
            <th>Plano de Estudos</th>
            <th>Data</th>
            <th>Tipo de Matricula</th>
            <th>Estado da Matricula</th>
            <th>%Aprovacao</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($matriculas as $matricula) { ?>
            <tr>
                <td><?php echo h($matricula['AnoLectivo']['ano']) ?></td>
                <td><?php echo h($matricula['Curso']['name']) ?></td>
                <td><?php echo h($matricula['PlanoEstudo']['name']) ?></td>
                <td><?php echo h($matricula['Matricula']['data']) ?></td>
                <td><?php echo h($matricula['TipoMatricula']['name']) ?></td>
                <td><?php echo h($matricula['EstadoMatricula']['name']) ?></td>
                <td><?php echo h('') ?></td>
                <td>
                    <?php
                        echo $this->Html->link('Imprimir', array('controller' => 'matriculas', 'action' => 'print_comprovativo_renovacao_matricula', $matricula['Matricula']['id']))
                    ?>
                </td>
            </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
</div>
<div class="tab-pane" id="panel_historico">
    <table id="projects" class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th>Curso</th>
            <th>Ano de Inicio</th>
            <th>Ano de Termino</th>
            <th>Data de Termino</th>
            <th>Nota de Conclusao</th>
            <th>Motivo de Termino</th>
            <th>%Aprovacao</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($aluno['HistoricoCurso'] as $historico) { ?>
            <tr>
                <td><?php echo h($historico['Curso']['name']) ?></td>
                <td><?php echo h($historico['ano_ingresso']) ?></td>
                <td><?php echo h($historico['ano_fim']) ?></td>
                <td><?php echo h($historico['data_conclusao']) ?></td>
                <td><?php echo h($historico['nota_final']) ?></td>
                <td><?php
                        if ($historico['motivo_termino_curso_id']) {
                            echo h($historico['MotivoTerminoCurso']['name']);
                        }
                    ?></td>
                <td><?php echo h('') ?></td>
                <td>
                    <?php
                        if ($historico['motivo_termino_curso_id'] == 1) {
                            echo $this->Html->link('Imprimir Certificado de Conclusao', array('controller' => 'alunos', 'action' => 'print_certificado_conclusao_curso', $aluno['Aluno']['id'], $historico['Curso']['id'], $historico['ano_fim']));
                        } elseif ($historico['motivo_termino_curso_id'] == 2) {
                            echo $this->Html->link('Imprimir Comprovativo de Mudanca', array('controller' => 'alunos', 'action' => 'print_comprovativo_mudanca_curso_aluno', $aluno['Aluno']['id'], $historico['Curso']['id'], $historico['ano_fim']));
                        }
                    ?>
                </td>
            </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
</div>
</div>
</div>
</div>
</div>

<?php echo $this->fetch('content'); ?>

<?php
    echo $this->Html->script(array('/assets/js/perfil-estudante.js'));
?>

<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'scriptBottom')); ?>

$(document).ready(function() {

PagesUserProfile.init();
});
<?php $this->Html->scriptEnd(); ?>
