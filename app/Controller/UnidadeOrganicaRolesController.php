<?php
	App::uses('AppController', 'Controller');

	/**
	 * UnidadeOrganicaRoles Controller
	 *
	 * @property UnidadeOrganicaRole $UnidadeOrganicaRole
	 * @property PaginatorComponent $Paginator
	 */
	class UnidadeOrganicaRolesController extends AppController
	{

		/**
		 * Components
		 *
		 * @var array
		 */
		public $components = ['Paginator'];

		/**
		 * index method
		 *
		 * @return void
		 */
		public function index()
		{
			$this->UnidadeOrganicaRole->recursive = 0;
			$this->set('unidadeOrganicaRoles', $this->Paginator->paginate());
		}

		/**
		 * view method
		 *
		 * @throws NotFoundException
		 * @param string $id
		 * @return void
		 */
		public function view($id = null)
		{
			if (!$this->UnidadeOrganicaRole->exists($id)) {
				throw new NotFoundException(__('Invalid unidade organica role'));
			}
			$options = ['conditions' => ['UnidadeOrganicaRole.' . $this->UnidadeOrganicaRole->primaryKey => $id]];
			$this->set('unidadeOrganicaRole', $this->UnidadeOrganicaRole->find('first', $options));
		}

		/**
		 * add method
		 *
		 * @return void
		 */
		public function add()
		{
			if ($this->request->is('post')) {
				$this->UnidadeOrganicaRole->create();
				if ($this->UnidadeOrganicaRole->save($this->request->data)) {
					$this->Session->setFlash(__('The unidade organica role has been saved.'));

					return $this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The unidade organica role could not be saved. Please, try again.'));
				}
			}
			$unidadeOrganicas = $this->UnidadeOrganicaRole->UnidadeOrganica->find('list');
			$roles = $this->UnidadeOrganicaRole->Role->find('list');
			$estadoObjectos = $this->UnidadeOrganicaRole->EstadoObjecto->find('list');
			$this->set(compact('unidadeOrganicas', 'roles', 'estadoObjectos'));
		}

		/**
		 * edit method
		 *
		 * @throws NotFoundException
		 * @param string $id
		 * @return void
		 */
		public function edit($id = null)
		{
			if (!$this->UnidadeOrganicaRole->exists($id)) {
				throw new NotFoundException(__('Invalid unidade organica role'));
			}
			if ($this->request->is(['post', 'put'])) {
				if ($this->UnidadeOrganicaRole->save($this->request->data)) {
					$this->Session->setFlash(__('The unidade organica role has been saved.'));

					return $this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The unidade organica role could not be saved. Please, try again.'));
				}
			} else {
				$options = ['conditions' => ['UnidadeOrganicaRole.' . $this->UnidadeOrganicaRole->primaryKey => $id]];
				$this->request->data = $this->UnidadeOrganicaRole->find('first', $options);
			}
			$unidadeOrganicas = $this->UnidadeOrganicaRole->UnidadeOrganica->find('list');
			$roles = $this->UnidadeOrganicaRole->Role->find('list');
			$estadoObjectos = $this->UnidadeOrganicaRole->EstadoObjecto->find('list');
			$this->set(compact('unidadeOrganicas', 'roles', 'estadoObjectos'));
		}

		/**
		 * delete method
		 *
		 * @throws NotFoundException
		 * @param string $id
		 * @return void
		 */
		public function delete($id = null)
		{
			$this->UnidadeOrganicaRole->id = $id;
			if (!$this->UnidadeOrganicaRole->exists()) {
				throw new NotFoundException(__('Invalid unidade organica role'));
			}
			$this->request->onlyAllow('post', 'delete');
			if ($this->UnidadeOrganicaRole->delete()) {
				$this->Session->setFlash(__('The unidade organica role has been deleted.'));
			} else {
				$this->Session->setFlash(__('The unidade organica role could not be deleted. Please, try again.'));
			}

			return $this->redirect(['action' => 'index']);
		}
	}
