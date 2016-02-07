<?php
    $this->Html->addCrumb('OpenSGA', '/');
    $this->Html->addCrumb('Página Inicial', '/');
    $group_id = $this->Session->read('Auth.User.group_id');
?>

<div class="row">
    <div class="col-sm-2">
        <?php echo $this->Html->link('<i class="fa fa-plus fa-2x"></i>	Estudantes',
                ['controller' => 'alunos', 'action' => 'index', 'faculdade' => true], [
                        'escape' => false,
                        'class'  => 'btn btn-icon btn-block',
                ]) ?>
    </div>
    <div class="col-sm-2">
        <?php echo $this->Html->link('<i class="fa fa-plus fa-2x"></i>	Inscricoes',
                ['controller' => 'inscricaos', 'action' => 'index', 'faculdade' => true], [
                        'escape' => false,
                        'class'  => 'btn btn-icon btn-block',
                ]) ?>
    </div>
    <div class="col-sm-2">
        <?php echo $this->Html->link('<i class="fa fa-plus fa-2x"></i>	Turmas',
                ['controller' => 'turmas', 'action' => 'index', 'faculdade' => true], [
                        'escape' => false,
                        'class'  => 'btn btn-icon btn-block',
                ]) ?>
    </div>
    <div class="col-sm-2">
        <?php echo $this->Html->link('<i class="fa fa-plus fa-2x"></i>	Docentes',
                ['controller' => 'docentes', 'action' => 'index', 'faculdade' => true], [
                        'escape' => false,
                        'class'  => 'btn btn-icon btn-block',
                ]) ?>
    </div>
    <div class="col-sm-2">
        <?php echo $this->Html->link('<i class="fa fa-wrench fa-2x"></i>	Manutencao',
                ['controller' => 'configs', 'action' => 'manutencao', 'faculdade' => true], [
                        'escape' => false,
                        'class'  => 'btn btn-icon btn-block',
                ]) ?>
    </div>
</div>

<div class="container_12">


    <div class="row">
        <div class="col-sm-4">
            <div class="block-border">
                <div class="block-header">
                    <h1><?php echo __('Estudantes') ?></h1><span></span>
                </div>
                <div class="block-content">

                    <ul class="overview-list">
                        <li>
                            <a href="javascript:void(0);"><span><?php echo $total_alunos_faculdade ?></span><?php echo __('Estudantes cadastrados no Sistema') ?>
                            </a></li>
                        <li>
                            <a href="javascript:void(0);"><span><?php echo $total_alunos_activos_faculdade ?></span><?php echo __('Estudantes Activos no Sistema') ?>
                            </a></li>
                        <li>
                            <a href="javascript:void(0);"><span><?php echo $total_matriculas_activas_faculdade ?></span> <?php echo __('Matriculas Renovadas em ' . $this->Session->read('SGAConfig.ano_lectivo')) ?>
                            </a></li>
                        <li>
                            <a href="javascript:void(0);"><span><?php echo $total_matriculas_nao_renovadas ?></span> <?php echo __('Matriculas Nao Renovadas em ' . $this->Session->read('SGAConfig.ano_lectivo')) ?>
                            </a></li>
                        <?php if (isset($total_alunos_fora_tempo)) { ?>
                            <li>
                                <a href="javascript:void(0);"><span><?php echo $total_alunos_fora_tempo ?></span><?php echo __('Estudantes fora do tempo de Estudos') ?>
                                </a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="block-border">
                <div class="block-header">
                    <h1><?php echo __('Inscricoes') ?></h1><span></span>
                </div>
                <div class="block-content">

                    <ul class="overview-list">
                        <li>
                            <a href="javascript:void(0);"><span><?php echo $total_inscricoes_activas ?></span><?php echo __('Inscricoes Activas no Sistema') ?>
                            </a></li>
                        <li>
                            <a href="javascript:void(0);"><span><?php echo $total_inscricoes_activas_ano ?></span> <?php echo __('Inscricoes Activas em ' . $this->Session->read('SGAConfig.ano_lectivo')) ?>
                            </a></li>
                        <li>
                            <a href="javascript:void(0);"><span><?php echo $total_inscricoes_passadas_abertas ?></span><?php echo __('Inscricoes passadas por Fechar') ?>
                            </a></li>

                    </ul>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="block-border">
                <div class="block-header">
                    <h1><?php echo __('Turmas') ?></h1><span></span>
                </div>
                <div class="block-content">

                    <ul class="overview-list">
                        <li>
                            <a href="javascript:void(0);"><span><?php echo $total_turmas_activas ?></span><?php echo __('Turmas Activas no Sistema') ?>
                            </a></li>
                        <li>
                            <a href="javascript:void(0);"><span><?php echo $total_turmas_activas_ano ?></span> <?php echo __('Turmas Activas em ' . $this->Session->read('SGAConfig.ano_lectivo')) ?>
                            </a></li>
                        <li>
                            <a href="javascript:void(0);"><span><?php echo $total_turmas_passadas ?></span><?php echo __('Turmas passadas por fechar') ?>
                            </a></li>
                        <li>
                            <a href="javascript:void(0);"><span><?php echo $total_turmas_sem_docente ?></span><?php echo __('Turmas Activas Sem Nenhum Docente') ?>
                            </a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="clear height-fix"></div>

</div>


