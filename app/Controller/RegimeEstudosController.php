<?php
	App::uses('AppController', 'Controller');

	/**
	 * RegimeEstudos Controller
	 *
	 * @property RegimeEstudo $RegimeEstudo
	 * @property PaginatorComponent $Paginator
	 */
	class RegimeEstudosController extends AppController
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
			$this->RegimeEstudo->recursive = 0;
			$this->set('regimeEstudos', $this->Paginator->paginate());
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
			if (!$this->RegimeEstudo->exists($id)) {
				throw new NotFoundException(__('Invalid regime estudo'));
			}
			$options = ['conditions' => ['RegimeEstudo.' . $this->RegimeEstudo->primaryKey => $id]];
			$this->set('regimeEstudo', $this->RegimeEstudo->find('first', $options));
		}

		/**
		 * add method
		 *
		 * @return void
		 */
		public function add()
		{
			if ($this->request->is('post')) {
				$this->RegimeEstudo->create();
				if ($this->RegimeEstudo->save($this->request->data)) {
					$this->Session->setFlash(__('The regime estudo has been saved.'));

					return $this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The regime estudo could not be saved. Please, try again.'));
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
			if (!$this->RegimeEstudo->exists($id)) {
				throw new NotFoundException(__('Invalid regime estudo'));
			}
			if ($this->request->is('post') || $this->request->is('put')) {
				if ($this->RegimeEstudo->save($this->request->data)) {
					$this->Session->setFlash(__('The regime estudo has been saved.'));

					return $this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The regime estudo could not be saved. Please, try again.'));
				}
			} else {
				$options = ['conditions' => ['RegimeEstudo.' . $this->RegimeEstudo->primaryKey => $id]];
				$this->request->data = $this->RegimeEstudo->find('first', $options);
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
			$this->RegimeEstudo->id = $id;
			if (!$this->RegimeEstudo->exists()) {
				throw new NotFoundException(__('Invalid regime estudo'));
			}
			$this->request->onlyAllow('post', 'delete');
			if ($this->RegimeEstudo->delete()) {
				$this->Session->setFlash(__('The regime estudo has been deleted.'));
			} else {
				$this->Session->setFlash(__('The regime estudo could not be deleted. Please, try again.'));
			}

			return $this->redirect(['action' => 'index']);
		}
	}
