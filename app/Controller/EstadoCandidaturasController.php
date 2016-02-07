<?php
	App::uses('AppController', 'Controller');

	/**
	 * EstadoCandidaturas Controller
	 *
	 * @property EstadoCandidatura $EstadoCandidatura
	 * @property PaginatorComponent $Paginator
	 */
	class EstadoCandidaturasController extends AppController
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
			$this->EstadoCandidatura->recursive = 0;
			$this->set('estadoCandidaturas', $this->Paginator->paginate());
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
			if (!$this->EstadoCandidatura->exists($id)) {
				throw new NotFoundException(__('Invalid estado candidatura'));
			}
			$options = ['conditions' => ['EstadoCandidatura.' . $this->EstadoCandidatura->primaryKey => $id]];
			$this->set('estadoCandidatura', $this->EstadoCandidatura->find('first', $options));
		}

		/**
		 * add method
		 *
		 * @return void
		 */
		public function add()
		{
			if ($this->request->is('post')) {
				$this->EstadoCandidatura->create();
				if ($this->EstadoCandidatura->save($this->request->data)) {
					$this->Session->setFlash(__('The estado candidatura has been saved.'));

					return $this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The estado candidatura could not be saved. Please, try again.'));
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
			if (!$this->EstadoCandidatura->exists($id)) {
				throw new NotFoundException(__('Invalid estado candidatura'));
			}
			if ($this->request->is('post') || $this->request->is('put')) {
				if ($this->EstadoCandidatura->save($this->request->data)) {
					$this->Session->setFlash(__('The estado candidatura has been saved.'));

					return $this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The estado candidatura could not be saved. Please, try again.'));
				}
			} else {
				$options = ['conditions' => ['EstadoCandidatura.' . $this->EstadoCandidatura->primaryKey => $id]];
				$this->request->data = $this->EstadoCandidatura->find('first', $options);
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
			$this->EstadoCandidatura->id = $id;
			if (!$this->EstadoCandidatura->exists()) {
				throw new NotFoundException(__('Invalid estado candidatura'));
			}
			$this->request->onlyAllow('post', 'delete');
			if ($this->EstadoCandidatura->delete()) {
				$this->Session->setFlash(__('The estado candidatura has been deleted.'));
			} else {
				$this->Session->setFlash(__('The estado candidatura could not be deleted. Please, try again.'));
			}

			return $this->redirect(['action' => 'index']);
		}
	}
