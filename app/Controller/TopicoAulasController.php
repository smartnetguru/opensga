<?php
	App::uses('AppController', 'Controller');

	/**
	 * TopicoAulas Controller
	 *
	 * @property TopicoAula $TopicoAula
	 * @property PaginatorComponent $Paginator
	 */
	class TopicoAulasController extends AppController
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
			$this->TopicoAula->recursive = 0;
			$this->set('topicoAulas', $this->Paginator->paginate());
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
			if (!$this->TopicoAula->exists($id)) {
				throw new NotFoundException(__('Invalid topico aula'));
			}
			$options = ['conditions' => ['TopicoAula.' . $this->TopicoAula->primaryKey => $id]];
			$this->set('topicoAula', $this->TopicoAula->find('first', $options));
		}

		/**
		 * add method
		 *
		 * @return void
		 */
		public function add()
		{
			if ($this->request->is('post')) {
				$this->TopicoAula->create();
				if ($this->TopicoAula->save($this->request->data)) {
					$this->Flash->success(__('The topico aula has been saved.'));

					return $this->redirect(['action' => 'index']);
				} else {
					$this->Flash->error(__('The topico aula could not be saved. Please, try again.'));
				}
			}
			$aulas = $this->TopicoAula->Aula->find('list');
			$this->set(compact('aulas'));
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
			if (!$this->TopicoAula->exists($id)) {
				throw new NotFoundException(__('Invalid topico aula'));
			}
			if ($this->request->is(['post', 'put'])) {
				if ($this->TopicoAula->save($this->request->data)) {
					$this->Flash->success(__('The topico aula has been saved.'));

					return $this->redirect(['action' => 'index']);
				} else {
					$this->Flash->error(__('The topico aula could not be saved. Please, try again.'));
				}
			} else {
				$options = ['conditions' => ['TopicoAula.' . $this->TopicoAula->primaryKey => $id]];
				$this->request->data = $this->TopicoAula->find('first', $options);
			}
			$aulas = $this->TopicoAula->Aula->find('list');
			$this->set(compact('aulas'));
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
			$this->TopicoAula->id = $id;
			if (!$this->TopicoAula->exists()) {
				throw new NotFoundException(__('Invalid topico aula'));
			}
			$this->request->allowMethod('post', 'delete');
			if ($this->TopicoAula->delete()) {
				$this->Flash->success(__('The topico aula has been deleted.'));
			} else {
				$this->Flash->error(__('The topico aula could not be deleted. Please, try again.'));
			}

			return $this->redirect(['action' => 'index']);
		}
	}
