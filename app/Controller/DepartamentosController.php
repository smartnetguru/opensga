<?php
/**
 * Controller de Departamentos
 * 
 * @copyright     Copyright 2010-2011, INFOmoz (Inform�tica-Mo�ambique) (http://infomoz.net)
 ** @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.1.0

 * 
 */
 
 
 
class DepartamentosController extends AppController {

	var $name = 'Departamentos';

	function index() {
		$this->Departamento->recursive = 0;
		$this->set('departamentos', $this->paginate());
	}

	function ver_departamento($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalido %s', 'flasherror');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('departamento', $this->Departamento->read(null, $id));
	}

	function adicionar_departamento() {
		if (!empty($this->data)) {
			$this->Departamento->create();
			if ($this->Departamento->save($this->data)) {
				$this->Session->setFlash('** Dados Cadastrados com Sucesso **','flashok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.','flasherror');}
		}
        $faculdades = $this->Departamento->Faculdade->find('list');
        
        $this->set(compact('faculdades'));
        
	}

	function editar_departamento($id = null) {
		$this->Departamento->id=$id;
        if(!$this->Departamento->exists()){
            throw new NotFoundException('Departamento Inválido');
        }
        if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'departamento'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Departamento->save($this->data)) {
				$this->Session->setFlash('Dado Editados com sucesso','flashok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao editar dados. Por favor tente de novo.','flasherror');

                                }
		}
		
		if (empty($this->data)) {
			$this->data = $this->Departamento->read(null, $id);
		}
        $faculdades = $this->Departamento->Faculdade->find('list');
        
        $this->set(compact('faculdades'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'tg0006departamento'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Departamento->delete($id)) {
			$this->Session->setFlash('Dados deletedos com sucesso ','flashok');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Departamento'));
		$this->redirect(array('action' => 'index'));
	}
        function beforeRender(){
            $this->set('current_section','administracao');
        }
}
?>