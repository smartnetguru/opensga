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
	 * @author          Elisio Leonardo (elisio.leonardo@gmail.com)
	 * @package       opensga
	 * @subpackage    opensga.core.controller
	 * @since         OpenSGA v 0.10.0.0
	 *
	 */
	class TipoavaliacaosController extends AppController
	{

		var $name = 'Tipoavaliacaos';

		function index()
		{
			$this->TipoAvaliacao->recursive = 0;
			$this->set('tipoavaliacaos', $this->paginate());
		}

		function view($id = null)
		{
			//App::Import('Model','Logmv');
			//$logmv = new Logmv;
			if (!$id) {
				$this->Session->setFlash('Invalido %s', 'flasherror');
				$this->redirect(['action' => 'index']);
			}
			$this->set('t0015tipoavaliacao', $this->TipoAvaliacao->read(null, $id));
			if (empty($this->data)) {
				$this->data = $this->TipoAvaliacao->read(null, $id);
				//$logmv->logview(13,$this->Session->read('Auth.User.id'),$id,$this->data["TipoAvaliacao"]["name"]);

				$EpocaAvaliacaos = $this->TipoAvaliacao->EpocaAvaliacao->find('list');
				$this->set(compact('EpocaAvaliacaos'));
			}

		}

		function add()
		{
			//App::Import('Model','Logmv');
			//$logmv = new Logmv;
			if (!empty($this->data)) {
				$this->TipoAvaliacao->create();
				if ($this->TipoAvaliacao->save($this->data)) {
					//$logmv->logInsert(13,$this->Session->read('Auth.User.id'),$this->TipoAvaliacao->getLastInsertID(),$this->data["TipoAvaliacao"]["name"]);
					$this->Session->setFlash('** Dados Cadastrados com Sucesso **', 'flashok');
					$this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.', 'flasherror');

				}
			}
			$EpocaAvaliacaos = $this->TipoAvaliacao->EpocaAvaliacao->find('list');
			$this->set(compact('EpocaAvaliacaos'));
		}

		function edit($id = null)
		{
			//App::Import('Model','Logmv');
			//$logmv = new Logmv;
			if (!$id && empty($this->data)) {
				$this->Session->setFlash('Invalido %s', 'flasherror');
				$this->redirect(['action' => 'index']);
			}
			if (!empty($this->data)) {
				if ($this->TipoAvaliacao->save($this->data)) {
					//$logmv->logUpdate(13,$this->Session->read('Auth.User.id'),$id,$this->data["TipoAvaliacao"]["name"]);
					$this->Session->setFlash('Dado Editados com sucesso', 'flashok');
					$this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash('Erro ao editar dados. Por favor tente de novo.', 'flasherror');
				}
			}
			if (empty($this->data)) {
				$this->data = $this->TipoAvaliacao->read(null, $id);
			}
			$EpocaAvaliacaos = $this->TipoAvaliacao->EpocaAvaliacao->find('list');
			$this->set(compact('EpocaAvaliacaos'));
		}

		function delete($id = null)
		{
			//App::Import('Model','Logmv');
			//$logmv = new Logmv;
			if (!$id) {
				$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 't0015tipoavaliacao'));
				$this->redirect(['action' => 'index']);
			}
			if ($this->TipoAvaliacao->delete($id)) {
				//$logmv->logDelete(13,$this->Session->read('Auth.User.id'),$id,'Delete Tipo de Avaliacao');
				$this->Session->setFlash('Dados deletedos com sucesso ', 'flashok');
				$this->redirect(['action' => 'index']);
			}
			$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'TipoAvaliacao'));
			$this->redirect(['action' => 'index']);
		}

		function beforeRender()
		{
			$this->set('current_section', 'avaliacao');
		}
	}

?>