<?php
	App::uses('AppController', 'Controller');

	/**
	 * EscolaNivelMedios Controller
	 *
	 * @property EscolaNivelMedio $EscolaNivelMedio
	 */
	class EscolaNivelMediosController extends AppController
	{


		/**
		 * index method
		 *
		 * @return void
		 */
		public function index()
		{
			$this->EscolaNivelMedio->recursive = 0;
			$this->set('escolaNivelMedios', $this->paginate());
		}

		/**
		 * view method
		 *
		 * @param string $id
		 * @return void
		 */
		public function view($id = null)
		{
			$this->EscolaNivelMedio->id = $id;
			if (!$this->EscolaNivelMedio->exists()) {
				throw new NotFoundException(__('Invalid escola nivel medio'));
			}
			$this->set('escolaNivelMedio', $this->EscolaNivelMedio->read(null, $id));
		}

		/**
		 * add method
		 *
		 * @return void
		 */
		public function add()
		{
			if ($this->request->is('post')) {
				$this->EscolaNivelMedio->create();
				if ($this->EscolaNivelMedio->save($this->request->data)) {
					$this->Session->setFlash(__('The escola nivel medio has been saved'));
					$this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The escola nivel medio could not be saved. Please, try again.'));
				}
			}
			$distritos = $this->EscolaNivelMedio->Distrito->find('list');
			$provincias = $this->EscolaNivelMedio->Provincium->find('list');
			$pais = $this->EscolaNivelMedio->Pai->find('list');
			$this->set(compact('distritos', 'provincias', 'pais'));
		}

		/**
		 * edit method
		 *
		 * @param string $id
		 * @return void
		 */
		public function edit($id = null)
		{
			$this->EscolaNivelMedio->id = $id;
			if (!$this->EscolaNivelMedio->exists()) {
				throw new NotFoundException(__('Invalid escola nivel medio'));
			}
			if ($this->request->is('post') || $this->request->is('put')) {
				if ($this->EscolaNivelMedio->save($this->request->data)) {
					$this->Session->setFlash(__('The escola nivel medio has been saved'));
					$this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The escola nivel medio could not be saved. Please, try again.'));
				}
			} else {
				$this->request->data = $this->EscolaNivelMedio->read(null, $id);
			}
			$distritos = $this->EscolaNivelMedio->Distrito->find('list');
			$provincias = $this->EscolaNivelMedio->Provincium->find('list');
			$pais = $this->EscolaNivelMedio->Pai->find('list');
			$this->set(compact('distritos', 'provincias', 'pais'));
		}

		/**
		 * delete method
		 *
		 * @param string $id
		 * @return void
		 */
		public function delete($id = null)
		{
			if (!$this->request->is('post')) {
				throw new MethodNotAllowedException();
			}
			$this->EscolaNivelMedio->id = $id;
			if (!$this->EscolaNivelMedio->exists()) {
				throw new NotFoundException(__('Invalid escola nivel medio'));
			}
			if ($this->EscolaNivelMedio->delete()) {
				$this->Session->setFlash(__('Escola nivel medio deleted'));
				$this->redirect(['action' => 'index']);
			}
			$this->Session->setFlash(__('Escola nivel medio was not deleted'));
			$this->redirect(['action' => 'index']);
		}
	}
