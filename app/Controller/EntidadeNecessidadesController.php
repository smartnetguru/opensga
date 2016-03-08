<?php
	App::uses('AppController', 'Controller');

	/**
	 * EntidadeNecessidades Controller
	 *
	 * @property EntidadeNecessidade $EntidadeNecessidade
	 * @property PaginatorComponent $Paginator
	 */
	class EntidadeNecessidadesController extends AppController
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
			$this->EntidadeNecessidade->recursive = 0;
			$this->set('entidadeNecessidades', $this->Paginator->paginate());
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
			if (!$this->EntidadeNecessidade->exists($id)) {
				throw new NotFoundException(__('Invalid entidade necessidade'));
			}
			$options = ['conditions' => ['EntidadeNecessidade.' . $this->EntidadeNecessidade->primaryKey => $id]];
			$this->set('entidadeNecessidade', $this->EntidadeNecessidade->find('first', $options));
		}

		/**
		 * add method
		 *
		 * @return void
		 */
		public function add()
		{
			if ($this->request->is('post')) {
				$this->EntidadeNecessidade->create();
				if ($this->EntidadeNecessidade->save($this->request->data)) {
					$this->Flash->success(__('The entidade necessidade has been saved.'));

					return $this->redirect(['action' => 'index']);
				} else {
					$this->Flash->error(__('The entidade necessidade could not be saved. Please, try again.'));
				}
			}
			$entidades = $this->EntidadeNecessidade->Entidade->find('list');
			$necessidadeEspecials = $this->EntidadeNecessidade->NecessidadeEspecial->find('list');
			$estadoObjectos = $this->EntidadeNecessidade->EstadoObjecto->find('list');
			$this->set(compact('entidades', 'necessidadeEspecials', 'estadoObjectos'));
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
			if (!$this->EntidadeNecessidade->exists($id)) {
				throw new NotFoundException(__('Invalid entidade necessidade'));
			}
			if ($this->request->is(['post', 'put'])) {
				if ($this->EntidadeNecessidade->save($this->request->data)) {
					$this->Flash->success(__('The entidade necessidade has been saved.'));

					return $this->redirect(['action' => 'index']);
				} else {
					$this->Flash->error(__('The entidade necessidade could not be saved. Please, try again.'));
				}
			} else {
				$options = ['conditions' => ['EntidadeNecessidade.' . $this->EntidadeNecessidade->primaryKey => $id]];
				$this->request->data = $this->EntidadeNecessidade->find('first', $options);
			}
			$entidades = $this->EntidadeNecessidade->Entidade->find('list');
			$necessidadeEspecials = $this->EntidadeNecessidade->NecessidadeEspecial->find('list');
			$estadoObjectos = $this->EntidadeNecessidade->EstadoObjecto->find('list');
			$this->set(compact('entidades', 'necessidadeEspecials', 'estadoObjectos'));
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
			$this->EntidadeNecessidade->id = $id;
			if (!$this->EntidadeNecessidade->exists()) {
				throw new NotFoundException(__('Invalid entidade necessidade'));
			}
			$this->request->allowMethod('post', 'delete');
			if ($this->EntidadeNecessidade->delete()) {
				$this->Flash->success(__('The entidade necessidade has been deleted.'));
			} else {
				$this->Flash->error(__('The entidade necessidade could not be deleted. Please, try again.'));
			}

			return $this->redirect(['action' => 'index']);
		}
	}
