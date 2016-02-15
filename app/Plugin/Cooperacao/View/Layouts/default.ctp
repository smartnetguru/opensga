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
                        <span class="title"> Pagina Inicial </span><span class="selected"></span>', '/', array('escape' => false)) ?></li>
                <li>
                    <a href="javascript:void(0)"><i class="clip-cog-2"></i>
                        <span class="title"> Unidades Organicas </span><i class="icon-arrow"></i>
                        <span class="selected"></span>
                    </a>
                    <ul class="sub-menu">
                        <li><?php echo $this->Html->link(__('Todas Unidades Orgânicas'), array('controller' => 'unidade_organicas', 'action' => 'index')) ?></li>
                        <li><?php echo $this->Html->link(__('Direcções'), array('controller' => 'unidade_organicas', 'action' => 'direccoes')) ?></li>
                        <li><?php echo $this->Html->link(__('Faculdades'), array('controller' => 'unidade_organicas', 'action' => 'faculdades')) ?></li>
                        <li><?php echo $this->Html->link(__('Departamentos'), array('controller' => 'unidade_organicas', 'action' => 'departamentos')) ?></li>
                        <li><?php echo $this->Html->link(__('Secções'), array('controller' => 'unidade_organicas', 'action' => 'seccoes')) ?></li>
                        <li><?php echo $this->Html->link(__('Tipo de Unidades Orgânicas'), array('controller' => 'tipo_unidade_organicas', 'action' => 'index')) ?></li>
                        <li><?php echo $this->Html->link(__('Áreas Académicas'), array('controller' => 'area_academicas', 'action' => 'index')) ?></li>
                        <li><?php echo $this->Html->link(__('Áreas Funcionais'), array('controller' => 'area_unidades', 'action' => 'index')) ?></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)"><i class="clip-grid-6"></i>
                        <span class="title"> Cadastros </span><i class="icon-arrow"></i>
                        <span class="selected"></span>
                    </a>
                    <ul class="sub-menu">
                        <li><?php echo $this->Html->link(__('Instituições'), array('controller' => 'cooperacao_acordos', 'action' => 'lista_instituicaos', 'plugin' => 'cooperacao')) ?></li>
                        <li><?php echo $this->Html->link(sprintf(__('Áreas de Cooperacao', true)), array('controller' => 'cooperacao_areas', 'action' => 'index', 'plugin' => 'cooperacao'), array('class' => 'link')); ?></li>
                        <li><?php echo $this->Html->link(sprintf(__('Tipos de Acordo', true)), array('controller' => 'cooperacao_tipo_acordos', 'action' => 'index', 'plugin' => 'cooperacao'), array('class' => 'link')); ?></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)"><i class="clip-pencil"></i>
                        <span class="title"> Acordos de Cooperacao </span><i class="icon-arrow"></i>
                        <span class="selected"></span>
                    </a>
                    <ul class="sub-menu">

                        <li><?php echo $this->Html->link(__('Acordos de Cooperacao'), array('controller' => 'cooperacao_acordos', 'action' => 'index')) ?></li>


                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)"><i class="clip-file"></i>
                        <span class="title">Bolsas de Estudo</span><i class="icon-arrow"></i>
                        <span class="selected"></span>
                    </a>
                    <ul class="sub-menu">
                        <li><?php echo $this->Html->link(__('Visão Geral'), array('controller' => 'bolsa_bolsas', 'action' => 'index')) ?></li>
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
					<?php
					echo $this->BreadCumbs->getCrumbList(array('class' => 'breadcrumb'), array(
						'text' => '<li>
                            <i class="clip-home-3"></i>
                            <a href="#">
                                Home
                            </a>
                        </li>',
						'url' => '/',
						'escape' => false
					));
					?>
					<?php if (isset($siga_page_title)) { ?>
						<div class="page-header">
							<h1><?php echo $siga_page_title ?> <small><?php echo $siga_page_overview ?> </small></h1>
						</div>
					<?php } ?>
                    <!-- end: PAGE TITLE & BREADCRUMB -->
                </div>
            </div>
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
            <div id="siga-content"  class="col-sm-12">
				<?php echo $this->fetch('content'); ?>
            </div>
            <!-- end: PAGE CONTENT-->
        </div>
    </div>
    <!-- end: PAGE -->
</div>
<!-- end: MAIN CONTAINER -->
<?php echo $this->element('footer'); ?>
