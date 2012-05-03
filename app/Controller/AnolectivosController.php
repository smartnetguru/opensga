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
 * @link          http://infomoz.net/opensga CakePHP(tm) Project
 * @author		  Elisio Leonardo (http://infomoz.net/elisio-leonardo)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.10.0.0
 * @license       GNU Affero General Public License
 * 
 */
 
 
class AnolectivosController extends AppController {

	var $name = 'Anolectivos';

	function index() {
		$this->Anolectivo->recursive = 0;
		$this->set('anolectivos', $this->paginate());
	}

	function view($id = null) {
	        //App::Import('Model','Logmv');
	        //$logmv = new Logmv;
		if (!$id) {
			$this->Session->setFlash('Invalido %s', 'flasherror');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('anolectivo', $this->Anolectivo->read(null, $id));
		if (empty($this->data)) {
			//$this->set('user', $this->User->read(null, $id));
			$this->data = $this->Anolectivo->read(null, $id);
			//$logmv->logview(6,$this->Session->read('Auth.User.id'),$this->data["Anolectivo"]["id"],$this->data["Anolectivo"]["codigo"]);
		}
		$anolectivo = $this->Anolectivo->find('list');
		//$this->set(compact('users'));
		//$groups = $this->User->Group->find('list');
		$this->set(compact('anolectivo'));
	}

	function add() {
	    
		if (!empty($this->data)) {
			$this->Anolectivo->create();
            $dados['Anolectivo']['codigo'] = $this->request->data['Anolectivo']['ano']['year'];
			$dados['Anolectivo']['ano'] = $this->request->data['Anolectivo']['ano']['year'];
			$dados['Anolectivo']['num_semestre'] = 2;
			if ($this->Anolectivo->save($dados)) {
				$this->loadModel('Semestrelectivo');
				$semestres = array('Semestrelectivo'=>array(0=>array('codigo'=>$dados['Anolectivo']['codigo'].'-1','anolectivo_id'=>$this->Anolectivo->getInsertID(),'semestre'=>1,'data_inicio'=>$this->request->data['Anolectivo']['datainicio1'],'data_fim'=>$this->request->data['Anolectivo']['datafim1']),1=>array('codigo'=>$dados['Anolectivo']['codigo'].'-2','anolectivo_id'=>$this->Anolectivo->getInsertID(),'semestre'=>2,'data_inicio'=>$this->request->data['Anolectivo']['datainicio2'],'data_fim'=>$this->request->data['Anolectivo']['datafim2'])));
				if($this->Semestrelectivo->saveAll($semestres['Semestrelectivo'])){
					$this->loadModel('Config');
					$anolectivoconfig = $this->Config->findByName('ano_lectivo');
					$anolectivoconfig['Config']['value'] = $this->request->data['Anolectivo']['ano']['year'];
					$this->Config->save($anolectivoconfig);
					
					$anolectivo_id = $this->Config->findByName('anolectivo_id');
					$anolectivo_id['Config']['value'] = $this->Anolectivo->getInsertID();
					$this->Config->save($anolectivo_id);
					
					$semestrelectivo = $this->Config->findByName('semestre');
					$semestrelectivo['Config']['value'] = 1;
					$this->Config->save($semestrelectivo);
					
					$semestrelectivo_id = $this->Config->findByName('semestrelectivo_id');
					$semestrelectivo_id['Config']['value'] = $this->Semestrelectivo->getInsertID()-1;
					$this->Config->save($semestrelectivo_id);														
					
					
					$configs = $this->Config->find('all');
				$sgaconfigs = array();
				foreach($configs as $c){
					$name = "SGAConfig.".$c['Config']['name'];
					
					$this->Session->write($name,$c['Config']['value']);					
				}
				
					$this->Session->setFlash('** Dados Cadastrados com Sucesso **','flashok');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.','flasherror');}	
				}
				
		}
		
		
	}

	function edit($id = null) {
	        //App::Import('Model','Logmv');
	        //$logmv = new Logmv;
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalido %s', 'flasherror');
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Anolectivo->save($this->data)) {
			//$logmv->logUpdate(6,$this->Session->read('Auth.User.id'),$id,$this->data["Anolectivo"]["codigo"]);
				$this->Session->setFlash('Dado Editados com sucesso','flashok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao editar dados. Por favor tente de novo.','flasherror');}
		}
		if (empty($this->data)) {
			$this->data = $this->Anolectivo->read(null, $id);
		}
	}

	function delete($id = null) {
	        //App::Import('Model','Logmv');
	        //$logmv = new Logmv;
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 't0009anolectivo'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Anolectivo->delete($id)) {
		//$logmv->logDelete(6,$this->Session->read('Auth.User.id'),$id,$this->data["Anolectivo"]["codigo"]);
			$this->Session->setFlash('Dados deletedos com sucesso ','flashok');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Anolectivo'));
		$this->redirect(array('action' => 'index'));
	}
        function beforeRender(){
           $this->set('current_section','manutencao');
		//	$this->set('current_section','estudantes');
        }
         function pdf_index(){
		    //App::Import('Model','Logmv');
	        //$logmv = new Logmv;
            Configure::write('debug',0); // Otherwise we cannot use this method while developing
            $anolectivo = $this->Anolectivo->find('all');
            $listas = array();
            foreach( $anolectivo as $m){
                $lista = array();
                $lista[] =$m["Anolectivo"]["id"];
                $lista[] =$m["Anolectivo"]["codigo"];
	        $lista[] =$m["Anolectivo"]["ano"];
                $lista[] =$m["Anolectivo"]["num_semestre"];
               // $lista[] =$m["Planoestudo"]["duracao"];
               // $lista[] =$m["Planoestudo"]["semestresano"];
                $listas[] =$lista;
            }
           // $this->set('cursos',$this->Curso->find('all'));
           $this->set('lista',$listas);
           $this->layout = 'pdf'; //this will use the pdf.ctp layout
           $this->render();
        }
}
?>