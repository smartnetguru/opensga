<?php

/**
 * OpenSGA - Sistema de Gest�o Acad�mica
 *   Copyright (C) 2010-2012  INFOmoz (Inform�tica-Mo�ambique)
 *
 *
 * @copyright     Copyright 2010-2012, INFOmoz (Inform�tica-Mo�ambique) (http://infomoz.net)
 * * @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.1.0

 *
 */

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       cake
 * @subpackage    cake.cake.libs.controller
 * @link http://book.cakephp.org/view/958/The-Pages-Controller
 */
class PagesController extends AppController {

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
    var $helpers = array('Html', 'Session');

    /**
     * This controller does not use a model
     *
     * @var array
     * @access public
     */
    var $uses = array();

    /**
     * Displays a view
     *
     * @param mixed What page to display
     * @access public
     */
    function display() {
        $path = func_get_args();

        $count = count($path);
        if (!$count) {
           $this->redirect(array('controller' => 'pages', 'action' => 'home'));
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
    
    function index(){
    	
    }

    function home() {
    	
        $User = $this->Session->read('Auth.User');
        if ($User['group_id'] == 3) {
            $this->redirect(array('controller' => 'pages', 'action' => 'home', 'estudante' => TRUE));
        }
        if ($User['group_id'] == 4) {
            $this->redirect(array('controller' => 'pages', 'action' => 'home', 'docente' => TRUE));
        }
        
        App::import('Model', 'Message');
        $this->loadModel('Aluno');
        $alerta = new Message;
        $recipient_id = $this->Session->read('Auth.User.id');
        $total_alunos_activos = $this->Aluno->getTotalAlunosActivos();

        $total_matriculas_activas = $this->Aluno->Matricula->getTotalMatriculasActivas();

        //Dados de Pagamento
        //Resumo Mensal
        $facturas_geradas = $this->Aluno->FinanceiroPagamento->find('count', array('conditions' => array('MONTH(FinanceiroPagamento.created)' => date('m'), 'YEAR(FinanceiroPagamento.created)' => date('Y'))));
        $facturas_pagas = $this->Aluno->FinanceiroPagamento->find('count', array('conditions' => array('MONTH(FinanceiroPagamento.data_pagamento)' => date('m'), 'YEAR(FinanceiroPagamento.data_pagamento)' => date('Y'), 'FinanceiroPagamento.financeiro_estado_pagamento_id' => 2)));
        $valor_arrecadado = $this->Aluno->FinanceiroPagamento->find('all', array('conditions' => array('MONTH(FinanceiroPagamento.data_pagamento)' => date('m'), 'YEAR(FinanceiroPagamento.data_pagamento)' => date('Y'), 'FinanceiroPagamento.financeiro_estado_pagamento_id' => 2), 'fields' => 'sum(FinanceiroPagamento.valor) as valor'));

        $valor_divida = $this->Aluno->FinanceiroPagamento->getValorDividaTotal();

        
        $alertas = $alerta->find('all', array('conditions' => array('recipient_id' => $recipient_id, 'datainicio <=' => date('Y-m-d') . ' 23:59:59', 'datafim >=' => date('Y-m-d') . ' 00:00:00')));
        $this->set('alertas', $alertas);
        $this->set(compact('total_alunos_activos', 'total_matriculas_activas', 'facturas_geradas', 'facturas_pagas', 'valor_arrecadado', 'valor_divida'));
    }

    function beforeFilter() {
        parent::beforeFilter();
        $user = $this->Auth->user();
        $this->Auth->allow('email_oficial_uem');
        if ($user != null) {
            $this->Auth->allowedActions = array('display','email_oficial_uem','webmail');
        }
    }

    public function docente_home() {

    }

    public function estudante_home() {
        

    }
    
    public function faculdade_home(){
        
    }
    public function email_oficial_uem() {
        $this->redirect('http://millpaginas.com/como-acessar-e-usar-o-novo-email-institucional-da-sua-universidade/');
    }
    public function webmail() {
        $this->redirect('https://www.google.com/a/uem.ac.mz/');
    }

}

?>