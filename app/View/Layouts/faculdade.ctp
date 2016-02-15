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
                    <li><?php echo $this->Html->link('<i class="clip-home-3"></i>
                        <span class="title"> Pagina Inicial </span><span class="selected"></span>',
                                ['controller' => 'pages', 'action' => 'home'],
                                ['escape' => false]) ?></li>
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
                            <li><?php echo $this->Html->link(sprintf(__('Plano de Estudos', true)),
                                        ['controller' => 'plano_estudos', 'action' => 'index'],
                                        ['class' => 'link']); ?></li>
                            <li>
                                <?php
                                    if (Configure::read('OpenSGA.modulos.sala_aulas') == 1) {
                                        echo $this->Html->link(sprintf(__('Salas de Aulas', true)),
                                                ['controller' => 'sala_aulas', 'action' => 'index'],
                                                ['class' => 'link']);
                                    }
                                ?>
                            </li>
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
                            <li><?php echo $this->Html->link(__('Estudantes'),
                                        ['controller' => 'alunos', 'action' => 'index']) ?></li>
                            <li><?php echo $this->Html->link(__('Docentes'),
                                        ['controller' => 'docentes', 'action' => 'index']) ?></li>
                            <li><?php echo $this->Html->link(__('Funcionários'),
                                        ['controller' => 'funcionarios', 'action' => 'index']) ?></li>


                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><i class="clip-user-2"></i>
                            <span class="title">Gestao Academica</span><i class="icon-arrow"></i>
                            <span class="selected"></span>
                        </a>
                        <ul class="sub-menu">
                            <li><?php echo $this->Html->link('Anos Lectivos',
                                        ['controller' => 'anolectivos', 'action' => 'index']) ?></li>
                            <li><?php echo $this->Html->link(sprintf(__('Turmas', true)),
                                        ['controller' => 'turmas', 'action' => 'index'], ['class' => 'link']); ?></li>
                            <li><?php echo $this->Html->link(sprintf(__('Matriculas', true)),
                                        ['controller' => 'matriculas', 'action' => 'index'],
                                        ['class' => 'link']); ?></li>
                            <li><?php echo $this->Html->link(sprintf(__('Inscricoes', true)),
                                        ['controller' => 'inscricaos', 'action' => 'index'],
                                        ['class' => 'link']); ?></li>
                            <li><?php echo $this->Html->link(sprintf(__('Avaliações', true)),
                                        ['controller' => 'bolsa_bolsas', 'action' => 'index'],
                                        ['class' => 'link']); ?></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><i class="clip-file"></i>
                            <span class="title">Bolsas de Estudo</span><i class="icon-arrow"></i>
                            <span class="selected"></span>
                        </a>
                        <ul class="sub-menu">
                            <li><?php echo $this->Html->link(__('Visão Geral'),
                                        ['controller' => 'bolsa_bolsas', 'action' => 'index']) ?></li>
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
                            <li><?php echo $this->Html->link(sprintf(__('Avaliação pelo Estudante', true)),
                                        ['controller' => 'sade_avaliacao_alunos', 'action' => 'index'],
                                        ['class' => 'link']); ?></li>
                            <li><?php echo $this->Html->link(sprintf(__('Avaliação Qualitativa', true)),
                                        ['controller' => 'sade_avaliacao_qualitativas', 'action' => 'index'],
                                        ['class' => 'link']); ?></li>
                            <li><?php echo $this->Html->link(sprintf(__('Relatórios', true)),
                                        ['controller' => 'sade_avaliacaos', 'action' => 'relatorios'],
                                        ['class' => 'link']); ?></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="active">
                            <i class="clip-folder"></i>
                            <span class="title"> Contabilidade </span>
                            <i class="icon-arrow"></i>
                        </a>
                        <ul class="sub-menu">
                            <li><?php echo $this->Html->link('Visão Geral',
                                        ['controller' => 'financeiro_pagamentos', 'action' => 'index']) ?></li>
                            <li><?php echo $this->Html->link(sprintf(__('Validar Pagamentos', true)),
                                        ['controller' => 'pagamentos', 'action' => 'pesquisar_aluno'],
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
                                        'plugin'     => false,
                                ]) ?></li>
                            <li><?php echo $this->Html->link(__('Requisicoes'), [
                                        'controller' => 'relatorios',
                                        'action'     => 'requisicoes',
                                        'plugin'     => false,
                                ]) ?></li>
                            <li><?php echo $this->Html->link(__('Estudantes'),
                                        ['controller' => 'alunos', 'action' => 'relatorios']) ?></li>

                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="clip-location"></i>
                            <span class="title">Manutencão</span></span><i class="icon-arrow"></i>
                            <span class="selected"></span>
                        </a>
                        <ul class="sub-menu">
                            <li><?php echo $this->Html->link(__('Turmas'),
                                        ['controller' => 'turmas', 'action' => 'manutencao', 'plugin' => false]) ?></li>

                        </ul>
                    </li>
                </ul>
                <!-- end: MAIN NAVIGATION MENU -->
            </div>
            <!-- end: SIDEBAR -->
        </div>
        <!-- start: PAGE -->
        <div class="main-content">

            <div class="container">
                <!-- start: PAGE HEADER -->
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
                <div id="siga-content" class="col-sm-12">
                    <?php echo $this->fetch('content'); ?>
                </div>
                <!-- end: PAGE CONTENT-->
            </div>
        </div>
        <!-- end: PAGE -->
    </div>
    <!-- end: MAIN CONTAINER -->
<?php echo $this->element('footer'); ?>