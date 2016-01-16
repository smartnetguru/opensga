<?php echo $this->element('header'); ?>
    <!-- start: MAIN CONTAINER -->
    <div class="main-container">
    <div class="navbar-content">
        <!-- start: SIDEBAR -->
        <div class="main-navigation navbar-collapse collapse">
            <!-- start: MAIN MENU TOGGLER BUTTON -->
            <div class="navigation-toggler">
                <i class="clip-chevron-left"></i>
                <i class="clip-chevron-right"></i>
            </div>
            <!-- end: MAIN MENU TOGGLER BUTTON -->
            <!-- start: MAIN NAVIGATION MENU -->
            <ul class="main-navigation-menu">
                <li class="active open">
                <li><?php echo $this->Html->link('<i class="clip-home-3"></i>
                        <span class="title"> Pagina Inicial </span><span class="selected"></span>', '/',
                        ['escape' => false]) ?></li>
                <a href="index.html">
                </a>
                </li>

                <li>
                    <a href="javascript:void(0)"><i class="clip-grid-6"></i>
                        <span class="title"> Cadastros </span><i class="icon-arrow"></i>
                        <span class="selected"></span>
                    </a>
                    <ul class="sub-menu">
                        <li><?php echo $this->Html->link(__('Disciplinas'),
                                ['controller' => 'disciplinas', 'action' => 'index']) ?></li>
                        <li><?php echo $this->Html->link(sprintf(__('Cursos', true)),
                                ['controller' => 'cursos', 'action' => 'index'], ['class' => 'link']); ?></li>
                        <li><?php echo $this->Html->link(sprintf(__('Editoras', true)),
                                ['controller' => 'cursos', 'action' => 'index'], ['class' => 'link']); ?></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)"><i class="clip-pencil"></i>
                        <span class="title"> Pessoas </span><i class="icon-arrow"></i>
                        <span class="selected"></span>
                    </a>
                    <ul class="sub-menu">

                        <li><?php echo $this->Html->link(__('Todas Pessoas'),
                                ['controller' => 'entidades', 'action' => 'index']) ?></li>
                        <li><?php echo $this->Html->link(__('Docentes'),
                                ['controller' => 'docentes', 'action' => 'index']) ?></li>
                        <li><?php echo $this->Html->link(__('Funcionários'),
                                ['controller' => 'funcionarios', 'action' => 'index']) ?></li>
                        <li><?php echo $this->Html->link(__('Investigadores'),
                                ['controller' => 'investigadores', 'action' => 'index']) ?></li>

                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)"><i class="clip-user-2"></i>
                        <span class="title">Projectos de Pesquisa</span><i class="icon-arrow"></i>
                        <span class="selected"></span>
                    </a>
                    <ul class="sub-menu">
                        <li><?php echo $this->Html->link('Projectos de Pesquisa',
                                ['controller' => 'projecto_pesquisas', 'action' => 'index']) ?></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)"><i class="clip-file"></i>
                        <span class="title">Publicacoes</span><i class="icon-arrow"></i>
                        <span class="selected"></span>
                    </a>
                    <ul class="sub-menu">
                        <li><?php echo $this->Html->link(__('Publicacoes'),
                                ['controller' => 'bolsa_bolsas', 'action' => 'index']) ?></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)"><i class="clip-file"></i>
                        <span class="title">Trabalhos Academicos</span><i class="icon-arrow"></i>
                        <span class="selected"></span>
                    </a>
                    <ul class="sub-menu">
                        <li><?php echo $this->Html->link(__('Trabalhos Academicos'),
                                ['controller' => 'trabalho_academicoes', 'action' => 'index']) ?></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)"><i class="clip-attachment-2"></i>
                        <span class="title">Avaliacao de Desempenho</span><i class="icon-arrow"></i>
                        <span class="selected"></span>
                    </a>
                    <ul class="sub-menu">
                        <li><?php echo $this->Html->link('Visão Geral',
                                ['controller' => 'sade_avaliacaos', 'action' => 'index']) ?></li>
                        <li><?php echo $this->Html->link('Auto-Avaliação',
                                ['controller' => 'sade_auto_avaliacaos', 'action' => 'docente']) ?></li>
                        <li><?php echo $this->Html->link(sprintf(__('Avaliação Qualitativa', true)),
                                ['controller' => 'sade_avaliacao_qualitativas', 'action' => 'index'],
                                ['class' => 'link']); ?></li>
                        <li><?php echo $this->Html->link(sprintf(__('Relatórios', true)),
                                ['controller' => 'sade_avaliacaos', 'action' => 'relatorios'],
                                ['class' => 'link']); ?></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:;"><i class="clip-location"></i>
                        <span class="title">Relatorios</span></span><i class="icon-arrow"></i>
                        <span class="selected"></span>
                    </a>
                    <ul class="sub-menu">
                        <li><?php echo $this->Html->link(__('Relatórios Gerais'),
                                ['controller' => 'relatorios', 'action' => 'index', 'plugin' => false]) ?></li>
                        <li><?php echo $this->Html->link(__('Resumo Semestral'), [
                                'controller' => 'relatorios',
                                'action'     => 'resumo_semestral',
                                'plugin'     => false
                            ]) ?></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;"><i class="clip-location"></i>
                        <span class="title"><?= __('Manutencao'); ?></span></span><i class="icon-arrow"></i>
                        <span class="selected"></span>
                    </a>
                    <ul class="sub-menu">
                        <li><?php echo $this->Html->link(__('Menu Temporario'),
                                ['controller' => 'alunos', 'action' => 'manutencao', 'plugin' => false]) ?></li>

                    </ul>
                </li>
                <li>
                    <a href="javascript:;"><i class="clip-bars"></i>
                        <span class="title">Administracao</span></span><i class="icon-arrow"></i>
                        <span class="selected"></span>
                    </a>
                    <ul class="sub-menu">
                        <li><?php echo $this->Html->link(sprintf(__('Configurações', true)),
                                ['controller' => 'configs', 'action' => 'index'], ['class' => 'link']); ?></li>
                    </ul>

                </li>
            </ul>
            <!-- end: MAIN NAVIGATION MENU -->
        </div>
        <!-- end: SIDEBAR -->
    </div>
    <!-- start: PAGE -->
    <div class="main-content">
    <!-- start: PANEL CONFIGURATION MODAL FORM -->
    <div class="modal fade" id="panel-config" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title">Panel Configuration</h4>
                </div>
                <div class="modal-body">
                    Here will be a configuration form
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary">
                        Save changes
                    </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <!-- end: SPANEL CONFIGURATION MODAL FORM -->
    <div class="container">
        <!-- start: PAGE HEADER -->
        <div class="row">
            <div class="col-sm-12">
                <!-- start: PAGE TITLE & BREADCRUMB -->
                <?php echo $this->element('page_header'); ?>
                <!-- end: PAGE HEADER -->
                <!-- start: PAGE CONTENT -->



                <?php
                    $session_message = $this->Session->read('Message');
                    if (isset($session_message) and $session_message != null) {
                        foreach ($session_message as $k => $v) {
                            echo $this->Session->flash($k);
                        }
                    }
                ?>
                <div id="siga-content">
                    <?php echo $this->fetch('content'); ?>
                </div>
                <!-- end: PAGE CONTENT-->
            </div>
        </div>
        <!-- end: PAGE -->
    </div>
    <!-- end: MAIN CONTAINER -->
<?php echo $this->element('footer'); ?>