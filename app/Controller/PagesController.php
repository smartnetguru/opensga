<?php

    /**
     * OpenSGA - Sistema de Gest�o Acad�mica
     *   Copyright (C) 2010-2012  INFOmoz (Inform�tica-Mo�ambique)
     *
     *
     * @copyright       Copyright 2010-2012, INFOmoz (Inform�tica-Mo�ambique) (http://infomoz.net)
     * * @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
     * @author          Elisio Leonardo (elisio.leonardo@gmail.com)
     * @package         opensga
     * @subpackage      opensga.core.controller
     * @since           OpenSGA v 0.1.0
     *
     * @property Aluno $Aluno
     *
     */
    class PagesController extends AppController
    {

        /**
         * Controller name
         *
         * @var string
         * @access public
         */
        var $name = 'Pages';

        /**
         * Default helper
         *
         * @var array
         * @access public
         */
        var $helpers = ['Html', 'Session'];

        /**
         * This controller does not use a model
         *
         * @var array
         * @access public
         */
        var $uses = [];

        function beforeFilter()
        {
            parent::beforeFilter();
            $user = $this->Auth->user();
            $this->Auth->allow('email_oficial_uem', 'email','webmail');
            if ($user != null) {
                $this->Auth->allowedActions = ['display', 'email_oficial_uem', 'webmail', 'email'];
            }


            if (in_array($this->action, ['home', 'faculdade_home', 'docente_home', 'estudante_home'])) {
                $referer = $this->referer();
                preg_match('/login/', $referer, $matches);
                if ($matches) {
                   // $whatsNew = '<p>Inscricoes da Escola Superior de Ciencias do Desporto Importadas</p>';
                    //$this->set(compact('whatsNew'));
                }

            }
        }

        /**
         * Displays a view
         *
         * @param mixed What page to display
         *
         * @access public
         */
        function display()
        {
            $path = func_get_args();

            $count = count($path);
            if (!$count) {
                $this->redirect(['controller' => 'pages', 'action' => 'home']);
            }
            $page = $subpage = $title_for_layout = null;

            if (!empty($path[0])) {
                $page = $path[0];
            }
            if (!empty($path[1])) {
                $subpage = $path[1];
            }
            if (!empty($path[$count - 1])) {
                $title_for_layout = Inflector::humanize($path[$count - 1]);
            }
            $this->set('current_section', 'homepage');
            $this->set(compact('page', 'subpage', 'title_for_layout'));
            $this->render(implode('/', $path));
        }

        public function docente_home()
        {

        }

        public function email()
        {
            $this->layout = 'guest_users';
        }

        public function email_oficial_uem()
        {
            $this->redirect('http://millpaginas.com/como-acessar-e-usar-o-novo-email-institucional-da-sua-universidade/');
        }

        public function estudante_home()
        {
            $this->loadModel('Aluno');

            $userId = $this->Session->read('Auth.User.id');

            $aluno = $this->Aluno->getByUserId($userId);

            $matriculasPendentes = $this->Aluno->getAllMatriculasPendentes($aluno['Aluno']['id'],true);

            if (!empty($matriculasPendentes)) {
                $this->set(compact('matriculasPendentes'));
            }

            $this->Aluno->Inscricao->contain(['Turma'=>['Disciplina']]);
            $inscricoesActivas = $this->Aluno->Inscricao->find('all',['conditions'=>['Inscricao.aluno_id'=>$aluno['Aluno']['id'],'Turma.ano_lectivo_id'=>Configure::read('OpenSGA.ano_lectivo_id'),'Turma.semestre_lectivo_id'=>Configure::read('OpenSGA.semestre_lectivo_id')],'order'=>['Turma.ano_curricular','Turma.semestre_curricular']]);


            $this->set(compact('inscricoesActivas'));


        }

        public function faculdade_home()
        {
            $this->loadModel('Aluno');
            $unidade_organica_id = $this->Session->read('Auth.User.unidade_organica_id');
            $unidades_organicas = $this->Aluno->Curso->UnidadeOrganica->getWithChilds($unidade_organica_id);
            $this->Aluno->contain('Curso');
            $total_alunos_faculdade = $this->Aluno->find('count',
                ['conditions' => ['Curso.unidade_organica_id' => $unidades_organicas]]);
            $total_alunos_activos_faculdade = $this->Aluno->getTotalAlunosActivos($unidades_organicas);
            $total_matriculas_activas_faculdade = $this->Aluno->Matricula->getTotalMatriculasActivas($unidades_organicas);
            $total_matriculas_nao_renovadas = $this->Aluno->Matricula->getTotalMatriculasNaoRenovadas($unidades_organicas);


            $total_inscricoes_activas = $this->Aluno->Inscricao->getTotalInscricoesActivas($unidades_organicas);
            $total_inscricoes_activas_ano = $this->Aluno->Inscricao->getTotalInscricoesActivas($unidades_organicas,
                Configure::read('OpenSGA.ano_lectivo_id'));
            $total_inscricoes_passadas_abertas = $total_inscricoes_activas - $total_inscricoes_activas_ano;

            $cursos = $this->Aluno->Curso->getAllIdsByUnidadeOrganica($unidades_organicas);
            $total_turmas_activas = $this->Aluno->Inscricao->Turma->find('count',
                ['conditions' => ['Turma.curso_id' => $cursos]]);
            $total_turmas_activas_ano = $this->Aluno->Inscricao->Turma->find('count', [
                'conditions' => [
                    'Turma.curso_id'       => $cursos,
                    'Turma.ano_lectivo_id' => Configure::read('OpenSGA.ano_lectivo_id')
                ]
            ]);
            $total_turmas_passadas = $total_turmas_activas - $total_turmas_activas_ano;

            $total_turmas_sem_docente = $this->Aluno->Inscricao->Turma->getTotalTurmasSemDocente($unidade_organica_id);


            $this->set(compact('total_alunos_faculdade', 'total_alunos_activos_faculdade',
                'total_matriculas_activas_faculdade', 'total_matriculas_nao_renovadas', 'total_inscricoes_activas_ano',
                'total_inscricoes_activas', 'total_inscricoes_passadas_abertas', 'total_turmas_activas_ano',
                'total_turmas_activas', 'total_turmas_passadas', 'total_turmas_sem_docente'));
        }

        function home()
        {

            $this->loadModel('SmsEnviada');
            $this->loadModel('SmsNotification');

            $User = $this->Session->read('Auth.User');
            if ($User['group_id'] == 3) {
                $this->redirect(['controller' => 'pages', 'action' => 'home', 'estudante' => true]);
            }
            if ($User['group_id'] == 4) {
                $this->redirect(['controller' => 'pages', 'action' => 'home', 'docente' => true]);
            }


            $this->loadModel('Aluno');

            $recipient_id = $this->Session->read('Auth.User.id');
            $total_alunos_activos = $this->Aluno->getTotalAlunosActivos();

            $total_matriculas_activas = $this->Aluno->Matricula->getTotalMatriculasActivas();

            //Dados de Pagamento
            //Resumo Mensal
            $facturas_geradas = $this->Aluno->FinanceiroPagamento->find('count', [
                'conditions' => [
                    'MONTH(FinanceiroPagamento.created)' => date('m'),
                    'YEAR(FinanceiroPagamento.created)'  => date('Y')
                ]
            ]);
            $facturas_pagas = $this->Aluno->FinanceiroPagamento->find('count', [
                'conditions' => [
                    'MONTH(FinanceiroPagamento.data_pagamento)'          => date('m'),
                    'YEAR(FinanceiroPagamento.data_pagamento)'           => date('Y'),
                    'FinanceiroPagamento.financeiro_estado_pagamento_id' => 2
                ]
            ]);
            $valor_arrecadado = $this->Aluno->FinanceiroPagamento->find('all', [
                'conditions' => [
                    'MONTH(FinanceiroPagamento.data_pagamento)'          => date('m'),
                    'YEAR(FinanceiroPagamento.data_pagamento)'           => date('Y'),
                    'FinanceiroPagamento.financeiro_estado_pagamento_id' => 2
                ],
                'fields'     => 'sum(FinanceiroPagamento.valor) as valor'
            ]);
            $valor_divida = $this->Aluno->FinanceiroPagamento->getValorDividaTotal();
            $alertas = null;
            $sms_enviadas_24 = $this->SmsEnviada->find('count',
                ['conditions' => ['SmsEnviada.created >DATE_SUB(CURDATE(), INTERVAL 1 DAY)']]);
            $sms_enviadas_30 = $this->SmsEnviada->find('count',
                ['conditions' => ['SmsEnviada.created >DATE_SUB(CURDATE(), INTERVAL 30 DAY)']]);
            $sms_recebidas_24 = $this->SmsNotification->find('count',
                ['conditions' => ['SmsNotification.created >DATE_SUB(CURDATE(), INTERVAL 1 DAY)']]);
            $sms_recebidas_30 = $this->SmsNotification->find('count',
                ['conditions' => ['SmsNotification.created >DATE_SUB(CURDATE(), INTERVAL 30 DAY)']]);


            //Ultimos Acessos
            $this->loadModel('User');
            $this->User->contain([
                'Group' => [
                    'fields' => 'name'
                ]
            ]);
            $ultimos_users = $this->User->find('all', ['limit' => 10, 'order' => 'User.ultimo_login DESC']);

            $this->set('alertas', $alertas);
            $this->set(compact('total_alunos_activos', 'total_matriculas_activas',
                'facturas_geradas',
                'facturas_pagas', 'valor_arrecadado', 'valor_divida', 'sms_enviadas_24', 'sms_enviadas_30',
                'sms_recebidas_24', 'sms_recebidas_30', 'ultimos_users'));
        }

        function index()
        {

        }

        public function webmail()
        {
            $this->redirect('https://www.google.com/a/uem.ac.mz/');
        }

    }

?>