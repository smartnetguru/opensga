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
                                ['controller' => 'pages', 'action' => 'home', 'estudante' => true],
                                ['escape' => false]) ?></li>
                    <li>
                        <a href="javascript:void(0)"><i class="clip-grid-6"></i>
                            <span class="title"> Perfil</span><i class="icon-arrow"></i>
                            <span class="selected"></span>
                        </a>
                        <ul class="sub-menu">
                            <li><?php echo $this->Html->link(__('Perfil Privado'),
                                        ['controller' => 'alunos', 'action' => 'perfil'],
                                        ['class' => '', 'escape' => false]) ?></li>
                            <li><?php echo $this->Html->link(sprintf(__('Perfil Publico<span class="badge badge-warning">Em breve</span>',
                                        true)), '#', ['class' => 'link', 'escape' => false]); ?></li>
                            <li><?php echo $this->Html->link(sprintf(__('Editar Perfil',
                                        true)), ['controller' => 'alunos', 'action' => 'editar_perfil'],
                                        ['class' => 'link', 'escape' => false]); ?></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><i class="clip-cog-2"></i>
                            <span class="title"> Matriculas</span><i class="icon-arrow"></i>
                            <span class="selected"></span>
                        </a>
                        <ul class="sub-menu">
                            <li><?php echo $this->Html->link(__('Renovacoes de Matricula'),
                                        ['controller' => 'matriculas', 'action' => 'index'],
                                        ['class' => '', 'escape' => false]) ?></li>
                            <li><?php echo $this->Html->link(sprintf(__('Renovar Matricula',
                                        true)), ['controller' => 'matriculas', 'action' => 'renovar_matricula'],
                                        ['class' => 'link', 'escape' => false]); ?></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><i class="clip-grid-6"></i>
                            <span class="title"> Inscricoes</span><i class="icon-arrow"></i>
                            <span class="selected"></span>
                        </a>
                        <ul class="sub-menu">
                            <li><?php echo $this->Html->link(__('Inscricoes Activaso<span class="badge badge-warning">Em breve</span>'),
                                        '#', ['class' => '', 'escape' => false]) ?></li>
                            <li><?php echo $this->Html->link(sprintf(__('Cadeiras Aprovadas<span class="badge badge-warning">Em breve</span>',
                                        true)), '#', ['class' => 'link', 'escape' => false]); ?></li>
                            <li><?php echo $this->Html->link(sprintf(__('Todas as Inscricoes<span class="badge badge-warning">Em breve</span>',
                                        true)), '#', ['class' => 'link', 'escape' => false]); ?></li>
                            <li><?php echo $this->Html->link(__('Fazer Inscricao<span class="badge badge-warning">Em breve</span>'),
                                        '#', ['class' => '', 'escape' => false]) ?></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><i class="clip-pencil"></i>
                            <span class="title"> Turmas</span><i class="icon-arrow"></i>
                            <span class="selected"></span>
                        </a>
                        <ul class="sub-menu">

                            <li><?php echo $this->Html->link(__('Turmas Activas<span class="badge badge-warning">Em breve</span>'),
                                        '#', ['class' => '', 'escape' => false]) ?></li>
                            <li><?php echo $this->Html->link(sprintf(__('Turmas Anteriores<span class="badge badge-warning">Em breve</span>',
                                        true)), '#', ['class' => 'link', 'escape' => false]); ?></li>
                            <li><?php echo $this->Html->link(sprintf(__('Proximas Turmas<span class="badge badge-warning">Em breve</span>',
                                        true)), '#', ['class' => 'link', 'escape' => false]); ?></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><i class="clip-pencil"></i>
                            <span class="title"> Avaliacoes</span><i class="icon-arrow"></i>
                            <span class="selected"></span>
                        </a>
                        <ul class="sub-menu">

                            <li><?php echo $this->Html->link(__('Ver Avaliacoes<span class="badge badge-warning">Em breve</span>'),
                                        '#', ['class' => '', 'escape' => false]) ?></li>
                            <li><?php echo $this->Html->link(sprintf(__('Calendario de Avaliacoes<span class="badge badge-warning">Em breve</span>',
                                        true)), '#', ['class' => 'link', 'escape' => false]); ?></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><i class="clip-user-2"></i>
                            <span class="title">Docentes</span><i class="icon-arrow"></i>
                            <span class="selected"></span>
                        </a>
                        <ul class="sub-menu">
                            <li><?php echo $this->Html->link(__('Docentes Activos<span class="badge badge-warning">Em breve</span>'),
                                        '#', ['class' => '', 'escape' => false]) ?></li>
                            <li><?php echo $this->Html->link(sprintf(__('Docentes Anteriores<span class="badge badge-warning">Em breve</span>',
                                        true)), '#', ['class' => 'link', 'escape' => false]); ?></li>
                            <li><?php echo $this->Html->link(sprintf(__('Outros Docentes<span class="badge badge-warning">Em breve</span>',
                                        true)), '#', ['class' => 'link', 'escape' => false]); ?></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><i class="clip-file"></i>
                            <span class="title">Requisicoes</span><i class="icon-arrow"></i>
                            <span class="selected"></span>
                        </a>
                        <ul class="sub-menu">
                            <li><?php echo $this->Html->link(__('Cartao de Estudantes<span class="badge badge-warning">Em breve</span>'),
                                        '#', ['class' => '', 'escape' => false]) ?></li>
                            <li><?php echo $this->Html->link(sprintf(__('Certificados<span class="badge badge-warning">Em breve</span>',
                                        true)), '#', ['class' => 'link', 'escape' => false]); ?></li>
                            <li><?php echo $this->Html->link(sprintf(__('Declaracoes<span class="badge badge-warning">Em breve</span>',
                                        true)), '#', ['class' => 'link', 'escape' => false]); ?></li>
                            <li><?php echo $this->Html->link(__('Outros Pedidos<span class="badge badge-warning">Em breve</span>'),
                                        '#', ['class' => '', 'escape' => false]) ?></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><i class="clip-attachment-2"></i>
                            <span class="title">Pagamentos</span><i class="icon-arrow"></i>
                            <span class="selected"></span>
                        </a>
                        <ul class="sub-menu">
                            <li><?php echo $this->Html->link(__('Minha Conta<span class="badge badge-warning">Em breve</span>'),
                                        '#', ['class' => '', 'escape' => false]) ?></li>
                            <li><?php echo $this->Html->link(sprintf(__('Meus Pagamentos<span class="badge badge-warning">Em breve</span>',
                                        true)), '#', ['class' => 'link', 'escape' => false]); ?></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="active">
                            <i class="clip-folder"></i>
                            <span class="title"> Relatorios</span>
                            <i class="icon-arrow"></i>
                        </a>
                        <ul class="sub-menu">
                            <li><?php echo $this->Html->link(__('Visao Geral<span class="badge badge-warning">Em breve</span>'),
                                        '#', ['class' => '', 'escape' => false]) ?></li>
                        </ul>
                    </li>
                </ul>
                <!-- end: MAIN NAVIGATION MENU -->
            </div>
            <!-- end: SIDEBAR -->
        </div>
        <!-- start: PAGE -->
        <div class="main-content">

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
        <!-- end: PAGE -->
    </div>
    <!-- end: MAIN CONTAINER -->
<?php echo $this->element('footer'); ?>