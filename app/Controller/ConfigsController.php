<?php
/**
 * Controller de Configurações do OpenSGA
 * 
 * @copyright     Copyright 2010-2011, INFOmoz (Inform�tica-Mo�ambique) (http://infomoz.net)
 ** @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.config
 * @since         OpenSGA v 0.1.0

 * 
 */
class ConfigsController extends AppController {

	var $name = 'Configs';

	function index() {
		$this->Config->recursive = 0;
		$this->set('configs', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('ID Inválido', true), 'user'),'flasherror');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('config', $this->Config->read(null, $id));
	}

	function adicionar_configuracao() {
		if (!empty($this->data)) {
			$this->Config->create();
			if ($this->Config->save($this->data)) {
				$this->Session->setFlash(sprintf(__('Dados Gravados com Sucesso', true), 'user'),'flashok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('Dados não gravados. Por favor, tente de novo', true), 'user'),'flasherror');
			}
		}
	}

	function editar_configuracao($id = null) {
        $this->Config->id = $id;
        
		if (!$this->Config->exists()) {
			$this->Session->setFlash(sprintf(__('%s Invalida'), 'Configuraçao'),'default',array('class'=>'alert error'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Config->save($this->data)) {
				$this->Session->setFlash(sprintf(__('Dados gravados com sucesso', true), 'user'),'default',array('class'=>'alert success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('Dados não gravados. Por favor, tente de novo', true), 'user'),'default',array('class'=>'alert error'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Config->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('ID Inválido', true), 'user'),'flasherror');
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Config->delete($id)) {
			$this->Session->setFlash(sprintf(__('Dados removidos com sucesso', true), 'user'),'flashok');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('Dados não removidos.Por favor, tente de novo', true), 'user'),'flasherror');
		$this->redirect(array('action' => 'index'));
	}
	
	function language($language_id){
		if($language_id==1)
		$this->Session->write('Config.language', 'por');
		
		else{
			$this->Session->write('Config.language', 'eng');
		}
		Configure::write('Config.language', $this->Session->read('Config.language'));
		$this->Session->setFlash(__('O idioma do sistema foi alterado com sucesso'),'default',array('class'=>'alert info'));
		$this->redirect($this->referer());
	}
}


