<?php
	App::uses('AppController', 'Controller');

	/**
	 * ArtigoTags Controller
	 *
	 * @property ArtigoTag $ArtigoTag
	 * @property PaginatorComponent $Paginator
	 */
	class ArtigoTagsController extends AppController
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
			$this->ArtigoTag->recursive = 0;
			$this->set('artigoTags', $this->Paginator->paginate());
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
			if (!$this->ArtigoTag->exists($id)) {
				throw new NotFoundException(__('Invalid artigo tag'));
			}
			$options = ['conditions' => ['ArtigoTag.' . $this->ArtigoTag->primaryKey => $id]];
			$this->set('artigoTag', $this->ArtigoTag->find('first', $options));
		}

		/**
		 * add method
		 *
		 * @return void
		 */
		public function add()
		{
			if ($this->request->is('post')) {
				$this->ArtigoTag->create();
				if ($this->ArtigoTag->save($this->request->data)) {
					$this->Flash->success(__('The artigo tag has been saved.'));

					return $this->redirect(['action' => 'index']);
				} else {
					$this->Flash->error(__('The artigo tag could not be saved. Please, try again.'));
				}
			}
			$estadoObjectos = $this->ArtigoTag->EstadoObjecto->find('list');
			$this->set(compact('estadoObjectos'));
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
			if (!$this->ArtigoTag->exists($id)) {
				throw new NotFoundException(__('Invalid artigo tag'));
			}
			if ($this->request->is(['post', 'put'])) {
				if ($this->ArtigoTag->save($this->request->data)) {
					$this->Flash->success(__('The artigo tag has been saved.'));

					return $this->redirect(['action' => 'index']);
				} else {
					$this->Flash->error(__('The artigo tag could not be saved. Please, try again.'));
				}
			} else {
				$options = ['conditions' => ['ArtigoTag.' . $this->ArtigoTag->primaryKey => $id]];
				$this->request->data = $this->ArtigoTag->find('first', $options);
			}
			$estadoObjectos = $this->ArtigoTag->EstadoObjecto->find('list');
			$this->set(compact('estadoObjectos'));
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
			$this->ArtigoTag->id = $id;
			if (!$this->ArtigoTag->exists()) {
				throw new NotFoundException(__('Invalid artigo tag'));
			}
			$this->request->allowMethod('post', 'delete');
			if ($this->ArtigoTag->delete()) {
				$this->Flash->success(__('The artigo tag has been deleted.'));
			} else {
				$this->Flash->error(__('The artigo tag could not be deleted. Please, try again.'));
			}

			return $this->redirect(['action' => 'index']);
		}
	}
