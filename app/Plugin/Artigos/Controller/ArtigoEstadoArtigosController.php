<?php
	App::uses('AppController', 'Controller');

	/**
	 * ArtigoEstadoArtigos Controller
	 *
	 * @property ArtigoEstadoArtigo $ArtigoEstadoArtigo
	 * @property PaginatorComponent $Paginator
	 */
	class ArtigoEstadoArtigosController extends AppController
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
			$this->ArtigoEstadoArtigo->recursive = 0;
			$this->set('artigoEstadoArtigos', $this->Paginator->paginate());
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
			if (!$this->ArtigoEstadoArtigo->exists($id)) {
				throw new NotFoundException(__('Invalid artigo estado artigo'));
			}
			$options = ['conditions' => ['ArtigoEstadoArtigo.' . $this->ArtigoEstadoArtigo->primaryKey => $id]];
			$this->set('artigoEstadoArtigo', $this->ArtigoEstadoArtigo->find('first', $options));
		}

		/**
		 * add method
		 *
		 * @return void
		 */
		public function add()
		{
			if ($this->request->is('post')) {
				$this->ArtigoEstadoArtigo->create();
				if ($this->ArtigoEstadoArtigo->save($this->request->data)) {
					$this->Flash->success(__('The artigo estado artigo has been saved.'));

					return $this->redirect(['action' => 'index']);
				} else {
					$this->Flash->error(__('The artigo estado artigo could not be saved. Please, try again.'));
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
			if (!$this->ArtigoEstadoArtigo->exists($id)) {
				throw new NotFoundException(__('Invalid artigo estado artigo'));
			}
			if ($this->request->is(['post', 'put'])) {
				if ($this->ArtigoEstadoArtigo->save($this->request->data)) {
					$this->Flash->success(__('The artigo estado artigo has been saved.'));

					return $this->redirect(['action' => 'index']);
				} else {
					$this->Flash->error(__('The artigo estado artigo could not be saved. Please, try again.'));
				}
			} else {
				$options = ['conditions' => ['ArtigoEstadoArtigo.' . $this->ArtigoEstadoArtigo->primaryKey => $id]];
				$this->request->data = $this->ArtigoEstadoArtigo->find('first', $options);
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
			$this->ArtigoEstadoArtigo->id = $id;
			if (!$this->ArtigoEstadoArtigo->exists()) {
				throw new NotFoundException(__('Invalid artigo estado artigo'));
			}
			$this->request->allowMethod('post', 'delete');
			if ($this->ArtigoEstadoArtigo->delete()) {
				$this->Flash->success(__('The artigo estado artigo has been deleted.'));
			} else {
				$this->Flash->error(__('The artigo estado artigo could not be deleted. Please, try again.'));
			}

			return $this->redirect(['action' => 'index']);
		}
	}
