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
                        <span class="title"> Pagina Inicial </span><span class="selected"></span>', array('controller' => 'pages', 'action' => 'home', 'docente' => true), array('escape' => false)) ?></li>
                </li>
                <li>
                    <a href="javascript:void(0)"><i class="clip-pencil"></i>
                        <span class="title"> Estudantes </span><i class="icon-arrow"></i>
                        <span class="selected"></span>
                    </a>
                    <ul class="sub-menu">
						<li><?php echo $this->Html->link(__('Meus Estudantes'), array('controller' => 'alunos', 'action' => 'index', 'docente' => true)) ?></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)"><i class="clip-user-2"></i>
                        <span class="title">Turmas</span><i class="icon-arrow"></i>
                        <span class="selected"></span>
                    </a>
					<ul class="sub-menu">

						<li><?php echo $this->Html->link(__('Minhas Turmas'), array('controller' => 'turmas', 'action' => 'index', 'docente' => true)) ?></li>

                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)"><i class="clip-file"></i>
                        <span class="title">Avaliacoes</span><i class="icon-arrow"></i>
                        <span class="selected"></span>
                    </a>
                    <ul class="sub-menu">
						<li><?php echo $this->Html->link(__('Minhas Avaliacoes'), array('controller' => 'avaliacaos', 'action' => 'index', 'docente' => true)) ?></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)"><i class="clip-attachment-2"></i>
                        <span class="title">Avaliacao de Desempenho</span><i class="icon-arrow"></i>
                        <span class="selected"></span>
                    </a>
                    <ul class="sub-menu">
                        <li><?php echo $this->Html->link('Visão Geral', array('controller' => 'sade_avaliacaos', 'action' => 'index')) ?></li>
						<li><?php echo $this->Html->link('Auto-Avaliação', array('controller' => 'sade_auto_avaliacaos', 'action' => 'docente')) ?></li>
						<li><?php echo $this->Html->link(sprintf(__('Avaliação pelo Estudante', true)), array('controller' => 'sade_avaliacao_alunos', 'action' => 'index'), array('class' => 'link')); ?></li>
						<li><?php echo $this->Html->link(sprintf(__('Avaliação Qualitativa', true)), array('controller' => 'sade_avaliacao_qualitativas', 'action' => 'index'), array('class' => 'link')); ?></li>
						<li><?php echo $this->Html->link(sprintf(__('Relatórios', true)), array('controller' => 'sade_avaliacaos', 'action' => 'relatorios'), array('class' => 'link')); ?></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="active">
                        <i class="clip-folder"></i>
                        <span class="title"> Assistentes </span>
                        <i class="icon-arrow"></i>
                    </a>
                    <ul class="sub-menu">
                        <li><?php echo $this->Html->link(__('Meus Assistentes'), array('controller' => 'docentes', 'action' => 'ver_assistentes', 'docente' => true)) ?></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;"><i class="clip-location"></i>
                        <span class="title">Relatorios</span></span><i class="icon-arrow"></i>
                        <span class="selected"></span>
                    </a>
                    <ul class="sub-menu">
                        <li><?php echo $this->Html->link(__('Relatórios Gerais'), array('controller' => 'relatorios', 'action' => 'index', 'plugin' => false)) ?></li>
						<li><?php echo $this->Html->link(__('Resumo Semestral'), array('controller' => 'relatorios', 'action' => 'resumo_semestral', 'plugin' => false)) ?></li>
						<li><?php echo $this->Html->link(__('Requisicoes'), array('controller' => 'relatorios', 'action' => 'requisicoes', 'plugin' => false)) ?></li>
						<li><?php echo $this->Html->link(__('Estudantes por Curso'), array('controller' => 'relatorios', 'action' => 'estudantes_por_curso')) ?></li>
						<li><?php echo $this->Html->link(sprintf(__('Estudantes por Faculdade', true)), array('controller' => 'relatorios', 'action' => 'estudantes_por_faculdade'), array('class' => 'link')); ?></li>
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
            <?php echo $this->element('page_header');?>
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
			<?php echo $this->fetch('content'); ?>

            <!-- end: PAGE CONTENT-->

    </div>
    <!-- end: PAGE -->
</div>
<!-- end: MAIN CONTAINER -->
<?php echo $this->element('footer'); ?>