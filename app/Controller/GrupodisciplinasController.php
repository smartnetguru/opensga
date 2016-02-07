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
	 * @author          Elisio Leonardo (http://infomoz.net/elisio-leonardo)
	 * @package       opensga
	 * @subpackage    opensga.core.controller
	 * @since         OpenSGA v 0.10.0.0
	 * @license       GNU Affero General Public License
	 *
	 */
	class GrupodisciplinasController extends AppController
	{

		var $name = 'Grupodisciplinas';

		function index()
		{
			$this->Grupodisciplina->recursive = 0;
			$this->set('t0007grupodisciplinas', $this->paginate());
		}

		function view($id = null)
		{
			if (!$id) {
				$this->Session->setFlash(sprintf(__('Invalid %s', true), 't0007grupodisciplina'));
				$this->redirect(['action' => 'index']);
			}
			$this->set('t0007grupodisciplina', $this->Grupodisciplina->read(null, $id));
		}

		function add()
		{
			if (!empty($this->data)) {
				$this->Grupodisciplina->create();
				if ($this->Grupodisciplina->save($this->data)) {
					$this->Session->setFlash(sprintf(__('Dado Registado com Sucesso', true), 't0007grupodisciplina'));
					$this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(sprintf(__('Erro ao gravar dados. Por favor tente de novo.', true),
						't0007grupodisciplina'));
				}
			}
			$disciplinas = $this->Grupodisciplina->Disciplina->find('list');
			$this->set(compact('t0004disciplinas'));
		}

		function edit($id = null)
		{
			if (!$id && empty($this->data)) {
				$this->Session->setFlash(sprintf(__('Invalid %s', true), 't0007grupodisciplina'));
				$this->redirect(['action' => 'index']);
			}
			if (!empty($this->data)) {
				if ($this->Grupodisciplina->save($this->data)) {
					$this->Session->setFlash(sprintf(__('Dado Registado com Sucesso', true), 't0007grupodisciplina'));
					$this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(sprintf(__('Erro ao gravar dados. Por favor tente de novo.', true),
						't0007grupodisciplina'));
				}
			}
			if (empty($this->data)) {
				$this->data = $this->Grupodisciplina->read(null, $id);
			}
			$disciplinas = $this->Grupodisciplina->Disciplina->find('list');
			$this->set(compact('t0004disciplinas'));
		}

		function delete($id = null)
		{
			if (!$id) {
				$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 't0007grupodisciplina'));
				$this->redirect(['action' => 'index']);
			}
			if ($this->Grupodisciplina->delete($id)) {
				$this->Session->setFlash(sprintf(__('%s deleted', true), 'Grupodisciplina'));
				$this->redirect(['action' => 'index']);
			}
			$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Grupodisciplina'));
			$this->redirect(['action' => 'index']);
		}

		function beforeRender()
		{
			$this->set('current_section', 'pedagogica');
		}
	}

?>