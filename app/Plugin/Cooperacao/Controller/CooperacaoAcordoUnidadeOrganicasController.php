<?php
	App::uses('CooperacaoAppController', 'Cooperacao.Controller');

	/**
	 * CooperacaoAcordoUnidadeOrganicas Controller
	 *
	 * @property CooperacaoAcordoUnidadeOrganica $CooperacaoAcordoUnidadeOrganica
	 * @property PaginatorComponent $Paginator
	 */
	class CooperacaoAcordoUnidadeOrganicasController extends CooperacaoAppController
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
			$this->CooperacaoAcordoUnidadeOrganica->recursive = 0;
			$this->set('cooperacaoAcordoUnidadeOrganicas', $this->Paginator->paginate());
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
			if (!$this->CooperacaoAcordoUnidadeOrganica->exists($id)) {
				throw new NotFoundException(__('Invalid cooperacao acordo unidade organica'));
			}
			$options = ['conditions' => ['CooperacaoAcordoUnidadeOrganica.' . $this->CooperacaoAcordoUnidadeOrganica->primaryKey => $id]];
			$this->set('cooperacaoAcordoUnidadeOrganica',
				$this->CooperacaoAcordoUnidadeOrganica->find('first', $options));
		}

		/**
		 * add method
		 *
		 * @return void
		 */
		public function add()
		{
			if ($this->request->is('post')) {
				$this->CooperacaoAcordoUnidadeOrganica->create();
				if ($this->CooperacaoAcordoUnidadeOrganica->save($this->request->data)) {
					$this->Session->setFlash(__('The cooperacao acordo unidade organica has been saved.'));

					return $this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The cooperacao acordo unidade organica could not be saved. Please, try again.'));
				}
			}
			$unidadeOrganicas = $this->CooperacaoAcordoUnidadeOrganica->UnidadeOrganica->find('list');
			$cooperacaoAcordos = $this->CooperacaoAcordoUnidadeOrganica->CooperacaoAcordo->find('list');
			$this->set(compact('unidadeOrganicas', 'cooperacaoAcordos'));
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
			if (!$this->CooperacaoAcordoUnidadeOrganica->exists($id)) {
				throw new NotFoundException(__('Invalid cooperacao acordo unidade organica'));
			}
			if ($this->request->is('post') || $this->request->is('put')) {
				if ($this->CooperacaoAcordoUnidadeOrganica->save($this->request->data)) {
					$this->Session->setFlash(__('The cooperacao acordo unidade organica has been saved.'));

					return $this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The cooperacao acordo unidade organica could not be saved. Please, try again.'));
				}
			} else {
				$options = ['conditions' => ['CooperacaoAcordoUnidadeOrganica.' . $this->CooperacaoAcordoUnidadeOrganica->primaryKey => $id]];
				$this->request->data = $this->CooperacaoAcordoUnidadeOrganica->find('first', $options);
			}
			$unidadeOrganicas = $this->CooperacaoAcordoUnidadeOrganica->UnidadeOrganica->find('list');
			$cooperacaoAcordos = $this->CooperacaoAcordoUnidadeOrganica->CooperacaoAcordo->find('list');
			$this->set(compact('unidadeOrganicas', 'cooperacaoAcordos'));
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
			$this->CooperacaoAcordoUnidadeOrganica->id = $id;
			if (!$this->CooperacaoAcordoUnidadeOrganica->exists()) {
				throw new NotFoundException(__('Invalid cooperacao acordo unidade organica'));
			}
			$this->request->onlyAllow('post', 'delete');
			if ($this->CooperacaoAcordoUnidadeOrganica->delete()) {
				$this->Session->setFlash(__('The cooperacao acordo unidade organica has been deleted.'));
			} else {
				$this->Session->setFlash(__('The cooperacao acordo unidade organica could not be deleted. Please, try again.'));
			}

			return $this->redirect(['action' => 'index']);
		}
	}
