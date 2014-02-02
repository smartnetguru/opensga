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
 
 
class TurmaTipoAvaliacaosController extends AppController {

	var $name = 'TurmaTipoAvaliacaos';

	function index() {
		$this->TurmaTipoAvaliacao->recursive = 0;
		$this->set('TurmaTipoAvaliacaos', $this->paginate());
	}
    
    /**
     *Mostra o formulario para que se possa introduzir as notas dos estudantes
     * @param type $id 
     * @todo verificar se o find de inscricoes apenas retorna 1 avaliacao, rerente a este tipo de avaliacao
     */
	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Esta Avaliação não está disponível para esta Turma'), 'flasherror');
			$this->redirect(array('action' => 'index'));
		}
        if ($this->request->is('post') || $this->request->is('put')) {
            foreach($this->request->data['Avaliacao'] as $avaliacao){
                
                $avaliacao['data']=date('Y-m-d');
                $avaliacao_find = $this->TurmaTipoAvaliacao->Avaliacao->find('first',array('conditions'=>array('Avaliacao.inscricao_id'=>$avaliacao['inscricao_id'],'Avaliacao.TurmaTipoAvaliacao_id'=>$avaliacao['TurmaTipoAvaliacao_id'])));
                if($avaliacao_find){
                    $this->TurmaTipoAvaliacao->Avaliacao->id = $avaliacao_find['Avaliacao']['id'];
                    $this->TurmaTipoAvaliacao->Avaliacao->save($avaliacao);
                }
                else{
                    $this->TurmaTipoAvaliacao->Avaliacao->create();
                    $this->TurmaTipoAvaliacao->Avaliacao->save($avaliacao);
                }
                
            }
        }
        
        $TurmaTipoAvaliacao = $this->TurmaTipoAvaliacao->read(null, $id);
        $this->TurmaTipoAvaliacao->Turma->Inscricao->contain(
                array(
                    'Matricula'=>array(
                        'Aluno'=>array(
                            'Entidade'
                        )
                    ),
                    'Turma',
                    'Avaliacao'=>array(
                        'conditions'=>array('Avaliacao.TurmaTipoAvaliacao_id'=>$id)
                    )
                )
        );
        $inscricoes = $this->TurmaTipoAvaliacao->Turma->Inscricao->find('all',array('conditions'=>array('Inscricao.turma_id'=>$TurmaTipoAvaliacao['Turma']['id'])));
        
        $avaliacoes = $this->TurmaTipoAvaliacao->Avaliacao->find('all',array('conditions'=>array('Avaliacao.TurmaTipoAvaliacao_id'=>$id)));
        
		$this->set('TurmaTipoAvaliacao', $TurmaTipoAvaliacao);
                if (empty($this->data)) {
			$this->data = $this->TurmaTipoAvaliacao->read(null, $id);
		}

		$turma = $this->TurmaTipoAvaliacao->Turma->find('list');
		$tipoavaliacao = $this->TurmaTipoAvaliacao->TipoAvaliacao->find('list');
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
			$tta['TurmaTipoAvaliacao']['turma_id']=$turma_id;
            $tta['TurmaTipoAvaliacao']['estado']=1;
			
            //Precisamos verificar se o peso total nao ultrapassa 100%
            $pesos = $this->TurmaTipoAvaliacao->find('first',array('fields'=>array('SUM(TurmaTipoAvaliacao.peso)')));
			$this->TurmaTipoAvaliacao->create();
			if ($this->TurmaTipoAvaliacao->save($tta)) {
				$this->Session->setFlash(__('Avaliacao Adicionada com sucesso'),'flashok');
				$this->redirect(array('controller'=>'turmas','action' => 'view',$turma_id));
				
			} else {
				$this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo Zai.','flasherror');}
		}

	
		$pesos = $this->TurmaTipoAvaliacao->find('all',array('fields'=>array('SUM(TurmaTipoAvaliacao.peso)')));
        debug($pesos);
        $this->TurmaTipoAvaliacao->Turma->recursive = -1;
		$turma = $this->TurmaTipoAvaliacao->Turma->findById($turma_id);
		$tipoavaliacaos = $this->TurmaTipoAvaliacao->TipoAvaliacao->find('list');
		$this->set(compact('turma', 'tipoavaliacaos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalido %s', 'flasherror');
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->TurmaTipoAvaliacao->save($this->data)) {
				$this->Session->setFlash('Dado Editados com sucesso','flashok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao editar dados. Por favor tente de novo.','flasherror');}
		}
		if (empty($this->data)) {
			$this->data = $this->TurmaTipoAvaliacao->read(null, $id);
		}
		$turmas = $this->TurmaTipoAvaliacao->Turma->find('list');
		$tipoavaliacaos = $this->TurmaTipoAvaliacao->TipoAvaliacao->find('list');
		$this->set(compact('t0010turmas', 'tipoavaliacaos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 't0018TurmaTipoAvaliacao'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->TurmaTipoAvaliacao->delete($id)) {
			$this->Session->setFlash('Dados deletedos com sucesso ','flashok');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'TurmaTipoAvaliacao'));
		$this->redirect(array('action' => 'index'));
	}
        function beforeRender(){
            $this->set('current_section','avaliacao');
        }
		
		
}
?>