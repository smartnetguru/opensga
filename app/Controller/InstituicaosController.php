<?php
	App::uses('AppController', 'Controller');

	/**
	 * Instituicaos Controller
	 *
	 * @property Instituicao $Instituicao
	 * @property PaginatorComponent $Paginator
	 */
	class InstituicaosController extends AppController
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
			$this->Instituicao->recursive = 0;
			$this->set('instituicaos', $this->Paginator->paginate());
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
			if (!$this->Instituicao->exists($id)) {
				throw new NotFoundException(__('Invalid instituicao'));
			}
			$options = ['conditions' => ['Instituicao.' . $this->Instituicao->primaryKey => $id]];
			$this->set('instituicao', $this->Instituicao->find('first', $options));
		}

		/**
		 * add method
		 *
		 * @return void
		 */
		public function add()
		{
			if ($this->request->is('post')) {
				$this->Instituicao->create();
				if ($this->Instituicao->save($this->request->data)) {
					$this->Session->setFlash(__('The instituicao has been saved.'));

					return $this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The instituicao could not be saved. Please, try again.'));
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
			if (!$this->Instituicao->exists($id)) {
				throw new NotFoundException(__('Invalid instituicao'));
			}
			if ($this->request->is('post') || $this->request->is('put')) {
				if ($this->Instituicao->save($this->request->data)) {
					$this->Session->setFlash(__('The instituicao has been saved.'));

					return $this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The instituicao could not be saved. Please, try again.'));
				}
			} else {
				$options = ['conditions' => ['Instituicao.' . $this->Instituicao->primaryKey => $id]];
				$this->request->data = $this->Instituicao->find('first', $options);
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
			$this->Instituicao->id = $id;
			if (!$this->Instituicao->exists()) {
				throw new NotFoundException(__('Invalid instituicao'));
			}
			$this->request->onlyAllow('post', 'delete');
			if ($this->Instituicao->delete()) {
				$this->Session->setFlash(__('The instituicao has been deleted.'));
			} else {
				$this->Session->setFlash(__('The instituicao could not be deleted. Please, try again.'));
			}

			return $this->redirect(['action' => 'index']);
		}
	}
