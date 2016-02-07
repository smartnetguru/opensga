<?php
	App::uses('AppController', 'Controller');

	/**
	 * TipoMatriculas Controller
	 *
	 * @property TipoMatricula $TipoMatricula
	 * @property PaginatorComponent $Paginator
	 */
	class TipoMatriculasController extends AppController
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
			$this->TipoMatricula->recursive = 0;
			$this->set('tipoMatriculas', $this->Paginator->paginate());
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
			if (!$this->TipoMatricula->exists($id)) {
				throw new NotFoundException(__('Invalid tipo matricula'));
			}
			$options = ['conditions' => ['TipoMatricula.' . $this->TipoMatricula->primaryKey => $id]];
			$this->set('tipoMatricula', $this->TipoMatricula->find('first', $options));
		}

		/**
		 * add method
		 *
		 * @return void
		 */
		public function add()
		{
			if ($this->request->is('post')) {
				$this->TipoMatricula->create();
				if ($this->TipoMatricula->save($this->request->data)) {
					$this->Session->setFlash(__('The tipo matricula has been saved.'));

					return $this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The tipo matricula could not be saved. Please, try again.'));
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
			if (!$this->TipoMatricula->exists($id)) {
				throw new NotFoundException(__('Invalid tipo matricula'));
			}
			if ($this->request->is(['post', 'put'])) {
				if ($this->TipoMatricula->save($this->request->data)) {
					$this->Session->setFlash(__('The tipo matricula has been saved.'));

					return $this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The tipo matricula could not be saved. Please, try again.'));
				}
			} else {
				$options = ['conditions' => ['TipoMatricula.' . $this->TipoMatricula->primaryKey => $id]];
				$this->request->data = $this->TipoMatricula->find('first', $options);
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
			$this->TipoMatricula->id = $id;
			if (!$this->TipoMatricula->exists()) {
				throw new NotFoundException(__('Invalid tipo matricula'));
			}
			$this->request->allowMethod('post', 'delete');
			if ($this->TipoMatricula->delete()) {
				$this->Session->setFlash(__('The tipo matricula has been deleted.'));
			} else {
				$this->Session->setFlash(__('The tipo matricula could not be deleted. Please, try again.'));
			}

			return $this->redirect(['action' => 'index']);
		}
	}
