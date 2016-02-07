<?php
	App::uses('AppController', 'Controller');

	/**
	 * ArtigoAreaPesquisas Controller
	 *
	 * @property ArtigoAreaPesquisa $ArtigoAreaPesquisa
	 * @property PaginatorComponent $Paginator
	 */
	class ArtigoAreaPesquisasController extends AppController
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
			$this->ArtigoAreaPesquisa->recursive = 0;
			$this->set('artigoAreaPesquisas', $this->Paginator->paginate());
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
			if (!$this->ArtigoAreaPesquisa->exists($id)) {
				throw new NotFoundException(__('Invalid artigo area pesquisa'));
			}
			$options = ['conditions' => ['ArtigoAreaPesquisa.' . $this->ArtigoAreaPesquisa->primaryKey => $id]];
			$this->set('artigoAreaPesquisa', $this->ArtigoAreaPesquisa->find('first', $options));
		}

		/**
		 * add method
		 *
		 * @return void
		 */
		public function add()
		{
			if ($this->request->is('post')) {
				$this->ArtigoAreaPesquisa->create();
				if ($this->ArtigoAreaPesquisa->save($this->request->data)) {
					$this->Flash->success(__('The artigo area pesquisa has been saved.'));

					return $this->redirect(['action' => 'index']);
				} else {
					$this->Flash->error(__('The artigo area pesquisa could not be saved. Please, try again.'));
				}
			}
			$artigos = $this->ArtigoAreaPesquisa->Artigo->find('list');
			$areaPesquisas = $this->ArtigoAreaPesquisa->AreaPesquisa->find('list');
			$estadoObjectos = $this->ArtigoAreaPesquisa->EstadoObjecto->find('list');
			$this->set(compact('artigos', 'areaPesquisas', 'estadoObjectos'));
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
			if (!$this->ArtigoAreaPesquisa->exists($id)) {
				throw new NotFoundException(__('Invalid artigo area pesquisa'));
			}
			if ($this->request->is(['post', 'put'])) {
				if ($this->ArtigoAreaPesquisa->save($this->request->data)) {
					$this->Flash->success(__('The artigo area pesquisa has been saved.'));

					return $this->redirect(['action' => 'index']);
				} else {
					$this->Flash->error(__('The artigo area pesquisa could not be saved. Please, try again.'));
				}
			} else {
				$options = ['conditions' => ['ArtigoAreaPesquisa.' . $this->ArtigoAreaPesquisa->primaryKey => $id]];
				$this->request->data = $this->ArtigoAreaPesquisa->find('first', $options);
			}
			$artigos = $this->ArtigoAreaPesquisa->Artigo->find('list');
			$areaPesquisas = $this->ArtigoAreaPesquisa->AreaPesquisa->find('list');
			$estadoObjectos = $this->ArtigoAreaPesquisa->EstadoObjecto->find('list');
			$this->set(compact('artigos', 'areaPesquisas', 'estadoObjectos'));
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
			$this->ArtigoAreaPesquisa->id = $id;
			if (!$this->ArtigoAreaPesquisa->exists()) {
				throw new NotFoundException(__('Invalid artigo area pesquisa'));
			}
			$this->request->allowMethod('post', 'delete');
			if ($this->ArtigoAreaPesquisa->delete()) {
				$this->Flash->success(__('The artigo area pesquisa has been deleted.'));
			} else {
				$this->Flash->error(__('The artigo area pesquisa could not be deleted. Please, try again.'));
			}

			return $this->redirect(['action' => 'index']);
		}
	}
