<?php
    /**
     * View do Perfil do Aluno
     *
     * @copyright       Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
     * @link            http://infomoz.net/opensga OpenSGA - Sistema de Gestão Académica
     * @author          Elisio Leonardo (elisio.leonardo@gmail.com)
     * @package         opensga
     * @subpackage      opensga.core.estudantes
     * @version         OpenSGA v 0.5.0
     * @since           OpenSGA v 0.1.0
     *
     */
?>


<?php echo $this->fetch('breadcumbs') ?>
<div class="row">
    <?php
        foreach ($is_regular as $ir) {
            ?>
            <div class="<?php echo $classe_estado ?>">
                <strong><?= $ir['mensagem']; ?></strong></div>

        <?php
        }
    ?>
</div>

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
                    <a href="#panel_detalhes" data-toggle="tab">
                        Detalhes<br/><span class="badge badge-danger"> Brevemente </span>
                    </a>
                </li>
                <li>
                    <a href="#panel_matriculas" data-toggle="tab">
                        Matriculas
                    </a>
                </li>
                <li>
                    <a href="#panel_inscricoes" data-toggle="tab">
                        Inscricoes<br/><span class="badge badge-danger"> Brevemente </span>
                    </a>
                </li>
                <li>
                    <a href="#panel_pagamentos" data-toggle="tab">
                        Pagamentos<br/><span class="badge badge-danger"> Brevemente </span>
                    </a>
                </li>
                <li>
                    <a href="#panel_requisicoes" data-toggle="tab">
                        Requisicoes<br/><span class="badge badge-danger"> Brevemente </span>
                    </a>
                </li>
                <li>
                    <a href="#panel_historico" data-toggle="tab">
                        Historico
                    </a>
                </li>
                <li>
                    <a href="#panel_bolsas" data-toggle="tab">
                        Bolsas de Estudo<br/><span class="badge badge-danger"> Brevemente </span>
                    </a>
                </li>
                <li>
                    <a href="#panel_mensagens" data-toggle="tab">
                        Mensagens<br/><span class="badge badge-danger"> Brevemente </span>
                    </a>
                </li>

            </ul>
            <div class="tab-content">
                <div class="tab-pane in active" id="panel_overview">
                    <div class="row">
                        <div class="col-sm-5 col-md-4">
                            <div class="user-left">
                                <div class="center">
                                    <h4><?php echo h($aluno['Entidade']['name']); ?></h4>
                                    <?php if(Configure::read('environment')=='prod'):?>
                                    <?php

                                        $file = '/Fotos/Estudantes/' . $aluno['Aluno']['ano_ingresso'] . '/' . $aluno['Aluno']['codigo'] . '.jpg';
                                        if (!$signedUrl = $this->AmazonS3->getSignedUrl($file)) {

                                            $file = '/Fotos/profile2.png';
                                            $signedUrl = $this->AmazonS3->getSignedUrl($file);
                                        }

                                    ?>
                                    <div data-provides="fileupload" class="fileupload fileupload-new">
                                        <div class="user-image">
                                            <div
                                                class="fileupload-new thumbnail"><?php echo $this->Html->image($signedUrl,
                                                    ['style' => 'max-width:330px;max-height:380px']); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif;?>
                                    <h4><?php echo h($aluno['Aluno']['codigo']); ?></h4>
                                    <hr>
                                    <p>
                                        <a class="btn btn-facebook btn-sm btn-squared">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a class="btn btn-twitter btn-sm btn-squared">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a class="btn btn-linkedin btn-sm btn-squared">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                        <a class="btn btn-google-plus btn-sm btn-squared">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                        <a class="btn btn-github btn-sm btn-squared">
                                            <i class="fa fa-github"></i>
                                        </a>
                                    </p>
                                    <hr>
                                </div>
                                <table class="table table-condensed table-hover">
                                    <thead>
                                    <tr>
                                        <th colspan="3">Dados Pessoais</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Data de Nascimento</td>
                                        <td><?php echo h($aluno['Entidade']['data_nascimento']); ?></td>
                                        <td><a class="show-tab" href="#panel_edit_account"><i
                                                    class="fa fa-pencil edit-user-info"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Sexo</td>
                                        <td><?php
                                                if (isset($aluno['Entidade']['Genero']['name'])) {
                                                    echo h($aluno['Entidade']['Genero']['name']);
                                                } ?></td>
                                        <td><a class="show-tab" href="#panel_edit_account"><i
                                                    class="fa fa-pencil edit-user-info"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Nome do Pai</td>
                                        <td><?php echo h($aluno['Entidade']['nome_pai']) ?></td>
                                        <td><a class="show-tab" href="#panel_edit_account"><i
                                                    class="fa fa-pencil edit-user-info"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Nome da Mae</td>
                                        <td><?php echo h($aluno['Entidade']['nome_mae']) ?></td>
                                        <td><a class="show-tab" href="#panel_edit_account"><i
                                                    class="fa fa-pencil edit-user-info"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Nacionalidade</td>
                                        <td><span
                                                class="label label-sm label-info"><?php echo h($aluno['Entidade']['PaisNascimento']['name']); ?></span>
                                        </td>
                                        <td><a class="show-tab" href="#panel_edit_account"><i
                                                    class="fa fa-pencil edit-user-info"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Naturalidade</td>
                                        <td>
                                            <?php echo h($aluno['Entidade']['naturalidade']); ?>
                                            -
                                            <?php if (isset($aluno['Entidade']['ProvinciaNascimento']['name'])) {
                                                echo h($aluno['Entidade']['ProvinciaNascimento']['name']);
                                            }
                                            ?>
                                        </td>
                                        <td><a class="show-tab" href="#panel_edit_account"><i
                                                    class="fa fa-pencil edit-user-info"></i></a></td>
                                    </tr>

                                    </tbody>
                                </table>
                                <table class="table table-condensed table-hover">
                                    <thead>
                                    <tr>
                                        <th colspan="3">Informacoes do Sistema</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Ultimo acesso</td>
                                        <td><?php echo h($aluno['Entidade']['User']['ultimo_login']); ?></td>
                                        <td><a class="show-tab" href="#panel_edit_account"><i
                                                    class="fa fa-pencil edit-user-info"></i></a></td>
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
                                    <h3>Dados Academicos e Contactos</h3>
                                    <hr>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label label-info control-label">
                                            Curso
                                        </label>
                                        <h4> <?php echo h($aluno['Curso']['name']) ?> </h4>

                                    </div>
                                    <div class="form-group">
                                        <label class="label label-info control-label">
                                            Faculdade
                                        </label>

                                        <p> <?php echo h($aluno['Curso']['UnidadeOrganica']['name']) ?> </p>

                                    </div>
                                    <div class="form-group">
                                        <label class="label label-info control-label">
                                            Ano de Ingresso
                                        </label>

                                        <p> <?php echo h($aluno['Aluno']['ano_ingresso']) ?> </p>
                                    </div>
                                    <div class="form-group">
                                        <label class="label label-info control-label">
                                            Curriculum
                                        </label>

                                        <p> <?php echo h($aluno['PlanoEstudo']['name']) ?> </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label label-info control-label">
                                            Morada
                                        </label>

                                        <p> <?php if (isset($aluno['Entidade']['Bairro']['name'])) {
                                                echo h($aluno['Entidade']['Bairro']['name']);
                                            }
                                            ?> </p>

                                    </div>
                                    <div class="form-group">
                                        <label class="label label-info control-label">
                                            Telemovel
                                        </label>

                                        <p> <?php echo h($aluno['Entidade']['telemovel']) ?> </p>
                                    </div>
                                    <div class="form-group">
                                        <label class="label label-info control-label">
                                            Email Institucional
                                        </label>

                                        <p> <?php echo h($aluno['Entidade']['User']['username']) ?> </p>

                                    </div>
                                    <div class="form-group">
                                        <label class="label label-info control-label">
                                            Email Pessoal
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
                                        <a data-toggle="modal" href="#panel-config"
                                           class="btn btn-xs btn-link panel-config">
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
                                    <div class="ps-scrollbar-x-rail"
                                         style="left: 0px; bottom: 3px; width: 1051px; display: none;">
                                        <div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div>
                                    </div>
                                    <div class="ps-scrollbar-y-rail"
                                         style="top: 0px; right: 3px; height: 300px; display: inherit;">
                                        <div class="ps-scrollbar-y" style="top: 0px; height: 206px;"></div>
                                    </div>
                                </div>
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
                        <?php foreach ($aluno['Matricula'] as $matricula) { ?>
                            <tr>
                                <td><?php echo h($matricula['AnoLectivo']['ano']) ?></td>
                                <td><?php echo h($matricula['Curso']['name']) ?></td>
                                <td><?php
                                        if (isset($matricula['PlanoEstudo']['name'])) {
                                            echo h($matricula['PlanoEstudo']['name']);
                                        } ?>
                                </td>
                                <td><?php echo h($matricula['data']) ?></td>
                                <td><?php echo h($matricula['TipoMatricula']['name']) ?></td>
                                <td><?php echo h($matricula['EstadoMatricula']['name']) ?></td>
                                <td><?php echo h('') ?></td>
                                <td>
                                    <?php
                                        echo $this->Html->link('Imprimir', [
                                            'controller' => 'matriculas',
                                            'action'     => 'print_comprovativo_renovacao_matricula',
                                            $matricula['id']
                                        ])
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
                                            echo $this->Html->link('Imprimir Certificado de Conclusao', [
                                                'controller' => 'alunos',
                                                'action'     => 'print_certificado_conclusao_curso',
                                                $aluno['Aluno']['id'],
                                                $historico['Curso']['id'],
                                                $historico['ano_fim']
                                            ]);
                                        } elseif ($historico['motivo_termino_curso_id'] == 2) {
                                            echo $this->Html->link('Imprimir Comprovativo de Mudanca', [
                                                'controller' => 'alunos',
                                                'action'     => 'print_comprovativo_mudanca_curso_aluno',
                                                $aluno['Aluno']['id'],
                                                $historico['Curso']['id'],
                                                $historico['ano_fim']
                                            ]);
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
    echo $this->Html->script(['/assets/js/perfil-estudante.js']);
?>

<?php $this->Html->scriptStart(['inline' => false, 'block' => 'scriptBottom']); ?>

$(document).ready(function() {

PagesUserProfile.init();
});
<?php $this->Html->scriptEnd(); ?>
