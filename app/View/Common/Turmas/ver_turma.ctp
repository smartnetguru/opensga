<?php
    /**
     * View do Perfil do Aluno
     *
     * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
     * @link          http://infomoz.net/opensga OpenSGA - Sistema de Gestão Académica
     * @author          Elisio Leonardo (elisio.leonardo@gmail.com)
     * @package       opensga
     * @subpackage    opensga.core.estudantes
     * @version       OpenSGA v 0.5.0
     * @since         OpenSGA v 0.1.0
     *
     */
?>

<?php
    echo $this->Html->css('/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css');
    echo $this->Html->css('/assets/plugins/bootstrap-social-buttons/social-buttons-3.css');
?>

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
                    <a href="#panel_estudantes" data-toggle="tab">
                        Estudantes
                    </a>
                </li>
                <li>
                    <a href="#panel_avaliacaos" data-toggle="tab">
                        Avaliacoes
                    </a>
                </li>
                <li>
                    <a href="#panel_relatorios" data-toggle="tab">
                        Relatorios
                    </a>
                </li>

            </ul>
            <div class="tab-content">
                <div class="tab-pane in active" id="panel_overview">
                    <div class="row">
                        <div class="col-sm-5 col-md-4">
                            <div class="user-left">
                                <div class="center">
                                    <h4><?php echo h($turma['Turma']['name']); ?></h4>

                                    <h4><?php echo h($turma['Curso']['UnidadeOrganica']['name']); ?></h4>

                                    <hr>
                                </div>
                                <table class="table table-condensed table-hover">
                                    <thead>
                                    <tr>
                                        <th colspan="3">Dados da Turma</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Disciplina</td>
                                        <td><?php echo h($turma['Disciplina']['name']); ?></td>
                                        <td><a class="show-tab" href="#panel_edit_account"><i
                                                        class="fa fa-pencil edit-user-info"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Curso</td>
                                        <td><?php echo h($turma['Curso']['name']); ?></td>
                                        <td><a class="show-tab" href="#panel_edit_account"><i
                                                        class="fa fa-pencil edit-user-info"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Ano Lectivo</td>
                                        <td><?php echo h($turma['AnoLectivo']['ano']); ?></td>
                                        <td><a class="show-tab" href="#panel_edit_account"><i
                                                        class="fa fa-pencil edit-user-info"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Plano de Estudos</td>
                                        <td><?php echo h($turma['PlanoEstudo']['name']); ?></td>
                                        <td><a class="show-tab" href="#panel_edit_account"><i
                                                        class="fa fa-pencil edit-user-info"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Ano Curricular</td>
                                        <td><span
                                                    class="label label-sm label-info"><?php echo h($turma['Turma']['ano_curricular']); ?></span>
                                        </td>
                                        <td><a class="show-tab" href="#panel_edit_account"><i
                                                        class="fa fa-pencil edit-user-info"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Semestre Curricular</td>
                                        <td><?php echo h($turma['Turma']['semestre_curricular']); ?></td>
                                        <td><a class="show-tab" href="#panel_edit_account"><i
                                                        class="fa fa-pencil edit-user-info"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Turno</td>
                                        <td><?php echo h($turma['Turno']['name']); ?></td>
                                        <td><a class="show-tab" href="#panel_edit_account"><i
                                                        class="fa fa-pencil edit-user-info"></i></a></td>
                                    </tr>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                        <div class="col-sm-7 col-md-8">
                            <div class="row">
                                <?php echo $this->fetch('menu-itens') ?>


                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h3>Docentes e Estudantes</h3>
                                    <hr>
                                </div>
                                <div class="col-md-6">
                                    <table class="table table-condensed table-hover">
                                        <thead>
                                        <tr>
                                            <th colspan="3">Docentes</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Regente</td>
                                            <td><?php
                                                    if (isset($regente['Docente']['Entidade']['name'])) {
                                                        echo h($regente['Docente']['Entidade']['name']);
                                                    }
                                                ?></td>
                                            <td><a class="show-tab" href="#panel_edit_account"><i
                                                            class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Assistente</td>
                                            <td><?php
                                                    foreach ($assistentes as $assistente) {
                                                        echo h($assistente['Docente']['Entidade']['name']);
                                                    }
                                                ?></td>
                                            <td><a class="show-tab" href="#panel_edit_account"><i
                                                            class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <table class="table table-condensed table-hover">
                                        <thead>
                                        <tr>
                                            <th colspan="3">Estudantes</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Total de Estudantes</td>
                                            <td><?php echo h(''); ?></td>
                                            <td><a class="show-tab" href="#panel_edit_account"><i
                                                            class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Homens</td>
                                            <td><?php echo h(''); ?></td>
                                            <td><a class="show-tab" href="#panel_edit_account"><i
                                                            class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Mulheres</td>
                                            <td><?php echo h(''); ?></td>
                                            <td><a class="show-tab" href="#panel_edit_account"><i
                                                            class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Idade Media</td>
                                            <td><?php echo h(''); ?></td>
                                            <td><a class="show-tab" href="#panel_edit_account"><i
                                                            class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        </tbody>
                                    </table>
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
                                    <ul class="activities">
                                        <li>
                                            <a href="javascript:void(0)" class="activity">
                                                <i class="clip-upload-2 circle-icon circle-green"></i>
                                                <span class="desc">You uploaded a new release.</span>
                                                <div class="time">
                                                    <i class="fa fa-time bigger-110"></i>
                                                    2 hours ago
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="activity">
                                                <!--<img src="assets/images/avatar-2.jpg" alt="image">-->
                                                <span class="desc">Nicole Bell sent you a message.</span>
                                                <div class="time">
                                                    <i class="fa fa-time bigger-110"></i>
                                                    3 hours ago
                                                </div>
                                            </a>
                                        </li>

                                    </ul>
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
                <div class="tab-pane" id="panel_estudantes">
                    <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Numero</th>
                            <th>Apelido</th>
                            <th>Nomes</th>
                            <th>Frequencia</th>
                            <th>N. Ex. Normal</th>
                            <th>N. Ex. Recorrencia</th>
                            <th>M. Final</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            $i = 1;
                            foreach ($inscricaos as $inscricao) {
                                ?>
                                <tr>
                                    <td><?php echo $i++ ?></td>
                                    <td><?php echo h($inscricao['Aluno']['codigo']) ?></td>
                                    <td><?php echo h($inscricao['Entidade']['apelido']) ?></td>
                                    <td><?php echo h($inscricao['Entidade']['nomes']) ?></td>
                                    <td><?php echo h($inscricao['Inscricao']['nota_frequencia']) ?></td>
                                    <td><?php echo h($inscricao['Inscricao']['nota_exame_normal']) ?></td>
                                    <td><?php echo h($inscricao['Inscricao']['nota_exame_recorrencia']) ?></td>
                                    <td><?php echo h($inscricao['Inscricao']['nota_final']) ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane" id="panel_avaliacaos">
                    <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Tipo de Avaliacao</th>
                            <th>Ordem</th>
                            <th>Peso</th>
                            <th>Data Marcada</th>
                            <th>Data Realizada</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            $i = 1;
                            foreach ($turmaTipoAvaliacaos as $avaliacao) {
                                ?>
                                <tr>
                                    <td><?php echo $i++ ?></td>
                                    <td><?php echo $this->Html->link($avaliacao['TipoAvaliacao']['name'], [
                                                'controller' => 'avaliacaos',
                                                'action'     => 'ver_avaliacao',
                                                $avaliacao['TurmaTipoAvaliacao']['id'],
                                        ]) ?></td>
                                    <td><?php echo h($avaliacao['TurmaTipoAvaliacao']['ordem']) ?></td>
                                    <td><?php echo h($avaliacao['TurmaTipoAvaliacao']['peso']) ?></td>
                                    <td><?php echo h($avaliacao['TurmaTipoAvaliacao']['data_marcada']) ?></td>
                                    <td><?php echo h($avaliacao['TurmaTipoAvaliacao']['data_realizada']) ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

<?php echo $this->fetch('content'); ?>

<?php
    // echo $this->Html->script(array('/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js'));
    // echo $this->Html->script(array('/assets/plugins/jquery.pulsate/jquery.pulsate.min.js'));
    echo $this->Html->script(['/assets/js/perfil-estudante.js']);
?>

<?php $this->Html->scriptStart(['inline' => false, 'block' => 'scriptBottom']); ?>

$(document).ready(function() {

PagesUserProfile.init();
});

/*
* Tabs
*/

/*$("#tab-panel-1").createTabs();

$('#table-ia').dataTable({"iDisplayLength": 5});
$('#table-iap').dataTable({"iDisplayLength": 5});
$('#table-tc').dataTable({
"bSort": false,
"iDisplayLength": 5,
"aLengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]]
}); */
<?php $this->Html->scriptEnd(); ?>
<?php //debug($todas_inscricoes); ?>


