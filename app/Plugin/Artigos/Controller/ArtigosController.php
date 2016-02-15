<?php
	App::uses('ArtigosAppController', 'Artigos.Controller');

	/**
	 * Artigos Controller
	 *
	 * @property Artigo $Artigo
	 * @property PaginatorComponent $Paginator
	 */
	class ArtigosController extends ArtigosAppController
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
			$this->layout = 'guest_users';
		}

		public function dashboard(){

		}

		/**
		 * view method
		 *
		 * @throws NotFoundException
		 * @param string $id
		 * @return void
		 */
		public function ver_artigo($id = null)
		{
			if (!$this->Artigo->exists($id)) {
				throw new NotFoundException(__('Invalid artigo'));
			}
			$options = ['conditions' => ['Artigo.' . $this->Artigo->primaryKey => $id]];
			$this->set('artigo', $this->Artigo->find('first', $options));
			$this->layout = 'guest_users';
		}

		/**
		 * add method
		 *
		 * @return void
		 */
		public function adicionar_artigo()
		{
			if ($this->request->is('post')) {
				if ($this->Artigo->adicionaArtigo($this->request->data)) {
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
		public function editar_artigo($id = null)
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
		public function remover_artigo($id = null)
		{
			throw new MethodNotAllowedException('Nao implementado');
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

		public function beforeFilter()
		{
			parent::beforeFilter();

			$this->Auth->allow(['index','ver_artigo']);
		}
	}