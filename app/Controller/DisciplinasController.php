<?php
/**
 * Controller de Disciplinas
 *
 * @copyright     Copyright 2010-2011, INFOmoz (Inform�tica-Mo�ambique) (http://infomoz.net)
 ** @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.1.0

 *
 */



class DisciplinasController extends AppController {

	var $name = 'Disciplinas';
        var $paginate = array(
            'limit'=>1000
        );

    function index() {
		$this->Disciplina->recursive = 0;
        $disciplinas = $this->Disciplina->find('all');
		$this->set('disciplinas', $disciplinas);
	}

    function faculdade_index() {
        $this->Disciplina->contain(array(
            'DisciplinaUnidadeOrganica'
        ));
        $this->paginate = array(
            'conditions'=>array(
                'DisciplinaUnidadeOrganica.unidade_organica_id'=>Configure::read('Auth.User.unidade_organica_id')
            ),
            'contain'=>array(
                'DisciplinaUnidadeOrganica'
                )
        
        );
		$disciplinas = $this->paginate();
		$this->set('disciplinas', $disciplinas);
	}
    
    function faculdade_ver_disciplina($id = null)
    {

		if (!$id) {
			$this->Session->setFlash('Invalido %s', 'flasherror');
			$this->redirect(array('action' => 'index'));
		}
	$this->set('disciplina', $this->Disciplina->read(null, $id));
    // var_dump($this->data);
			if (empty($this->data)) {
			$this->data = $this->Disciplina->read(null, $id);
		}
		$grupodisciplinars = $this->Disciplina->Grupodisciplinar->find('list');
		$this->set(compact('grupodisciplinars'));
	}
    
    function faculdade_adicionar_disciplina() {
		if (!empty($this->data)) {
			$this->Disciplina->create();
			if ($this->Disciplina->save($this->data)) {
				$this->Session->setFlash(__('Dados Registrados com Sucesso'),'default',array('class'=>'alert_success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Problemas ao Registrar dados.'),'default',array('class'=>'alert error'));
			}
		}
        $unidadeOrganicas = $this->Disciplina->UnidadeOrganica->find('list');
		$this->set(compact('unidadeOrganicas'));
	}

    
    	function faculdade_editar_disciplina($id = null){
        $this->Disciplina->id = $id;
		if(!$this->Disciplina->exists()){
            throw new NotFoundException('Disciplina Inválida');
        }
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalido %s', 'flasherror');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {

			//die(var_dump($this->request->data));
			if ($this->Disciplina->save($this->request->data)) {
			////$logmv->logUpdate(4,$this->Session->read('Auth.User.id'),$id,$this->data["Disciplina"]["name"]);

				$this->Session->setFlash('Dados editados com sucesso','default',array('class'=>'alert_success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Problemas ao editar dados','default',array('class'=>'alert_error'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Disciplina->read(null, $id);
		}

        $unidadeOrganicas = $this->Disciplina->UnidadeOrganica->find('list');
		$this->set(compact('unidadeOrganicas'));
	}
    
    
	function ver_disciplina($id = null)
    {

		if (!$id) {
			$this->Session->setFlash('Invalido %s', 'flasherror');
			$this->redirect(array('action' => 'index'));
		}
	$this->set('disciplina', $this->Disciplina->read(null, $id));
    // var_dump($this->data);
			if (empty($this->data)) {
			$this->data = $this->Disciplina->read(null, $id);
		}
		$grupodisciplinars = $this->Disciplina->Grupodisciplinar->find('list');
		$this->set(compact('grupodisciplinars'));
	}

	function adicionar_disciplina() {
		if (!empty($this->data)) {
			$this->Disciplina->create();
			if ($this->Disciplina->save($this->data)) {
				$this->Session->setFlash(__('Dados Registrados com Sucesso'),'default',array('class'=>'alert_success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Problemas ao Registrar dados.'),'default',array('class'=>'alert error'));
			}
		}
        $unidadeOrganicas = $this->Disciplina->UnidadeOrganica->find('list');
		$this->set(compact('unidadeOrganicas'));
	}

	function editar_disciplina($id = null){
        $this->Disciplina->id = $id;
		if(!$this->Disciplina->exists()){
            throw new NotFoundException('Disciplina Inválida');
        }
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalido %s', 'flasherror');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {

			//die(var_dump($this->request->data));
			if ($this->Disciplina->save($this->request->data)) {
			////$logmv->logUpdate(4,$this->Session->read('Auth.User.id'),$id,$this->data["Disciplina"]["name"]);

				$this->Session->setFlash('Dados editados com sucesso','default',array('class'=>'alert_success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Problemas ao editar dados','default',array('class'=>'alert_error'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Disciplina->read(null, $id);
		}

        $unidadeOrganicas = $this->Disciplina->UnidadeOrganica->find('list');
		$this->set(compact('unidadeOrganicas'));
	}


}
?>