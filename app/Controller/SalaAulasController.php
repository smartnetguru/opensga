<?php
	App::uses('AppController', 'Controller');

	/**
	 * SalaAulas Controller
	 *
	 * @property SalaAula $SalaAula
	 */
	class SalaAulasController extends AppController
	{

		/**
		 * index method
		 *
		 * @return void
		 */
		public function index()
		{
			$this->SalaAula->recursive = 0;
			$this->set('salaAulas', $this->paginate());
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
			$this->SalaAula->id = $id;
			if (!$this->SalaAula->exists()) {
				throw new NotFoundException(__('Invalid sala aula'));
			}
			$this->set('salaAula', $this->SalaAula->read(null, $id));
		}

		/**
		 * add method
		 *
		 * @return void
		 */
		public function add()
		{
			if ($this->request->is('post')) {
				$this->SalaAula->create();
				if ($this->SalaAula->save($this->request->data)) {
					$this->Session->setFlash(__('The sala aula has been saved'));
					$this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The sala aula could not be saved. Please, try again.'));
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
			$this->SalaAula->id = $id;
			if (!$this->SalaAula->exists()) {
				throw new NotFoundException(__('Invalid sala aula'));
			}
			if ($this->request->is('post') || $this->request->is('put')) {
				if ($this->SalaAula->save($this->request->data)) {
					$this->Session->setFlash(__('The sala aula has been saved'));
					$this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The sala aula could not be saved. Please, try again.'));
				}
			} else {
				$this->request->data = $this->SalaAula->read(null, $id);
			}
		}

		/**
		 * delete method
		 *
		 * @throws MethodNotAllowedException
		 * @throws NotFoundException
		 * @param string $id
		 * @return void
		 */
		public function delete($id = null)
		{
			if (!$this->request->is('post')) {
				throw new MethodNotAllowedException();
			}
			$this->SalaAula->id = $id;
			if (!$this->SalaAula->exists()) {
				throw new NotFoundException(__('Invalid sala aula'));
			}
			if ($this->SalaAula->delete()) {
				$this->Session->setFlash(__('Sala aula deleted'));
				$this->redirect(['action' => 'index']);
			}
			$this->Session->setFlash(__('Sala aula was not deleted'));
			$this->redirect(['action' => 'index']);
		}
	}
