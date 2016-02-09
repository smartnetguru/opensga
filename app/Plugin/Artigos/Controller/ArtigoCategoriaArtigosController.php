<?php
	App::uses('AppController', 'Controller');

	/**
	 * ArtigoCategoriaArtigos Controller
	 *
	 * @property ArtigoCategoriaArtigo $ArtigoCategoriaArtigo
	 * @property PaginatorComponent $Paginator
	 */
	class ArtigoCategoriaArtigosController extends AppController
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
			$this->ArtigoCategoriaArtigo->recursive = 0;
			$this->set('artigoCategoriaArtigos', $this->Paginator->paginate());
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
			if (!$this->ArtigoCategoriaArtigo->exists($id)) {
				throw new NotFoundException(__('Invalid artigo categoria artigo'));
			}
			$options = ['conditions' => ['ArtigoCategoriaArtigo.' . $this->ArtigoCategoriaArtigo->primaryKey => $id]];
			$this->set('artigoCategoriaArtigo', $this->ArtigoCategoriaArtigo->find('first', $options));
		}

		/**
		 * add method
		 *
		 * @return void
		 */
		public function add()
		{
			if ($this->request->is('post')) {
				$this->ArtigoCategoriaArtigo->create();
				if ($this->ArtigoCategoriaArtigo->save($this->request->data)) {
					$this->Flash->success(__('The artigo categoria artigo has been saved.'));

					return $this->redirect(['action' => 'index']);
				} else {
					$this->Flash->error(__('The artigo categoria artigo could not be saved. Please, try again.'));
				}
			}
			$artigos = $this->ArtigoCategoriaArtigo->Artigo->find('list');
			$artigoCategorias = $this->ArtigoCategoriaArtigo->ArtigoCategorium->find('list');
			$estadoObjectos = $this->ArtigoCategoriaArtigo->EstadoObjecto->find('list');
			$this->set(compact('artigos', 'artigoCategorias', 'estadoObjectos'));
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
			if (!$this->ArtigoCategoriaArtigo->exists($id)) {
				throw new NotFoundException(__('Invalid artigo categoria artigo'));
			}
			if ($this->request->is(['post', 'put'])) {
				if ($this->ArtigoCategoriaArtigo->save($this->request->data)) {
					$this->Flash->success(__('The artigo categoria artigo has been saved.'));

					return $this->redirect(['action' => 'index']);
				} else {
					$this->Flash->error(__('The artigo categoria artigo could not be saved. Please, try again.'));
				}
			} else {
				$options = ['conditions' => ['ArtigoCategoriaArtigo.' . $this->ArtigoCategoriaArtigo->primaryKey => $id]];
				$this->request->data = $this->ArtigoCategoriaArtigo->find('first', $options);
			}
			$artigos = $this->ArtigoCategoriaArtigo->Artigo->find('list');
			$artigoCategorias = $this->ArtigoCategoriaArtigo->ArtigoCategorium->find('list');
			$estadoObjectos = $this->ArtigoCategoriaArtigo->EstadoObjecto->find('list');
			$this->set(compact('artigos', 'artigoCategorias', 'estadoObjectos'));
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
			$this->ArtigoCategoriaArtigo->id = $id;
			if (!$this->ArtigoCategoriaArtigo->exists()) {
				throw new NotFoundException(__('Invalid artigo categoria artigo'));
			}
			$this->request->allowMethod('post', 'delete');
			if ($this->ArtigoCategoriaArtigo->delete()) {
				$this->Flash->success(__('The artigo categoria artigo has been deleted.'));
			} else {
				$this->Flash->error(__('The artigo categoria artigo could not be deleted. Please, try again.'));
			}

			return $this->redirect(['action' => 'index']);
		}
	}
