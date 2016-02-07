<?php
	App::uses('AppController', 'Controller');

	/**
	 * EstadoObjectos Controller
	 *
	 * @property EstadoObjecto $EstadoObjecto
	 * @property PaginatorComponent $Paginator
	 */
	class EstadoObjectosController extends AppController
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
			$this->EstadoObjecto->recursive = 0;
			$this->set('estadoObjectos', $this->Paginator->paginate());
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
			if (!$this->EstadoObjecto->exists($id)) {
				throw new NotFoundException(__('Invalid estado objecto'));
			}
			$options = ['conditions' => ['EstadoObjecto.' . $this->EstadoObjecto->primaryKey => $id]];
			$this->set('estadoObjecto', $this->EstadoObjecto->find('first', $options));
		}

		/**
		 * add method
		 *
		 * @return void
		 */
		public function add()
		{
			if ($this->request->is('post')) {
				$this->EstadoObjecto->create();
				if ($this->EstadoObjecto->save($this->request->data)) {
					$this->Session->setFlash(__('The estado objecto has been saved.'));

					return $this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The estado objecto could not be saved. Please, try again.'));
				}
			}
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
			if (!$this->EstadoObjecto->exists($id)) {
				throw new NotFoundException(__('Invalid estado objecto'));
			}
			if ($this->request->is(['post', 'put'])) {
				if ($this->EstadoObjecto->save($this->request->data)) {
					$this->Session->setFlash(__('The estado objecto has been saved.'));

					return $this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The estado objecto could not be saved. Please, try again.'));
				}
			} else {
				$options = ['conditions' => ['EstadoObjecto.' . $this->EstadoObjecto->primaryKey => $id]];
				$this->request->data = $this->EstadoObjecto->find('first', $options);
			}
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
			$this->EstadoObjecto->id = $id;
			if (!$this->EstadoObjecto->exists()) {
				throw new NotFoundException(__('Invalid estado objecto'));
			}
			$this->request->allowMethod('post', 'delete');
			if ($this->EstadoObjecto->delete()) {
				$this->Session->setFlash(__('The estado objecto has been deleted.'));
			} else {
				$this->Session->setFlash(__('The estado objecto could not be deleted. Please, try again.'));
			}

			return $this->redirect(['action' => 'index']);
		}
	}
