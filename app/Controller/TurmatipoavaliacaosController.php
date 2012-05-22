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
 
 
class TurmatipoavaliacaosController extends AppController {

	var $name = 'Turmatipoavaliacaos';

	function index() {
		$this->Turmatipoavaliacao->recursive = 0;
		$this->set('turmatipoavaliacaos', $this->paginate());
	}
    
    /**
     *Mostra o formulario para que se possa introduzir as notas dos estudantes
     * @param type $id 
     * @todo verificar se o find de inscricoes apenas retorna 1 avaliacao, rerente a este tipo de avaliacao
     */
	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalido %s', 'flasherror');
			$this->redirect(array('action' => 'index'));
		}
        if ($this->request->is('post') || $this->request->is('put')) {
            foreach($this->request->data['Avaliacao'] as $avaliacao){
                
                $avaliacao['data']=date('Y-m-d');
                $avaliacao_find = $this->Turmatipoavaliacao->Avaliacao->find('first',array('conditions'=>array('Avaliacao.inscricao_id'=>$avaliacao['inscricao_id'],'Avaliacao.turmatipoavaliacao_id'=>$avaliacao['turmatipoavaliacao_id'])));
                if($avaliacao_find){
                    $this->Turmatipoavaliacao->Avaliacao->id = $avaliacao_find['Avaliacao']['id'];
                    $this->Turmatipoavaliacao->Avaliacao->save($avaliacao);
                }
                else{
                    $this->Turmatipoavaliacao->Avaliacao->create();
                    $this->Turmatipoavaliacao->Avaliacao->save($avaliacao);
                }
                
            }
        }
        
        $turmatipoavaliacao = $this->Turmatipoavaliacao->read(null, $id);
        $this->Turmatipoavaliacao->Turma->Inscricao->contain(
                array(
                    'Aluno',
                    'Turma',
                    'Avaliacao'=>array(
                        'conditions'=>array('Avaliacao.turmatipoavaliacao_id'=>$id)
                    )
                )
        );
        $inscricoes = $this->Turmatipoavaliacao->Turma->Inscricao->find('all',array('conditions'=>array('Inscricao.turma_id'=>$turmatipoavaliacao['Turma']['id'])));
        
        $avaliacoes = $this->Turmatipoavaliacao->Avaliacao->find('all',array('conditions'=>array('Avaliacao.turmatipoavaliacao_id'=>$id)));
        
		$this->set('turmatipoavaliacao', $turmatipoavaliacao);
                if (empty($this->data)) {
			$this->data = $this->Turmatipoavaliacao->read(null, $id);
		}

		$turma = $this->Turmatipoavaliacao->Turma->find('list');
		$tipoavaliacao = $this->Turmatipoavaliacao->Tipoavaliacao->find('list');
       	$this->set(compact('turma', 'tipoavaliacao','inscricoes','avaliacoes'));
	}
    /**
     *Adiciona uma nova avaliacao a turma
     * 
     * Verifica a Ordem e os pesos das avaliacaos de acordo com as avaliacoes previamente registradas nesta turma
     * 
     * @todo Optimizar esta funcao para a versao 2 do Cake
     * @todo Ver os pesos das avaliacoes
     * @todo Ver as ordens das avaliacoes
     * @todo testar tudo
     * @param type $turma_id 
     */
	function add($turma_id) {
		if ($this->request->is('post')) {
			$tta = $this->request->data;
			$tta['Turmatipoavaliacao']['turma_id']=$turma_id;
            $tta['Turmatipoavaliacao']['estado']=1;
			
            //Precisamos verificar se o peso total nao ultrapassa 100%
            $pesos = $this->Turmatipoavaliacao->find('first',array('fields'=>array('SUM(Turmatipoavaliacao.peso)')));
			$this->Turmatipoavaliacao->create();
			if ($this->Turmatipoavaliacao->save($tta)) {
				$this->Session->setFlash(__('Avaliacao Adicionada com sucesso'),'flashok');
				$this->redirect(array('controller'=>'turmas','action' => 'view',$turma_id));
				
			} else {
				$this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo Zai.','flasherror');}
		}

	
		$pesos = $this->Turmatipoavaliacao->find('all',array('fields'=>array('SUM(Turmatipoavaliacao.peso)')));
        debug($pesos);
        $this->Turmatipoavaliacao->Turma->recursive = -1;
		$turma = $this->Turmatipoavaliacao->Turma->findById($turma_id);
		$tipoavaliacaos = $this->Turmatipoavaliacao->Tipoavaliacao->find('list');
		$this->set(compact('turma', 'tipoavaliacaos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalido %s', 'flasherror');
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Turmatipoavaliacao->save($this->data)) {
				$this->Session->setFlash('Dado Editados com sucesso','flashok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao editar dados. Por favor tente de novo.','flasherror');}
		}
		if (empty($this->data)) {
			$this->data = $this->Turmatipoavaliacao->read(null, $id);
		}
		$turmas = $this->Turmatipoavaliacao->Turma->find('list');
		$tipoavaliacaos = $this->Turmatipoavaliacao->Tipoavaliacao->find('list');
		$this->set(compact('t0010turmas', 'tipoavaliacaos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 't0018turmatipoavaliacao'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Turmatipoavaliacao->delete($id)) {
			$this->Session->setFlash('Dados deletedos com sucesso ','flashok');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Turmatipoavaliacao'));
		$this->redirect(array('action' => 'index'));
	}
        function beforeRender(){
            $this->set('current_section','avaliacao');
        }
		
		
}
?>