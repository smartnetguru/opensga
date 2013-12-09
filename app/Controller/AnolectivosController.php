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
 
 
class AnolectivosController extends AppController {

	var $name = 'Anolectivos';

	function index() {
		$this->Anolectivo->recursive = 0;
                $this->paginate = array('limit'=>1000,'order'=>'Anolectivo.ano DESC');
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

	function novo_ano_lectivo() {
	    
                if($this->request->is('post')){
                    $this->request->data['Anolectivo']['ano'] = $this->request->data['Anolectivo']['ano']['year'];
                    $this->Anolectivo->create();
                    if($this->Anolectivo->save($this->request->data)){
                        $semestres = array();
                        $semestres[] = array(
                            'Semestrelectivo'=>array(
                                'anolectivo_id'=>$this->Anolectivo->id,
                                'codigo'=>$this->request->data['Anolectivo']['ano'].'-1',
                                'semestre'=>1,
                                'semestre_id'=>1
                            )
                        );
                        $semestres[] = array(
                            'Semestrelectivo'=>array(
                                'anolectivo_id'=>$this->Anolectivo->id,
                                'codigo'=>$this->request->data['Anolectivo']['ano'].'-2',
                                'semestre'=>2,
                                'semestre_id'=>2
                            )
                        );
                        $this->Anolectivo->Semestrelectivo->create();
                        if($this->Anolectivo->Semestrelectivo->saveAll($semestres)){
                            $this->Session->setFlash(__('O Ano lectivo e os seus semestres foram registrados com Sucesso'),'default',array('class'=>'alert success'));
                            $this->redirect(array('action'=>'index'));
                        } else{
                            $this->Session->setFlash(__('O ano lectivo foi gravado, mas os semestres nãO'),'default',array('class'=>'alert error'));
                        }
                    } else{
                        $this->Session->setFlash(__('Não foi possivel gravar os dados. Tente novamente'),'default',array('class'=>'alert error'));
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