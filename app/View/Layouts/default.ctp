<?php
    $this->extend('/Common/Layouts/default');
?>
<?php $this->start('main-navigation') ?>
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
                <span class="title"> Candidatos </span><i class="icon-arrow"></i>
                <span class="selected"></span>
            </a>
            <ul class="sub-menu">
                <li><?php echo $this->Html->link(__('Todos Candidatos'),
                            ['controller' => 'candidaturas', 'action' => 'index']) ?></li>
                <li><?php echo $this->Html->link(sprintf(__('Candidatos Admitidos', true)),
                            ['controller' => 'candidaturas', 'action' => 'candidatos_admitidos'],
                            ['class' => 'link']); ?></li>
                <li><?php echo $this->Html->link(sprintf(__('Candidatos Matriculados', true)),
                            ['controller' => 'candidaturas', 'action' => 'candidatos_matriculados'],
                            ['class' => 'link']); ?></li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0)"><i class="clip-cog-2"></i>
                <span class="title"> Unidades Organicas </span><i class="icon-arrow"></i>
                <span class="selected"></span>
            </a>
            <ul class="sub-menu">
                <li><?php echo $this->Html->link(__('Todas Unidades Orgânicas'),
                            ['controller' => 'unidade_organicas', 'action' => 'index']) ?></li>
                <li><?php echo $this->Html->link(__('Direcções'),
                            ['controller' => 'unidade_organicas', 'action' => 'direccoes']) ?></li>
                <li><?php echo $this->Html->link(__('Faculdades'),
                            ['controller' => 'unidade_organicas', 'action' => 'faculdades']) ?></li>
                <li><?php echo $this->Html->link(__('Departamentos'),
                            ['controller' => 'unidade_organicas', 'action' => 'departamentos']) ?></li>
                <li><?php echo $this->Html->link(__('Secções'),
                            ['controller' => 'unidade_organicas', 'action' => 'seccoes']) ?></li>
                <li><?php echo $this->Html->link(__('Tipo de Unidades Orgânicas'),
                            ['controller' => 'tipo_unidade_organicas', 'action' => 'index']) ?></li>
                <li><?php echo $this->Html->link(__('Áreas Académicas'),
                            ['controller' => 'area_academicas', 'action' => 'index']) ?></li>
                <li><?php echo $this->Html->link(__('Áreas Funcionais'),
                            ['controller' => 'area_unidades', 'action' => 'index']) ?></li>
            </ul>
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
                <li><?php echo $this->Html->link(__('Atribuir Bolsas'),
                            ['controller' => 'bolsa_bolsas', 'action' => 'atribuir_bolsas']) ?></li>
                <li><?php echo $this->Html->link(__('Renovar Bolsas'),
                            ['controller' => 'bolsa_bolsas', 'action' => 'renovar_bolsas']) ?></li>
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
                <li><?php echo $this->Html->link(sprintf(__('Tipos de Pagamentos', true)),
                            ['controller' => 'financeiro_tipo_pagamentos', 'action' => 'index'],
                            ['class' => 'link']); ?></li>
            </ul>
        </li>
        <li>
            <a href="javascript:;">
                <i class="clip-folder-open"></i>
                <span class="title"> Cooperacao </span><i class="icon-arrow"></i>
                <span class="arrow "></span>
            </a>
            <ul class="sub-menu">
                <li><?php echo $this->Html->link('Visão Geral', [
                            'controller' => 'cooperacao_acordos',
                            'action'     => 'visao_geral',
                            'plugin'     => 'cooperacao',
                    ]) ?></li>
                <li><?php echo $this->Html->link(sprintf(__('Instituições', true)), [
                            'controller' => 'cooperacao_acordos',
                            'action'     => 'lista_instituicaos',
                            'plugin'     => 'cooperacao',
                    ], ['class' => 'link']); ?></li>
                <li><?php echo $this->Html->link(sprintf(__('Acordos de Cooperação', true)),
                            [
                                    'controller' => 'cooperacao_acordos',
                                    'action'     => 'index',
                                    'plugin'     => 'cooperacao',
                            ],
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
                <li><?php echo $this->Html->link(__('Candidatos'),
                            [
                                    'controller' => 'candidaturas',
                                    'action'     => 'relatorios',
                                    'plugin'     => false,
                            ]) ?></li>
                <li><?php echo $this->Html->link(__('Estudantes'),
                            ['controller' => 'alunos', 'action' => 'relatorios']) ?></li>
                <li><?php echo $this->Html->link(sprintf(__('Matriculas', true)),
                            ['controller' => 'matriculas', 'action' => 'relatorios'],
                            ['class' => 'link']); ?></li>
                <li><?php echo $this->Html->link(sprintf(__('Inscricoes', true)),
                            ['controller' => 'inscricaos', 'action' => 'relatorios'],
                            ['class' => 'link']); ?></li>
                <li><?php echo $this->Html->link(sprintf(__('Turmas', true)),
                            ['controller' => 'turmas', 'action' => 'relatorios'],
                            ['class' => 'link']); ?></li>
                <li><?php echo $this->Html->link(sprintf(__('Docentes', true)),
                            ['controller' => 'docentes', 'action' => 'relatorios'],
                            ['class' => 'link']); ?></li>
                <li><?php echo $this->Html->link(__('Requisicoes'),
                            [
                                    'controller' => 'relatorios',
                                    'action'     => 'requisicoes',
                                    'plugin'     => false,
                            ]) ?></li>
            </ul>
        </li>
        <li>
            <a href="javascript:;"><i class="clip-location"></i>
                <span class="title"><?= __('Manutencao'); ?></span></span><i class="icon-arrow"></i>
                <span class="selected"></span>
            </a>
            <ul class="sub-menu">
                <li><?php echo $this->Html->link(__('Estudantes'),
                            ['controller' => 'alunos', 'action' => 'manutencao', 'plugin' => false]) ?></li>
                <li><?php echo $this->Html->link(__('Cursos'), [
                            'controller' => 'cursos',
                            'action'     => 'manutencao',
                            'plugin'     => false,
                    ]) ?></li>
                <li><?php echo $this->Html->link(__('Planos de Estudos'), [
                            'controller' => 'plano_estudos',
                            'action'     => 'manutencao',
                            'plugin'     => false,
                    ]) ?></li>
                <li><?php echo $this->Html->link(__('Turmas'), [
                            'controller' => 'turmas',
                            'action'     => 'manutencao',
                            'plugin'     => false,
                    ]) ?></li>
                <li><?php echo $this->Html->link(__('Inscricoes'), [
                            'controller' => 'inscricaos',
                            'action'     => 'manutencao',
                            'plugin'     => false,
                    ]) ?></li>
                <li><?php echo $this->Html->link(__('Matriculas'), [
                            'controller' => 'matriculas',
                            'action'     => 'manutencao',
                            'plugin'     => false,
                    ]) ?></li>

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
                <li><?php echo $this->Html->link(sprintf(__('Gestão de Grupos', true)),
                            ['controller' => 'groups', 'action' => 'index'], ['class' => 'link']); ?></li>
                <li><?php echo $this->Html->link(sprintf(__('Gestão de Utilizadores', true)),
                            ['controller' => 'users', 'action' => 'index'], ['class' => 'link']); ?></li>
                <li><?php echo $this->Html->link(sprintf(__('Níveis de Utilizadores', true)),
                            ['controller' => 'groups', 'action' => 'index'], ['class' => 'link']); ?></li>
                <li><?php echo $this->Html->link(sprintf(__('Funções Profissionais', true)),
                            ['controller' => 'funcao_profissionals', 'action' => 'index'],
                            ['class' => 'link']); ?></li>
                <li><?php echo $this->Html->link(sprintf(__('Funções Do Sistema', true)),
                            ['controller' => 'roles', 'action' => 'index'], ['class' => 'link']); ?></li>

                <li><?php echo $this->Html->link(sprintf(__('Graus Academicos', true)),
                            ['controller' => 'grauacademicos'], ['class' => 'link']); ?></li>
                <li><?php echo $this->Html->link(sprintf(__('Países', true)), ['controller' => 'paises'],
                            ['class' => 'linkselected']); ?></li>
                <li><?php echo $this->Html->link(sprintf(__('Províncias', true)),
                            ['controller' => 'provincias'], ['class' => 'link']); ?></li>
                <li>    <?php echo $this->Html->link(sprintf(__('Cidades', true)),
                            ['controller' => 'cidades'],
                            ['class' => 'link']); ?></li>
                <li>    <?php echo $this->Html->link(sprintf(__('Cargos', true)),
                            ['controller' => 'cargos'],
                            ['class' => 'link']); ?></li>
                <li><?php echo $this->Html->link(sprintf(__('Departamentos', true)),
                            ['controller' => 'departamentos'], ['class' => 'link']); ?></li>
                <li><?php echo $this->Html->link(sprintf(__('Tipos de Curso', true)),
                            ['controller' => 'tipocursos'], ['class' => 'link']); ?></li>
                <li><?php echo $this->Html->link(sprintf(__('Grupos Disciplinares', true)),
                            ['controller' => 'grupodisciplinars'], ['class' => 'link']); ?></li>
                <li>     <?php echo $this->Html->link(sprintf(__('Docs de Identificação', true)),
                            ['controller' => 'documentos'], ['class' => 'link']); ?></li>
                <li>     <?php echo $this->Html->link(sprintf(__('Áreas de Trabalho', true)),
                            ['controller' => 'areatrabalhos'], ['class' => 'link']); ?></li>
                <li>     <?php echo $this->Html->link(sprintf(__('Turnos', true)),
                            ['controller' => 'turnos'],
                            ['class' => 'link']); ?></li>
                <li>    <?php echo $this->Html->link(sprintf(__('Escolas', true)),
                            ['controller' => 'escolas'],
                            ['class' => 'link']); ?></li>
                <li>      <?php echo $this->Html->link(sprintf(__('Gêneros', true)),
                            ['controller' => 'generos'], ['class' => 'link']); ?></li>
            </ul>

        </li>
    </ul>
    <!-- end: MAIN NAVIGATION MENU -->
<?php $this->end(); ?>

<?php echo $this->fetch('content');?>
