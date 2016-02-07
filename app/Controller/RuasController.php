<?php
	App::uses('AppController', 'Controller');

	/**
	 * Ruas Controller
	 *
	 * @property Rua $Rua
	 * @property PaginatorComponent $Paginator
	 */
	class RuasController extends AppController
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
			$this->Rua->recursive = 0;
			$this->set('ruas', $this->Paginator->paginate());
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
			if (!$this->Rua->exists($id)) {
				throw new NotFoundException(__('Invalid rua'));
			}
			$options = ['conditions' => ['Rua.' . $this->Rua->primaryKey => $id]];
			$this->set('rua', $this->Rua->find('first', $options));
		}

		/**
		 * add method
		 *
		 * @return void
		 */
		public function add()
		{
			if ($this->request->is('post')) {
				$this->Rua->create();
				if ($this->Rua->save($this->request->data)) {
					$this->Session->setFlash(__('The rua has been saved.'));

					return $this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The rua could not be saved. Please, try again.'));
				}
			}
			$cidades = $this->Rua->Cidade->find('list');
			$this->set(compact('cidades'));
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
			if (!$this->Rua->exists($id)) {
				throw new NotFoundException(__('Invalid rua'));
			}
			if ($this->request->is(['post', 'put'])) {
				if ($this->Rua->save($this->request->data)) {
					$this->Session->setFlash(__('The rua has been saved.'));

					return $this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The rua could not be saved. Please, try again.'));
				}
			} else {
				$options = ['conditions' => ['Rua.' . $this->Rua->primaryKey => $id]];
				$this->request->data = $this->Rua->find('first', $options);
			}
			$cidades = $this->Rua->Cidade->find('list');
			$this->set(compact('cidades'));
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
			$this->Rua->id = $id;
			if (!$this->Rua->exists()) {
				throw new NotFoundException(__('Invalid rua'));
			}
			$this->request->onlyAllow('post', 'delete');
			if ($this->Rua->delete()) {
				$this->Session->setFlash(__('The rua has been deleted.'));
			} else {
				$this->Session->setFlash(__('The rua could not be deleted. Please, try again.'));
			}

			return $this->redirect(['action' => 'index']);
		}
	}
