<?php
    $this->Html->addCrumb('OpenSGA', '/');
    $this->Html->addCrumb('Página Inicial', '/');
?>
<div class='row'>
    <div class="action-list">
        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-group fa-2x"></i>	Estudantes',
                    ['controller' => 'alunos', 'action' => 'index'],
                    ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
        </div>
        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-group fa-2x"></i>	Candidatos',
                    ['controller' => 'candidaturas', 'action' => 'index'], [
                            'escape' => false,
                            'class'  => 'btn btn-icon btn-block',
                    ]) ?>
        </div>
        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-pencil fa-2x"></i>	Matriculas',
                    ['controller' => 'matriculas', 'action' => 'index'],
                    ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>

        </div>
        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-pencil fa-2x"></i>	Bolsas de Estudos',
                    ['controller' => 'alunos', 'action' => 'pesquisar_candidato'],
                    ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>

        </div>
        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-gift  fa-2x"></i>Cerimonias de Graduacao',
                    ['controller' => 'cerimonia_graduacaos', 'action' => 'index'],
                    ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
        </div>
        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-gift  fa-2x"></i>Cartoes de Estudantes',
                    ['controller' => 'requisicoes_pedidos', 'action' => 'cartao_estudantes', 'plugin' => 'requisicoes'],
                    ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
        </div>
        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-gift  fa-2x"></i>Requisicoes',
                    ['controller' => 'requisicoes_pedidos', 'action' => 'index', 'plugin' => 'requisicoes'],
                    ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
        </div>
        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-group fa-2x"></i>	Alumnis',
                    ['controller' => 'alumni_candidato_alumnis', 'action' => 'index'], [
                            'escape' => false,
                            'class'  => 'btn btn-icon btn-block',
                    ]) ?>
        </div>
        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-asterisk fa-2x"></i>	Configurações',
                    ['controller' => 'configs', 'action' => 'index'], [
                            'escape' => false,
                            'class'  => 'btn btn-icon btn-block',
                    ]) ?>
        </div>
    </div>
</div>


<div cass="row">
    <div class="col-sm-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="clip-stats"></i>
                Ultimos Usuarios Activos
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
            <div class="block-content">
                <div class="dataTables_wrapper">
                    <table id="lastLogin" class="table">
                        <thead>
                        <tr>

                            <th><?php echo __('Usuário') ?></th>
                            <th><?php echo __('Grupo') ?></th>
                            <th><?php echo __('Data e Hora') ?></th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($ultimos_users as $user): ?>
                            <tr>
                                <td><?php echo $user['User']['username']; ?>&nbsp;</td>
                                <td><?php echo $user['Group']['name']; ?>&nbsp;</td>
                                <td><?php echo $this->Time->format('d/m H:i', $user['User']['ultimo_login'],
                                            date_default_timezone_get()); ?>&nbsp;</td>


                            </tr>
                        <?php endforeach; ?>                            </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="block-border">
            <div class="block-header">
                <h1><?php echo __('Relatório de SMS') ?></h1><span></span>
            </div>
            <div class="block-content">
                <div class="alert info no-margin top">Existem 12 pedidos de suporte abertos.</div>
                <ul class="overview-list">
                    <li>
                        <a href="javascript:void(0);"><span><?php echo $sms_recebidas_24 ?></span><?php echo __('SMS Recebidas nas Últimas 24 Horas') ?>
                        </a></li>
                    <li>
                        <a href="javascript:void(0);"><span><?php echo $sms_enviadas_24 ?></span> <?php echo __('SMS Enviadas nas Últimas 24 Horas') ?>
                        </a></li>
                    <li>
                        <a href="javascript:void(0);"><span><?php echo $sms_recebidas_30 ?></span><?php echo __('SMS Recebidas nos Últimos 30 dias') ?>
                        </a></li>
                    <li>
                        <a href="javascript:void(0);"><span><?php echo $sms_enviadas_30 ?></span><?php echo __('SMS enviadas nos Últimos 30 dias') ?>
                        </a></li>

                </ul>
            </div>
        </div>
    </div>


    <div class="col-sm-4">
        <div class="block-border">
            <div class="block-header">
                <h1><?php echo __('Relatório Rápido') ?></h1><span></span>
            </div>
            <div class="block-content">
                <div class="alert info no-margin top">Existem 12 pedidos de suporte abertos.</div>
                <ul class="overview-list">
                    <li>
                        <a href="javascript:void(0);"><span><?php echo $total_alunos_activos ?></span><?php echo __('Alunos activos no Sistema') ?>
                        </a></li>
                    <li>
                        <a href="javascript:void(0);"><span><?php echo $total_matriculas_activas ?></span> <?php echo __('Matriculas Realizadas em ' . $this->Session->read('SGAConfig.ano_lectivo')) ?>
                        </a></li>
                    <li>
                        <a href="javascript:void(0);"><span><?php echo $facturas_pagas ?></span><?php echo __('Facturas Pagas Este mes') ?>
                        </a></li>
                    <li><a href="javascript:void(0);"><span
                                    style="width: 200px"><?php echo $this->Number->currency($valor_arrecadado[0][0]['valor'],
                                        'MZN') ?></span><?php echo __('Arrecadados') ?> </a></li>
                    <li><a href="javascript:void(0);"><span
                                    style="width: 200px"><?php echo $this->Number->currency($valor_divida,
                                        'MZN') ?></span><?php echo __('Em divida') ?> </a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
