<?php
/**
 * OpenSGA - Sistema de Gest�o Acad�mica
 *   Copyright (C) 2010-2011  INFOmoz (Inform�tica-Mo�ambique)
 * 
 * Este programa � um software livre: Voc� pode redistribuir e/ou modificar
 * todo ou parte deste programa, desde que siga os termos da licen�a por nele
 * estabelecidos. Grande parte do c�digo deste programa est� sob a licen�a 
 * GNU Affero General Public License publicada pela Free Software Foundation.
 * A vers�o original desta licen�a est� dispon�vel na pasta raiz deste software.
 * 
 * Este software � distribuido sob a perspectiva de que possa ser �til para 
 * satisfazer as necessidades dos seus utilizadores, mas SEM NENHUMA GARANTIA. Veja
 * os termos da licen�a GNU Affero General Public License para mais detalhes
 * 
 * As redistribui��es deste software, mesmo quando o c�digo-fonte for modificado significativamente,
 * devem manter est� informa��o legal, assim como a licen�a original do software.
 * 
 * @copyright     Copyright 2010-2011, INFOmoz (Inform�tica-Mo�ambique) (http://infomoz.net)
 ** @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.10.0.0

 * 
 */
 
 
class PagamentosController extends AppController {

	var $name = 'Pagamentos';

	function index() {
		$this->Pagamento->recursive = 0;
		$this->set('pagamentos', $this->paginate());
		
		$tipopagamentos = $this->Pagamento->Tipopagamento->find('list');
		$estadopagamentos = $this->Pagamento->Estadopagamento->find('list');
		
		$this->set(compact('tipopagamentos','estadopagamentos'));
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid pagamento', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('pagamento', $this->Pagamento->read(null, $id));
	}

	
	/**
	 * Gera Todos os pagamentos referente aos estudantes matriculados para um determinado semestre
	 */
	function gerar_pagamentos(){
			
		if(!empty($this->data)){
			$this->Pagamento->gerarPagamentos($this->data['Pagamento']['ano_lectivo']);	
		}	
		
		$anolectivos = $this->Pagamento->Anolectivo->find('list');
		$this->set(compact('anolectivos'));
	}
	
	
	function imprimir_facturas($aluno_id){
		$pagamentos = $this->Pagamento->find('all',array('conditions'=>array('Pagamento.aluno_id'=>$aluno_id)));
		
		$listas=array();
		foreach($pagamentos as $pagamento){
			$lista=array();
			
			$lista['codigo']=	$pagamento['Pagamento']['codigo'];
			$lista['codigo_aluno']=$pagamento['Aluno']['codigo'];
			$lista['aluno']=$pagamento['Aluno']['name'];
			$lista['pagamento']=$pagamento['Tipopagamento']['name'];
			$lista['data_limite']=$pagamento['Pagamento']['data_limite'];
			$lista['estado']=$pagamento['Estadopagamento']['name'];
			$listas[]=$lista;
		}
		
		$this->set('lista',$listas);
		$this->layout = 'pdf'; //this will use the pdf.ctp layout
        $this->render();
	}
	
	
	function add() {
		if (!empty($this->data)) {
			$this->Pagamento->create();
			if ($this->Pagamento->save($this->data)) {
				$this->Session->setFlash(__('The pagamento has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pagamento could not be saved. Please, try again.', true));
			}
		}
		$alunos = $this->Pagamento->Aluno->find('list');
		$contas = $this->Pagamento->Contum->find('list');
		$this->set(compact('alunos', 'contas'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid pagamento', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Pagamento->save($this->data)) {
				$this->Session->setFlash(__('The pagamento has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pagamento could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Pagamento->read(null, $id);
		}
		$alunos = $this->Pagamento->Aluno->find('list');
		$contas = $this->Pagamento->Contum->find('list');
		$this->set(compact('alunos', 'contas'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for pagamento', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Pagamento->delete($id)) {
			$this->Session->setFlash(__('Pagamento deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Pagamento was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	// Valor total em divida, total pago este mes e 20mt
	function relatorio_sidebar(){
		$divida = $this->Pagamento->find('all',array('conditions'=>array('Pagamento.estadopagamento_id'=>1),'fields'=>array('SUM(Pagamento.valor) as divida')));
		
		$this->set('divida',$divida[0][0]['divida']);
		var_dump($divida);
	}
	
	
    	function beforeRender(){
            parent::beforeRender();
            $this->set('current_section','contabilidade');
        }
}
