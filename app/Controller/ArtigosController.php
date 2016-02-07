<?php
	App::uses('AppController', 'Controller');

	/**
	 * Artigos Controller
	 *
	 * @property Artigo $Artigo
	 * @property PaginatorComponent $Paginator
	 */
	class ArtigosController extends AppController
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
			$this->Artigo->recursive = 0;
			$this->set('artigos', $this->Paginator->paginate());
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
			if (!$this->Artigo->exists($id)) {
				throw new NotFoundException(__('Invalid artigo'));
			}
			$options = ['conditions' => ['Artigo.' . $this->Artigo->primaryKey => $id]];
			$this->set('artigo', $this->Artigo->find('first', $options));
		}

		/**
		 * add method
		 *
		 * @return void
		 */
		public function add()
		{
			if ($this->request->is('post')) {
				$this->Artigo->create();
				if ($this->Artigo->save($this->request->data)) {
					$this->Flash->success(__('The artigo has been saved.'));

					return $this->redirect(['action' => 'index']);
				} else {
					$this->Flash->error(__('The artigo could not be saved. Please, try again.'));
				}
			}
			$users = $this->Artigo->User->find('list');
			$entidades = $this->Artigo->Entidade->find('list');
			$estadoObjectos = $this->Artigo->EstadoObjecto->find('list');
			$artigoEstadoArtigos = $this->Artigo->ArtigoEstadoArtigo->find('list');
			$this->set(compact('users', 'entidades', 'estadoObjectos', 'artigoEstadoArtigos'));
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
			if (!$this->Artigo->exists($id)) {
				throw new NotFoundException(__('Invalid artigo'));
			}
			if ($this->request->is(['post', 'put'])) {
				if ($this->Artigo->save($this->request->data)) {
					$this->Flash->success(__('The artigo has been saved.'));

					return $this->redirect(['action' => 'index']);
				} else {
					$this->Flash->error(__('The artigo could not be saved. Please, try again.'));
				}
			} else {
				$options = ['conditions' => ['Artigo.' . $this->Artigo->primaryKey => $id]];
				$this->request->data = $this->Artigo->find('first', $options);
			}
			$users = $this->Artigo->User->find('list');
			$entidades = $this->Artigo->Entidade->find('list');
			$estadoObjectos = $this->Artigo->EstadoObjecto->find('list');
			$artigoEstadoArtigos = $this->Artigo->ArtigoEstadoArtigo->find('list');
			$this->set(compact('users', 'entidades', 'estadoObjectos', 'artigoEstadoArtigos'));
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
			$this->Artigo->id = $id;
			if (!$this->Artigo->exists()) {
				throw new NotFoundException(__('Invalid artigo'));
			}
			$this->request->allowMethod('post', 'delete');
			if ($this->Artigo->delete()) {
				$this->Flash->success(__('The artigo has been deleted.'));
			} else {
				$this->Flash->error(__('The artigo could not be deleted. Please, try again.'));
			}

			return $this->redirect(['action' => 'index']);
		}
	}
